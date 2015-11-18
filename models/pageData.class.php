<?php

// New Class for definining page properties.

class pageData {
	public $title = "";
	public $content = "";
	public $css = "";
	public $jScripts = "";

	public function addCss($href) {

		$this->css .= "<link rel='stylesheet' href='$href' />";

	}

	public function addjScripts($href){

		$this->jScripts .= "<script type='text/javascript' src=$href></script>";
	}
}