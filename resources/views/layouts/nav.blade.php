<nav class="navbar is-white">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item brand-text" href="../">
                Employee Management Dashboard
            </a>
      <div class="navbar-burger burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id="navMenu" class="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item has-dropdown is-hoverable">
          Profile
          <div class="navbar-dropdown is-right">
            <a class="navbar-item"> Overview </a>
            <a class="navbar-item"> Elements </a>
            <a href="{{ url('/logout') }}" class="navbar-item"> logout </a>
          </div>
        </div>
      </div>
    </div>
</nav>
<!-- END NAV -->