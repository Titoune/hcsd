<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>


    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('all.min.css') ?>
    <?= $this->Html->css('agency.min.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <?= $this->Html->image('logo.png', ['height' => 60]) ?>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">A propos</a>
                </li>
                <li class="nav-item">

                    <a class="nav-link js-scroll-trigger" href="#services">Expertises</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">Références</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">"S'ouvrir à de nouvelles opportunités"</div>
            <div class="intro-heading text-uppercase" style="height:150px;">
                Confiez-moi<br>
                <span num="1" style="display:none;" class="slides">votre développement commercial</span>
                <span num="2" style="display:none;" class="slides">votre stratégie de communication</span>
                <span num="3" style="display:none;" class="slides"> votre stratégie de marketing</span>
            </div>
            <div class="intro-finish"> spécialisée TPE/PME
            </div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Contactez-moi</a>
        </div>
    </div>
</header>
<?= $this->fetch('content') ?>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">Copyright &copy; HCSD consulting 2018</span>
            </div>
        </div>
    </div>
</footer>

<!-- Portfolio Modals -->
<?= $this->Html->script('jquery.min.js') ?>
<?= $this->Html->script('bootstrap.bundle.min.js') ?>
<?= $this->Html->script('jquery.easing.min.js') ?>
<?= $this->Html->script('jqBootstrapValidation.js') ?>
<?= $this->Html->script('agency.min.js') ?>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script>
    $(document).ready(function () {

        titi();

        function titi() {
            $(".slides").each(function (index) {
                var that = this;
                var t = setTimeout(function () {
                    $(".slides").hide();
                    $(that).slideDown();
                    if (index === 2) {
                        setTimeout(function () {
                            titi();

                        }, 2000);
                    }
                }, 2000 * index);
            });
        }
    });
</script>
</body>

</html>