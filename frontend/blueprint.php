<?php



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, min-width=400, min-device-width=400, initial-scale=1" />
  <meta name="description" content="<? echo $project_name; ?>" />
  <meta name="keywords" content="<? echo $project_description; ?>" />
  <meta name="author" content="<? echo $author; ?>" />
  <title><?=$constr->headline?$constr->headline . " - " : null?><?=$constr->title?></title>
  <link rel="shortcut icon" href="/img/favicon.png" type="image/png"/>
</head>
<body>
  <div id="wrapper">
    <?php require_once "$constr->modfile"; ?>
  </div>
</body>
</html>
