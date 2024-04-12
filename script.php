   <?php
   //prende i dati del form 
 $paragraph = $_GET['paragraph'];
 $word = $_GET['word'];
        
 // Sostituisci la parola da censurare con ***
$censoredWord = str_ireplace($word, '***', $paragraph);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
   <h2> Original paragraph: </h2> 
   <p> <?php echo $paragraph  ?> </p> 
   <p> Length: <?php echo strlen($paragraph)  ?> </p> 

   <h2> Censored paragraph:</h2> 
   <p> <?php echo $censoredWord  ?> </p> 
   <p>  Length: <?php echo strlen($censoredWord)  ?> </p> 
</body>
</html>