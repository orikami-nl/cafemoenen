        
        <div id="push"></div>

</div><!-- #wrapper -->

<footer>
    
    	<div class="container">
        
        	<div class="colContainer">
            
            	<div class="quadCol">
                
                	
					<?php  $a = new GlobalArea('Footer Col1'); $a->display($c); ?>
                
                </div>
                
                <div class="quadCol">
                
                	<?php  $a = new GlobalArea('Footer Col2'); $a->display($c); ?>
                
                </div>
                
                <div class="quadCol dual">
                
                	<?php  $a = new GlobalArea('Footer Col3'); $a->display($c); ?>
                
                </div>
                
                <div class="clear"></div>
            
            </div><!-- .colContainer -->
        
        </div>
        
        <section id="footerBottom">
        
        	<div class="container">
        
                <?php  $a = new GlobalArea('Footer'); $a->display($c); ?>
                          
            </div><!-- .container -->
        
        </section><!-- #footerBottom -->
        
    
    </footer>

<script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/cufon.js"></script>
<script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/font-pack.js"></script>
<script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/functions.js"></script>

<?php  Loader::element('footer_required'); ?>

</body>
</html>