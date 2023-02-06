<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad-Words</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
$text = $_GET['text'];
$badword = $_GET['badword'];
$text_length = 'text length = ';

$replaced_word = str_replace($badword, '***', $text);
?>

<div>
    <h1>Original pharagrapf</h1>
    <p><?php echo $text?></p>
    <span><?php echo $text_length . strlen($text)?></span>
</div>

<hr>

<div>
    <h1>Censured pharagrapf</h1>
    <p><?php echo $replaced_word?></p>
    <span><?php echo $text_length . strlen($replaced_word)?></span>
</div>
<hr>
</body>
</html>


