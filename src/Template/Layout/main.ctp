<?php

$cakeDescription = 'Demo Website - CakePhp';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('animate.min') ?>
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('templatemo-style') ?>
    <?= $this->Html->css('validationEngine.jquery') ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700') ?>
    <?= $this->Html->script('jquery') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery.singlePageNav.min') ?>
    <?= $this->Html->script('typed') ?>
    <?= $this->Html->script('wow.min') ?>
    <?= $this->Html->script('custom') ?>
    <?= $this->Html->script('jquery.validationEngine') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.js') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body id="top">
<!-- start preloader -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- end preloader -->

<!-- start header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <p><i class="fa fa-phone"></i><span> Phone</span>010-020-0340</p>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <p><i class="fa fa-envelope-o"></i><span> Email</span><a href="#">awesome@company.com</a></p>
            </div>
            <div class="col-md-5 col-sm-4 col-xs-12">
                <ul class="social-icon">
                    <li><span>Meet us on</span></li>
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-apple"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-default templatemo-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Awesome</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#top">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#team">TEAM</a></li>
                <li><a href="#service">SERVICE</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
<?= $this->Flash->render() ?>

<?= $this->fetch('content') ?>

<!-- start copyright -->
<footer id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                    Copyright &copy; 2084 Company Name</p>
            </div>
        </div>
    </div>
</footer>
<!-- end copyright -->

</body>
</html>

<script>
    $(document).ready(function(){
        $("#contactForm").validationEngine('attach',
            {
                maxErrorsPerField:1,
                scroll: false,
                autoHidePrompt: true,
                autoHideDelay: 3000,
                showOneMessage: true

            }

            );
    });


</script>

