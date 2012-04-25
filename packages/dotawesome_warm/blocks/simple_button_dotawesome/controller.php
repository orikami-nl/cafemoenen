<?php 
	class SimpleButtonDotawesomeBlockController extends BlockController {
		
		var $pobj;
		
		protected $btDescription = "Add a Quick Button";
		protected $btName = "dotAwesome Button";
		protected $btTable = 'btSimpleButtonDotawesome';
		protected $btInterfaceWidth = "370";
		protected $btInterfaceHeight = "350";
		
		
		public function save($args) {		
			$args['pageID'] = ($args['pageID'] != '') ? $args['pageID'] : 0;
			parent::save($args);
		}
		
	}
	
?>