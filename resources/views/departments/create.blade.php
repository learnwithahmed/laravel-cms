@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('departments.store') }}">
  @csrf
  @include('departments.fields')
  <button class="button is-block is-info is-medium is-primary">{{ __('Add') }}</button>
</form>
@endsection