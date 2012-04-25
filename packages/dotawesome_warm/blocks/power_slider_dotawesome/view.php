<?php   
defined('C5_EXECUTE') or die("Access Denied."); 
$nav = Loader::helper('navigation');
?>

<script type="text/javascript">
$(function(){
	$("#powerSliderContainer<?php  echo $bID; ?>").cycle({ 
		fx: '<?php  echo $transitionType ?>',
		next: '#powerSliderNext<?php  echo $bID; ?>',
		prev: '#powerSliderPrev<?php  echo $bID; ?>',
		pager: '#powerSliderPagination<?php  echo $bID; ?>',
		cleartypeNoBg: true,
		timeout: <?php  echo $slideDelay ?>000
	});
});
</script>

<div class="powerSliderShell" id="powerSliderBlock<?php  echo $bID; ?>">
	
    <div class="powerSliderContainer" id="powerSliderContainer<?php  echo $bID; ?>">
    
            <?php  foreach($images as $imgInfo) { 
            $f = File::getByID($imgInfo['fID']);
			$fp = new Permissions($f);
			$page = Page::getByID($imgInfo['pageID']);
			$theLink = $nav->getLinkToCollection($page);
			?>
                          
            <div class="powerSlide">
                <div class="slideTextShell">
                    <span class="largeText"><?php  echo $imgInfo['powerSlidePhraseTitle']?></span>
                    <span class="smallText"><?php  echo $imgInfo['powerSlidePhraseDesc']?></span>
                    <a href="<?php  echo $theLink ?>" class="btnSlideLearnMore dot-awesome-button"><?php  echo $imgInfo['powerSlideLinkText']?></a>
                </div>
                <div class="slideImgShell">
                    <img src="<?php  echo $f->getRelativePath()?>" width="495" height="265">
                </div>
            </div>
            
		<?php   } ?>

	</div><!-- .powerSliderContainer -->
    
    <?php  if ( $paginationToggle == "paginationOn" ) { ?>
    <div class="powerSliderPagination" id="powerSliderPagination<?php  echo $bID; ?>">
    	
    </div>
	<?php  } ?>
    
    <?php  if ( $prevNextArrows == "prevNextOn" ) { ?>
    <div class="powerSliderNext" id="powerSliderNext<?php  echo $bID; ?>"></div>
    <div class="powerSliderPrev" id="powerSliderPrev<?php  echo $bID; ?>"></div>
    <?php  } ?>

</div><!-- #powerSliderShell  -->