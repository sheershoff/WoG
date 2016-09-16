<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use App\Models\UserSkill;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller {

    public function userSkillSave($id, $value) {
        if (!Auth::check())
            return '404';
        $userSkill = UserSkill::where('user_id', '=', Auth::user()->id)->where('skill_id', '=', $id)->first();
        if (isset($userSkill)) {
            $userSkill->value = $value;
            $userSkill->save();
            return 'save';
        } else {
            $userSkill = UserSkill::create([
                'user_id' => Auth::user()->id,
                'skill_id' => $id,
                'expert_user_id' => Auth::user()->id,
                'value' => $value,
                ]);
            return 'add';
        }
    }

    public function showskills() {
        if (Auth::check()) {
            $userSkills = Auth::user()->skill()->get();
            $treeData = Skill::all()->toArray();
            $temp = array();
            for ($i = 0; $i < count($treeData); $i++)
                $temp[$treeData[$i]['id']] = $treeData[$i];
            $treeData = $temp;
            $treeData = $this->setSkill($treeData, $userSkills);
            $treeData = $this->getCats($treeData);
            $skillsValue = [
                0 => [
                    'id' => 1,
                    'description' => 'Описание 1',
                ],
                1 => [
                    'id' => 2,
                    'description' => 'Описание 2',
                ],
                2 => [
                    'id' => 3,
                    'description' => 'Описание 3',
                ],
                3 => [
                    'id' => 4,
                    'description' => 'Описание 4',
                ],
                4 => [
                    'id' => 5,
                    'description' => 'Описание 5',
                ],
            ];
            return view('skills.allskills', [
                'treeData' => $treeData,
                'skillsValue' => $skillsValue,
            ]);
        } else
            return Redirect::to('/');
    }

    function setSkill($treeData, $userSkills) {
        foreach ($userSkills as $skill) {
            $treeData[$skill['id']]['isLearn'] = true;
            $treeData[$skill['id']]['skillValue'] = $skill->value;
    /*        $description = 'Значение: ' . $skill->value . ' ';
            if ($skill['expert_user_id'] == Auth::user()->id)
                $description .= 'Самооценка.';
            else
                $description .= 'Оценил: ' . User::find($skill['expert_user_id'])->name . '. ' . $skill['id'];
            $treeData[$skill['id']]['description'] = $description; */
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
            $cur['parent_id'] = $rows['parent_skill_id'];
            $cur['name'] = $rows['name'];
            if (isset($rows['skillValue']))
                $cur['skillValue'] = $rows['skillValue'];
            $cur['description'] = $rows['description'];
/*            if (isset($rows['description']))
                $cur['description'] = $rows['description'];
            else
                $cur['description'] = 'Навык не приобретен.'; */
            if (isset($rows['isLearn']))
                $cur['isLearn'] = $rows['isLearn'];
            if ($rows['parent_skill_id'] == 0) {
                $tree[$rows['id']] = &$cur;
            } else {
                $levels[$rows['parent_skill_id']]['children'][$rows['id']] = &$cur;
            }
        };
        return $tree;
    }

}
