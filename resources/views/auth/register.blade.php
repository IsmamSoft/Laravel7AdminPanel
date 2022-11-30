@extends('layouts.app')
@section('content')
<section id="hero" class="align-items-center">
   
    <div class="container">
      <div class="row"> 
                <h2 class="mb-0">Register</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mt-2 mb-2">
                        <div class="col-md-3">
                        <input id="name" type="text" placeholder="User Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        </div>
                    
                        <div class="col-md-3">
                        <div class="form-group mt-2 mb-2">
                        <div class="form-field">
                        <div class="select-wrap">
                        <input id="email" type="email" placeholder="E-Mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="form-group mt-2 mb-2">
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="form-group mt-2 mb-2">
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        </div>

                        <div class="col-md-12">
                        <div class="form-group mt-2 mb-2">
                        <button type="submit" style="border-color: #000000;" class="btn btn-outline-success mt-2">Submit!</button>
                        </div>
                        </div>
                    </form>
                    </div><!--End Row-->
            </div>
</section>
@endsection
{{-- @section('footer_js')

@endsection --}}
