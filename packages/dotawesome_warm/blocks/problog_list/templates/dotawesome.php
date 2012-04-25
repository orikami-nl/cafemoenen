<?php    
defined('C5_EXECUTE') or die(_("Access Denied."));
	Loader::model('blogify','problog');
    $html = Loader::helper('html');
    $textHelper = Loader::helper("text"); 
    $uh = Loader::helper('concrete/urls');
    global $c;
	$link = Loader::helper('navigation')->getLinkToCollection($c);
	$blog_settings = blogify::getBlogSettings();
	$searchn= Page::getByID($blog_settings['search_path']);
	$search= $nh->getLinkToCollection($searchn);
	$bt = Blocktype::getByHandle('problog_list');
	$uh = Loader::helper('concrete/urls');
	$u = new User();
	$user = UserInfo::getByID($u->uID);
	if($user){
		$manager = $user->getUserBlogEditor();
	}
	?>
	<?php    
	if (count($cArray) > 0) { ?>
	<div class="ccm-page-list blogDotAwesomeTemplate">
	
	<?php    
	for ($i = 0; $i < count($cArray); $i++ ) {
		$cobj = $cArray[$i]; 
		$title = $cobj->getCollectionName(); 
		$cCount = blogify::getCommentCount($cobj->getCollectionID());
		$date = $cobj->getCollectionDatePublic();
		$imgHelper = Loader::helper('image'); 
		$imageF = $cobj->getAttribute('thumbnail');
		if (isset($imageF)) { 
    		$image = $imgHelper->getThumbnail($imageF, $blog_settings['thumb_width'],$blog_settings['thumb_height'])->src; 
		} 
		if($use_content > 0){
			$block = $cobj->getBlocks('Main');
			foreach($block as $b) {
				if($b->getBlockTypeHandle()=='content'){
					$content = $b->getInstance()->getContent();
				}
			}
		}else{
			$content = $cobj->getCollectionDescription();
		}
		?>
		     <div class="content-sbBlog-wrap">
		      	
	  			<div class="content-sbBlog-contain">
	  				<div class="content-sbBlog-title"><a href="<?php    echo $nh->getLinkToCollection($cobj)?>"><?php    echo $title?></a></div>
					
					<div class="content-sbBlog-post">
					<?php    
						if($imageF){
							echo '<div class="thumbnail">';
							echo '<img src="'.$image.'"/>';
							echo '</div>';
						}	
					?>
			  		<?php    
			  			if(!$controller->truncateSummaries){
							echo $content;
						}else{
							echo $textHelper->shorten($content,$controller->truncateChars);
						}
			  		?>
			  		</div>
			  	</div>
			  	
			</div>
	<?php    		
	} 
	if(!$previewMode && $controller->rss) { 
			global $b;
			$rssUrl = $controller->getRssUrl($b);
			?>
			<div class="rssIcon">
				<?php   echo t('Get this feed')?> &nbsp;<a href="<?php    echo $rssUrl?>" target="_blank"><img src="<?php    echo $uh->getBlockTypeAssetsURL($bt, 'rss.png')?>" width="14" height="14" /></a>
				
			</div>
			<link href="<?php    echo $rssUrl?>" rel="alternate" type="application/rss+xml" title="<?php    echo $controller->rssTitle?>" />
	<?php    
	} 
	?>
</div>
<?php    } 
	
	if ($paginate && $num > 0 && is_object($pl)) {
		$pl->displayPaging();
	}
	
?>
