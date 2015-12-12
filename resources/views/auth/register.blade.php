<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Регистрация</title>
	<!-- CORE CSS-->

	<link rel="stylesheet" href="{!! asset('css/materialize.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('css/login.css') !!}">

</head>

<body style="background-image: url('../images/login.jpg'); background-size: cover;">


<div id="login-page" class="row">
	<div class="col s4 offset-s4 z-depth-6 card-panel center">
		<form class="login-form" role="form" method="POST" action="{{ url('/auth/register') }}">
			{!! csrf_field() !!}
			<div class="row">
				<div class="input-field col s4 center">
					<a href="{!! url('/') !!}"><img id="login-logo" src="{!! asset('images/logo.png') !!}" alt="" class="responsive-img valign profile-image-login"></a>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-social-person-outline prefix"></i>
					<input  id="name" type="text" name="name">
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-social-person-outline prefix"></i>
					<input  id="email" type="email" name="email">
					<input  id="role" type="hidden" name="role_id" value="3">

				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-action-lock-outline prefix"></i>
					<input id="password" type="password" name="password">

				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-action-lock-outline prefix"></i>
					<input id="password_confirmation" type="password" name="password_confirmation">

				</div>
			</div>


			<div class="row">
				<div class="input-field col s12">
					<button type="submit" class="btn waves-effect waves-light col s12">Зарегистрироваться</button>
				</div>
			</div>

		</form>
	</div>
</div>


<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/materialize.min.js') !!}"></script>


</body>

</html>
