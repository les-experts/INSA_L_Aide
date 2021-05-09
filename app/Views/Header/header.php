<nav>
    <div class="nav-wrapper">
        <a href="<?=base_url()?>" class="hide-on-med-and-down brand-logo" >INSAled</a>
        <a href="#" data-target="mobile-header" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
          <li class="search-module"><?= view_cell('\App\Controllers\Search::getView') ?></li>
          <li><a href="<?= base_url("/presentation") ?>">Presentation</a></li>
          <li><a href="<?= base_url("/contribuer") ?>">Contribuez au projet !</a></li>
        </ul>

        <ul class="right hide-on-large-only">
            <li class="search-module"><?= view_cell('\App\Controllers\Search::getView') ?></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-header">
  <li><a href="/">Accueil</a></li>
  <li><a href="<?= base_url("/presentation") ?>">Presentation</a></li>
  <li><a href="<?= base_url("/contribuer") ?>">Contribuez au projet !</a></li>
</ul>
