
<!DOCTYPE html>
<head>
<title> TRAIN SCHEDULE </title>
<style>
	body
	{
		background-image: url("image.jpg");
		background-repeat: no-repeat;
	background-size: cover;
	 background-attachment: scroll;

	}
	tr{
		color: white;
}
th{
	background-color:transparent;
	border-color: white;
}
td{
	background-color: transparent;
	border-color: white;
}
</style>
</head>
<body>

<form name="a" method="POST">

<table border=1 cellspacing=10 width="100%">
	<center><b>BOOK TRAIN TICKETS</b></center><br>
<caption> <input type="text" name="atrain" value="FROM"> <b>---><b> <input type="text" name="rtrain" value="TO"><br><br>
<input type="date" name="date" value="enter the date"><br> <br>Train class type: General<input type="checkbox" name="classtype" value="general"> AC tier1<input type="checkbox" name="classtype" value="ac tier1"> AC tier2<input type="checkbox" name="classtype" value="ac tier2"> Sleeper<input type="checkbox" name="classtype" value="sleeper"> </caption>


<tr>

<th>MONDAY</th>
<th>TUESDAY</th>
<th>WEDNESDAY</th>
<th>THURSDAY</th>
<th>FRIDAY</th>
</tr>

<tr>

<td> 
Enter Train <input type = "text" name="mon1"><br>
Enter Train time  <input type="time" name="t1"><br>
</td>
<td> 
Enter Train <input type = "text" name="tue1"><br>
Enter Train time   <input type="time" name="t2"><br>
</td>
<td> 
Enter Train <input type = "text" name="wed1"><br>
Enter Train time   <input type="time" name="t3"><br>
</td>
<td> 
Enter Train <input type = "text" name="thur1"><br>
Enter Train time  <input type="time" name="t4"><br>
</td>
<td> 
Enter Train <input type = "text" name="fri1"><br>
Enter Train time   <input type="time" name="t5"><br>
</td>
</tr>

<tr>

<td> 
Enter Train <input type = "text" name="mon2"><br>
Enter Train time  <input type="time" name="t6"><br>
</td>
<td> 
Enter Train <input type = "text" name="tue2"><br>
Enter Train time   <input type="time" name="t7"><br>
</td>
<td> 
Enter Train <input type = "text" name="wed2"><br>
Enter Train time   <input type="time" name="t8"><br>
</td>
<td> 
Enter Train <input type = "text" name="thur2"><br>
Enter Train time <input type="time" name="t9"><br>
</td>
<td> 
Enter Train<input type = "text" name="fri2"><br>
Enter Train time <input type="time" name="t10"><br>
</td>
</tr>

<tr>

<td> 
Enter Train <input type = "text" name="mon3"><br>
Enter Train time <input type="time" name="t11"><br>
</td>
<td> 
Enter Train <input type = "text" name="tue3"><br>
Enter Train time <input type="time" name="t12"><br>
</td>
<td> 
Enter Train <input type = "text" name="wed3"><br>
Enter Train time<input type="time" name="t13"><br>
</td>
<td> 
Enter Train <input type = "text" name="thur3"><br>
Enter Train time<input type="text" name="t14"><br>
</td>
<td> 
Enter Train <input type = "text" name="fri3"><br>
Enter Train time  <input type="time" name="t15"><br>
</td>
</tr>

<tr>

<td> 
Enter Train <input type = "text" name="mon4"><br>
Enter Train time <input type="time" name="t16"><br>
</td>
<td> 
Enter Train<input type = "text" name="tue4"><br>
Enter Train time<input type="time" name="t17"><br>
</td>
<td> 
Enter Train <input type = "text" name="wed4"><br>
Enter Facuty   <input type="text" name="t18"><br>
</td>
<td> 
Enter Train <input type = "text" name="thur4"><br>
Enter Train time<input type="time" name="t19"><br>
</td>
<td> 
Enter Train <input type = "text" name="fri4"><br>
Enter Train time   <input type="time" name="t20"><br>
</td>
</tr>

<tr>

