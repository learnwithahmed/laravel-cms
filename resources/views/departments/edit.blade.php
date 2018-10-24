@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('departments.update', [$department->id]) }}">
  @csrf
  {{method_field('PATCH')}}
  @include('departments.fields')
  <button class="button is-block is-info is-medium is-fullwidth">{{ __('Update') }}</button>
</form>
@endsection