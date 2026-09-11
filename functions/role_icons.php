<?php

function get_role_icon_html($role, $small = false) {
    $key = strtolower(trim($role));
    $rolesValides = ["top", "jungle", "mid", "adc", "support"];

    if (!in_array($key, $rolesValides)) {
        return htmlspecialchars($role);
    }

    $label = ucfirst($key);
    $classe = "role-icon" . ($small ? " role-icon-small" : "");

    return '<span class="' . $classe . '" title="' . htmlspecialchars($label) . '">'
         . '<img src="/teamup/assets/images/roles/' . $key . '.png" alt="' . htmlspecialchars($label) . '">'
         . '</span>';
}