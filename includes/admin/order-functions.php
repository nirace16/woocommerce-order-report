<?php
if (!function_exists('order_reports')) {
    function order_reports($date)
    {
        $availablePayment =  woo_order_report_get_available_payments();
        $orderStatus = wc_get_order_statuses(); ?>
<div class="row col-md-12">
    <div class="col-md-6">
        Total : <span id='total-order-<?php echo $date; ?>'></span>
        <div class="col-md-6">Filter
            <?php if (!empty($availablePayment)) { ?>
            <label
                for="order-payment-type-<?php echo $date; ?>">Choose
                Payment Type:</label>
            <select name="order-payment-type-<?php echo $date; ?>"
                id="order-payment-type-<?php echo $date; ?>">
                <option value="All">All</option>
                <?php foreach ($availablePayment as $singlePayment) {
            ?>
                <option value="<?php echo $singlePayment->title; ?>">
                    <?php echo  $singlePayment->title; ?>
                </option> <?php
        } ?>
            </select>
            <?php } else {
            echo 'Cannot find any available payments';
        } ?>
            <?php if (!empty($orderStatus)) { ?>
            <label
                for="order-payment-status-<?php echo $date; ?>">Choose
                Order Status:</label>
            <select name="order-payment-status-<?php echo $date; ?>"
                id="order-payment-status-<?php echo $date; ?>">
                <option value="All">All</option>
                <?php  foreach ($orderStatus as $orderStatusSingle) {
            ?>
                <option value="<?php echo $orderStatusSingle; ?>">
                    <?php echo  $orderStatusSingle; ?>
                </option> <?php
        } ?>
            </select>
            <?php } else {
            echo 'Cannot find any available payments';
        } ?>
        </div>
    </div>
</div>
<table class="table table-striped" id="woocommerce-order-table">
    <thead>
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Order Name</th>
            <th scope="col">Order Date</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Status</th>
            <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>


        <?php
$today = getdate();
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        if ($date == "1year") {
            $args = array(
            'numberposts' => -1,
            'date_query' => array(
                array(
                    'after' => $today[ 'month' ] . ' 1st, ' . ($today[ 'year' ] - 1)
                )
                ),
        );
        } elseif ($date=="1month") {
            $args = array(
            'numberposts' => -1,
            'year'=>$today["year"],
             'monthnum'=>$today["mon"]-1,
        );
        } elseif ($date=="1week") {
            $args = array(
            'numberposts' => -1,
              'date_query' => array(
                array(
                    'column' => 'post_date',
                    'after' => '1 week ago',
                )
            ),
        );
        }
    

    

        $orders = wc_get_orders($args);
        foreach ($orders as $singleOrder) {
            $orderData = $singleOrder->get_data();
            $orderPaymentMethod = $orderData['payment_method']; ?>
        <tr>
            <th scope="row"><?php echo $orderData['id']; ?>
            </th>
            <td><?php echo $orderData['billing']['first_name'] . ' ' . $orderData['billing']['last_name']; ?>
            </td>
            <td><?php echo $orderData['date_created']->date('Y-m-d'); ?>
            </td>
            <td
                class="<?php echo $orderData['payment_method_title']; ?>">
                <?php echo $orderData['payment_method_title']; ?>
            </td>
            <td
                class="<?php echo $orderData['status']; ?>">
                <?php
            echo wor_get_order_title($orderData['status']); ?>
            </td>
            <td id="order-total-<?php echo $date; ?>"><?php echo $orderData['total']; ?>
            </td>
        </tr>
        <?php
        } ?>
    </tbody>
</table>
<?php
    }
}
if (!function_exists('order_settings')) {
    function order_settings()
    {
        echo 'This is the settings page';
    }
}
