<?php

/**
 * Preprocess Functions
 */
 function xaptao_preprocess_html(&$vars) {

 }

 function xaptao_preprocess_page(&$vars) {
 	// Libraries
 	

 }

  function xaptao_preprocess_node(&$vars) {
	// Front page
	if (drupal_is_front_page()) {
		$vars['theme_hook_suggestion'] = 'node__front';
	}  	
 }

  function xaptao_preprocess_block(&$vars) {
 	
 }