<div id="wrapper">

	<header id="pageHeader">
    
    	<div id="headerShell">
        
            <div class="container">
            
                <a id="logo" href="<?php  echo DIR_REL?>/">
                
                
                </a><!-- #logo -->
                
                <section id="utility">
                
                    <?php  $a = new GlobalArea('Utility'); $a->display($c); ?>
                
                </section>
            
                <nav>
                
                    <?php  
                        $bt_main = BlockType::getByHandle('autonav');
                        $bt_main->controller->displayPages = 'top';
                        $bt_main->controller->orderBy = 'display_asc';                    
                        $bt_main->controller->displaySubPages = 'all'; // change to none if you don't want drop downs
                        $bt_main->controller->displaySubPageLevels = 'custom';      
                        $bt_main->controller->displaySubPageLevelsNum = '1';  //this shows one dropdown menu
                        $bt_main->render('templates/dotawesome');
                    ?>
                
                </nav>
            
            </div><!-- .container -->