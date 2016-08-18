@extends('layouts.app')

@section('content')

<div class="page-header" style="min-height:167px">
    <div style=" height: 170px; " class="panel panel-default">

        <span class="to-type">
            <h1>Они лучшие!</h1>
            <p>Готов возглавить список?</p>
        </span>
    </div>
</div>
<div class="container">
    <div class="row">

        <!-- /Rating/ XP/Gold -->
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
                <h2>Награды</h2>
                <div class="framemail">
                    <div class="window">
                        <ul class="mail">
                            @foreach ($bl2s as $bl)
                            <li>
                                <i class="read"></i>
                                <img class="avatar" src="{{$bl->user->photo()}}" alt="avatar">
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
</div>

<script type="text/javascript" src="{{asset('/js/typed.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/typedRun.js')}}"></script>
@endsection
