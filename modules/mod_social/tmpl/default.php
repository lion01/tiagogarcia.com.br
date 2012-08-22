<?php
/**
 * @package     Social
 * @subpackage  mod_social
 * @copyright   Copyright (C) 2012 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;
?>
<div class="row">
	<div class="span3 clearfix">
		<ul class="social-icons">
			<li class="twitter">
				<a href="http://twitter.com/<?php echo $params->get('twitter'); ?>" TARGET='_BLANK'></a>
			</li>
			<li class="facebook">
				<a href="http://facebook.com/<?php echo $params->get('facebook'); ?>" TARGET='_BLANK'></a>
			</li>
			<li class="linkedin">
				<a href="<?php echo $params->get('linkedin'); ?>" TARGET='_BLANK'></a>
			</li>
		</ul>
	</div>
	<div class="span9 header-tweet">
		<div class="tweet">
		</div>
	</div>
</div>
<div class="row">
	<div class="span3">
		<div class="border-1-5">
		</div>
	</div>
	<div class="span9">
		<div class="border-1-5 hide-border">
		</div>
	</div>
</div>