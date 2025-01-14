<?php
/**
 * EGroupware - Setup
 * http://www.egroupware.org
 * Created by eTemplates DB-Tools written by ralfbecker@outdoor-training.de
 *
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @package hosts
 * @subpackage setup
 */


$phpgw_baseline = array(
	'egw_hosts' => array(
		'fd' => array(
			'host_id' => array('type' => 'auto','nullable' => False),
			'host_name' => array('type' => 'varchar','precision' => '64','nullable' => False),
			'host_description' => array('type' => 'varchar','precision' => '16384'),
			'host_creator' => array('type' => 'int','meta' => 'account','precision' => '4','nullable' => False),
			'host_created' => array('type' => 'timestamp','nullable' => False),
			'host_modifier' => array('type' => 'int','meta' => 'account','precision' => '4'),
			'host_modified' => array('type' => 'timestamp','default' => 'current_timestamp')
		),
		'pk' => array('host_id'),
		'fk' => array(),
		'ix' => array(),
		'uc' => array()
	),
	'egw_hosts_extra' => array(
		'fd' => array(
			'host_id' => array('type' => 'int','precision' => '4','nullable' => False),
			'host_extra_name' => array('type' => 'varchar','meta' => 'cfname','precision' => '64','nullable' => False),
			'host_extra_value' => array('type' => 'text','meta' => 'cfvalue','nullable' => False)
		),
		'pk' => array(),
		'fk' => array(),
		'ix' => array(),
		'uc' => array(array('host_id','host_extra_name'))
	)
);
