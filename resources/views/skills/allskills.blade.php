@extends('layouts.app')

@section('content')

@include ('skills.skillview', $treeData)






{{--

@inject('skillCtrl', 'App\Http\Controllers\SkillController')

{!!$skillCtrl->getTree($treeData)!!} --}}

@stop