<?php 
function html_escape($text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_HTML5, 'UTF-8', false); // Return escaped string
}
function min_max($arr) {
    return array(min($arr),max($arr));
}
?>