@extends('base')
@section('title', 'Login')
@section('content')
<div class="login-container">
    <form class="login-form" action="{{ route('login.post') }}" method="POST">
        <h2 class="mb-3">Login</h2>
        @csrf
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
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

<style>
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .login-form {
      width: 300px;
    }
  </style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Login Failed',
            text: '{{ session('error') }}'
        });
    @endif

    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'sign up success',
            text: '{{ session('success') }}'
        });
    @endif
</script>
@endsection