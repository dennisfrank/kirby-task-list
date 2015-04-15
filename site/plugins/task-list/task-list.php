<?php

function convert_tasks($text) {
	$text = preg_replace('/^\s*<li>\s*(<p>)?\s*\[x\]/mi', '<li style="list-style-type:none;">$1<input type="checkbox" checked>', $text);
	$text = preg_replace('/^\s*<li>\s*\[ \]/mi', '<li style="list-style-type:none;"><input type="checkbox">', $text);
	return $text;

}

kirbytext::$post[] = function($kirbytext, $value) {
	return convert_tasks($value);
};