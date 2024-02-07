  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="{{ route('dashboard') }}">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="#">
                  <i class="bi bi-person"></i>
                  <span>Profile</span>
              </a>
          </li><!-- End Profile Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed active" href="{{ route('pengaduan') }}">
                  <i class="bi bi-menu-button-wide"></i><span>Pengaduan</span></i>
              </a>
          </li><!-- End Pengaduan Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="#">
                  <i class="bi bi-archive"></i><span>Laporan </span></i>
              </a>
          </li><!-- End Report Page Nav -->


          <li class="nav-heading">Super Admin</li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('user-index') }}">
                  <i class="bi bi-people"></i>
                  <span>Users</span>
              </a>
          </li><!-- End Users -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="pages-faq.html">
                  <i class="bi bi-people"></i>
                  <span>Roles</span>
              </a>
          </li><!-- End Roles -->
      </ul>
  </aside><!-- End Sidebar-->
