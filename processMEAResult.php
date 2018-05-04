<html>
<body>
Your username is:<?php echo $_GET["username"]; ?>
<p> </p>
The planet you mined is: <?php echo $_GET["planetName"]; ?>
<p> </p>
resources found:
<table>
<?php
$resourceArray = $_GET["resource"];
$amountArray = $_GET["resourceAmount"];

$arr_length = count($resourceArray); 
for($i=0;$i<$arr_length;$i++) 
{ 
    ?> <tr><td> Resource:<?php  echo $resourceArray[$i] ?>  </td> <td>  amount: <?php  echo $amountArray[$i] ?> </td></tr>   <?php
}
?>
</table>

</body>
</html>