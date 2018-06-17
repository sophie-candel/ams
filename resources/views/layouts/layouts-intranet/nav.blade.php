<nav class="navbar is-fixed-top has-background-primary p-l-50 p-r-50">

  <div class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item has-text-white">
        <strong>Arts Martiaux Schweighouse</strong>&nbsp;- Intranet
      </a>
    </div>

    <div class="navbar-end">
      <a class="navbar-item has-text-white" href="{{ route('home') }}">
        <span class="icon m-r-2">
          <i class="fas fa-home"></i>
        </span>
        Retour au site
      </a>
      <a class="navbar-item has-text-white" href="{{ route('logout') }}">
        <span class="icon m-r-2">
          <i class="fas fa-sign-out-alt"></i>
        </span>
        Déconnexion
      </a>

    </div>
  </div>
</nav>