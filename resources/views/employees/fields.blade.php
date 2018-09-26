<div class="field">
  <div class="control">
    <input id="name" class="input is-medium{{ $errors->has('name') ? ' is-invalid' : '' }}" type="name" placeholder="Name" name="name"
      value="{{ old('name') }}" required autofocus=""> 
      @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span> 
      @endif
  </div>
</div>

<div class="field">
  <div class="control">
    <input id="title" class="input is-medium{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}"
      required type="text" placeholder="Title" autofocus=""> @if ($errors->has('title'))
    <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('title') }}</strong>
        </span> @endif
  </div>
</div>

<div class="field">
  <div class="control">
    <div class="select">
      <select name="gender">
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
    @if ($errors->has('gender'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('gender') }}</strong>
      </span> 
    @endif
  </div>
</div>

<div class="field">
  <div class="control">
    <input id="phone" class="input is-medium{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}"
      required type="text" placeholder="phone" autofocus=""> 
    @if ($errors->has('phone'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('phone') }}</strong>
      </span> 
    @endif
  </div>
</div>

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
    <input id="city" class="input is-medium{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}"
      required type="text" placeholder="city" autofocus=""> 
    @if ($errors->has('city'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('city') }}</strong>
      </span> 
    @endif
  </div>
</div>