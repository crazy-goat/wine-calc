<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/"><?= $this->trans('app.name') ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger"
                       href="<?= $this->recipeListUrl($this->lang()); ?>"><?= $this->trans('Wine recipes') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger"
                       href="<?= $this->staticPageUrl('about', $this->lang()); ?>"><?= $this->trans('About') ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
