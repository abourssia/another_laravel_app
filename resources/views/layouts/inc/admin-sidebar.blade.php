
<aside class="main-sidebar sidebar-dark-primary elevation-12  " style="height:100%;margin-top:0px; position: fixed;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ATRST| Dashboard</span>
    </a>

    <!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Amina BOURSSIA</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{ url('admin/')}}" class="nav-link {{ 'admin' == request() -> path() ? 'active' : ''}}"> 
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas"></i>
              </p>
            </a>
       
          </li>
          <li class="nav-item {{ (request()->is('admin/laboratoires*')) 
            ||  (request()->is('admin/laboratoires/add-labo*'))
             ||  (request()->is('admin/laboratoires/import*')) 
             ||  (request()->is('admin/laboratoires/restructuration*')) 
             ||  (request()->is('admin/laboratoires/restructuration/List*')) 

             ? 
             
             'active menu-open' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-flask"></i>
              <p>
                Laboratoires
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          
            <ul class="nav nav-treeview ">

              <li class="nav-item ">
                <a href="{{ url('admin/laboratoires/')}}" class="nav-link {{ 'admin/laboratoires' == request() -> path() ? 'active' : ''}}">
                  <i class="fa fa-list-ul nav-icon"></i>
                  <p>Liste des Laboratoires </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/laboratoires/add-labo')}}" class="nav-link {{ 'admin/laboratoires/add-labo' == request() -> path() ? 'active' : ''}}">
                  <i class="fa fa-plus-circle nav-icon"></i>
                  <p>Ajouter un Laboratoires</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/laboratoires/import')}}" class="nav-link {{ 'admin/laboratoires/import' == request() -> path() ? 'active' : ''}}">
                  <i class="fa fa-upload nav-icon"></i>
                  <p>Importer Excel</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/laboratoires/restructuration')}}" class="nav-link {{ 'admin/laboratoires/restructuration' == request() -> path() ? 'active' : ''}}">
                <i class="fa fa-file nav-icon"></i>
                  <p>Restructuration</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/laboratoires/restructuration/List')}}" class="nav-link {{ 'admin/laboratoires/restructuration/List' == request() -> path() ? 'active' : ''}}">
                <i class="fa fa-file nav-icon"></i>
                  <p>Les demandes de Restructuration</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ (request()->is('admin/experts*')) 
            ||  (request()->is('admin/experts/import*'))
            ? 'active menu-open' : '' }}">        
            
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Experts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/experts')}}" class="nav-link {{ 'admin/experts' == request() -> path() ? 'active' : ''}} ">
                  <i class="fa  fa-list"></i>
                  <p> Liste d'experts</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/experts/add-expert')}}" class="nav-link {{ 'admin/experts/add-expert' == request() -> path() ? 'active' : ''}} ">
                  <i class="fa fa-plus-circle"></i>
                  <p> Ajouter un expert </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/experts/import')}}" class="nav-link {{ 'admin/experts/import' == request() -> path() ? 'active' : ''}}">
                <i class="fa fa-upload nav-icon"></i>
                  <p> Import Excel </p>
                </a>
              </li>
              
            </ul>
          </li>
 
          <li class="nav-item {{ (request()->is('admin/print/restructuration*')) || (request()->is('admin/print/Contratexpert*')) 
            ? 'active menu-open' : '' }}">             
            
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Print
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/print/restructuration')}}" class="nav-link {{ 'admin/print/restructuration' == request() -> path() ? 'active' : ''}} ">
                  <i class="fa fa-check nav-icon"></i>
                  <p> Validation Restructuration </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/print/Contratexpert')}}" class="nav-link {{ 'admin/print/Contratexpert' == request() -> path() ? 'active' : ''}}">
                <i class="fa fa-check nav-icon"></i>
                  <p> Contrat d'Expert</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ url('admin/print/ContratexpertPNR')}}" class="nav-link {{ 'admin/print/ContratexpertPNR' == request() -> path() ? 'active' : ''}}">
                <i class="fa fa-check nav-icon"></i>
                  <p> Contrat d'Expert PNR</p>
                </a>
              </li>
            </ul>
          </li>
 
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  