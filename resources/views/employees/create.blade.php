@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('employees.store') }}">
  @csrf
  @include('employees.fields')
  <button class="button is-block is-info is-medium is-fullwidth">{{ __('Add') }}</button>
</form>
@endsection