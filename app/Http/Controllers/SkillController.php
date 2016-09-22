<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use App\Models\UserSkill;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller
{

    public function skillAdd($id)
    {
        
    }

    public function skillEdit($id)
    {
        
    }

    public function skillDelete($id)
    {
        
    }


    public function userSkillSave($id, $value)
    {
        if (!Auth::check())
            return '404';
        $userSkill = UserSkill::where('user_id', '=', Auth::user()->id)->where('skill_id', '=', $id)->first();
        if (isset($userSkill)) {
            $userSkill->value = $value;
            $userSkill->save();
            return json_encode([
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
            return json_encode([
                'skillId' => $id,
                'text' => 'Добавлено.',
                'add' => true,
            ]);
        }
    }

    public function userSkillDelete($id)
    {
        if (!Auth::check())
            return '404';
        $userSkill = UserSkill::where('user_id', '=', Auth::user()->id)->where('skill_id', '=', $id)->first();
        $userSkill->forceDelete();
        return json_encode([
            'skillId' => $id,
            'text' => 'Навык удален.',
        ]);
    }

    public function showskills()
    {
        if (Auth::check()) {
            $userSkills = Auth::user()->skill()->get();
            $treeData = Skill::orderBy('name')->get()->toArray();
            $temp = array();
            for ($i = 0; $i < count($treeData); $i++)
                $temp[$treeData[$i]['id']] = $treeData[$i];
            $treeData = $temp;
            $treeData = $this->setSkill($treeData, $userSkills);
            $treeData = $this->getCats($treeData);

            $skillsValue = DB::table('skill_levels')->orderBy('id')->get();
            return view('skills.allskills', [
                'treeData' => $treeData,
                'skillsValue' => $skillsValue,
            ]);
        } else
            return Redirect::to('/login?path=skills');
    }

    function setSkill($treeData, $userSkills)
    {
        foreach ($userSkills as $skill) {
            $treeData[$skill['id']]['skillValue'] = $skill->value;
        }
        return $treeData;
    }

    function getCats($res)
    {

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
