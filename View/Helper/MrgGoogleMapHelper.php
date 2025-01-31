<?php
	App::uses('AppHelper', 'View/Helper');
	class MrgGoogleMapHelper extends AppHelper{
		var $helpers = ['Js', 'Html'];
		public function __construct(View $view, $settings = array()) {
			parent::__construct($view, $settings);
			// Load the google maps plugin
			echo
				$this->Html->script('https://maps.google.com/maps/api/js?key=' . $settings['key'] . '&sensor=false&amp;language=en', array('inline'=>false)).
				$this->Html->script('jquery.plugins/gmap3.js', array('inline'=>false));
		}

		public function init($element, $options){
			return $this->Js->buffer($this->Js->get($element)->gmap3($options));
		}
	}
?>
