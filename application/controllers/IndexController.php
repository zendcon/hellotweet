<?php

class IndexController extends Zend_Controller_Action {
    
	public function init() {
		/* Initialize action controller here */
	}
	
	public function indexAction() {
		// action body
	}
	
	public function twitterAction() {
		$twitterSearch = new Zend_Service_Twitter_Search ( 'json' );
		$searchResults = $twitterSearch->search ( 'zendcon', array ('lang' => 'en' ) );
		$this->view->results = $searchResults;
	}
}

