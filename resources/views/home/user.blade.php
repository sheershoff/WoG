<div class="dash-unit">
    <dtitle>Персонаж</dtitle>
    <hr>
    <div class="thumbnail">
        <img style=" height: 80px; " src="{{asset('img/face80x80.jpg')}}" alt="Marcel Newman" class="img-circle">
    </div><!-- /thumbnail -->
    <h1>{{ Auth::user()->name }}</h1>
    <h3>{{ Auth::user()->staus }}</h3>
    <br>
    <div class="info-user">
        <a href="/personal-data"><span aria-hidden="true" class="li_user fs1"></span></a>
        <a href="/skills"><span aria-hidden="true" class="li_settings fs1"></span></a>
        <a href="/quests"><span aria-hidden="true" class="li_mail fs1"></span></a>
        <span aria-hidden="true" class="li_key fs1"></span>
    </div>
</div>
