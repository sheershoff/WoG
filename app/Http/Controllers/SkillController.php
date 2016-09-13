<?php

namespace App\Http\Controllers;

use App\Models\Skill;

class SkillController extends Controller 
{
    
   
    public function showskills() 
    {
        $treeData = $this->getCats(Skill::all());
        return view('skills', [
            'treeData'=>$treeData
        ]);
    }
    
           
    function getCats($res){
   
    $levels = array();
    $tree = array();
    $cur = array();
   
    foreach ($res as $rows)
    {
        if (!isset($rows['parent_skill_id'])) {
            $rows['parent_skill_id'] = 0;
        }
        $cur = &$levels[$rows['id']];
        $cur['parent_id'] = $rows['parent_skill_id'];
        $cur['name'] = $rows['name'];
       
        if($rows['parent_skill_id'] == 0){
            $tree[$rows['id']] = &$cur;
        }
        else{
            $levels[$rows['parent_skill_id']]['children'][$rows['id']] = &$cur;
        }
    };
    return $tree;
   
}
 
    function getTree($arr){
        $out = '';
        $out .= '<ul>';
        foreach($arr as $k=>$v){
            $out .= '<li><p>'.$v['name'].'</p></li>'.PHP_EOL;
            if(!empty($v['children'])){
                $out .= $this->getTree($v['children']);
            }
        }
        $out .= '</ul>';
        return $out;
    }
 
}

