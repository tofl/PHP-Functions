<?php

function getYoutubeThumbnail($video) {
	
	if (!isset($video) OR empty($video)) {
		return false;
	} elseif (preg_match('#(https?://)?(www\.)?youtube\.com/watch\?v=[a-zA-Z0-9\-_]{11}#', $video)) {	
		$keyForVideo = explode('=', $video);
		$keyForVideo = $key_for_video[1];
		
		return $image = 'https://i.ytimg.com/vi/' . $keyForVideo . '/hqdefault.jpg';
	}
}
