<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    Settings
 *
 */

return array(
	'groups' => array(
		'peruser' => array(
			'title' => $lng['admin']['mod_peruser_settings'],
			'websrv_avail' => array('apache2'),
			'fields' => array(
				'system_mod_peruser_enabled' => array(
					'label' => $lng['serversettings']['mod_peruser'],
					'settinggroup' => 'system',
					'varname' => 'mod_peruser',
					'type' => 'bool',
					'default' => false,
					'save_method' => 'storeSettingField',
					'overview_option' => true
					),
				)
			)
		)
	);

?>
