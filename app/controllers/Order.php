<?php
    class Order extends DController{

        public function __construct() {
            parent::__construct();
        }

        public function index() {
        	$this->confirmShipping();
        }

        public function confirmShipping() {
        	$this->load->view('shippingForm');
        }

        public function successOrder() {
            $this->load->view('successOrder');
        }

        public function confirmOrder() {
        	$shipping_name = $_POST['shipping_full_name'];
        	$shipping_address = $_POST['shipping_address'];
        	$shipping_email = $_POST['shipping_email'];
        	$shipping_phone = $_POST['shipping_phone'];
        	$shipping_notes = $_POST['shipping_notes'];

        	$data = array(
                	'shipping_name' => $shipping_name,
                    'shipping_address' => $shipping_address,
                    'shipping_phone' => $shipping_phone,
                    'shipping_email' => $shipping_email,
                    'shipping_notes' => $shipping_notes
            );

            $orderModel = $this->load->model('OrderModel');
            $orderModel->insertShipping($data);

            $oderDetails = $this->load->model('OrderDetails');
            $data = array(
                'customer_id' => $_SESSION['userid'],
                'shipping_id' => 1,
                'order_total' => $_SESSION['cart']['total'],
                'order_status' => 'shipping'
            );
            $oderDetails->insertOrders($data);

            // header("Location:".BASE_URL."Order/successOrder");
        }

    }
?>