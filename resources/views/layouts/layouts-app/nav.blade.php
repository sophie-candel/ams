<nav class="navbar is-fixed-top">
  <div class="container">
    <div class="navbar-brand">
      <a href="{{route('home')}}" class="navbar-item">
          <strong>Arts Martiaux Schweighouse</strong>
          </a>
    </div>
    <div class="navbar-menu">

      <div class="navbar-end">
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
                      Club
                  </a>
          <div class="navbar-dropdown is-right">
            <a class="navbar-item" href="{{route('club.presentation')}}">
                          Présentation
                      </a>
            <a class="navbar-item" href="{{route('club.equipe')}}">
                          Equipe
                      </a>
          </div>
        </div>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
                      Horaires & Tarifs
                  </a>
          <div class="navbar-dropdown is-right">
            <a class="navbar-item" href="{{route('horaires-tarifs.horaires')}}">
                          Horaires
                      </a>
            <a class="navbar-item" href="{{route('horaires-tarifs.tarifs')}}">
                          Tarifs
                      </a>
          </div>
        </div>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
                      Compétitions
                  </a>
          <div class="navbar-dropdown is-right">
            <a class="navbar-item" href="{{route('competitions.calendrier')}}">
                          Calendriers
                      </a>
            <a class="navbar-item" href="{{route('competitions.resultats')}}">
                          Résultats
                      </a>
          </div>
        </div>
        <a class="navbar-item" href="{{route('galerie')}}">
                  Galerie
              </a>
        <a href="" class="navbar-item">
                  Contact
              </a>
      </div>
    </div>
  </div>
</nav>