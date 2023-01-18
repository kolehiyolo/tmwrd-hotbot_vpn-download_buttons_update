<?php

include_once dirname(__FILE__). '/../config/config.php';
include_once 'inc-log.php';

function extSetCookie(string $key, string $value, int $days) {
	$domain = (config(MODE) === 'prod') ? '.hotbotvpn.com' : '.boxedsand.com';
	$maxAge = $days * 60 * 60 * 24;
	header(
		"Set-Cookie: $key=$value; Max-Age=$maxAge; Path=/; Domain=$domain; Secure; SameSite=None",
		false);
}

function checkCJQueryParams() {
	$GLOBALS['hasCj'] = false;

	if (!$_SERVER || !array_key_exists('REQUEST_URI', $_SERVER)) { return; }

	$uriParts = parse_url($_SERVER['REQUEST_URI']);
	if (!array_key_exists('query', $uriParts)) { return; }

	$query = $uriParts['query'];
	if (empty($query)) { return; }

	$get = [];
	parse_str($query,$get);
	$lcGet = array_change_key_case($get);

	$hasCj = array_key_exists('cjevent', $lcGet);
	$GLOBALS['hasCj'] = $hasCj;

	if ($hasCj) {
		extSetCookie('cjEvent', $lcGet['cjevent'], 395);
	}

	if (array_key_exists('cjdata', $lcGet)) {
		extSetCookie('cjData', $lcGet['cjdata'], 395);
	}
}
