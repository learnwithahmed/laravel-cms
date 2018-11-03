<aside class="menu">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href={{ route('dashboard') }} class="{{ Request::is('dashboard') ? 'is-active' : '' }}">Dashboard</a></li>
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li>
      <a>Manage Your Employees</a>
      <ul>
	  <li><a href={{ route('employees.index') }} class="{{ Request::is('employees.index') ? 'is-active' : '' }}">Employees</a></li>
        <li><a href={{ route('employees.create') }} class="{{ Request::is('employees.create') ? 'is-active' : '' }}">Add a employee</a></li>
      </ul>
    </li>
  </ul>
</aside>
