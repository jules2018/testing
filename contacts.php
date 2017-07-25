<!--home variable  -->
<?php $page ="contacts";?>
<?php require 'layouts/head-content.php';?>
<?php require 'layouts/navigations/top-nav.php';?>




  <h1>Contacts</h1>


  <?php if(isset($_GET['span'])){ ?>
    <h1 style="color:green;">Not Human</h1>
    <?php } ?>


  <?php if(isset($_GET['success'])){ ?>
    <h1 style="color:green;">Success</h1>
    <?php } ?>


<form class="" action="processes/myprocess.php" method="post">
  <input type="text" name="myName" value="">
  <?php if(isset($_GET['error'])){ ?>
    <span style="color:red;">This field requered</span>
    <?php } ?>
    <br>
    <input type="hidden" name="hidden" value="my-secret-key">
  <input type="submit" value="Send message">
</form>

<?php require 'layouts/foot-content.php';?>
