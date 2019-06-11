@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone number" type="text" class="form-control @error('phone number') is-invalid @enderror" name="phone number" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="program" class="col-md-4 col-form-label text-md-right">{{ __('Program') }}</label>
                                <div class="col-md-6 ">
                                    <div class="form-inline"><input id="veterans" type="radio" class="form-inline" name="program" value="Veteran Program ($35.00/month)" {{ (old('program')== 'veteran') ? 'checked':''}}> Veteran Program ($35.00/month</div>
                                    <div class="form-inline"><input id="masters" type="radio" class="form-inline" name="program" value="Masters Program ($50.00/month)" {{ (old('program')== 'masters') ? 'checked':''}}> Masters Program ($50.00/month)</div>
                                    <div class="form-inline"><input id="adaptive" type="radio" class="form-inline" name="program" value="Non-Veteran Adaptive Program ($50.00/month)" {{ (old('program')== 'adaptive') ? 'checked':''}}> Masters Adaptive Program ($50.00/month)</div>

                                            @error('program')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Disability Type (If applicable)') }}</label>
                                <div class="col-md-6">
                                    <input id="disability" type="text" class="form-control" name="disability" value="{{ old('disability') }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="waiver" class="col-md-4 col-form-label text-md-right">{{ __('Terms and Conditions') }}</label>
                            <div class="col-md-6 ">
                                <div class="form-inline"><input id="waiver" type="checkbox" class="form-inline" name="waiver" value="waiver" {{ (old('waiver')== '1') ? 'checked':''}}> By checking this box, I agree to the ORCA terms & conditions. </div>
                                     @error('waiver')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            </div>
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
