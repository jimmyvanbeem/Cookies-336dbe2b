
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>
        <form action="#" method="POST">
        <label>Keuze :</label>
        <input type="number" name="numinput"></input>
        <button type="submit">confirm</button>
        <?php 
        session_start($keuze = array());
        $input = $_POST["numinput"];
        array_push($keuze, $input);
        $_SESSION["keuzeinput"] = $input;
        setcookie('user', $input);
        foreach ($_SESSION as $key => $number) {
            if( $number == 1 || $number == 2 || $number == 3){
         echo "je hebt gekozen voor " . $_SESSION;
            }
        else{
            echo "die iets geldigs godverdomme je bent zeker een belg";
         
        }
        }
         ?>
    </body>
</html>