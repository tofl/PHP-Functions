<?php

function getYoutubeThumbnail($video) {
	
	if (!isset($video) OR empty($video)) {
		return false;
	} elseif (preg_match('#(https?://)?(www\.)?youtube\.com/watch\?v=[a-zA-Z0-9\-_]{11}#', $video)) {	
		$key_for_video = explode('=', $video);
		$key_for_video = $key_for_video[1];
		
		return $image = 'https://i.ytimg.com/vi/' . $key_for_video . '/hqdefault.jpg';
	}
}
