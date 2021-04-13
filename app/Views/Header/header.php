<nav>
    <div class="nav-wrapper">
        <a href="/" class="hide-on-med-and-down brand-logo" >INSAled</a>
        <a href="#" data-target="mobile-header" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="right show-on-large">
          <li class="search-module"><?= view_cell('\App\Controllers\Search::search_bar') ?></li>
          <li><a href="<?= base_url("/participer") ?>">Contribuez au projet !</a></li>
        </ul>

        <ul class="right hide-on-large-only">
            <li class="search-module"><?= view_cell('\App\Controllers\Search::search_bar') ?></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-header">
  <li><a href="sass.html">Sass</a></li>
  <li><a href="sass.html">Trucs</a></li>
</ul>
