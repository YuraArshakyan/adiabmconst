@extends('layout.adminLogin')
@section('title', 'Admin')
@section('content')
@notifyCss
@notifyJs
<div class="login_form d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <form action={{url('/login')}} method="POST">
            @csrf
            <div class="card ">
                <div class="card-body p-30">
                    <div class="form-floating mb-3 ">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer login_form_footer mt-3">
                    <div class="card-footer-content">
                        <button type="submit" class="btn btn-primary w-100">Sign In</button>
                    </div>
                </div>
            </div>
        </form>
        {{-- <form action={{ url('/register') }} method="post">
            @csrf
            <div class="card ">
                <div class="card-body p-30">
                    <div class="form-floating mb-3 ">
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name">
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="email">
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    </div>
                    <div class="form-floating">
                        <input type="password" name="repassword" class="form-control" id="floatingPassword" placeholder="re-password">
                    </div>
                </div>
                <div class="card-footer login_form_footer mt-3">
                    <div class="card-footer-content">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </div>
        </form> --}}
    </div>
</div>
@endsection