@extends('layout_auth')
@section('title')
	<title>Register</title>
@stop
@section('login_text')
      <p><span class="pen-icon">Please Login To Your Account</span></p>
@stop
@section('content')
    <div class="form-signin-heading text-center">
            <img src="assets/images/register_logo.png" alt=""/>
    </div>
    <form class="form-signin" action="index.html">

        <div class="login-wrap">
            <label>Full Name</label>
            <input type="text" class="form-control" placeholder="" autofocus>
            <label>Email</label>
            <input type="password" class="form-control" placeholder="">   
            <label>Password</label>
            <input type="password" class="form-control" placeholder="">
            <label>Confirm Password</label>
            <input type="password" class="form-control" placeholder=""> 
            <label>Code</label>
            <input type="password" class="form-control" placeholder="">          
            <button class="btn btn-md btn-primary btn-block" type="submit">Create Account</button>
    </form>
 @stop