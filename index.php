<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <jdoc:include type="head" />

        <!-- Afegir estils CSS -->
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/plantilla.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap-responsive.min.css" type="text/css" />
        <!-- Final estis CSS -->

    </head>
    
    <body>
        <div class="container">
            
            <?php if ($this->countModules( 'superior' )) : ?>
                <div class="row-fluid">
                    <div class="span12">
                        <jdoc:include type="modules" name="superior" style="xhtml" /> 
                    </div>
                </div>
            <?php endif; ?>

            <!-- Menu -->
            <?php if ($this->countModules( 'menu' )) : ?>
                <div class="row-fluid marge-superior-menu">
                    <div class="span12">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container">

                                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </a>

                                    <!-- Be sure to leave the brand out there if you want it shown -->
                                    <!-- <a class="brand" href="#">Project name</a> -->

                                    <div class="nav-collapse collapse">
                                        <jdoc:include type="modules" name="menu" style="xhtml" /> 
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Menu -->
            
            <!-- Mostrar contingut -->
            <div class="row-fluid">
                <div class="span12">
                    <jdoc:include type="component" />
                </div>
            </div>
            <!-- Fi contingut -->

        </div>

        <!-- Afegir JS -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
        <!-- Final JS -->

    </body>

</html>