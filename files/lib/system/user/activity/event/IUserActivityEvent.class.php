<?php
namespace wcf\system\user\activity\event;

/**
 * Default interface for user activity events.
 * 
 * @author	Alexander Ebert
 * @copyright	2001-2011 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf.user
 * @subpackage	system.user.activity.event
 * @category 	Community Framework
 */
interface IUserActivityEvent {
	/**
	 * Prepares a list of events for output.
	 * 
	 * @param	array		$events
	 */
	public function prepare(array $events);
}
