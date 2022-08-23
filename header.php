<?php
 /**
  * Template header
  * Ve template est intégré dans tous les modèles de thème
  * @link : https://developer.wordpress.org/themes/
  * @package : Mon WordPress
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <section class="site">
        <header class="site__header">
            <section class="site__branding">
                    
                <h1> 
                    <a href="<?=esc_url(home_url('/'))?>"><?=bloginfo('name');?></a> 
                </h1>
                <h2>
                    <?=bloginfo('description');?>
                </h2>
                </section>
            <nav class="site__navigation">
            <div>
            <a href="https://www.cmaisonneuve.qc.ca/">Atelier-CSS</a>
		    <a href="https://www.cmaisonneuve.qc.ca/entreprises-et-organisations/">Atelier-CMS</a>
		    <a href="https://www.cmaisonneuve.qc.ca/bibliotheque/">Atelier programmation</a>
		    <a href="https://www.cmaisonneuve.qc.ca/grand-public/">Atelier-animation</a>
            </div>
            </nav>
        </header>
        <section class="site__sidebar">
            <input type="checkbox" name="chk-burger" id="chk-burger">
            <label for="chk-burger" id="burger">
            <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
            </label>
            <?php wp_nav_menu(array(
                'menu' => ' menu sidebar',
                'container' => 'nav',
                'container_class' => 'menu__sidebar',
                'menu_class' => 'menu__sidebar__ul'
            )); ?>
        </section>