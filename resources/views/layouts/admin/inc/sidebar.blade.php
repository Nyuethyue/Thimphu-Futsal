<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link text-decoration-none">
      <img src="img/futsal_logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Thimphu Futsal</span>
    </a>

    
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Bookings
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('getAllUsers') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
    
   
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('getAllUsers') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User Management
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>