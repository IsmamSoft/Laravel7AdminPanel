@extends('layouts.app')

@section('content')


<section id="hero" class="align-items-center">
   
    <div class="container">
      <div class="row"> 
        <h2 class="mb-0">Login</h2>
     <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group mt-2 mb-2">
            <div class="col-md-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Here.." autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group mt-2 mb-2">
            <div class="col-md-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password Here.." required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group mt-2 mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
        </div>

        <div class="form-group">
                <button type="submit" style="border-color: #000000;" class="btn btn-outline-success mt-2">
                    {{ __('Login') }}
                </button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" style="color: #000000;" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
       
    </form>

  </div>

</div>
</div>

</section><!-- End Hero -->

           
@endsection
