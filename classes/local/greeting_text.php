<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace block_greeting\local;

/**
 * Utility class that provides the greeting text.
 *
 * @package    block_greeting
 * @copyright  2026 gh codespace ports visibility 8000:public -c "$CODESPACE_NAME" 2>/dev/null; bash .devcontainer/serve.sh || true
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class greeting_text {
    /**
     * Fetches the greeting text.
     *
     * @return string
     */
    public static function get_message(): string {
        return get_string('greeting', 'block_greeting');
    }
}
