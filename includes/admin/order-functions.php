<?php
function order_reports($date)
{
    ?>
<div class="row">
    Total : <span id='total-order-<?php echo $date; ?>'></span>
</div>
<table class="table table-striped">
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
            <td><?php echo ucwords($orderData['payment_method_title']); ?>
            </td>
            <td><?php echo $orderData['status']; ?>
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

function order_settings()
{
    echo 'This is the settings page';
}
