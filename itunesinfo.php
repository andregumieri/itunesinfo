#!/usr/bin/php -d memory_limit=256M
<?php
	namespace CFPropertyList;

	if(!require 'config.php') die("Arquivo config.php não foi encontrado\n");
	
	require __DIR__.'/lib/CFPropertyList/classes/CFPropertyList/CFPropertyList.php';
	$plist = new CFPropertyList( XML_PATH, CFPropertyList::FORMAT_XML );
	$plist = $plist->toArray();

	foreach($plist['Tracks'] as $id=>$info) {
		$type=null;
		if(isset($info['Movie']) && (bool)$info['Movie'] && !(bool)$info['iTunesU'] && !(bool)$info['Podcast']) $type="movie";
		elseif(isset($info['TV Show']) && (bool)$info['TV Show']) $type="tvshow";

		if($type=="tvshow") {
			echo "TV Show: " . $info['Series'] . " S" . $info['Season'] . "E" . $info['Episode Order'] . "\n";
		} else if($type=="movie") {
			echo "Movie: " . $info['Name']. "\n";
		}
	}
?>