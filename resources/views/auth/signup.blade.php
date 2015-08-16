@extends('master')

@section('content')

   <div class="container">
    @if (Session::has('error'))   
<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Email or password not correct!
</div>
@endif
      {!! Form::open(['route' => 'LoginRegisterController.signup', 'method'=> 'post']) !!}
        <h2 class="form-signin-heading">Sign up</h2>
        <label for="name" class="sr-only">Name</label>
        <input type="name" id="name" name="name" class="form-control" placeholder="Name" required autofocus>
        <br />
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      {!! Form::close() !!}

    </div> <!-- /container -->

@stop
