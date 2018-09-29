@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('employees.update', [$employee->id]) }}">
  @csrf
  {{method_field('PATCH')}}
  @include('employees.fields')
  <button class="button is-block is-info is-medium is-fullwidth">{{ __('Update') }}</button>
</form>
@endsection