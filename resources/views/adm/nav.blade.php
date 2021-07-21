 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image: linear-gradient(
  180deg
  ,#863798 20%, #1b283e 100%);">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html" style="background-color:#863798">
  <img style="width:100px" src="https://i.ibb.co/M10Ppdh/pilab.png">
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{{ url('home') }}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

@if(Auth::user()->level_id=='2')

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
  Manajement User
</div>

<li class="nav-item active"><a class="nav-link" href="{{ url('level') }}"><i class="fas fa-fw fa fa-bolt"></i><span>Role</span></a></li>
<li class="nav-item active"><a class="nav-link" href="{{ url('user') }}"><i class="fas fa-fw fa fa-user-circle"></i><span>Users</span></a></li>
<!--
<li class="nav-item active"><a class="nav-link" href="{{ url('setting') }}"><i class="fas fa-fw fa fa-cogs"></i><span>Setting</span></a></li>
-->
@elseif (Auth::user()->level_id=='1')

<!-- Heading -->
<div class="sidebar-heading">
  Manajement Aset
</div>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item active"><a class="nav-link" href="{{ url('kategori') }}"><i class="fas fa-fw fa-cog"></i><span>Kategori</span></a></li>
<li class="nav-item active"><a class="nav-link" href="{{ url('aset') }}"><i class="fas fa-fw fa-id-card"></i><span>Manajement Aset</span></a></li>
<!-- Divider -->
<hr class="sidebar-divider">

@endif

<li class="nav-item active"><a class="nav-link" href="{{ url('/logout') }}"><i class="fas fa-fw fa fa-times-circle"></i><span>Logout</span></a></li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
