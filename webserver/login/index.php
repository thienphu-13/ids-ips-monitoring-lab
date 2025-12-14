<?php
if($_POST){
  if($_POST['user']=="admin" && $_POST['pass']=="admin"){
    echo "Login success";
  } else {
    echo "Login failed";
  }
}
?>
<form method="post">
User:<input name="user">
Pass:<input name="pass" type="password">
<input type="submit">
</form>

