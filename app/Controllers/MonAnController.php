<?php

namespace App\Controllers;

use App\Models\MonAnModel;

class MonAnController extends BaseController
{
    protected $MA;
    public function __construct()
    {
        $this->MA = new MonAnModel();
    }

    function getAllListMA()
    {
        $monAn = $this->MA->listMonAn();
        // var_dump($monAn);
        return $this->render("admin.MA.monAn", ["monAn" => $monAn]);
    }

    function FormAddMA()
    {
        $LMA = $this->MA->listLoaiMonAn();
        return $this->render("admin.MA.addMonAn", ["LMA" => $LMA]);
    }

    function addMA()
    {
        if (isset($_POST["btn_add"])) {
            $tenMonAn = $_POST['tenMonAn'];
            $giaMonAn = $_POST['giaMonAn'];
            $moTaMonAn = $_POST['moTaMonAn'];
            $maLoaiMonAn = $_POST['maLoaiMonAn'];

            $this->MA->addMonAn($maLoaiMonAn, $tenMonAn, $giaMonAn, $moTaMonAn);
            header("Location: mon-an");
        }
    }

    // function deleteMA()
    // {
    //     $maMonAn = $_GET['id'];
    //     $this->MA->deleteMonAn($maMonAn);
    //     header("Location: mon-an");
    // }

    function editMA()
    {
        $maMonAn = $_GET["id"];
        $MonAn = $this->MA->editMonAn($maMonAn);
        $LMA = $this->MA->listLoaiMonAn();
        return $this->render("admin.MA.updateMonAn", ["MonAn" => $MonAn, "LMA" => $LMA]);
    }

    function updateMA()
    {
        if (isset($_POST["btn_update"])) {
            $maMonAn = $_POST["maMonAn"];
            $tenMonAn = $_POST["tenMonAn"];
            $giaMonAn = $_POST["giaMonAn"];
            $moTaMonAn = $_POST["moTaMonAn"];
            $maLoaiMonAn = $_POST["maLoaiMonAn"];
            $this->MA->updateMonAn($maMonAn, $maLoaiMonAn, $tenMonAn, $giaMonAn, $moTaMonAn);
            header("Location: mon-an");
        }
    }
}
