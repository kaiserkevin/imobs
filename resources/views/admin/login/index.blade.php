@extends('layouts.site')
@include('layouts._site._nav')
	<div class="container_login">
		<div class="circle_user">
			<img src="{{asset('imgs/icon/user.png')}}">
		</div>
		<div class="box_form">
			<form action="{{route('admin.login')}}" method="post">
				@csrf
				@include('admin.login._form')
			</form>	
		</div>
	</div>
@include('layouts._site._foot')
	