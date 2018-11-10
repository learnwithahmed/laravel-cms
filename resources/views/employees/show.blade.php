@extends('layouts.app')

@section('content')

@include('employees.table_show')
<div >
<hr>
	<small> this user is created at {{$employee->created_at}}</small>
</div>

@endsection
