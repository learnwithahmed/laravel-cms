<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth table-container">
  <thead>
    <tr>
      <th>ID</th>
      <th>Department Name</th>
      <th>Detail</th>


    </tr>
  </thead>
  <tbody>
    @foreach($departments as $department)
      <tr>
        <td>{!! $department->id !!}</td>
        <td>{!! $department->name !!}</td>
        <td>{!! $department->detail !!}</td>

        <td>
          <a href="{!! route('departments.edit', [$department->id]) !!}">
            <span class="icon is-small">
              <i class="fa fa-edit"></i>
            </span>
          </a>
          <a href="{!! route('departments.destroy', [$department->id]) !!}">
            <span class="icon is-small">
              <i class="fa fa-trash-alt"></i>
            </span>
          </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>