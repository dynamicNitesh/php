<html>
<head>
<title>PRATICAL 3.2</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<h1>CALCULATOR </h1>
<div class="calc">
<form action=" " method="post">
<input type="text" name="num1" placeholder="ENTER NUMBRE ONE:">
<br>
<input type="text" name="num2" placeholder="ENTER NUMBRE TWO:">
<br>
<input type="submit"name="op" value="+">
<input type="submit"name="op" value="-">
<input type="submit"name="op" value="*">
<input type="submit"name="op" value="/">
</div>
<?php
    if(isset($_POST['op']))
    {
        $x=$_POST['num1'];
        $y=$_POST['num2'];
        $open=$_POST['op'];
        switch($open)
        {
            case'+':$result=$x+$y;
            echo"sum=",$result;
            break;
            case'-':$result=$x-$y;
            echo"sub=",$result;
            break;
            case'*':$result=$x*$y;
            echo"multi=",$result;
            break;
            case'/':$result=$x/$y;
            echo"div=",$result;
            break;
        }
    }
    ?>
</form>
</body>
</html>  
