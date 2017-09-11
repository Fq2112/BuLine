@extends('layouts.master')

@section('content')
    <div role="main" class="ui-content">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }}">
                <label for="nim" class="col-md-4 control-label">NIM</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="nim"
                           onkeypress="return hanyaAngka(event, false)" maxlength="11" required autofocus>
                    <script>
                        function hanyaAngka(e, decimal) {
                            var key;
                            var keychar;
                            if (window.event) {
                                key = window.event.keyCode;
                            } else if (e) {
                                key = e.which;
                            } else return true;
                            keychar = String.fromCharCode(key);
                            if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27)) {
                                return true;
                            } else if ((("0123456789").indexOf(keychar) > -1)) {
                                return true;
                            } else if (decimal && (keychar == ".")) {
                                return true;
                            } else return false;
                        }
                    </script>
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
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nama Lengkap</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Alamat</label>

                <div class="col-md-6">
                    <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>
                    @if ($errors->has('alamat'))
                        <span class="help-block">
                            <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                <label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir</label>

                <div class="col-md-6">
                    <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autofocus>
                    @if ($errors->has('tempat_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
                <label for="tgl_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                <div class="col-md-6">
                    <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required autofocus>
                    @if ($errors->has('tgl_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tgl_lahir') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone" class="col-md-4 control-label">No. Hanphone</label>

                <div class="col-md-6">
                    <input onkeypress="return hanyaAngka(event, false)" maxlength="13" id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="ui-btn ui-btn-b ui-corner-all">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div><!-- /content -->
@endsection
