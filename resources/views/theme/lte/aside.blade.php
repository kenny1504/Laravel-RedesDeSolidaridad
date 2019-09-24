<aside class="main-sidebar" style="  background-color: #022730">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel --> 
      <div class="user-panel">
        <div class="pull-left image">
        <img src="{{asset("assets/$theme/dist/img/avatar04.png")}}" class="img-circle" alt="User Image">
        </div> 
        <div class="pull-left info">
          <p>Kenny Saenz</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search..."  autocomplete="off" >
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      ><li class="header">Menu Navegacion</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Agregar</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Mostrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Materias</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
              <small class="label pull-right bg-green">Asigna</small>
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" data-toggle="modal" data-target="#modal_Materia" id="m"><i class="fa fa-circle-o text-aqua" ></i> Agregar </a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Asignar</a></li>
            <li><a href="{{route('Mostrar_materia')}}"  method="GET"><i class="fa fa-circle-o text-aqua"></i> Mostrar</a></li>
          </ul>

        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-mortar-board"></i>
            <span>Matricula</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Matricular</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Mostrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Docentes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Agregar</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Mostrar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span> Notas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Ver Notas</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Asignar Notas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa   fa-bar-chart"></i> <span> Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> Reporte 1</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> Reporte 2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Administra</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <small class="label pull-right bg-red"></small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o text-aqua"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o text-yellow"></i> Level Two
                    </span>
                  </a>              
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>