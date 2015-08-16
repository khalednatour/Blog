@extends('master')

@section('content')
<div class="container sign-in-up">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <br>
      <!-- Nav tabs -->
      <div class="text-center">
        <div class="btn-group">
          <a href="#user" role="tab" data-toggle="tab" class="big btn btn-danger"><i class="fa fa-user"></i> I have account</a>
          <a href="#new" role="tab" data-toggle="tab" class="big btn btn-primary"><i class="fa fa-plus"></i> New User</a>          
        </div>
      </div>      
      <div class="tab-content">
        <div class="tab-pane fade in active" id="user">
          <br>
              @if (Session::has('error'))   
<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Email or password not correct!
</div>
@endif
          <fieldset>
            {!! Form::open(['route' => 'LoginRegisterController.login', 'method'=> 'post']) !!}
            <div class="form-group">
              <div class="right-inner-addon">
                <i class="fa fa-envelope"></i>
                <input class="form-control input-lg" id="inputEmail" name="email" placeholder="Email Address" type="text" required autofocus>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <i class="fa fa-key"></i>
                <input class="form-control input-lg" name="password" placeholder="Password" type="password" required autofocus>
              </div>
            </div>
          </fieldset>
          <br>
          <div class=" text-center">
            <button class="btn btn-primary">LOGIN</button>
          </div>
                
        </div>
        {!! Form::close() !!}
        <div class="tab-pane fade in" id="new">
          <br>
          <fieldset>
            {!! Form::open(['route' => 'LoginRegisterController.signup', 'method'=> 'post']) !!}
            <div class="form-group">
              <div class="right-inner-addon">
                <i class="fa fa-envelope"></i>
                <input class="form-control input-lg" name="name" placeholder="name" type="text" required autofocus>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <i class="fa fa-envelope"></i>
                <input class="form-control input-lg" id="inputEmail" name="email" placeholder="Email Address" type="text" required autofocus>
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <i class="fa fa-key"></i>
                <input class="form-control input-lg" name="password" placeholder="Password" type="password" required autofocus>
              </div>
            </div>
          </fieldset>
                    <div class=" text-center">
            <button class="btn btn-primary">Sign up</button>
          </div>
          {!! Form::close() !!}
        </div>                      
      </div>
    </div>
  </div>
</div>


@stop

<?php
/*
LAST LOGIN


   <div class="container">
    @if (Session::has('error'))   
<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Email or password not correct!
</div>
@endif
      {!! Form::open(['route' => 'LoginRegisterController.login', 'method'=> 'post']) !!}
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <br />
        <a href="/auth/signup">Register!</a>
        <br /><br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      {!! Form::close() !!}

    </div> <!-- /container -->
*/
?>