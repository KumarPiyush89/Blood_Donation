

<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
	margin: 5px;
text-align: center;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 18px;

}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #FF5733;
  color: white;
}
</style>
</head>
<body>
	<br>
<h1 align="center">Donor List</h1>
<br>
<table id="customers" style="margin: 0px auto;">
  <tr>
		<th>ID</th>
    <th>Name</th>
    <th>Blood Group</th>
    <th>Gender</th>
		<th>Age</th>
		<th>Weight</th>
		<th>Last Donated</th>
		<th>Phone Number</th>
		<th>Address</th>

  </tr>
	<?php
        $conn=new PDO("mysql:host = localhost; dbname=KumarPiyush;" , "root" , "");
        $stmt=$conn->prepare("select * from blooddonation");
        while ($p=$q->fetch(PDO::FETCH_OBJ)) {
	?>
	<tr>

    <?php
        $d=$age;
        if($d<20)
    {
      ?>
      <td><font color="red"><?= $blooddonation['ID']; ?></font></td>
      <td><font color="red"><?= $blooddonation['name']; ?></font></td>
      <td><font color="red"><?= $blooddonation['bgroup']; ?></font></td>
  	  <td><font color="red"><?= $blooddonation['gender']; ?></font></td>
  	  <td><font color="red"><?= $blooddonation['age']; ?></font></td>
  	  <td><font color="red"><?= $blooddonation['weight']; ?></font></td>
        <td><font color="red"><?= $blooddonation['last']; ?></font></td>
        <td><font color="red"><?= $blooddonation['number']; ?></font></td>
    	  <td><font color="red"><?= $blooddonation['address']; ?></font></td>
      <?php
    }
    else {
      ?>
      <td><?= $blooddonation['ID']; ?></td>
      <td><?= $blooddonation['name']; ?></td>
      <td><?= $blooddonation['bgroup']; ?></td>
  	  <td><?= $blooddonation['gender']; ?></td>
  	  <td><?= $blooddonation['age']; ?></td>
  	  <td><?= $blooddonation['weight']; ?></td>
        <td><?= $blooddonation['last']; ?></td>
        <td><?= $blooddonation['number']; ?></td>
    	  <td><?= $blooddonation['address']; ?></td>
  <?php
    }

    ?>
  </tr>
	<?php
}
	 ?>

</table>
<br>
  <p align="center" padding="40px">Note: [Red colored are not eligible for Donation] </p>
</br>
</body>
</html>