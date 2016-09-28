@extends('layouts.app')

@section('content')


<div class="col-md-4">
<div class="panel panel-body">
    <h2>Суммарный навык</h2>
    @foreach($skills as $skill)
        {{--<div class="panel-body half-unit skillsHeader col-md-3">--}}
            <a href="/skills/organization?id={{ $skill->id }}"><b>{{ $skill->name }}</b></a>: {{ $skill->count }} <i>({{ $skill->v1 }}/{{ $skill->v2 }}/{{ $skill->v3 }}/{{ $skill->v4 }}/{{ $skill->v5 }})</i>
        {{--</div>--}}
    @endforeach
</div>
</div>

<div class="col-md-6 half-unit">
@if (isset($user_skills[0]))
<h1>{{ $user_skills[0]['skill'] }}</h1>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Пользователь</th>
                <th>Оценка</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user_skills as $user_skill)
                <tr>
                    <td>{{ $user_skill->user }}</td>
                    <td>{{ $user_skill->value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h1>Выберите навык</h1>
@endif
</div>
@stop
