<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel CMS - Registration Form</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <section class="hero is-success is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <h3 class="title has-text-grey">Register</h3>
          <p class="subtitle has-text-grey">Please Register your account</p>
          <div class="box">
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="field">
                <div class="control">
                  <input id="name" class="input is-medium{{ $errors->has('name') ? ' is-invalid' : '' }}" type="name" placeholder="Name" name="name"
                    value="{{ old('name') }}" required autofocus=""> @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span> @endif
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input id="email" class="input is-medium{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                    required type="email" placeholder="Your Email" autofocus=""> @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span> @endif
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input class="input is-medium{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required type="password"
                    placeholder="Your Password"> @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span> @endif
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input id="password-confirm" class="input is-medium" name="password_confirmation" required type="password" placeholder="Confirm Password">
                </div>
              </div>

              <button class="button is-block is-info is-medium is-fullwidth" type="submit">{{ __('Register') }}</button>
            </form>
          </div>
          <p class="has-text-grey">
            <a href="{{ route('login') }}">{{ __('Already registered? Login?') }}</a>
          </p>
        </div>
      </div>
    </div>
  </section>
</body>

</html>