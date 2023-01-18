<?php
$geo = hb_get_geoinfo();
$isp = $geo["isp"];

$addr = '';
if (ctype_alpha($geo["country_code"] ?? null) && $geo["country_name"]) {
  $addr = (ctype_alpha($geo["region"])? $geo["region"].", " : "").$geo["country_name"];
  $addr = "{$geo["ip"]} <span class=\"d-none d-md-inline-block\">({$addr})</span>";
}
// hb_ensure_nats_cookies();
?>
