<br>

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
    <input id="detail" class="input is-medium{{ $errors->has('detail') ? ' is-invalid' : '' }}" name="detail" value="{{ old('detail') }}"
      required type="text" placeholder="Detail" autofocus=""> @if ($errors->has('detail'))
    <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('detail') }}</strong>
        </span> @endif
  </div>
</div>
