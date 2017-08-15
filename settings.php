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
 * Local plugin "Navbar Plus" - Settings
 *
 * @package    local_navbarplus
 * @copyright  2017 Kathrin Osswald, Ulm University <kathrin.osswald@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(dirname(__FILE__) . '/lib.php');

if ($hassiteconfig) {
    // New settings page.
    $page = new admin_settingpage('local_navbarplus',
            get_string('pluginname', 'local_navbarplus', null, true));

    if ($ADMIN->fulltree) {
        // Create insert icons with links widget.
        $setting = new admin_setting_configtextarea('local_navbarplus/inserticonswithlinks',
                get_string('setting_inserticonswithlinks', 'local_navbarplus', null, true),
                get_string('setting_inserticonswithlinks_desc', 'local_navbarplus', null, true), '', PARAM_RAW);
        $page->add($setting);

        // Setting for adding a link to reset the user tours in the navbar.
        $name = 'local_navbarplus/resetusertours';
        $title = get_string('setting_resetusertours', 'local_navbarplus', null, true);
        $description = get_string('setting_resetusertours_desc', 'local_navbarplus', null, true);
        $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
        $page->add($setting);

        // Setting for changing the global search form field.
        $name = 'local_navbarplus/changeglobalsearch';
        $title = get_string('setting_changeglobalsearch', 'local_navbarplus', null, true);
        $description = get_string('setting_changeglobalsearch_desc', 'local_navbarplus', null, true);
        $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
        $page->add($setting);
    }

    // Add settings page to the appearance settings category.
    $ADMIN->add('appearance', $page);
}
