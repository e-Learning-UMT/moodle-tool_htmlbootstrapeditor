<?php
defined('MOODLE_INTERNAL') || die();

namespace atto_htmlbootstrapeditor\hook\output;


 /**
 * Moodle 4.5 hook to add custom content to the top of the body
 *
 *
*/
class before_standard_top_of_body_html_generation {
    public static function execute(\moodle_page $page, \core\output\standard_top_of_body_html $body) {
        global $PAGE;

        $PAGE->requires->js('/admin/tool/htmlbootstrapeditor/content.js');
        $PAGE->requires->js('/admin/tool/htmlbootstrapeditor/editor.js');
    }
}