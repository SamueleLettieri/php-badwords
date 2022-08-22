<?php 
$testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit blanditiis praesentium accusamus modi voluptatum perferendis est temporibus rerum qui dolorum soluta veniam inventore consequatur, harum, omnis odit ratione non maiores.';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Testo</h1>
    <p>
        <?php 
         echo $testo;
        ?>
    </p>
    <div>Lunghezza paragrafo: <?php echo strlen($testo); ?> caratteri</div>
    <p>
        <?php 
         $testoCenssurato = $testo;
         $testoCenssurato = str_replace('consectetur', ' *** ', $testo);
         echo $testoCenssurato;
        ?>
    </p>
    <div>Lunghezza paragrafo censurato: <?php echo strlen($testoCenssurato); ?> caratteri</div>

</body>
</html>