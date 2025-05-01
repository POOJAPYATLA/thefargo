<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$canonicalUrl = htmlspecialchars($protocol . $host . $uri, ENT_QUOTES, 'UTF-8');
?>
<link rel="canonical" href="<?= $canonicalUrl ?>" />
<meta http-equiv="Cache-control" content="no-cache">

<link rel="stylesheet" href="/.dist/css/main.css">
<link rel="stylesheet" href="/.dist/css/header.css">