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
 * Data activity filter version information
 *
 * @package    filter
 * @subpackage ecli
 * @copyright  2014 SSR / Joost van der Borg {@link http://ssr.nl}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class ecli_filter_local_settings_form extends filter_local_settings_form {
    protected function definition_inner($mform) {
            $select = array(
                'default' => get_string('target_default', 'filter_ecli'),
                'blank' => get_string('target_blank', 'filter_ecli'),
            );

        $mform->addElement('select', 'target', get_string('target', 'filter_ecli'), $select);
        $mform->setType('target', PARAM_TEXT);
    }
}