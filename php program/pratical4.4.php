<!DOCTYPE html> 
<html> 
    <head>
        <title>
            pratical 4.4
</title>
    </head>
<script src="https://cdn.tailwindcss.com"></script>
<style>
    
    body{
        background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
    }
    h1{
        color:white;
    }
    .container{

    }
    </style>
<body> 
	<center> 
		<h1> 
			Multiplication Table
		</h1> 
		<form method="POST">ENTER AN NUMBER FOR MULTIPLICATION :
            <div class="container">
			<input type="text" name="number"> 
            </div>
            <br>
			<button class="py-2 px-5 bg-violet-500 text-white font-semibold rounded-full shadow-md hover:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75">
            S     U     B     M     I     T
</button>
	</center> 
</body> 
</html> 

<?php 
if($_POST) { 
	$num = $_POST["number"]; 

	echo nl2br("<p style='text-align: center;'> 
		* * * * *  T A B L E  * * * * *</p> "); 
		
	for ($i = 1; $i <= 10; $i++) { 
		echo ("<p style='text-align: center;'>$num". " x " . "$i" . " = ". $num * $i . "</p>"); 
	} 
} 
?>
