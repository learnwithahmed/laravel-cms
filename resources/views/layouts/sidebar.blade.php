<aside class="menu">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href={{ route('dashboard') }} class="{{ Request::is('dashboard') ? 'is-active' : '' }}">Dashboard</a></li>
    <li><a href={{ route('employees.index') }} class="{{ Request::is('employees*') ? 'is-active' : '' }}">Employees</a></li>
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a>Team Settings</a></li>
    <li>
      <a>Manage Your Employees</a>
      <ul>
        <li><a>Employees</a></li>
        <li><a>Add a employee</a></li>
      </ul>
    </li>
    <li><a>Invitations</a></li>
    <li><a>Authentication</a></li>
  </ul>
  <p class="menu-label">
    Transactions
  </p>
  <ul class="menu-list">
    <li><a>Payments</a></li>
    <li><a>Transfers</a></li>
    <li><a>Balance</a></li>
  </ul>
</aside>