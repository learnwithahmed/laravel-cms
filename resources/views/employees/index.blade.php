@extends('layouts.app')

@section('content')
<div>
	<a href="?gender=male">Male</a>|
	<a href="?gender=female">Female</a>|
	<a href="?descent">Descent</a>|
	<a href="?ascent">Ascent</a>
</div>

    <div class="table-container">
      @include('employees.table')
    </div>
@endsection
