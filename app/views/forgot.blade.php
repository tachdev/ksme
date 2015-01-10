@extends('layout_auth')
@section('title')
	<title>Forgot Password</title>
@stop
@section('content')
<form class="form-signin" action="index.html">
		<div class="text-center">
            <img src="assets/images/login-logo.png" alt=""/>
        </div>
        <div class="login-wrap" style="background:#fff;">
            <h3>Forgot Password</h3>
            <input type="text" autofocus="" placeholder="Email" class="form-control">
            <button class="btn btn-md btn-danger btn-block" type="submit">Sumbit</button>

            <div class="registration">
                Back to Page 
                <a href="login.html" class="">
                    Login
                </a>
            </div>

        </div>

   </form>
 @stop