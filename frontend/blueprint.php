<?php

$creator = Constructor::getInstance();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, min-width=400, min-device-width=400, initial-scale=1" />
  <meta name="description" content="<? echo PROJECTNAME; ?>" />
  <meta name="keywords" content="<? echo PROJECTDESCRIPTION; ?>" />
  <meta name="author" content="<? echo AUTHOR; ?>" />
  <title><?=$creator->headline?$creator->headline . " - " : null?><?=$creator->title?></title>
  <link rel="shortcut icon" href="content/img/favicon.png" type="image/png"/>
</head>
<body>
  <div id="wrapper">
    <?php require_once "$creator->modfile";?>
  </div>
</body>
</html>
