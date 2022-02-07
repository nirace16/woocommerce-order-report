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

if (!function_exists('wor_get_order_title')) {
    function wor_get_order_title($orderName)
    {
        if ($orderName == 'processing') {
            return 'Processing';
        } elseif ($orderName == 'cancelled') {
            return 'Cancelled';
        } elseif ($orderName == 'on-hold') {
            return 'On hold';
        } elseif ($orderName == 'completed') {
            return 'Completed';
        } elseif ($orderName == 'failed') {
            return 'Failed';
        } elseif ($orderName == 'refunded') {
            return 'Refunded';
        } elseif ($orderName == 'pending-payment') {
            return 'Pending payment';
        }
    }
}