<td> 
Enter Train<input type = "text" name="mon5"><br>
Enter Train time<input type="time" name="t21"><br>
</td>
<td> 
Enter Train <input type = "text" name="tue5"><br>
Enter Train time <input type="time" name="t22"><br>
</td>
<td> 
Enter Train <input type = "text" name="wed5"><br>
Enter Train time<input type="time" name="t23"><br>
</td>
<td> 
Enter Train<input type = "text" name="thur5"><br>
Enter Train time<input type="time" name="t24"><br>
</td>
<td> 
Enter Train <input type = "text" name="fri5"><br>
Enter Train time <input type="time" name="t25"><br>
</td>
</tr>
</table>
<br>
 <center> <input type=Reset>  <input type=submit value="Generate Train schedule"> </center>
</form>

</body>


<?php
if($_POST)
{
$mon1=$_POST['mon1'];
$t1=$_POST['t1'];

$tue1=$_POST['tue1'];
$t2=$_POST['t2'];

$wed1=$_POST['wed1'];
$t3=$_POST['t3'];

$thur1=$_POST['thur1'];
$t4=$_POST['t4'];

$fri1=$_POST['fri1'];
$t5=$_POST['t5'];

$mon2=$_POST['mon2'];
$t6=$_POST['t6'];

$tue2=$_POST['tue2'];
$t7=$_POST['t7'];

$wed2=$_POST['wed2'];
$t8=$_POST['t8'];

$thur2=$_POST['thur2'];
$t9=$_POST['t9'];

$fri2=$_POST['fri2'];
$t10=$_POST['t10'];

$mon3=$_POST['mon3'];
$t11=$_POST['t11'];

$tue3=$_POST['tue3'];
$t12=$_POST['t12'];

$wed3=$_POST['wed3'];
$t13=$_POST['t13'];

$thur3=$_POST['thur3'];
$t14=$_POST['t14'];

$fri3=$_POST['fri3'];
$t15=$_POST['t15'];

$mon4=$_POST['mon4'];
$t16=$_POST['t16'];

$tue4=$_POST['tue4'];
$t17=$_POST['t17'];

$wed4=$_POST['wed4'];
$t18=$_POST['t18'];

$thur4=$_POST['thur4'];
$t19=$_POST['t19'];

$fri4=$_POST['fri4'];
$t20=$_POST['t20'];

$mon5=$_POST['mon5'];
$t21=$_POST['t21'];

$tue5=$_POST['tue5'];
$t22=$_POST['t22'];

$wed5=$_POST['wed5'];
$t23=$_POST['t23'];

$thur5=$_POST['thur5'];
$t24=$_POST['t24'];

$fri5=$_POST['fri5'];
$t25=$_POST['t25'];




echo"<table border=10 cellspacing=10 width=100%>";

echo" <tr>";

echo" <th>MONDAY</th>";
echo" <th>TUESDAY</th>";
echo" <th>WEDNESDAY</th>";
echo" <th>THURSDAY</th>";
echo"<th>FRIDAY</th>";
echo"</tr>";

echo"<tr>";

print" <td>train:$mon1<br>Train time:$t1</td>";
print" <td>$tue1<br>$t2</td>";
print" <td>$wed1<br>$t3</td>";
print" <td>$thur1<br>$t4</td>";
print"<td>$fri1<br>$t5</td>";
echo"</tr>";

echo"<tr>";

print"<td>$mon2<br>$t6</td>";
print"<td>$tue2<br>$t7</td>";
print"<td>$wed2<br>$t8</td>";
print"<td>$thur2<br>$t9</td>";
print"<td>$fri2<br>$t10</td>";
echo"</tr>";

echo"<tr>";

print"<td>$mon3<br>$t11</td>";
print"<td>$tue3<br>$t12</td>";
print"<td>$wed3<br>$t13</td>";
print"<td>$thur3<br>$t14</td>";
print"<td>$fri3<br>$t15</td>";
echo"</tr>";

echo"<tr>";

print"<td>$mon4<br>$t16</td>";
print"<td>$tue4<br>$t17</td>";
print"<td>$wed4<br>$t18</td>";
print"<td>$thur4<br>$t19</td>";
print"<td>$fri4<br>$t20</td>";
echo"</tr>";

echo"<tr>";

print"<td>$mon5<br>$t21</td>";
print"<td>$tue5<br>$t22</td>";
print"<td>$wed5<br>$t23</td>";
print"<td>$thur5<br>$t24</td>";
print"<td>$fri5<br>$t25</td>";
echo"</tr>";

echo"</table>";
}
?>
</html>