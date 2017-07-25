<?php $sidebarLinks = json_decode(json_encode($links['sidebarlinks']), FALSE);
 ?>
<div class="vertical-menu">

<?php foreach ($sidebarLinks as $sidebarLink) {?>
<a href="<?php echo $sidebarLink->reference;?>">
  <?php echo $sidebarLink->text; ?>
</a>
<?php }  ?>
</div>
