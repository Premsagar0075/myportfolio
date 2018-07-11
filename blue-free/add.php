<?php
$vname = $_POST['name'];
$vemail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'db2');
$q = "insert into visitor (name,email,subject,message) values ('$vname','$vemail','$subject','$message')";
mysqli_query($con,$q);
mysqli_close($con);


?>


<html>
<title>Thank You</title>
<head align="center">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<style type = "text/css">
body{ background-image: url(item.jpg);
background-attachment:fixed;
background-repeat: no-repeat;
background-position:centre;
background-size:100%;
	
}
</style>
<h1 align="center">THANK YOU</h1>
<h2 align="center">your message has been sent to Prem Sagar</h2>
</head>
<body>
<div align="center" class="container">
<table width="200" border="1" class="table-condensed">

<tr>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
</tr>

<tr>
<td><div align="center"><?php $n=$_POST['name']; echo "$n";?></div></td>
<td><div align="center"><?php $e=$_POST['email']; echo "$e";?></div></td>
<td><div align="center"><?php $s=$_POST['subject']; echo "$s";?></div></td>
<td><div align="center"><?php $m=$_POST['message']; echo "$m";?></div></td>
</tr>
</table>
</div>

<div align="center">
<h2>Back to home <a href="index.html">click here</a></h3>
</div>

</body>
</html>