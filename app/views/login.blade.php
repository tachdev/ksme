@extends('layout_auth')


@section('content')
    <div class="form-signin-heading text-center">
            <img src="assets/images/login_logo.png" alt=""/>
    </div>
    <form class="form-signin" action="index.html">

        <div class="login-wrap">
            <div class="col-xs-12 no-padding">
                <a style="display:block;widht:50px;padding: 0px 15px;" class="btn btn-xs btn-success pull-right user-plus-icon" href="<?php echo url('register'); ?>">Create New Account</a>
            </div>
            <label>User Login</label>
            <input type="text" class="form-control" placeholder="" autofocus>
            <label>Password</label>
            <input type="password" class="form-control" placeholder="">			
            <button class="btn btn-md btn-primary btn-block" type="submit">Login</button>
            <p style="font-size:11px">
                <input type="checkbox" value="remember-me"> <span style="color:#444">Remember me</span>
                <span class="pull-right"><a data-toggle="modal" href="#myModal" style="color:#444"> Forgot Password?</a></span> 
            </p>
            <p style="text-align:center">OR</p>

            <button class="btn btn-block btn-primary" type="button" style="background:#25517C;border-color:#25517C;"> 
            	<span class="pull-left"><i class="fa fa-facebook"></i></span><span class="bold">Login with Facebook</span>
            </button>
            <button class="btn btn-block btn-danger" type="button"> 
            	<span class="pull-left"><i class="fa fa-google-plus"></i></span> <span class="bold">Login with Google +</span>
            </button> 
            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-primary" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

    </form>

@stop
