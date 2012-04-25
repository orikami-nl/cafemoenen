<?php  $this->inc('inc/top.php'); ?>

<body class="homepage">
    
    <?php  $this->inc('inc/header.php'); ?>
    
            <div id="sliderShell">
            
                <?php  $a = new Area('Header'); $a->display($c); ?>
                
            
            </div><!-- #sliderShell -->
    
    	</div><!-- #headerShell -->
    	    
    </header><!-- #headerShell -->
    
    <section id="mainShell">
    
        <article id="main" class="container">
        
        	<?php  $a = new Area('Main'); $a->display($c); ?>
        
        </article>
        
    </section><!-- #mainShell -->
    
    <?php  $this->inc('inc/footer.php'); ?>
