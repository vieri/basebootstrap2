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
        <div class="contanier">
            
            <?php if ($this->countModules( 'superior' )) : ?>
                <div class="row-fluid">
                    <div class="span12">
                        <jdoc:include type="modules" name="superior" style="xhtml" /> 
                    </div>
                </div>
            <?php endif; ?>

            <jdoc:include type="component" />
            <jdoc:include type="modules" name="bottom" />
        </div>

        <!-- Afegir JS -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
        <!-- Final JS -->

    </body>

</html>