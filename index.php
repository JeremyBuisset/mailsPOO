<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mails POO</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">

</head>
<body>
<?php include "mails.php";

$to = $_POST['to'];
$subject = $_POST['subject'];
$text = $_POST['text'];

$mails = new mails($to, $subject, $text);

echo $mails->sendMail();

?>




</body>
</html>
