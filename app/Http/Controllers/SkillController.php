<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SkillController extends Controller {

    public function showskills() {
        if (Auth::check()) {
            $userSkills = Auth::user()->skill()->get();
            $treeData = Skill::all();
            foreach ($userSkills as $skill)
                $treeData['id' == $skill['id']]['isLearn'] = true;
            $treeData = $this->getCats($treeData);
            return view('skills.allskills', [
                'treeData' => $treeData,
            ]);
        } else
            return Redirect::to('/');
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
            if (isset($rows['isLearn']))
                $cur['isLearn'] = $rows['name'];
            if ($rows['parent_skill_id'] == 0) {
                $tree[$rows['id']] = &$cur;
            } else {
                $levels[$rows['parent_skill_id']]['children'][$rows['id']] = &$cur;
            }
        };
        return $tree;
    }

}
