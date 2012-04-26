<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<style type="text/css">
table#setup th {font-weight: bold; text-style: normal; padding-right: 8px; padding-top: 7px; white-space: nowrap}
table#setup td{ font-size:12px; padding-top: 5px; }
</style> 


<p><?php  echo t('Enter the url to your social profile and a nice list of icons and links to your profiles will show up. Any social profiles left blank will not be displayed.<br /><strong>Ensure your urls start with http://</strong>')?></p>

<?php  if(version_compare(Config::get('SITE_APP_VERSION'), 5.5, 'lt')): ?>
<div class="ccm-block-field-group">
  <h2><?php   echo t('Use Large Icons?')?></h2>  
  <input name="use_large_icons" type="checkbox" value="1" <?php   echo intval($controllerObj->use_large_icons)?'checked="checked"':'' ?> />
</div>
<?php  else: ?>
<div class="ccm-block-field-group">
	<input name="use_large_icons" type="checkbox" value="1" <?php  echo intval($controllerObj->use_large_icons)?'checked="checked"':'' ?> />
	<strong><?php  echo t('Use Large Icons?') ?></strong>
</div>
<?php  endif; ?>
	
<table id="setup" width="100%">
	<tr>
		<th valign="top"><?php  echo t('AIM')?>:</th>
		<td width="100%">
			<input id="aim" name="aim" value="<?php  echo $controllerObj->aim?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Apple')?>:</th>
		<td width="100%">
			<input id="apple" name="apple" value="<?php  echo $controllerObj->apple?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Bebo')?>:</th>
		<td width="100%">
			<input id="bebo" name="bebo" value="<?php  echo $controllerObj->bebo?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Blogger')?>:</th>
		<td width="100%">
			<input id="blogger" name="blogger" value="<?php  echo $controllerObj->blogger?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Brightkite')?>:</th>
		<td width="100%">
			<input id="brightkite" name="brightkite" value="<?php  echo $controllerObj->brightkite?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Cargo')?>:</th>
		<td width="100%">
			<input id="cargo" name="cargo" value="<?php  echo $controllerObj->cargo?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Delicious')?>:</th>
		<td width="100%">
			<input id="delicious" name="delicious" value="<?php  echo $controllerObj->delicious?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr> 
	<tr>
		<th valign="top"><?php  echo t('DesignFloat')?>:</th>
		<td width="100%">
			<input id="designfloat" name="designfloat" value="<?php  echo $controllerObj->designfloat?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Designmoo')?>:</th>
		<td width="100%">
			<input id="designmoo" name="designmoo" value="<?php  echo $controllerObj->designmoo?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Deviantart')?>:</th>
		<td width="100%">
			<input id="deviantart" name="deviantart" value="<?php  echo $controllerObj->deviantart?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Digg')?>:</th>
		<td width="100%">
			<input id="digg" name="digg" value="<?php  echo $controllerObj->digg?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Dopplr')?>:</th>
		<td width="100%">
			<input id="dopplr" name="dopplr" value="<?php  echo $controllerObj->dopplr?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr> 
	<tr>
		<th valign="top"><?php  echo t('Dribbble')?>:</th>
		<td width="100%">
			<input id="dribbble" name="dribbble" value="<?php  echo $controllerObj->dribbble?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Email')?>:</th>
		<td width="100%">
			<input id="email" name="email" value="<?php  echo $controllerObj->email?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Ember')?>:</th>
		<td width="100%">
			<input id="ember" name="ember" value="<?php  echo $controllerObj->ember?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Evernote')?>:</th>
		<td width="100%">
			<input id="evernote" name="evernote" value="<?php  echo $controllerObj->evernote?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Facebook')?>:</th>
		<td width="100%">
			<input id="facebook" name="facebook" value="<?php  echo $controllerObj->facebook?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Flickr')?>:</th>
		<td width="100%">
			<input id="flickr" name="flickr" value="<?php  echo $controllerObj->flickr?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Forrst')?>:</th>
		<td width="100%">
			<input id="forrst" name="forrst" value="<?php  echo $controllerObj->forrst?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Friendfeed')?>:</th>
		<td width="100%">
			<input id="friendfeed" name="friendfeed" value="<?php  echo $controllerObj->friendfeed?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Gamespot')?>:</th>
		<td width="100%">
			<input id="gamespot" name="gamespot" value="<?php  echo $controllerObj->gamespot?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Google')?>:</th>
		<td width="100%">
			<input id="google" name="google" value="<?php  echo $controllerObj->google?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>   
	<tr>
		<th valign="top"><?php  echo t('Google Voice')?>:</th>
		<td width="100%">
			<input id="google_voice" name="google_voice" value="<?php  echo $controllerObj->google_voice?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Google Wave')?>:</th>
		<td width="100%">
			<input id="google_wave" name="google_wave" value="<?php  echo $controllerObj->google_wave?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Googletalk')?>:</th>
		<td width="100%">
			<input id="googletalk" name="googletalk" value="<?php  echo $controllerObj->googletalk?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Gowalla')?>:</th>
		<td width="100%">
			<input id="gowalla" name="gowalla" value="<?php  echo $controllerObj->gowalla?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Grooveshark')?>:</th>
		<td width="100%">
			<input id="grooveshark" name="grooveshark" value="<?php  echo $controllerObj->grooveshark?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('ilike')?>:</th>
		<td width="100%">
			<input id="ilike" name="ilike" value="<?php  echo $controllerObj->ilike?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Komodomedia Azure')?>:</th>
		<td width="100%">
			<input id="komodomedia_azure" name="komodomedia_azure" value="<?php  echo $controllerObj->komodomedia_azure?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Komodomedia Wood')?>:</th>
		<td width="100%">
			<input id="komodomedia_wood" name="komodomedia_wood" value="<?php  echo $controllerObj->komodomedia_wood?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Lastfm')?>:</th>
		<td width="100%">
			<input id="lastfm" name="lastfm" value="<?php  echo $controllerObj->lastfm?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('LinkedIn')?>:</th>
		<td width="100%">
			<input id="linkedin" name="linkedin" value="<?php  echo $controllerObj->linkedin?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Mixx')?>:</th>
		<td width="100%">
			<input id="mixx" name="mixx" value="<?php  echo $controllerObj->mixx?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Mobileme')?>:</th>
		<td width="100%">
			<input id="mobileme" name="mobileme" value="<?php  echo $controllerObj->mobileme?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Mynameise')?>:</th>
		<td width="100%">
			<input id="mynameise" name="mynameise" value="<?php  echo $controllerObj->mynameise?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Myspace')?>:</th>
		<td width="100%">
			<input id="myspace" name="myspace" value="<?php  echo $controllerObj->myspace?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Netvibes')?>:</th>
		<td width="100%">
			<input id="netvibes" name="netvibes" value="<?php  echo $controllerObj->netvibes?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Newsvine')?>:</th>
		<td width="100%">
			<input id="newsvine" name="newsvine" value="<?php  echo $controllerObj->newsvine?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Openid')?>:</th>
		<td width="100%">
			<input id="openid" name="openid" value="<?php  echo $controllerObj->openid?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Orkut')?>:</th>
		<td width="100%">
			<input id="orkut" name="orkut" value="<?php  echo $controllerObj->orkut?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Pandora')?>:</th>
		<td width="100%">
			<input id="pandora" name="pandora" value="<?php  echo $controllerObj->pandora?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Paypal')?>:</th>
		<td width="100%">
			<input id="paypal" name="paypal" value="<?php  echo $controllerObj->paypal?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Picasa')?>:</th>
		<td width="100%">
			<input id="picasa" name="picasa" value="<?php  echo $controllerObj->picasa?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Playstation')?>:</th>
		<td width="100%">
			<input id="playstation" name="playstation" value="<?php  echo $controllerObj->playstation?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Plurk')?>:</th>
		<td width="100%">
			<input id="plurk" name="plurk" value="<?php  echo $controllerObj->plurk?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Posterous')?>:</th>
		<td width="100%">
			<input id="posterous" name="posterous" value="<?php  echo $controllerObj->posterous?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Qik')?>:</th>
		<td width="100%">
			<input id="qik" name="qik" value="<?php  echo $controllerObj->qik?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Readernaut')?>:</th>
		<td width="100%">
			<input id="readernaut" name="readernaut" value="<?php  echo $controllerObj->readernaut?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Reddit')?>:</th>
		<td width="100%">
			<input id="reddit" name="reddit" value="<?php  echo $controllerObj->reddit?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Roboto')?>:</th>
		<td width="100%">
			<input id="roboto" name="roboto" value="<?php  echo $controllerObj->roboto?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Rss')?>:</th>
		<td width="100%">
			<input id="rss" name="rss" value="<?php  echo $controllerObj->rss?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Sharethis')?>:</th>
		<td width="100%">
			<input id="sharethis" name="sharethis" value="<?php  echo $controllerObj->sharethis?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Skype')?>:</th>
		<td width="100%">
			<input id="skype" name="skype" value="<?php  echo $controllerObj->skype?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Stumbleupon')?>:</th>
		<td width="100%">
			<input id="stumbleupon" name="stumbleupon" value="<?php  echo $controllerObj->stumbleupon?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php  echo t('Technorati')?>:</th>
		<td width="100%">
			<input id="technorati" name="technorati" value="<?php  echo $controllerObj->technorati?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Tumblr')?>:</th>
		<td width="100%">
			<input id="tumblr" name="tumblr" value="<?php  echo $controllerObj->tumblr?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Twitter')?>:</th>
		<td width="100%">
			<input id="twitter" name="twitter" value="<?php  echo $controllerObj->twitter?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Viddler')?>:</th>
		<td width="100%">
			<input id="viddler" name="viddler" value="<?php  echo $controllerObj->viddler?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Vimeo')?>:</th>
		<td width="100%">
			<input id="vimeo" name="vimeo" value="<?php  echo $controllerObj->vimeo?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Virb')?>:</th>
		<td width="100%">
			<input id="virb" name="virb" value="<?php  echo $controllerObj->virb?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Windows')?>:</th>
		<td width="100%">
			<input id="windows" name="windows" value="<?php  echo $controllerObj->windows?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Wordpress')?>:</th>
		<td width="100%">
			<input id="wordpress" name="wordpress" value="<?php  echo $controllerObj->wordpress?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Xing')?>:</th>
		<td width="100%">
			<input id="xing" name="xing" value="<?php  echo $controllerObj->xing?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Yahoo')?>:</th>
		<td width="100%">
			<input id="yahoo" name="yahoo" value="<?php  echo $controllerObj->yahoo?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Yahoobuzz')?>:</th>
		<td width="100%">
			<input id="yahoobuzz" name="yahoobuzz" value="<?php  echo $controllerObj->yahoobuzz?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Yelp')?>:</th>
		<td width="100%">
			<input id="yelp" name="yelp" value="<?php  echo $controllerObj->yelp?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Youtube')?>:</th>
		<td width="100%">
			<input id="youtube" name="youtube" value="<?php  echo $controllerObj->youtube?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
		<tr>
		<th valign="top"><?php  echo t('Zootool')?>:</th>
		<td width="100%">
			<input id="zootool" name="zootool" value="<?php  echo $controllerObj->zootool?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"></div>
		</td>
	</tr>
</table>