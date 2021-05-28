
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center navbar-shadow navbar-light navbar-dark bg-gradient-primary fixed-top">
      <div class="navbar-container d-flex content">      
        <ul class="nav navbar-nav align-items-center ml-auto">          
          <li class="nav-item dropdown dropdown-user">
            <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name font-weight-bolder">{{Auth::user()->name}}</span>
                <span class="user-status">{{Auth::user()->email}}</span></div>
                <span class="avatar">
                <img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40" /></span>
                <span class="avatar-status-online"></span>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{route('personas.show',Auth::user()->id)}}">
                <i class="feather icon-user"></i>Editar Perfil
              </a>                                          
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="feather icon-power"></i> Cerrar Sesión
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    
    <!-- END: Header-->