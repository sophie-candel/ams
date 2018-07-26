<div class="side-menu" id="admin-side-menu">
  <aside class="menu">

    <p class="menu-label">
      <i class="fas fa-home m-r-5"></i><a href="{{ route('intranet.dashboard')}}" class="{{ Nav::isRoute('intranet.dashboard', $activeClass = "
        is-active ") }}">Accueil</a>
    </p>
    <p class="menu-label">
      <i class="fas fa-desktop m-r-5"></i>Gestion du site
    </p>
    <ul class="menu-list">
      <li><a href="{{route('actualites.index')}}" class="{{ Nav::isResource('actualites', 'intranet', $activeClass = " is-active
          ") }}">Actualités</a></li>
      <li><a>Calendrier</a></li>
      <li><a>Résultats</a></li>
      <li><a>Galerie</a></li>
    </ul>
    <p class="menu-label">
      <i class="fas fa-cogs m-r-5"></i>Gestion du club
    </p>
    <ul class="menu-list">
      <li><a href="{{route('judokas.index')}}" class="{{ Nav::isResource('judokas', 'intranet', $activeClass = " is-active
          ") }}">Judokas</a></li>
      <li><a>Fiches de frais</a></li>
    </ul>

    @if (Laratrust::hasRole('superadministrator'))
    <p class="menu-label">
      <i class="fas fa-users m-r-5"></i>Utilisateurs
    </p>
    <ul class="menu-list">
      <li><a href="{{ route('users.index') }}" class="{{ Nav::isResource('users', 'intranet', $activeClass = " is-active
          ") }}">Utilisateurs</a></li>
      <li>
        <a class="has-submenu" class="{{ Nav::hasSegment(['roles', 'permissions'], 2, $activeClass = " is-active ") }} ">Roles & permissions</a>
        <ul class="submenu">
          <li><a href="{{ route('roles.index')}}" class="{{ Nav::isRoute('roles.index', $activeClass = " is-active ") }}">Roles</a></li>
          <li><a href="{{ route('permissions.index')}}" class="{{ Nav::isRoute('permissions.index', $activeClass = " is-active
              ") }}">Permissions</a></li>
        </ul>
      </li>
    </ul>
    @endif

    <hr class="is-hidden-desktop">

    <div class="is-hidden-desktop">
      <a class="navbar-item" href="{{ route('home') }}">
          <span class="icon m-r-2">
            <i class="fas fa-home"></i>
          </span>
          Retour au site
        </a>

      <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
          <span class="icon m-r-2">
            <i class="fas fa-sign-out-alt"></i>
          </span>
          Déconnexion ({{Auth::user()->name}})
        </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>

    </div>

  </aside>
</div>