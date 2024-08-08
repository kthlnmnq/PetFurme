@extends('layouts.auth')

@section('content')

<div class="side-bar" style="background-color: rgba(180, 212, 255, 0.5); display: flex; justify-content: center; align-items: center; flex-direction: column; position: fixed; top: 0px; left: 0px; width: calc(100vw - 1000px); height: 100vh;"> 
    <div>
        <h1 style="line-height: 1.1; font-size: 100px; position:relative; bottom: 50px; font-weight: bold; color: white; padding: 0 110px 10px 110px;"> Customize your pet based on you preferences
        </h1>
    </div>
    <div><img src="assets/img2/login_icon.png" alt="Login Icon" style="width: 300px;"></div>
</div>

<div class="background-wrapper" style="background-color: rgba(180, 212, 255, 0.5); position: fixed; z-index: 0; top: 0; right: 0; bottom: 0; width: 1000px; height: 100vh;">

    <div class="card card-md" style="padding: 50px; height: 100vh; border-radius: 70px 0 0 70px; align-items: center; justify-content: center;">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">
                Login to your account
            </h2>
            <form action="{{ route('login') }}" method="POST" autocomplete="off">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email address
                    </label>
                    <input type="email"
                        name="email"
                        id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="your@email.com"
                        autocomplete="off"
                        value="{{ old('email') }}"
                    >

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="password" class="form-label">
                        Password
                    </label>

                    <div class="input-group input-group-flat">
                        <input type="password"
                            name="password"
                            id="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Your password"
                            autocomplete="off"
                        >

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="remember" class="form-check">
                        <input type="checkbox" id="remember" name="remember" class="form-check-input"/>
                        <span class="form-check-label">Remember me on this device</span>
                    </label>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">
                        Sign in
                    </button>
                </div>
            </form>

            <div class="text-center text-secondary mt-3">
            Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">
                Sign up
            </a>

            <span class="form-label-description">
                <a href="{{ route('password.request') }}">I forgot password</a>
            </span>
            </div>



        </div>




    </div>





</div>

@endsection
