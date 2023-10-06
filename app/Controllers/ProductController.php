<?php
    namespace App\Controllers;

    class ProductController extends BaseController{

        public function index(){
            echo "Welcome ";
            return view('frontEnd/product.php');
        }
        
        public function demo(){
            echo "Welcome kushal";
        }
        
        public function find($name){
            echo "This is find method $name";
            // $data['name'] = $name;
            // $data['name_arr'] = ['nokia', 'realme', 'Apple'];

            // ANOTHER METHOD
            $data = [
                'name' => $name,
                'name_arr' => ['nokia', 'mi', 'samsung'],
            ];
            return view('frontEnd/product.php', $data);
        }

        // public function _remap($method){  
        //     echo "this is remap $method"; 
        // }                                  
    }
?>

