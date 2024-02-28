   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?php echo base_url('admin') ?>>

           <div class="sidebar-brand-text mx-3">ADMIN PERPUSTAKAAN </div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item active ">
           <a class="nav-link" href=<?php echo base_url('admin') ?>>
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Heading -->
       <div class="sidebar-heading">
           Pages
       </div>

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
               <i class="fas fa-fw fa-cog"></i>
               <span>Components</span>
           </a>
           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Custom Components:</h6>
                   <a class="collapse-item" href="buttons.html">Buttons</a>
                   <a class="collapse-item" href=<?= base_url('card') ?>>Cards</a>
               </div>
           </div>
       </li>



       <!-- Divider -->
       <hr class="sidebar-divider">


       <!-- Nav Item - Charts -->
       <li class="nav-item">
           <a class="nav-link" href=<?= base_url('charts') ?>>
               <i class="fas fa-fw fa-chart-area"></i>
               <span>Charts</span></a>
       </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
           <a class="nav-link" href=<?= base_url('daftarbuku') ?>>
               <i class="fas fa-fw fa-table"></i>
               <span>Data Buku</span></a>
       </li>
       <li class="nav-item ">
           <a class="nav-link" href=<?= base_url('pinjamanbuku') ?>>
               <i class="fas fa-fw fa-table"></i>
               <span>Pinjaman Buku</span></a>
       </li>

       <li class="nav-item ">
           <a class="nav-link" href=<?= base_url('data_user') ?>>
               <i class="fas fa-fw fa-table"></i>
               <span>user</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">

       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
           <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>



   </ul>
   <!-- End of Sidebar -->