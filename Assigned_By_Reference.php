<?php

    $very_bad_unclear_name = "15 Chicken wings";

    $order =& $very_bad_unclear_name;
    $order .=", 1 Banana";
    $order .= ", 2 Cookies";

    echo "\n Your order is: $very_bad_unclear_name.";