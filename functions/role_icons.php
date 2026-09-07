<?php


function get_role_icon_html($role) {
    $key = strtolower(trim($role));
    $rolesValides = ["top", "jungle", "mid", "adc", "support"];

    if (!in_array($key, $rolesValides)) {
        return htmlspecialchars($role);
    }

    $label = ucfirst($key);

    return '<span class="role-icon" title="' . htmlspecialchars($label) . '">'
         . '<img src="/teamup/assets/images/roles/' . $key . '.png" alt="' . htmlspecialchars($label) . '">'
         . '</span>';
}