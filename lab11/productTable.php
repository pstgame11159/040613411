<?php
$keyword = $_GET["keyword"];

$servername = "localhost";
$username = "root";
$password = "";


  $conn = new PDO("mysql:host=$servername;dbname=blueshop", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $sth = $conn->prepare("SELECT * FROM member WHERE username LIKE '%$keyword%'");
  $sth->execute();


?>
<table border="1">
<?php while($row  = $sth->fetch()){ ?>
<tr>
<td><?php echo $row["username"]?></td>
<td>ชื่อ-นามสกุล<?php echo $row["username"]?></td>
<td>ที่อยู่<?php echo $row["address"]?></td>
<td><img src= "<?php echo "member/".$row["username"].".jpg"?>"></td>

</tr>
<?php } ?>
</table>