<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Obtenir el titol de la pàgina -->
        <?php
            $app = JFactory::getApplication();
            $this->setTitle( $this->getTitle() . ' - ' . $app->getCfg( 'sitename' ) );
        ?>
        <!-- Final del titol de la pàgina -->

        <jdoc:include type="head" />

        <!-- Afegir estils CSS -->
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/plantilla.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap-responsive.min.css" type="text/css" />
        <!-- Final estis CSS -->
        
    </head>
    
    <body>
        <?php if ($this->countModules( 'superior' )) : ?>
            <jdoc:include type="modules" name="superior" style="xhtml" /> 
        <?php endif; ?>

        <jdoc:include type="component" />
        <jdoc:include type="modules" name="bottom" />
    </body>

</html>