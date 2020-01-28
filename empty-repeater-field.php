<?php
function nullify_empty($value, $post_id, $field) {
    if (empty($value)) {
        return null;
    }
    return $value;
}

add_filter('acf/format_value/type=repeater', 'nullify_empty', 100, 3);
?>
