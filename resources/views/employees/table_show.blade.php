<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth table-container">
	<thead>
	  <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Title</th>
		<th>Gender</th>
		<th>DOB</th>
		<th>Email</th>
		<th>Phone</th>
		<th><abbr title="Hiring Date">HD</abbr></th>
		<th colspan="3">Action</th>
	  </tr>
	</thead>
	<tbody>

		<tr>
		  <td>{!! $employee->id !!}</td>
		  <td>{!! $employee->name !!}</td>
		  <td>{!! $employee->title !!}</td>
		  <td>{!! $employee->gender !!}</td>
		  <td>{!! $employee->dob !!}</td>
		  <td>{!! $employee->email !!}</td>
		  <td>{!! $employee->phone !!}</td>
		  <td>{!! $employee->city!!}</td>
		  <td>
			
			<a href="{!! route('employees.edit', [$employee->id]) !!}">
			  <span class="icon is-small">
				<i class="fa fa-edit"></i>
			  </span>
			</a>
			  <form action="{!! route('employees.destroy', [$employee->id]) !!}" method="POST">
				  @csrf
				  {{method_field('DELETE')}}
				  <button>
					  <span class="icon is-small">
						  <i class="fa fa-trash"></i>
					  </span>
				  </button>
			  </form>
		  </td>
		</tr>
	</tbody>
  </table>
