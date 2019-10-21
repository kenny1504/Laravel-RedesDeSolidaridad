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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      ><li class="header">Menu Navegacion</li>
        <li class="treeview"> <!--Usuarios inicio -->
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
        </li> <!--Usuarios fin -->   
        <li class="treeview"> <!--Notas inicio -->
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
        </li> <!--Notas fin -->
        <li class="treeview"> <!--Matricula inicio -->
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
        </li> <!--Matricula fin -->
        <li class="treeview"> <!--Docentes inicio -->
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
        </li> <!--Docentes fin -->
        <li class="treeview"> <!--Materias inicio -->
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
        </li> <!--Materias fin -->
        <li class="treeview"> <!--Reportes inicio -->
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
        </li> <!--Reportes fin -->
        <li class="treeview"> <!--Administra inicio -->
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Administra</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <small class="label pull-right bg-red"></small>
            </span>
          </a>
          <ul class="treeview-menu"> 
            <li class="treeview">
            <a href="#"><i class="fa fa-circle-o text-aqua"></i> Grados<!--inicio del grados --->  
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#" data-toggle="modal" data-target="#" id="">
                  <i class="fa fa-circle-o text-yellow" ></i> Agregar </a>
                </li>
                <li class="treeview">
                    <li><a href="#" ><i class="fa fa-circle-o text-yellow"></i> Mostrar</a></li>
                </li>
              </ul> <!--final del grados ---> 
              <a href="#"><i class="fa fa-circle-o text-aqua"></i> Grupos<!--inicio del grupos --->  
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#" data-toggle="modal" data-target="#" id="">
                  <i class="fa fa-circle-o text-yellow" ></i> Agregar </a>
                </li>
                <li class="treeview">
                    <li><a href="#" ><i class="fa fa-circle-o text-yellow"></i> Mostrar</a></li>
                </li>
              </ul> <!--final del grados --->   
              <a href="#"><i class="fa fa-circle-o text-aqua"></i> Ofertas<!--inicio del ofertas --->  
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>                
                  <small class="label pull-right bg-green">Nueva</small>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#" data-toggle="modal" data-target="#" id="">
                  <i class="fa fa-circle-o text-yellow" ></i> Agregar </a>
                </li>
                <li class="treeview">
                    <li><a href="#" ><i class="fa fa-circle-o text-yellow"></i> Mostrar</a></li>
                </li>
              </ul> <!--final del ofertas ---> 
              <a href="#"><i class="fa fa-circle-o text-aqua"></i> Oficios <!--inicio del oficios --->  
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="#" data-toggle="modal" data-target="#modal_Oficio" id="m">
                    <i class="fa fa-circle-o text-yellow" ></i> Agregar </a>
                  </li>
                  <li class="treeview">
                    <li><a href="{{route('Mostrar_oficio')}}"  method="GET">
                    <i class="fa fa-circle-o text-yellow"></i> Mostrar</a></li>
                  </li>
              </ul> <!--final del oficios --->           
              <a href="#"><i class="fa fa-circle-o text-aqua"></i> Parentescos<!--inicio del parentesco --->  
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#" data-toggle="modal" data-target="#" id="">
                  <i class="fa fa-circle-o text-yellow" ></i> Agregar </a>
                </li>
                <li class="treeview">
                    <li><a href="#" ><i class="fa fa-circle-o text-yellow"></i> Mostrar</a></li>
                </li>
              </ul> <!--final del parentescos --->  
                  
              <a href="#"><i class="fa fa-circle-o text-aqua"></i> Secciones<!--inicio del secciones --->  
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#" data-toggle="modal" data-target="#" id="">
                  <i class="fa fa-circle-o text-yellow" ></i> Agregar </a>
                </li>
                <li class="treeview">
                    <li><a href="#" ><i class="fa fa-circle-o text-yellow"></i> Mostrar</a></li>
                </li>
              </ul> <!--final del secciones --->  
              <a href="#"><i class="fa fa-circle-o text-aqua"></i> Turnos<!--inicio del turnos --->  
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#" data-toggle="modal" data-target="#" id="">
                  <i class="fa fa-circle-o text-yellow" ></i> Agregar </a>
                </li>
                <li class="treeview">
                    <li><a href="#" ><i class="fa fa-circle-o text-yellow"></i> Mostrar</a></li>
                </li>
              </ul> <!--final del turnos --->       
            </li>
          </ul>
       </li>
    </section>
    <!-- /.sidebar -->
  </aside>