<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ URL::asset('plantilla/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p id="navbarDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->name }}
                </p>
            </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Cerrar Sesion</a>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf
                </form>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="active">
                <a href="">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="{{ url('usuarios')}}" class="menu-toggle">
                    <i class="material-icons">person</i>
                    <span>Usuario</span>
                </a>
            </li>

            <li>
                <a href="{{ url('categorias')}}" class="menu-toggle">
                    <i class="material-icons">developer_board</i>
                    <span>Categoria</span>
                </a>
            </li>

            <li>
                <a href="{{ url('productos_proveedores')}}" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>Productos Proveedores</span>
                </a>
            </li>  
            <li>
                <a href="{{ url('compras')}}" class="menu-toggle">
                    <i class="material-icons">shopping_cart</i>
                    <span>Compra</span>
                </a>
            </li>       
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2019 <a href="javascript:void(0);">Proyecto - Vacio</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>