<?php

// JS-Compress - by LernVid.com

  header('Content-Type: text/javascript');

  $expires = 60*60*24*7;
  header("Pragma: public");
  header("Cache-Control: maxage=".$expires);
  header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expires) . ' GMT');

  $files = array(
    "jquery-1.7.2.min.js",
    "jq-noconflict.js",
    "lv-dropdown.js",
    "jq.easy-tooltip.min.js",   
    "jq.easy-caption.min.js",   
    "reflection.js",
    "effects.js"
  );

  $ETag = "";

  foreach ($files as $file) {
    $ETag = dechex(fileinode($file));
    $ETag.= "-".dechex(filesize($file));
    $ETag.= "-".dechex(((filemtime($file).str_repeat("0",6)+0) & (8589934591)));
    $ETag.="-";
  }
  $ETag= md5($ETag);
  header("Etag: $ETag");
  if (trim($_SERVER["HTTP_IF_NONE_MATCH"]) == $ETag) {
    header("HTTP/1.1 304 Not Modified");
    exit;
  }

  if( strpos($_SERVER["HTTP_ACCEPT_ENCODING"],"gzip") !== FALSE){
    ob_start("ob_gzhandler");
  } else {
    ob_start();
  }

  foreach ($files as $file) {
    include($file);
  }

  ob_end_flush();
?>