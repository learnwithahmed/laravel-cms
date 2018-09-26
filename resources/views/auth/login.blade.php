<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel CMS - Login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <section class="hero is-success is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <h3 class="title has-text-grey">Login</h3>
          <p class="subtitle has-text-grey">Please login to proceed.</p>
          <div class="box">
            <figure class="avatar">
              <img src="https://placekitten.com/g/100/100">
            </figure>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="field">
                <div class="control">
                  <input class="input is-medium" type="email" placeholder="Your Email" name="email" value="{{ old('email') }}" autofocus="">                  @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span> @endif
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input class="input is-medium" type="password" name="password" placeholder="Your Password"> @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span> @endif
                </div>
              </div>
              <div class="field">
                <label class="checkbox" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                <input type="checkbox">
                {{ __('Remember Me') }}
                </label>
              </div>
              <button class="button is-block is-info is-medium is-fullwidth">{{ __('Login') }}</button>
            </form>
          </div>
          <p class="has-text-grey">
            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> |
            <a href="{{ route('register') }}">{{ __('Register New Account') }}</a>
          </p>
        </div>
      </div>
    </div>
  </section>
</body>

</html>