<?php include("component/header.php"); ?>
<?php
$dataSiswa = [
    [
        "order_id" => "855212",
        "customer" => "Soward",
        "order_date" => "28/10/22",
        "payment_method" => "Cash",
        "delivery_date" => "02/11/22",
        "total_amount" => "$05.22",
        "status" => "Paid"
    ],
    [
        "order_id" => "855213",
        "customer" => "Brama",
        "order_date" => "29/10/22",
        "payment_method" => "Credit Card",
        "delivery_date" => "03/11/22",
        "total_amount" => "$15.75",
        "status" => "Pending"
    ]
];
?>
<!-- main content start -->
<div class="main-content">
    <div class="col-xxl-8">
        <div class="panel">
            <div class="panel-header">
                <h5>Recent Orders</h5>
                <div id="tableSearch"></div>
            </div>
            <div class="panel-body">
                <table class="table table-dashed recent-order-table" id="myTable">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Order Date</th>
                            <th>Payment Method</th>
                            <th>Delivery Date</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataSiswa as $data) { ?>
                        <tr>
                            <td><?php echo($data['order_id']); ?></td>
                            <td><?php echo($data['customer']); ?></td>
                            <td><?php echo($data['order_date']); ?></td>
                            <td><?php echo($data['payment_method']); ?></td>
                            <td><?php echo($data['delivery_date']); ?></td>
                            <td><?php echo($data['total_amount']); ?></td>
                            <td><span class="badge <?php echo $data['status'] == 'Paid' ? 'bg-success' : 'bg-warning'; ?>"><?php echo $data['status']; ?></span></td>
                            <td>
                                <div class="btn-box">
                                    <button><i class="fa-light fa-eye"></i></button>
                                    <button><i class="fa-light fa-pen"></i></button>
                                    <button><i class="fa-light fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>

<!-- footer start -->
<?php include("component/footer.php"); ?>
