

@extends('app')

@section('content')
<div style="margin-top: -116px">
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container padd">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-6">
            <img src="images/2.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="images/3.jpg" alt="logo" class="logo">
              </div>
              <strong class="login-card-description">Sign into your account</strong><br>
              @if(isset(Auth::user()->email))
                <script>window.location="/dashboard";</script>
              @endif

              @if ($message = Session::get('status'))
              <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
              </div>
              @endif

              {{-- @if (count($errors) > 0)
                <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
              @endif --}}
              <form action="{{route('login')}}"  method="POST">
                    @csrf
                  
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                </form>
                <p class="login-card-footer-text">Don't have an account? <a href="{{route('register')}}" class="text-reset">Register here</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->


      
    </div>
  </main>
  </div>
  @endsection
