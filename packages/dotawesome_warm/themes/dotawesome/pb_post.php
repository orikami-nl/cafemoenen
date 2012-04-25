<?php   
$html = Loader::helper('html');
$this->addHeaderItem($html->css('page_types/pb_post.css', 'problog'));
Loader::model('blogify','problog');
$blog_settings = blogify::getBlogSettings();
extract($blog_settings);
?>
<?php  $this->inc('inc/top.php'); ?>

<body class="subpage sidebar">
    
    <?php  $this->inc('inc/header.php'); ?>
    
    	</div><!-- #headerShell -->
    	    
    </header>
    
    <section id="mainShell">
    	
        <div class="container">
        
            <header id="contentHeader">
                
                <span id="pageTitle">Blog</span>
                
                <nav id="breadcrumbs">
                    <?php  
                        $bt_main = BlockType::getByHandle('autonav');
                        $bt_main->controller->displayPages = 'top';
                        $bt_main->controller->orderBy = 'display_asc';                    
                        $bt_main->controller->displaySubPages = 'relevant_breadcrumb'; // change to none if you don't want drop downs
                        $bt_main->controller->displaySubPageLevels = 'enough';      
                        $bt_main->render('templates/breadcrumb');
                    ?>
                </nav>
            
            </header><!-- #contentHeader -->
        
            <article id="main">
            
                <?php   
					$a = new Area('Main');
					$a->display($c);
				?>
				<?php   
				if($trackback>0){
					$a = new Area('Blog Post Trackback');
					$a->display($c);
				}
				?>
				<?php   
				if($comments>0){
					if($disqus){
						Loader::PackageElement('disqus','problog',array('discus'=>$disqus));
					}else{
						$a = new Area('Blog Post More');
						$a->display($c);
					}
				}
				?>
				<?php   
					$a = new Area('Blog Post Footer');
					$a->display($c);
				?>
            
            </article>
            
            <section id="sidebar">
            
                <?php  $a = new Area('Sidebar'); $a->display($c); ?>
            
            </section><!-- #sidebar -->
            
            <div class="clear"></div>
        
        </div><!-- .container -->
        
    </section><!-- #mainShell -->
    
    <?php  $this->inc('inc/footer.php'); ?>
