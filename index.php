<?php 
$text ='Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolor eum veritatis asperiores animi, aut perspiciatis voluptates molestiae aperiam sint vel dolore quisquam excepturi aspernatur laborum tempora est consectetur deleniti.';
$badWord = $_GET['badword'];
$correctedText =  str_replace($badWord,'***',$text);
$badPosition = strpos($text, $badWord);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Testo Originale</h2>
    <div><?php echo $text; ?></div>
    <h2>badword passata nell'url</h2>
    <div><?php echo $badWord; ?></div>
    <h2>Testo ritornato sostituendo la badword</h2>
    <div><?php echo $correctedText; ?></div>
    <h2>Inoltre il testo corretto è lungo..</h2>
    <div><?php echo strlen($correctedText); ?> lettere</div>
    <h2>La posizione della badword è dopo la</h2>
    <div><?php echo $badPosition; ?>esima lettera</div>
</body>
</html>

