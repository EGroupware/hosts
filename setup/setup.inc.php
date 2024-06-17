<?php
/**
 * EGroupware - Hosts - setup definitions
 *
 * @link http://www.egroupware.org
 * @author Ralf Becker <rb-AT-egroupware.org>
 * @package hosts
 * @subpackage setup
 * @copyright (c) 2023 by Ralf Becker <rb-AT-egroupware.org>
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 */

use EGroupware\Hosts;

$setup_info['hosts']['name']      = 'hosts';
$setup_info['hosts']['version']   = '23.1';
$setup_info['hosts']['app_order'] = 5;
$setup_info['hosts']['enable']    = 1;
$setup_info['hosts']['tables']    = array('egw_hosts','egw_hosts_extra');
$setup_info['hosts']['index']     = Hosts\Bo::APP.'.'.Hosts\Ui::class.'.index&ajax=true';

$setup_info['hosts']['author'] =
$setup_info['hosts']['maintainer'] = array(
	'name'  => 'Ralf Becker',
	'email' => 'rb@egroupware.org',
);
$setup_info['hosts']['license']  = 'GPL';
$setup_info['hosts']['description'] =
'Just an hosts app to start developing with.';

// Hooks we implement
$setup_info['hosts']['hooks']['search_link'] = Hosts\Hooks::class.'::search_link';
$setup_info['hosts']['hooks']['admin'] = Hosts\Hooks::class.'::all_hooks';
$setup_info['hosts']['hooks']['sidebox_menu'] = Hosts\Hooks::class.'::all_hooks';

/* Dependencies for this app to work */
$setup_info['hosts']['depends'][] = array(
	 'appname' => 'api',
	 'versions' => Array('23.1')
);