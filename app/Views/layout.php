<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/473333b14e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    <title>El Faro Noticias - <?=$title?></title>
</head>
<body>
    <nav class="navbar mt-3 ml-2 mr-2 mb-1" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <h1 class="title is-1 is-pulled-left mr-2">El Faro</h1>
            <img src="/images/logo.png" alt="Logo de El Faro noticias" class="image is-48x48 is-pulled-left">  
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navBar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
        </div>
        <div class="navbar-menu" id="navBar">
            <div class="navbar-start">
                <?=anchor('page/category/inicio', 'Inicio', ['class' => 'navbar-item'])?>
                <?=anchor('page/category/deportes', 'Deportes', ['class' => 'navbar-item'])?>
                <?=anchor('page/category/negocios', 'Negocios', ['class' => 'navbar-item'])?>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                    <p class="control">
                        <a class="button" href="<?=site_url('contact/index') ?>">
                            <span class="icon">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span>Contacto</span>
                        </a>
                    </p>
                    <p class="control">
                        <a class="button is-primary" href="<?=site_url('signup/index') ?>">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <span>Registro</span>
                        </a>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container is-hidden-touch image mb-2 banner-970">
        <img src="/images/banner-970X50.gif" width="970" alt="banner publicitario" />
    </div>
    <main id="mainContent" class="content"><?= $this->renderSection('content') ?></main>
    <div id="secondary" class="content ml-4 mr-4 is-hidden-touch">
        <?php if(isset($showSecondary) && $showSecondary) { echo $this->include('partials/secondary'); } ?>
    </div>
    <footer class="footer">
        <div class="content has-text-centered">El faro noticias &copy; 2021</div>
    </footer>
    <script src="/app.js"></script>
</body>
</html>