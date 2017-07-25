<?php
$links = require 'config/navigation-links.php';
$objects = json_decode(json_encode($links['links']), FALSE);
?>


<ul>
  <?php foreach($objects as $link) { ?>
  <li>
 <a href= "<?php echo $link->reference; ?>">
<?php echo $link->text; ?>
</a>
  </li>
<?php } ?>
</ul>
