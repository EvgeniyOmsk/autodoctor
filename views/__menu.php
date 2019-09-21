<!-- header -->
<header class="header header__style-02">
  <div class="container">
    <div class="header__logo"><a href="<?= Url::to('') ?>"><img src="/assets/img/logo.png" alt=""/></a></div>
    <div class="header__toogleGroup">
      <div class="header__chooseLanguage">

        <!-- dropdown -->
        <div class="dropdown" data-init="dropdown"><a class="dropdown__toggle" href="javascript:void(0)">
                <?= Url::getNameLang($lang) ?>
            <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <div class="dropdown__content" data-position="right">
            <ul class="list-style-none">
              <li><a href="<?= Url::to('/' . Url::getUrl(), Url::LANG_RU) ?>"><?= Url::getNameLang('ru') ?></a></li>
              <li><a href="<?= Url::to('/' . Url::getUrl(), Url::LANG_CZ) ?>"><?= Url::getNameLang('cz') ?></a></li>
            </ul>
          </div>
        </div><!-- End / dropdown -->

      </div>
    </div>
    <nav class="consult-nav">

      <ul class="consult-menu">
        <li class="current-menu-item"><a href="<?= Url::to('') ?>"><?= $l['home'] ?></a></li>
        <li <?= $page == 'about'? 'class="current-menu-item"' : '' ?>><a href="<?= Url::to('/about') ?>"><?= $l['about'] ?></a></li>
        <li <?= $page == 'photo'? 'class="current-menu-item"' : '' ?>><a href="<?= Url::to('/photo') ?>"><?= $l['example_works'] ?></a></li>
        <li <?= $page == 'contact'? 'class="current-menu-item"' : '' ?>><a href="<?= Url::to('/contact') ?>"><?= $l['contacts'] ?></a>
        </li>
      </ul><!-- consult-menu -->

      <div class="navbar-toggle"><span></span><span></span><span></span></div>
    </nav>

  </div>
</header><!-- End / header -->