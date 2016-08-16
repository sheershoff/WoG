@extends('layouts.app')

@section('content')



        	<div style="margin-bottom: 40px;" class="col-lg-6">
        		
        		<div class="register-info-wraper">
        			<div id="register-info">
        				<div class="cont2">
        					<div class="thumbnail">
								<img style=" height: 190px; " src="{{asset('img/face80x80.jpg')}}" alt="Marcel Newman" class="img-circle">
							</div><!-- /thumbnail -->
							<h2>{{ Auth::user()->name }}</h2>
        				</div>
        				<div class="row">
        					<div class="col-lg-5">
        						<div class="cont3">
        							<p><ok>Имя пользователя:</ok> {{ Auth::user()->name }}</p>
        							{{-- <p><ok>Статус:</ok> <br> {{ Auth::user()->name }}</p> --}}
        							<p><ok>E-mail:</ok>  {{ Auth::user()->email }}</p>
        							{{-- <p><ok>Страна:</ok> Madrid, Spain</p> --}}
        							{{-- <p><ok>Адрес:</ok> Blahblah Ave. 879</p> --}}
        						</div>
        					</div>
        					<div class="col-lg-3">
        						<div class="cont3">
        						<p><ok>Дата регистрации:</ok> April 9, 2010</p>
        						{{-- <p><ok>Last Login:</ok> January 29, 2013</p> --}}
        						<p><ok>Телефон:</ok> {{ Auth::user()->phoneNumber }}</p>
        						{{-- <p><ok>Mobile</ok> +34 603 093384</p> --}}
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
        		    <form id="register-form" class="form">
        		        <legend>Личные данные</legend>
        		    
        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name">Фамилия</label>
    		        		<input name="name" class="input-huge" type="text">
        		        	<!-- last name -->
    		        		<label for="surname">Имя</label>
    		        		<input name="surname" class="input-huge" type="text">
        		        	<!-- username -->
        		        	<label>Имя пользователя</label>
        		        	<input class="input-huge" type="text">
        		        	<!-- email -->
        		        	<label>E-mail</label>
        		        	<input class="input-huge" type="text">
        		        	<!-- password -->
        		        	<label>Пароль</label>
        		        	<input class="input-huge" type="text">

        		        </div>
        		    
        		        <div class="footer">
        		           {{--  <label class="checkbox inline">
        		                <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree with the terms &amp; conditions
        		            </label> --}}
        		            <button type="submit" class="btn btn-success">Сохранить</button>
        		        </div>
        		    </form>
        		</div>
        	</div>



@stop