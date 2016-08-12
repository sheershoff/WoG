@extends('layouts.app')

@section('content')
<div class="container" style="height: 170px;">
    <div class="row">
		<div class="dash-unit">
	  		<dtitle>Добро пожаловать, дорогой друг!</dtitle>
	    </div>
		<div class="cont2">
			<p><span class="to-type">Вы зашли на портал Wold of Game. Мы рады приветствовать вас. <br/>
			Авторизуйтесь используя ваш рабочий е-mail и пароль от AD.</span><span class="typed"></span></p></p>
	    </div>
    </div>

    <div class="row">
		<div class="dash-unit">
	  		<dtitle>Награды</dtitle>
	  	</div>
		<div class="dash-unit">
	  		<dtitle>Текущая активность</dtitle>
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
	    </div> <!--тек активность-->
   		<div class="dash-unit">
	  		<dtitle>Top рейтинга</dtitle>
	  	</div>

    </div>
</div>

<script type="text/javascript" src="{{asset('/js/typed.js')}}"></script>
@endsection
