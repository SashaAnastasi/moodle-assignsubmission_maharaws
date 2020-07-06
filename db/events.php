<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Events subscription.
 *
 * @package    assignsubmission_maharaws
 * @copyright  2020 Catalyst IT
 * @copyright  2015 Lancaster University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$observers = array(
    array(
        'eventname'   => '\mod_assign\event\submission_graded',
        'callback'    => 'assignsubmission_maharaws_observers::submission_graded',
    ),
    array(
        'eventname'   => '\mod_assign\event\workflow_state_updated',
        'callback'    => 'assignsubmission_maharaws_observers::workflow_state_updated',
    ),
);