<?php




if ("my-secret-key" == trim($_POST['hidden'])) {
  if ("" == ($_POST['myName'])) {
    header('Location: http://localhost/short-course/testing/contacts.php?error=true');
  } else {
    header('Location: http://localhost/short-course/testing/contacts.php?success=true');
  }
} else {
   header('Location: http://localhost/short-course/testing/contacts.php?error=true');
}


?>
