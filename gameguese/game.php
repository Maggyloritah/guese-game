<?php
 $rand = rand(1, 10);

if(isset($_POST['submit'])){
   
$guess = $_POST['guess'];

    if(($guess<1) ||($guess>10)) {
        echo "<h1>Sorry please try again!</h1>";

    }else{
        if($guess!=$rand) {
            echo "<h1>Incorrect, the correct answer is ".$rand;
            echo "</h1>";
        }else{
            echo "<h1>That is correct!</h1>";
        }
    }
}
/*else{
header("Location: game.php");
exit();
}
*/

?>
<!DOCTYPE html>
<html>
    <head>
        <title>php guesing game</title>
    </head>
    <body>
    
        <form action="game.php" method="POST">
        Guess: <input type="number" name="guess"><br><br>
        <input type="submit" name="submit" value="Guess">
    </body>
</html>