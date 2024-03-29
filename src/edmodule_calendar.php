<?php
/**
* Change module calendar/date definition
*
* @copyright 2002-2007 by papaya Software GmbH - All rights reserved.
* @link http://www.papaya-cms.com/
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
*
* You can redistribute and/or modify this script under the terms of the GNU General Public
* License (GPL) version 2, provided that the copyright and license notes, including these
* lines, remain unmodified. papaya is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
*
* @package Papaya-Modules
* @subpackage Free:Calenda
* @version $Id: edmodule_calendar.php 39686 2014-03-24 14:16:52Z weinert $
*/

/**
* Change module calendar/date definition
*
* @package Papaya-Modules
* @subpackage Free:Calenda
*/
class edmodule_calendar extends base_module {

  /**
  * Permissions
  * @var array $permissions
  */
  var $permissions = array(
    1 => 'Manage',
    2 => 'Manage dates',
    3 => 'Manage regular dates',
    4 => 'Publish',
    5 => 'Change owners'
  );

  /**
  * execute module - access function of module
  *
  * @access public
  */
  function execModule() {
    if ($this->hasPerm(1, TRUE)) {
      $calendar = new papaya_calendar;
      $calendar->module = $this;
      $calendar->layout = $this->layout;
      $calendar->showEdit = TRUE;
      $calendar->initialize('cal', $this->papaya()->administrationUser->userId);
      $calendar->execute();
      $calendar->getXML();
    }
  }
}


