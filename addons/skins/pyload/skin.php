<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

if (!defined("IN_ESOTALK")) exit;

/**
 * Default skin file.
 * 
 * @package esoTalk
 */

ET::$skinInfo["pyload"] = array(
	"name" => "pyload",
	"description" => "pyLoad skin.",
	"version" => "0.1.0",
	"author" => "pyLoad Team",
	"authorEmail" => "support@pyload.org",
	"authorURL" => "http://pyload.org",
	"license" => "AGPLv3"
);

class ETSkin_pyload extends ETSkin {


/**
 * Initialize the skin.
 * 
 * @param ETController $sender The page controller.
 * @return void
 */
public function handler_init($sender)
{
	$sender->addCSSFile((C("esoTalk.https") ? "https" : "http")."://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700");
	$sender->addCSSFile("core/skin/base.css", true);
	$sender->addCSSFile("core/skin/font-awesome.css", true);
	$sender->addCSSFile($this->getResource("styles.css"), true);
	$sender->addCSSFile($this->getResource("main.css"), true);
    $sender->addToHead("<link rel='shortcut icon' href='".getWebPath($this->getResource("favicon.ico"))."'>");

	// If we're viewing from a mobile browser, add the mobile CSS and change the master view.
	if ($isMobile = isMobileBrowser()) {
		$sender->addCSSFile($this->getResource("mobile.css"), true);
		$sender->masterView = "mobile.master";
		$sender->addToHead("<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;'>");
	}
}


}

?>
