<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();

JHtml::_('stylesheet', 'templates/' . $app->getTemplate() . '/html/mod_articles_news/assets/css/flexslider.css');
JHtml::_('script', 'templates/' . $app->getTemplate() . '/html/mod_articles_news/assets/js/jquery.flexslider-min.js');
JHtml::_('script', 'templates/' . $app->getTemplate() . '/html/mod_articles_news/assets/js/main.js');
?>

<div class="newsflash flexslider <?php echo $moduleclass_sfx; ?>">
	<ul class="slides">
		<?php foreach ($list as $item) : ?>
			<li><?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?></li>
		<?php endforeach; ?>
	</ul>
</div>