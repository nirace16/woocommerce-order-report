<?php

if (!function_exists('woo_order_report_get_available_payments')) {
    function woo_order_report_get_available_payments()
    {
        $gateways = WC()->payment_gateways->get_available_payment_gateways();
        $enabled_gateways = [];

        if ($gateways) {
            foreach ($gateways as $gateway) {
                if ($gateway->enabled == 'yes') {
                    $enabled_gateways[] = $gateway;
                }
            }
        }

        return $enabled_gateways;
    }
}

if (!function_exists('woo_order_report_get_all_order_status')) {
    function woo_order_report_get_all_order_status()
    {
        $order_statuses = get_terms('shop_order_status', array( 'hide_empty' => false ));
        $statuses = array();
        foreach ($order_statuses as $status) {
            $statuses[ $status->slug ] = $status->name;
        }
        return $statuses;
    }
}
