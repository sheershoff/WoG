@extends('layouts.app')

@section('content')

@foreach ($roles as $role)
<h1>{{$role->id}} .{{$role->name}}</h1>
<p class="message">{{$role->description}}</p>
@foreach ($role->quests() as $q)
{{ $q->name }} 11
@endforeach
@endforeach

@endsection
