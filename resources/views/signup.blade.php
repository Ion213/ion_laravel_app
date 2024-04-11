@extends('base')
@section('title', 'sign_up')
@section('content')
<div class="signup-container">
    <form class="signup-form" action="{{route('signup.post')}}"  method="POST">
        <h2 class="mb-3">Sign Up</h2>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full NAME</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="gmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="gmail" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <div class="mb-3 form-check">
            <button type="submit" class="btn btn-primary">SIGN_UP</button>
        </div>
    </form>
</div>

<style>
    .signup-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .signup-form {
      width: 300px;
    }
  </style>

@endsection