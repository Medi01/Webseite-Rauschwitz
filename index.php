<?php

require_once "config.php";
require_once __PHP__ . "/constructor.php";

$creator = Constructor::getInstance();

$creator->view = "view";

if ($_GET[0] == "admin") {

  if (!$login->checkLogin()) {
    $creator->view = "login";
  }else {
    $creator->view = "admin";
  }
}

$creator->build();

?>
