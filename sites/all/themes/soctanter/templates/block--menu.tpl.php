<?php
// menu
// http://api.drupal.org/api/drupal/modules--block--block.tpl.php/7
// <h2 class="element-invisible">...</h2>
if ($classes) {
	$classes = ' class="'. $classes . ' "';
}
?>

<nav <?php print $id_block . $classes .  $attributes; ?> role="navigation">
	<?php print $mothership_poorthemers_helper;  ?>

	<?php print $content ?>

	<?php if (!theme_get_setting('mothership_classes_block_contentdiv') AND $block->module == "block"): ?>
	<div <?php print $content_attributes; ?>>
	<?php endif ?>

	<?php if (!theme_get_setting('mothership_classes_block_contentdiv') AND $block->module == "block"): ?>
	</div>
	<?php endif ?>

</nav>