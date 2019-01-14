<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
    div{
        font-size: 20px;
    }
    </style>
</head>
<body>
    <?php
    $file = fopen("mensajes.txt", "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    $cases = fgets($file);
    $prevNum = 0;
    $res = "";
    $count = 1;
    while(!feof($file))
    {
        $mensaje = fgets($file);
        $letras =  str_split($mensaje);
        $res .= "Caso #". $count . ": ";
        foreach($letras as $letra){
            $cod = ord($letra);
            if ($cod >= 97 && $cod <= 99) {
                $min = 97;
                $num = "2";
            } else if ($cod >= 100 && $cod <= 102) {
                $min = 100;
                $num = "3";
            } else if ($cod >= 103 && $cod <= 105) {
                $min = 103;
                $num = "4";
            } else if ($cod >= 106 && $cod <= 108) {
                $min = 106;
                $num = "5";
            } else if ($cod >= 109 && $cod <= 111) {
                $min = 109;
                $num = "6";
            } else if ($cod >= 112 && $cod <= 115) {
                $min = 112;
                $num = "7";
            } else if ($cod >= 116 && $cod <= 118) {
                $min = 116;
                $num = "8";
            } else if ($cod >= 119 && $cod <= 122) {
                $min = 119;
                $num = "9";
            }else if($cod == 32){
                if($prevNum == "0"){
                    $res .= " ";
                }
                $res .="0";
                $num = "0";
            }

            if($prevNum == $num && $prevNum != 0){
                $res .= " ";
            }
            if($cod != 32){
                $aux = ($cod - $min) + 1;
                for ($j = 0; $j < $aux; $j++) {
                    $res .= $num;
                }
            }
            $prevNum = $num;
        }
        $res .= '<br>';
        $count++;
    }
    
    echo "<div>".$res."</div>";
    fclose($file);
    ?>
</body>
</html>