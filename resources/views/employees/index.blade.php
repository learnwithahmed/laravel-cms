@extends('layouts.app')

@section('content')
<div>
	<a href="?gender=male">Male</a>|
	<a href="?gender=female">Female</a>|
	<a href="?descent">Descent</a>|
	<a href="?ascent">Ascent</a>
</div>
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


@endsection
