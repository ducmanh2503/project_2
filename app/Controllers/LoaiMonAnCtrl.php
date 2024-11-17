<?php

namespace App\Controllers;

use App\Models\LoaiMonAn;
use App\Models\LoaiMonAnModel;

class LoaiMonAnCtrl extends BaseController
{
    protected $loaiMonAn;
    public function __construct()
    {
        $this->loaiMonAn = new LoaiMonAnModel();
    }

    function getAllLMA()
    {
        $LMA = $this->loaiMonAn->listLMA();
        return $this->render("admin.LMA.loaiMonAn", ["LMA" => $LMA]);
    }

    function formAddLoaiMon()
    {
        return $this->render("admin.LMA.addLoaiMonAn");
    }

    function addLoaiMon()
    {
        if (isset($_POST["btn_add"])) {
            $tenLoaiMonAn = $_POST["tenLoaiMonAn"];

            $this->loaiMonAn->addLMA($tenLoaiMonAn);
            header("Location: loai-mon-an");
        }
    }

    function editLoaiMon()
    {
        $maLoaiMonAn = $_GET["id"];
        $LMA = $this->loaiMonAn->editLMA($maLoaiMonAn);
        return $this->render("admin.LMA.updateLoaiMonAn", ["LMA" => $LMA]);
    }

    function updateLoaiMon()
    {
        if (isset($_POST["btn_update"])) {
            $maLoaiMonAn = $_POST["maLoaiMonAn"];
            $tenLoaiMonAn = $_POST["tenLoaiMonAn"];
            $this->loaiMonAn->updateLMA($maLoaiMonAn, $tenLoaiMonAn);
            header("Location: loai-mon-an");
        }
    }
}
