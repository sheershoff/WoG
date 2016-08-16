@extends('layouts.app')

@section('content')

<div class="page-header" style="min-height:167px">
    <div style=" height: 170px; " class="panel panel-default">

        <span class="to-type">
            <h1 class="css-typing">Добро пожаловать, дорогой друг!</h1>
            <p class=lead css-typing>Это портал Wold of Game. 
                <br/>Мы рады приветствовать тебя здесь.</p>
            <p><a href="/login">Авторизуйся</a> используя рабочий е-mail и пароль от AD.</p>
        </span>
    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-lg-4 col-md-4 ">
            <div class="panel panel-group">
                <h2>Награды</h2>
                @foreach ($ats as $user)
                <p>{{ var_dump($user->actions()) }}</p>
                @endforeach
            </div>
        </div>

        <div class="col-lg-4 col-md-4 ">
            <div class="panel panel-default">
                <h2>Текущая активность</h2>
                <div class="framemail">
                    <div class="window">
                        <ul class="mail">
                            <li>
                                <i class="unread"></i>
                                <img class="avatar" src="assets/img/photo01.jpeg" alt="avatar">
                                <p class="sender">Adam W.</p>
                                <p class="message"><strong>Working</strong> - This is the last...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <img class="avatar" src="assets/img/photo02.jpg" alt="avatar">
                                <p class="sender">Dan E.</p>
                                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <img class="avatar" src="assets/img/photo03.jpg" alt="avatar">
                                <p class="sender">Leonard N.</p>
                                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                            <li>
                                <i class="read"></i>
                                <img class="avatar" src="assets/img/photo04.jpg" alt="avatar">
                                <p class="sender">Peter B.</p>
                                <p class="message"><strong>Thank you</strong> - Finally I can ...</p>
                                <div class="actions">
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--тек активность-->
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-default">
                <h2>Top рейтинга</h2>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('/js/typed.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/typedRun.js')}}"></script>
@endsection
