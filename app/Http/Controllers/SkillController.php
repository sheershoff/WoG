<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use App\Models\UserSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller {

    public function addSkill(Request $request, $id) {
        if (!Auth::check())
            return '404';
        $skill = new Skill;
        $skill->name = $request->input('name');
        $skill->description = $request->input('description');
        $skill->appoint = $request->input('appoint');
        $skill->parent_skill_id = $request->input('parent_skill_id');
        if ($skill->save())
            return response()->json([
                        'text' => 'Навык сохранен',
            ]);
        else
            return response()->json([
                        'text' => 'Ошибка',
            ]);
    }

    public function editSkill(Request $request, $id) {
        if (!Auth::check())
            return '404';
        $skill = Skill::find($id);
        if (isset($skill)) {
            $skill->name = $request->input('name');
            $skill->description = $request->input('description');
            $skill->appoint = $request->input('appoint');
            $skill->save();
            return response()->json([
                        'text' => 'Сохранено',
            ]);
        } else
            return response()->json([
                        'text' => 'Ошибка',
            ]);
    }

    public function deleteSkill($id) {
        if (!Auth::check())
            return '404';
        Skill::find($id)->delete();
        return response()->json([
                    'text' => 'Удалено',
        ]);
    }

    public function getSkill($id) {
        if (!Auth::check())
            return '404';
        $skill = Skill::find($id);
        return response()->json([
                    'name' => $skill->name,
                    'description' => $skill->description,
                    'appoint' => $skill->appoint,
        ]);
    }

    public function userSkillSave($id, $value) {
        if (!Auth::check())
            return '404';
        $userSkill = UserSkill::where('user_id', '=', Auth::user()->id)->where('skill_id', '=', $id)->first();
        if (isset($userSkill)) {
            $userSkill->value = $value;
            $userSkill->save();
            return response()->json([
                        'skillId' => $id,
                        'text' => 'Сохранено.',
            ]);
        } else {
            $userSkill = UserSkill::create([
                        'user_id' => Auth::user()->id,
                        'skill_id' => $id,
                        'expert_user_id' => Auth::user()->id,
                        'value' => $value,
            ]);
            return response()->json([
                        'skillId' => $id,
                        'text' => 'Добавлено.',
                        'add' => true,
            ]);
        }
    }

    public function userSkillDelete($id) {
        if (!Auth::check())
            return '404';
        $userSkill = UserSkill::where('user_id', '=', Auth::user()->id)->where('skill_id', '=', $id)->first();
        $userSkill->forceDelete();
        return response()->json([
                    'skillId' => $id,
                    'text' => 'Навык удален.',
        ]);
    }
    
    public function organizationSkills() {
        $user_skills = UserSkill::where('user_id', '=', Auth::user()->id);
                //where('skill_id', '=', $request->input('id'));
       //         ->join('users', 'users.id', '=', 'user_skills.user_id')
        //        ->join('skills', 'skills.id', '=', 'user_skills.skills_id')
     //           ->select('skills.name as skill', 'users.name as user', 'user_skill.value')
     //           ->groupBy('users.name')
                
        return view('skills.organization', [
           'user_skills' => $user_skills,
        ]);
    }

    public function showSkills() {
        if (Auth::check()) {
            $userSkills = Auth::user()->skill()->get();
            $treeData = Skill::orderBy('name')->get()->toArray();
            $temp = array();
            for ($i = 0; $i < count($treeData); $i++)
                $temp[$treeData[$i]['id']] = $treeData[$i];
            $treeData = $temp;
            $treeData = $this->setSkillValues($treeData, $userSkills);
            $treeData = $this->getCats($treeData);
            $adm = Auth::user()->roleUser->where('role_id', '=', '-1')->first();
            $skillsValue = DB::table('skill_levels')->orderBy('id')->get();
            return view('skills.allskills', [
                'treeData' => $treeData,
                'skillsValue' => $skillsValue,
                'adm' => $adm,
            ]);
        } else
            return Redirect::to('/login?path=skills');
    }

    function setSkillValues($treeData, $userSkills) {
        foreach ($userSkills as $skill) {
            $treeData[$skill['id']]['skillValue'] = $skill->value;
        }
        return $treeData;
    }

    function getCats($res) {
        $levels = array();
        $tree = array();
        $cur = array();
        foreach ($res as $rows) {
            if (!isset($rows['parent_skill_id']))
                $rows['parent_skill_id'] = 0;
            $cur = &$levels[$rows['id']];
            $cur = array_merge((array) $cur, $rows);
            if ($rows['parent_skill_id'] == 0) {
                $tree[$rows['id']] = &$cur;
            } else {
                $levels[$rows['parent_skill_id']]['children'][$rows['id']] = &$cur;
            }
        };
        return $tree;
    }

}
