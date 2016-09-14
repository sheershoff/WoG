@extends('layouts.app')

@section('content')


<div class="panel-group" id="accordion">
    @include ('skills.skillview', $treeData)
</div>

@stop