<?php
include './Models/NotetypeModel.php';
class NotetypeController
{
    public function index()
    {
        $alert = (isset($_SESSION['alert'])) ? $_SESSION['alert'] : '';
        unset($_SESSION['alert']);
        $Notetype = new NotetypeModel();
        $notestype = $Notetype->getAll();
        include_once './Views/Notestype/index.php';
    }
    public function show()
    {
        $id = $_GET['id'];
        include_once './views/Notes/show.php';
    }
    public function add()
    {
        $errors = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // $name = $_REQUEST['name'];
            // $description = $_REQUEST['description'];
            // if ($name == ''){
            //     $errors['name'] = "Bạn chưa nhập ";
            // }

            // if($description == ''){
            //     $errors['description'] = "Bạn chưa nhập";
            // }
            // include_once './Models/NotetypeModel.php';
            $NotetypeModel = new NotetypeModel();
            $Notetype = $NotetypeModel->store($_REQUEST);
            header('Location:index.php?controller=Notetype&action=index');
        }
        include_once './views/Notestype/add.php';
    }
    public function edit()
    {
        $id = $_GET['id'];
        $NotetypeModel = new NotetypeModel();
        $notetype =  $NotetypeModel->getOne($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $NotetypeModel->update($id, $_REQUEST);
            header('Location:index.php?controller=population&action=index');
        }
        include_once './views/Notestype/edit.php';
    }
    public function delete()
    {
        try {
            $id = $_GET['id'];
            $NotetypeModel   = new NotetypeModel();
            $NotetypeModel->delete($id);
            $_SESSION['alert'] = 'Đã xóa thành công !';
        } catch (\Exception $e) {
            $_SESSION['alert'] = 'Không thể xóa còn liên kết bảng note !';
        }
        header('Location:index.php?controller=Notetype&action=index');
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_POST['search'];
            $object = new NotetypeModel();
            $obj = $object->search($search);
        }
        include_once './views/Notestype/search.php';
    }
}