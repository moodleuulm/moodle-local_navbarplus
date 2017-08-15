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
 * Local plugin "Navbar Plus" - Language pack
 *
 * @package    local_navbarplus
 * @copyright  2017 Kathrin Osswald, Ulm University <kathrin.osswald@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Navbar Plus';
// Setting to insert icons with links.
$string['setting_inserticonswithlinks'] = 'Icons with links';
$string['setting_inserticonswithlinks_desc'] = 'With this setting you can add link icons to the header navbar left to the icons "messages" and "notifications".<br/>
Each line consists of an icon image, a link URL, a text, supported language(s) (optional) and new window setting (optional) - separated by pipe characters. Each icon needs to be written in a new line.<br/>
For example:<br/>
a/help|http://moodle.org|Moodle|en,de|true<br/>
fa-sign-out|/login/logout.php|Logout||false<br/><br/>
Further information to the parameters:
<ul>
<li><b>Image:</b> You can add identifiers for a Moodle icon from the pix folder (<a href="https://github.com/moodle/moodle/tree/master/pix">see the icon list on github.com</a>) or a Font Awesome icon identifier (<a href="http://fontawesome.io/icons/">See the icon list on fontawesome.io</a>). Font Awesome is not included in Boost from Moodle core, but there are some Boost child themes and other solutions from third parties which add Font Awesome support to Moodle.</li>
<li><b>Link:</b> The link target can be defined by a full web URL (e.g. https://moodle.org) or a relative path within your Moodle instance (e.g. /login/logout.php). </li>
<li><b>Title:</b> This text will be written in the title and alt attributes of the icon.</li>
<li><b>Supported language(s) (optional):</b> This setting can be used for displaying the link to users of the specified language only. Separate more than one supported language with commas. If the link should be displayed in all languages, then leave this field empty.</li>
<li><b>New window (optional)</b>:  By default the link will be opened in the same window and the value of this setting is set to false. If you want to open the link in a new window set the value to true.</li>
</ul>
Please note:
<ul>
<li> Pipe dividing for optional parameters is always needed if they are located between other options. This means that you have to separate params with the pipe character although they are empty. Also see the example for the Font Awesome icon above. </li>
<li> If the icon does not show up in the navbar, please check if all mandatory params are set correctly and if the optional language setting fits to your current Moodle user language. </li>
</ul>';
// Setting to place a link to be able to reset user tours.
$string['setting_resetusertours'] = 'Reset user tour link';
$string['setting_resetusertours_desc'] = 'With this setting you can place a Font Awesome map icon in the navbar with which the user is able to restart the user tour for the current page. By default Boost places the link to reset the user tour within the footer. This might not be eye cathing. With this settung you can place the link to the more visible navbar.<br/>
Please note: <br/>
As there is no even vaguely fitting icon in the Moodle core, we have no fallback for themes that do not implement Font Awesome (from Moodle 3.3 onwards this will be integrated into Moodle core). If you use such a theme this setting will have no affect.';
$string['resetusertours_hint'] = '(Could take a short time)';
// Setting to change the displaying of the global search within the navbar.
$string['setting_changeglobalsearch'] = 'Global search field';
$string['setting_changeglobalsearch_desc'] = 'With this setting you can expand the global search form by default and it will stay opened (while in Moodle core this field will collapse and expand on each mouseover). Moreover, a solution for small screens is provided, by simply showing the search icon and openeing a seperate search field beneath the navbar.';
