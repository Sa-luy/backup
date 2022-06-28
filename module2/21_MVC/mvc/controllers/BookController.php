<?php
    include_once 'models/BookModel.php';
    class BookController {

        //xem tất cả dữ liệu
        public function index(){   
            $objModel = new BookModel();
            $books = $objModel->getAll();
            //gọi view index
            include 'views/books/index.php';
        }

        //trang thêm mới dữ liệu
        public function create(){

            //kiem tra nguoi dung da submit form
            if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                $objModel = new BookModel();
                $objModel->store( $_REQUEST );
            }

            //gọi view create
            include 'views/books/create.php';
        }

        //trang cập nhật dữ liệu
        public function edit(){
            echo __METHOD__;
            //gọi view edit
            include 'views/books/edit.php';
        }

        //trang xem chi tiết dữ liệu
        public function show(){
            echo __METHOD__;
            //gọi view show
            include 'views/books/show.php';
        }

         //trang xóa dữ liệu
        public function delete(){
            echo __METHOD__;
            //gọi view delete
            include 'views/books/delete.php';
        }
    }