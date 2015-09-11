<html>
<head>
<meta charset="utf-8"/>
<title>Page Redirection!</title>
<meta http-equiv="refresh" content="1; url=../start.php">
</head>
<body>
<?php

$betreff = $_POST['betreff'];
$from = "From: ";
$from .= $_POST['name'];
$from .= " <";
$from .= $_POST['email'];
$from .= "Content-Type: text/html\n";
$text = $_POST['nachricht'];

$to = "denis.maag@icloud.com";

 
mail($to, $betreff, $text, $from);
echo "Vielen Dank - Ihre Nachricht wurde gesendet";

// If you are not redirected automatically, follow the <a href='WebContent/start.php'>link.</a>

?>
</body>
</html>