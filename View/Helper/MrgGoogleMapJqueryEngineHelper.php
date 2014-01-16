<?php
	App::uses('AppHelper', 'View/Helper');
	App::uses('JqueryEngineHelper', 'View/Helper');

	class MrgGoogleMapJqueryEngineHelper extends JqueryEngineHelper{

		function __construct(View $view, $settings = array()){
			parent::__construct($view, $settings = array());

			$this->_init_callbacks();
		}

		protected function _init_callbacks(){
			$callbacks = [
				'gmap3'=>[]
			];
			$this->_callbackArguments = array_merge($this->_callbackArguments, $callbacks);
		}


		public function gmap3($options){
			$template = '%s.gmap3({%s});';
	        return $this->_methodTemplate('gmap3', $template, $options);
		}
	}

?>
