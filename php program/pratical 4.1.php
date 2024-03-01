<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRATICAL 4.1</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    table,th,td{
        border: 1px solid black;
        border-collapse:collapase;
        background:#96b4b4;
    }
    </style>
<body class="bg-sky-300">
    <form method="post"> 
        <tr>ENTER MARKS FOR ENGLISH: </tr><input  class="border-black border 2 focus:shadow-lg" type="text"placeholder="s-1" name="marks1"><br><br>;
        <tr>ENTER MARKS FOR PHYSICS: </tr><input  class="border-black border 2 focus:shadow-lg" type="text"placeholder="s-2" name="marks2"><br><br>;
        <tr>ENTER MARKS FOR MATHS: </tr><input  class="border-black border 2 focus:shadow-lg" type="text"placeholder="s-3" name="marks3"><br><br>;
        <tr>ENTER MARKS FOR COMPUTER: </tr><input  class="border-black border 2 focus:shadow-lg" type="text"placeholder="s-4" name="marks4"><br><br>;

<button type="submit"name="sub"value="1" class="bg-violet-500 hover:bg-violet-600 text-white px-4 py-2 rounded">SUBMIT</button>
<?php
    $m1 =$_POST['marks1'];
    $m2 =$_POST['marks2'];
    $m3 =$_POST['marks3'];
    $m4 =$_POST['marks4'];
    ?>
<table class="text-center border-2 ">
    <tr>
    <th>SUBJECT</th>
    <th>MARKS</th>
    <th> GRADES </th>
</tr>
<tr>
    <td>ENGLISH</td>
    <td> <?php echo $m1; ?></td>
    <td> <?php 
    if($m1 <=100 && $m1 >=85){
        echo"AA";
    }
    elseif($m1 <=84 && $m1 >=75){
        echo"AB";
    }
    elseif($m1 <=74 && $m1 >=65){
        echo"BB";
    }
     elseif($m1 <=64 && $m1 >=55){
        echo"BC";
    }
    elseif($m1 <=54 && $m1 >=45){
        echo"CC";
    }
    elseif($m1 <=44 && $m1 >=40){
        echo"CD";
    }
    elseif($m1 <=39 && $m1 >=35){
        echo"DD";
    }
    elseif($m1 <=35 && $m1 >=0){
        echo"FF";
    }
    else{
        echo"NOT VALID MARKS......";
    }
    ?></td>
</tr>
<tr>
    <td>PHYSICS</td>
    <td> <?php echo $m2; ?></td>
    <td> <?php 
    if($m2 <=100 && $m2 >=85){
        echo"AA";
    }
    elseif($m2 <=84 && $m2 >=75){
        echo"AB";
    }
    elseif($m2 <=74 && $m2 >=65){
        echo"BB";
    }
     elseif($m2 <=64 && $m2 >=55){
        echo"BC";
    }
    elseif($m2 <=54 && $m2 >=45){
        echo"CC";
    }
    elseif($m2 <=44 && $m2 >=40){
        echo"CD";
    }
    elseif($m2 <=39 && $m2 >=35){
        echo"DD";
    }
    elseif($m2 <=35 && $m2 >=0){
        echo"FF";
    }
    else{
        echo"NOT VALID MARKS......";
    }
    ?></td>
</tr>
<tr>
    <td>MATHS</td>
    <td> <?php echo $m3; ?></td>
    <td> <?php 
    if($m3 <=100 && $m3 >=85){
        echo"AA";
    }
    elseif($m3 <=84 && $m3 >=75){
        echo"AB";
    }
    elseif($m3 <=74 && $m3 >=65){
        echo"BB";
    }
     elseif($m3 <=64 && $m3 >=55){
        echo"BC";
    }
    elseif($m3 <=54 && $m3 >=45){
        echo"CC";
    }
    elseif($m3 <=44 && $m3 >=40){
        echo"CD";
    }
    elseif($m3 <=39 && $m3 >=35){
        echo"DD";
    }
    elseif($m3 <=35 && $m3 >=0){
        echo"FF";
    }
    else{
        echo"NOT VALID MARKS......";
    }
    ?></td>
</tr>
<tr>
    <td>COMPUTER</td>
    <td> <?php echo $m4; ?></td>
    <td> <?php 
    if($m4 <=100 && $m4 >=85){
        echo"AA";
    }
    elseif($m4 <=84 && $m1 >=75){
        echo"AB";
    }
    elseif($m4 <=74 && $m4 >=65){
        echo"BB";
    }
     elseif($m4 <=64 && $m4 >=55){
        echo"BC";
    }
    elseif($m4 <=54 && $m4 >=45){
        echo"CC";
    }
    elseif($m4 <=44 && $m4 >=40){
        echo"CD";
    }
    elseif($m4 <=39 && $m4 >=35){
        echo"DD";
    }
    elseif($m4 <=35 && $m4 >=0){
        echo"FF";
    }
    else{
        echo"NOT VALID MARKS......";
    }
    ?></td>
</tr>

</table>
</form>
</body>
</html>