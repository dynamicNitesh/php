<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get "action="">
    <label for="car">CAR NAME:</label>
    <input type="text" placeholder="ENTER CAR NAME"name="car">
    <button type="submit" name="sub" value="1">submit</button>
    <?php
     $cmp=" ";
    if($_POST==1){
        if($c =="SAFARI"||$c =="NEXON"||$c =="TIGOR"||$c =="TIAGO"){
            $cmp ="TATA";
        }
        elseif($c =="XUV700"||$c =="XUV300"||$c =="BOLERO"){
            $cmp ="MAHINDRA";
        }
       elseif($c =="I20"||$c =="VERNA"||$c =="VENUE"||$c =="CRETA"){
        $cmp ="HYUNDAI";
    } 
    elseif($c =="SWIFT"||$c =="ALTO"||$c =="BALENO"||$c =="BREEZA"){
        $cmp ="SUZUKI";
    } 
    }
    echo"<p>CAR COMPANY IS: $cmp</p>";
    ?>
</body>
</html>