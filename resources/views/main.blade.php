@extends('layouts.app')

@section('content')

<div class="jumbotron">
        <span class="to-type">
            <h1 class="css-typing">Добро пожаловать, дорогой друг!</h1>
            <p class=lead css-typing>Это портал World of Game.
                <br/>Мы рады приветствовать тебя здесь.</p>
            @if (Auth::check())
            <p>Более подробно о себе <a href="/home">смотри здесь</a>.</p>
            @else
            <p><a href="/login">Авторизуйся</a> используя рабочий е-mail и пароль от AD.</p>
            @endif
        </span>
</div>
<div class="container">
    <div class="row">

        <!--Награды-->
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Награды</div>
                <div class="panel-body">
                    <div class="framemail">
                        <div class="window">
                            <ul class="mail">
                                @foreach ($bl2s as $bl)
                                <li>
                                    <i class="read"></i>
                                    <img class="avatar" src="UserProfile/Photo/{{$bl->user_id}}.jpeg" alt="avatar">
                                    <p class="sender">{{$bl->user->name}}</p>
                                    <p class="message"><b>{{$bl->name}}</b> {{$bl->description}}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Текущая активность</div>
                <div class="panel-body">
                    <div class="framemail">
                        <div class="window">
                            <ul class="mail">
                                @foreach ($ats as $at)
                                <li>
                                    <i class="unread"></i>
                                    <img class="avatar" src="UserProfile/Photo/{{$at->user_id}}.jpeg" alt="avatar">
                                    <p class="sender">{{$at->user->name}}</p>
                                    <p class="message">{{$at->action->name}}</p>
                                    <div class="actions">
                                        <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                        <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                        <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                        <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Top рейтинга-->
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Top рейтинга</div>
                <div class="panel-body">
                    <div class="framemail">
                        <div class="window">
                            <ul class="mail">
                                @foreach ($bls as $bl)
                                <li>
                                    <i class="read"></i>
                                    <img class="avatar" src="UserProfile/Photo/{{$bl->user_id}}.jpeg" alt="avatar">
                                    <p class="sender">{{$bl->user->name}}</p>
                                    <p class="message">{{$bl->value}}<b>{{$bl->name}}</b> {{$bl->description}}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Суммарный навык</div>
                <div class="panel-body">
                    @foreach($skills as $skill)
                        {{--<div class="panel-body half-unit skillsHeader col-md-3">--}}
                        <a href="/skills/organization?id={{ $skill->id }}"><b>{{ $skill->name }}</b></a>: {{ $skill->count }} <i>({{ $skill->v1 }}/{{ $skill->v2 }}/{{ $skill->v3 }}/{{ $skill->v4 }}/{{ $skill->v5 }})</i>
                        {{--</div>--}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('/js/typed.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/typedRun.js')}}"></script>
@endsection