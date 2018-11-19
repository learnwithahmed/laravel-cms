@extends('layouts.app')
@section('content')
<form action="/search" method="POST" role="search">
	{{ csrf_field() }}
	<div class="input-group">
		<input type="text" class="form-control" name="search" placeholder="Search users">
		<button type="submit">search</button>
	</div>
</form>

@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="table-container">
	@include('employees.table')
</div>
@endsection
