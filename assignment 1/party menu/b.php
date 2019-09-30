<!DOCTYPE html>
<html>
<head>
	<style>
		body
		{
			background-color:#c0ffb3;
		}
	</style>
</head>
<body>
<?php

	if(isset($_POST["menu"]))
{



$dr=$_POST['dr'];

$ca=$_POST['ca'];

$de=$_POST['de'];


echo"<center><table border=4 cellspacing=10 width=100%></center>";

echo" <tr>";
echo "<td><center>APPETIZER</center><br>";
if(isset($_POST["a"]))  
        {
            
            foreach ($_POST['a'] as $a)  
               
    
print" <center>$a</center>";
}
echo "</td>";
echo"</tr>";


echo"<tr>";

print" <td><center>DRINKS<br><br>$dr<br></center></td>";





echo"</tr>";

echo"<tr>";

print" <td><center>CAKE<br><br>$ca<br></center></td>";

echo"</tr>";

echo"<tr>";

print" <td><center>DESSERT<br><br>$de<br></center></td>";

echo"</tr>";

echo"</table>";
}
?>
</body>
</html>