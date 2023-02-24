<?php
require_once("Config/Database.php");
require_once("Models/Registration.php");
class MajorController
{
    private $model;

    function __construct()
    {
        global $$pdo;
        $this->model = new Registration($pdo);
    }

    function index()
    {
        require_once("Views/Register.php");
    }

    function add()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $hoten = $_POST['name'];
            $lop = $_POST['class'];
            $chuyennghanh = $_POST['major'];
            $mssv = $_POST['studentID'];
            $this->model->addStudent( $mssv, $hoten, $lop, $chuyennghanh);
            header("Location: Index.php");
        }
    }

    function getList(){
        $danhSach = $this->model->getList();
        require_once("Views/List.php");
    }

    function add()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_GET['id'];
            $this->model->deleteStudent( $id);
            header("Location: ?r=list");
        }
    }

}
