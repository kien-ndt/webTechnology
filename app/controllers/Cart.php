<?php
    class Cart extends DController{

        public function __construct() {
            parent::__construct();
        }

        public function addProductToCart($param){
            if (isset($param['count']) && is_numeric($param['count']) && (int)$param['count']>0){
                $count = (int)$param['count'];
            }
            else{
                header("Location:".BASE_URL);
                return;
            }
            if (isset($param['id']) && is_numeric($param['id']) && (int)$param['id']>0){
                $id = (int)$param['id'];
            }
            else{
                header("Location:".BASE_URL);
                return;
            }

            $bookModel = $this->load->model("BookModel");
            $book = $bookModel->getBookByID($id);
            if ($book == null) {
                echo "Thêm sản phẩm thất bại!";
                return;
            }
            if (!isset($_SESSION['cart']['list'][$id])){
                $_SESSION['cart']['list'][$id] = array(
                                        "id"=>$id,
                                        "name"=>$book[0]['product_name'],
                                        "img"=> $book[0]['product_image'],
                                        "price"=>$book[0]['product_price'],
                                        "count"=>$count                               
                                    );
                                    
                $_SESSION['cart']['count'] += (int)1; //so loai sp trong gio hang
            }
            else{
                $_SESSION['cart']['list'][$id]['count']+=$count;  
            }                 
            $_SESSION['cart']['total'] += $book[0]['product_price'] * $count;
            echo "Đã thêm $count sản phẩm vào giỏ hàng.";
        }
        public function freeCart(){
            unset($_SESSION['cart']);
            $_SESSION['cart']['count'] = (int)0;
            $_SESSION['cart']['total'] = (int)0;
            header("Location:".BASE_URL."cart/mycart");
        }
        public function showCart(){
            if ((int)$_SESSION['cart']['count']!=0){
                if(isset($_SESSION['cart']['list'])){
                    $data['productInCartList']=$_SESSION['cart']['list'];
                }
                $data['total'] = $_SESSION['cart']['total'];
                $this->load->view('single/page/cartMiniList',$data);
            }
            else {
                echo "<div>Giỏ hàng trống</div>";
            }
            
            // unset($_SESSION['cart']);
        }

        public function myCart(){
            if(isset($_SESSION['cart']['list'])){
                $data['productInCartList']=$_SESSION['cart']['list'];
            }
            else {
                $data['productInCartList']=array();
            }
            $data['countCateProduct'] = $_SESSION['cart']['count'];
            $data['total'] = $_SESSION['cart']['total'];
            $this->load->view('cart',$data);
        }

        public function deleteProductInCart($param){
            if (isset($param['id'])){
                $id = $param['id'];
                $count = $_SESSION['cart']['list'][$id]['count']; 
                $_SESSION['cart']['count'] -= 1;                  
                $_SESSION['cart']['total'] -= (int)$_SESSION['cart']['list'][$id]['price'] * (int)$count;
                unset($_SESSION['cart']['list'][$id]);
            }
            header("Location:".BASE_URL."cart/mycart");
        }

        public function updateCart(){
            if (isset($_POST['quantity'])){
                $quantity = $_POST['quantity'];
                foreach ($quantity as $id=>$value){
                    $price = $_SESSION['cart']['list'][$id]['price'];
                    $_SESSION['cart']['total'] -= (int)$price * (int)$_SESSION['cart']['list'][$id]['count'];
                    $_SESSION['cart']['total'] += (int)$price * (int)$value;
                    $_SESSION['cart']['list'][$id]['count'] = $value;
                }
            }
            header("Location:".BASE_URL."cart/mycart");
        }
    }
