<aside class="menu">

  <p class="menu-label">
    <i class="fas fa-home m-r-5"></i><a href="{{ route('intranet.dashboard')}}">Accueil</a>
  </p>
  <p class="menu-label">
    <i class="fas fa-desktop m-r-5"></i>Gestion du site
  </p>
  <ul class="menu-list">
    <li><a>Actualités</a></li>
    <li><a>Calendrier</a></li>
    <li><a>Résultats</a></li>
    <li><a>Galerie</a></li>
  </ul>
  <p class="menu-label">
    <i class="fas fa-cogs m-r-5"></i>Gestion du club
  </p>
  <ul class="menu-list">
    <li><a href="{{route('judokas.index')}}">Judokas</a></li>
    <li><a>Fiches de frais</a></li>
  </ul>
  <p class="menu-label">
    <i class="fas fa-users m-r-5"></i>Utilisateurs
  </p>
  <ul class="menu-list">
    <li><a href="{{ route('users.index') }}">Utilisateurs</a></li>
    <li>
      <a class="has-submenu">Roles & permissions</a>
      <ul class="submenu">
        <li><a href="{{ route('roles.index')}}">Roles</a></li>
        <li><a href="{{ route('permissions.index')}}">Permissions</a></li>
      </ul>
    </li>
  </ul>
</aside>