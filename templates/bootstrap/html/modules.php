<?php
/**
 * @package     Events
 * @subpackage  com_events
 * @copyright   Copyright (C) 2012 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

/*
 * Widget
 */
function modChrome_widget($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<div class="widget<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
		<?php if ($module->showtitle != 0) : ?>
			<h5><?php echo $module->title; ?></h5>
		<?php endif; ?>
			<?php echo $module->content; ?>
		</div>
		<?php endif;
}
