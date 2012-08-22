<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_popular
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<ul class="popular-posts<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) : ?>
	<?php $image = json_decode($item->images); ?>
	<li>
		<a href="<?php echo $item->link; ?>"><img src="<?php echo $image->image_intro; ?>" width="40px" height="40px" alt="<?php echo $item->title; ?>" /></a>
		<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
		<span class="date">
			<?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?><br />
		</span>
	</li>
<?php endforeach; ?>
</ul>


