<!DOCTYPE html>
<html>
<head>
<body>

<form action="" method="post">
 Name: <input type="text" name="user" />
 <input type="submit" value="Send" />
</form>

</body>
</html>

</body>
</html>

<?php
if (isset($_POST['user'])) {
  echo 'Welcome '. $_POST['user'];
}
else {
 echo 'Welcome visitor';
}
?>