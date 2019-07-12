<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <?php echo "<div class='center'><strong> ".$error."</strong></div>" ?>
  	<?php endforeach ?>
  </div>
<?php  endif ?>