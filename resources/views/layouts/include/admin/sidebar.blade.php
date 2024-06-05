<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <!-- dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/dashboard') }}">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- Category -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-category">
        <i class="mdi mdi-format-list-bulleted-type menu-icon"></i>
        <span class="menu-title">Article</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-category">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('articles-create') }}">Add Article</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('articles-index') }}">View Article</a></li>
        </ul>
      </div>
    </li>

    <!-- Users -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-users" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-account-multiple-outline menu-icon"></i>
        <span class="menu-title">Users</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-users">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Admin</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Users</a></li>
        </ul>
      </div>
    </li>

    <!-- Site Setting -->
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="mdi mdi-settings menu-icon"></i>
        <span class="menu-title">Site Setting</span>
      </a>
    </li>

  </ul>
</nav>