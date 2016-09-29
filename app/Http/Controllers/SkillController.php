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
        if (Skill::withTrashed()->where('name', '=', $request->input('name'))->where('organization_id', '=', 0)->first() != null)
            return response()->json([
                        'reload' => false,
                        'text' => 'Такой навык уже существует',
            ]);
        $skill = new Skill;
        $skill->name = $request->input('name');
        $skill->description = $request->input('description');
        $skill->appoint = $request->input('appoint');
        $skill->parent_skill_id = $request->input('parent_skill_id');
        if ($skill->save())
            return response()->json([
                        'reload' => true,
                        'text' => 'Навык сохранен',
            ]);
        else
            return response()->json([
                        'reload' => false,
                        'text' => 'Ошибка',
            ]);
    }

    public function editSkill(Request $request, $id) {
        if (!Auth::check())
            return '404';
        $skill = Skill::find($id);
        $tempSkill = Skill::withTrashed()->where('name', '=', $request->input('name'))->where('organization_id', '=', 0)->first();
        if ($tempSkill != null and  $tempSkill != $skill)
            return response()->json([
                        'reload' => false,
                        'text' => 'Такой навык уже существует',
            ]);
        if (isset($skill)) {
            $skill->name = $request->input('name');
            $skill->description = $request->input('description');
            $skill->appoint = $request->input('appoint');
            $skill->save();
            return response()->json([
                        'reload' => true,
                        'text' => 'Сохранено',
            ]);
        } else
            return response()->json([
                        'reload' => false,
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

    public function organizationSkills(Request $request) {
        $user_skills = UserSkill::where('skill_id', '=', $request->input('id'))
                ->join('users', 'users.id', '=', 'user_skills.user_id')
                ->join('skills', 'skills.id', '=', 'user_skills.skill_id')
                ->select('skills.name as skill', 'users.name as user', 'user_skills.value')
                ->get();
        $skills = UserSkill::join('skills', 'user_skills.skill_id', '=', 'skills.id')
                ->select('skills.id', 'skills.name', DB::raw('count(' . env('DB_PREFIX') . 'skills.name)'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=1 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v1'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=2 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v2'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=3 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v3'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=4 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v4'), DB::raw('count(distinct case when ' . env('DB_PREFIX') . 'user_skills.value=5 then ' . env('DB_PREFIX') . 'user_skills.id else null end) as v5'))
                ->groupBy('skills.name', 'skills.id')
                ->orderBy('count', 'desc')
                ->orderBy('name', 'asc')
                ->get();

        return view('skills.organization', [
            'user_skills' => $user_skills,
            'skills' => $skills,
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
