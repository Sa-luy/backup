<?php
    include_once 'models/CategoryModel.php';
    class CategoryController {

        //xem tất cả dữ liệu
        public function index(){   
            $objModel = new CategoryModel();
            $rows = $objModel->getAll();
            //gọi view index
            include 'views/categories/index.php';
        }

        //trang thêm mới dữ liệu
        public function create(){

            //kiem tra nguoi dung da submit form
            if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                $objModel = new CategoryModel();
                $objModel->store( $_REQUEST );
            }

            //gọi view create
            include 'views/categories/create.php';
        }

        //trang cập nhật dữ liệu
        public function edit(){
            echo __METHOD__;
            //gọi view edit
            include 'views/categories/edit.php';
        }

        //trang xem chi tiết dữ liệu
        public function show(){
            echo __METHOD__;
            //gọi view show
            include 'views/categories/show.php';
        }

         //trang xóa dữ liệu
        public function delete(){
            echo __METHOD__;
            //gọi view delete
            include 'views/categories/delete.php';
        }
    }