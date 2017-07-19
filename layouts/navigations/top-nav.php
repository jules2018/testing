
<ul>

  <!-- home page-->
  <?php if ($page == "home") { ?>
    <li><a class="active" href="index.php">Home</a></li>

  <?php } else { ?>
    <li><a href="index.php">Home</a></li>
  <?php } ?>

<!-- about page -->
<?php if ($page == "about") { ?>
  <li><a class="active" href="about.php">About</a></li>

<?php } else { ?>
  <li><a href="about.php">About</a></li>
<?php } ?>

</ul>
