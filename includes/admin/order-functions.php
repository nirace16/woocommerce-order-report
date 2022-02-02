<?php
function order_reports()
{


// echo 'Hello';
    $args = array(
    'numberposts' => -1,
);

    $orders = wc_get_orders($args);

    foreach ($orders as $singleOrder) {
        echo '<pre>';
        var_dump($singleOrder);
        echo'</pre>';
    }
}

function order_settings()
{
    echo 'This is the settings page';
}
