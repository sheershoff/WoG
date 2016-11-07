@extends('layouts.app')

@section('content')

<div style="margin-bottom: 40px;" class="col-lg-6">
    <div class="register-info-wraper">
        <div id="register-info">
            <div class="cont2">
                <div class="thumbnail">
                    <img style=" height: 300px; " src="{{asset('img/face80x80.jpg')}}" alt="Marcel Newman" class="img-circle">
                </div><!-- /thumbnail -->
                <h2>{{ Auth::user()->name }}</h2>
                <h4>{{ Auth::user()->status }}</h3>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="cont3">
                        <p><ok>Имя пользователя: </ok> {{ Auth::user()->name }}</p>
                        <p><ok>E-mail: </ok>  {{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cont3">
                        <p><ok>Дата регистрации: </ok>{{ Auth::user()->created_at}}</p>
                        <p><ok>Телефон: </ok> {{ Auth::user()->phone_number }}</p>
                    </div>
                </div>
            </div><!-- /inner row -->
            <hr>
            <div class="cont2">
                <h2>Опции</h2>
            </div>
            <br>
            <div class="info-user2">
                <span aria-hidden="true" class="li_user fs1"></span>
                <span aria-hidden="true" class="li_settings fs1"></span>
                <span aria-hidden="true" class="li_mail fs1"></span>
                <span aria-hidden="true" class="li_key fs1"></span>
                <span aria-hidden="true" class="li_lock fs1"></span>
                <span aria-hidden="true" class="li_pen fs1"></span>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-lg-6">
    <div id="register-wraper">
        <form id="register-form" class="form" action="{{ url('profile/save') }}" method="post">
            <legend>Личные данные</legend>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="body">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label for="name">Фамилия</label>
                <input name="name" class="form-control" type="text" value="{{ explode(' ', Auth::user()->name)[0] }}" required>
                <label for="surname">Имя</label>
                <input name="surname" class="form-control" type="text" value="{{ explode(' ', Auth::user()->name)[1] }}" required>
                <label>Имя пользователя / логин</label>
                <input name="login" class="form-control" type="text" value="{{ Auth::user()->login }}" required>
                <label>E-mail</label>
                <input name="email" class="form-control" type="email" value="{{ Auth::user()->email }}" required>
                <label>Номер телефона</label>
                <input name="phone_number" class="form-control" type="tel" value="{{ Auth::user()->phone_number }}" required>
                <label for="style">Тема</label>
                <select name="style" class="form-control">
                    <option value="1" @if (Auth::user()->style == 1) selected @endif>Белая</option>
                    <option value="2" @if (Auth::user()->style == 2) selected @endif>Черная</option>
                    <option value="3" @if (Auth::user()->style == 3) selected @endif>Гламурная</option>
                </select>
                <label>Рабочее время (МСК)</label>
                </p> C <input class="form-control" type="time" name="begin_worktime" value="{{ Auth::user()->begin_worktime }}" required> до <input  class="form-control" type="time" name="end_worktime" value="{{ Auth::user()->end_worktime }}" required>
                <label for="sub_user1">E-mail лица, которое вас замещает в ваше отсутствие (за исключением руководителя)</label>
                <input name="sub_user1"  class="form-control" type="email" value="{{ Auth::user()->sub_user1 }}">
                <label for="sub_user2">E-mail запасного варианта лица, которое вас замещает в ваше отсутствие (за исключением руководителя)</label>
                <input name="sub_user2"  class="form-control" type="email" value="{{ Auth::user()->sub_user2 }}">
                <label for="sub_comment">Комментарий о замещениии</label>
                <textarea  class="form-control" name="sub_comment" maxlength="300" rows="3">{{ Auth::user()->sub_comment }}</textarea>
                <label for="job_comment">Ваше текущее направление деятельности</label>
                <textarea  class="form-control" name="job_comment" maxlength="300" rows="3">{{ Auth::user()->job_comment }}</textarea>
            </div>
            <div class="footer">
                <input type="submit" class="btn btn-success" value="Сохранить">
            </div>
        </form>
    </div>
</div>

@if(!config('wog.can_edit_user'))
    <script>
        $(document).ready(function () {
            $('form').find('input, button').attr('disabled', true);
        });
    </script> 
@else
    <script>
        $(document).ready(function () {
            @foreach(config('wog.not_edit_user_fields') as $field)
                $('form').find('[name="{{ $field }}"]').attr('disabled', true);
            @endforeach
        });
    </script> 
@endif
@stop
