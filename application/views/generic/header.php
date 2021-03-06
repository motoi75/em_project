<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoMobility | <?php echo $title ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fonts/fonts.css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css"/>

    <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/images/favicon.ico" />

    <script src="<?= base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&sensor=false"></script>


    <script src="<?= base_url(); ?>assets/js/script.js"></script>


</head>
<body>

    <!-- POUR FACEBOOK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



    <!-- MENU -->
    <header class="menu navbar">

        <div class="container">

                     <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/images/headLogo.png" alt=""/>Go Mobility</a>
                    </div>


            <?
            function checkActive($url, $val){

                if(isset($url) && $url == $val){
                    echo 'active';
                }
            }
            $url = $this->uri->segment(1);
            ?>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url(); ?>projet" class="projet <? checkActive($url,"projet"); ?>">Le projet</a></li>
                            <li><a href="<?= base_url(); ?>experiences/all/" class="experiences <? checkActive($url,"experiences"); ?>">Vos expériences</a></li>
                            <li><a href="<?= base_url(); ?>participation" class="participation <? checkActive($url,"participation"); ?>">Je participe</a></li>
                        </ul>
                    </div>

        </div>


    </header>

    <div class="container">



        <!-- FIN MENU -->