<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company</title>
</head>
<link rel="stylesheet" href="cmp.css">
<body>
   
    <form action=" " method="post">
    <div class="container">
    <input type="text"placeholder="ENTER AN EMP ID" name="eid">
    <br>
    <input type="text"placeholder="ENTER NAME" name="name">
    <br>
    <input type="number"placeholder="ENTER SALARY" name="basic">
    <br>
    <button type="submit" name="btn" value="1">submit</button>
    <?php
    $id=$_POST["eid"];
    $name=$_POST["name"];
    $basic_salary=$_POST["basic"];
    $is_submit=$_POST["btn"];
	$da=basic_salary/2;
	$medical=$basic_salary *4/100;
	$hra=$basic_salary+$da+$hra+$medical;
	$insurance=$gross *7/100;
	$pf=$gross *5/100;
	$deduction=$pf +$insurance;
	$net_salary=$gross-$deduction;
	echo "EMPLOYEE ID:".$id."<br>EMPLOYEE NAME:".$name."<br>salary:".$basic_salary;
	echo "<br> DA:".$da;
	echo "<br> MEDICAL:".$medical;
	echo "<br> HRA:".$hra;
	echo "<br> GROSS SALARY:".$gross;
	echo "<br> PF:".$pf;
	echo "<br> INSURANCE:".$insurance;
	echo "<br> DEDUCTION:".$deduction;
	echo "<br> NET SALARY:".$net_salary;
    ?>
 </div>
</form>
</body>
</html>