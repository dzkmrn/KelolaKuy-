<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="{{ url('kategori') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Kategori
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('profile') }}" class="nav-link">
        <i class="nav-icon fa fa-archive"></i>
        <p>
          Alat
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('jenis') }}" class="nav-link">
        <i class="nav-icon fa fa-graduation-cap"></i>
        <p>
          Jenis
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('peminjam') }}" class="nav-link">
        <i class="nav-icon fa  fa fa-users"></i>
        <p>
          Peminjam
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('peminjaman') }}" class="nav-link">
        <i class="nav-icon fa fa-exchange" aria-hidden="true"></i>
        <p>
          Peminjaman
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('matkul') }}" class="nav-link">
        <i class="nav-icon fa  fa fa-check-square"></i>
        <p>
          Checklist
        </p>
      </a>
    </li>
  </ul>
</nav>