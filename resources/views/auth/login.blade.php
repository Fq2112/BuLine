@extends('layouts.master')

@section('content')
    <div role="main" class="ui-content">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }}">
                <label for="nim" class="col-md-4 control-label">NIM</label>

                <div class="col-md-6">
                    <input id="nim" type="text" class="form-control" name="nim" value="{{ old('nim') }}" required autofocus>

                    @if ($errors->has('nim'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('nim') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="ui-btn ui-btn-b ui-corner-all">
                        Sign In
                    </button>
                </div>
            </div>
        </form>
        <p class="mc-top-margin-1-5">Don't have an account?<a href="{{route('register')}}" style="text-decoration: none"> <b>Sign Up!</b><a/></p>

    </div><!-- /content -->

@endsection
