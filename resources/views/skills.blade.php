@extends('layouts.app')

@section('content')

@inject('skillCtrl', 'App\Http\Controllers\SkillController')

{!!$skillCtrl->getTree($treeData)!!}

@stop