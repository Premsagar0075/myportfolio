<?php

$vemail = $_POST['email'];

$conn = mysqli_connect('localhost', 'root');
mysqli_select_db($conn, 'db2');
$q = "insert into emailId (email) values ('$vemail')";
mysqli_query($conn,$q);
mysqli_close($conn);
?>


<html>
<title>Thank You</title>
<head align="center">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<style type = "text/css">
body{ background-image: url(thankyou.jpg);
background-attachment:fixed;
background-repeat: no-repeat;
background-position:centre;
background-size:100%;
	
}
</style>

<div align="center">
<h2>Back to home <a href="index.html">click here</a></h3>
</div>

</body>
</html>