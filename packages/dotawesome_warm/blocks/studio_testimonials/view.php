<?php   defined('C5_EXECUTE') or die(_("Access Denied."));
$text = Loader::helper('text');
?>

<?php   if($type == 'single_rotate'){?> 

<div class="studio-testimonials studio-testimonials-rotating" id="studio-testimonials-<?php   echo $bID; ?>">
	<h3><?php   echo $title?></h3>
		<ul id="ticker">
			<?php   foreach($testimonials as $testimonial){ ?>
				<li>
				<div class="testimonial">
					<div class="content"><?php   echo nl2br($testimonial['content']); ?></div>
					<div class="author"><?php   echo '&#8211; ',$testimonial['author']; ?></div>
					<div class="extra"><?php   echo nl2br($text->autolink($testimonial['extra'])); ?></div>
				</div>
				</li>
			<?php   } ?>
		</ul>
		
	<?php   if($show_submit_link){ ?>
		<div class="submit-link"><a href="#" class="submit-link dot-awesome-button"><?php   echo $submit_link_text; ?></a></div>
	<?php   } ?>
    
<script type="text/javascript">
(function($){$.fn.list_ticker=function(options){var defaults={speed:4000,effect:'slide'};var options=$.extend(defaults,options);return this.each(function(){var obj=$(this);var list=obj.children();list.not(':first').hide();setInterval(function(){list=obj.children();list.not(':first').hide();var first_li=list.eq(0)
var second_li=list.eq(1)
if(options.effect=='slide'){first_li.slideUp();second_li.slideDown(function(){first_li.remove().appendTo(obj);});}else if(options.effect=='fade'){first_li.fadeOut(function(){second_li.fadeIn();first_li.remove().appendTo(obj);});}},options.speed)});};})(jQuery);

$(function(){
	$('#studio-testimonials-<?php   echo $bID; ?> #ticker').list_ticker({
		speed:<?php   echo $rotate_length;?>,
         effect:'<?php   echo $effect;?>'
		})	
	});
</script>
</div>

<?php   } else { ?>

<div class="studio-testimonials" id="studio-testimonials-<?php   echo $bID; ?>">
<h3><?php   echo $title?></h3>
<?php   foreach($testimonials as $testimonial){ ?>
<div class="testimonial">
    <div class="content"><?php   echo nl2br($testimonial['content']); ?></div>
    <div class="author"><?php   echo '&#8211; ',$testimonial['author']; ?></div>
    <div class="extra"><?php   echo nl2br($text->autolink($testimonial['extra'])); ?></div>
</div>
<?php   } ?>
<?php   if($show_submit_link){ ?>
    <div class="submit-link"><a class="dot-awesome-button" href="#"><?php   echo $submit_link_text; ?></a></div>
<?php   } ?>
</div>
<?php   } // end if single_rotate ?>

<?php   if($show_submit_link){ ?>    
<script type="text/javascript">
$(function(){
     $('.submit-link a').click(function() {
		$.fancybox({
			'href'			:  '<?php   echo REL_DIR_FILES_TOOLS_BLOCKS.'/studio_testimonials/submit_testimonial.php'?>',
			'transitionIn'	: 'elastic',
			'transitionOut'	: 'elastic',
            ajax : {
                type	: "POST",
                data	: 'action=<?php   echo urlencode($this->action('submit')); ?>'
            }
		});
    });
});
</script>
<?php   } ?>


