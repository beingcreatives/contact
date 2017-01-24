<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
mysql_connect("localhost","root","");
mysql_select_db("user");
mysql_query("insert into feedback values('$name','$email','$message')");
?>

<script language="javascript">
alert("Thanks For Feedback we will responce with in 24hr");
window.location.replace("index.html");
</script>