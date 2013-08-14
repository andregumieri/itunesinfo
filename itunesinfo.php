#!/usr/bin/php -d memory_limit=256M
<?php
	namespace CFPropertyList;

	if(!require 'config.php') die("Arquivo config.php não foi encontrado\n");
	require __DIR__.'/lib/CFPropertyList/classes/CFPropertyList/CFPropertyList.php';
	$plist = new CFPropertyList( XML_PATH, CFPropertyList::FORMAT_XML );
	$plist = $plist->toArray();

	foreach($plist['Tracks'] as $id=>$info) {
		// TV SHOW
		/*
		if(!isset($info['TV Show']) || intval($info['TV Show']<1)) continue;
		echo $info['Series'] . " S" . $info['Season'] . "E" . $info['Episode Order'] . "\n";
		*/

		// MOVIE
		/*
		if(!isset($info['Movie']) || intval($info['Movie']<1) || $info['Genre']=='iTunes U' || $info['Genre']=='Podcast' || isset($info['iTunesU'])) continue;
		echo $info['Name']. "\n";
		*/
	}
?>