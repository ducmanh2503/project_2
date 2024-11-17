<?php

namespace App\Controllers;

use App\Models\BanModel;

class BanController extends BaseController
{
    protected $ban;
    public function __construct()
    {
        $this->ban = new BanModel();
    }

    function getAllTables()
    {
        $tables = $this->ban->listTabels();
        // var_dump($tables);
        return $this->render("admin.ban.tables", ["tables" => $tables]);
    }


    function formDatBan()
    {
        $maBan = $_GET['id'];
        $table = $this->ban->getInfoById($maBan);
        return $this->render("admin.ban.datBan", ["table" => $table]);
    }

    function DATBAN()
    {
        if (isset($_POST['btn_order'])) {
            $maBan = $_POST['maBan'];
            $tenKhachHang = $_POST['tenKhachHang'];
            $sdt = $_POST['sdt'];
            $ngayDatBan = $_POST['ngayDatBan'];
            $khungGioDatBan = $_POST['khungGioDatBan'];
            $soLuongKhach = $_POST['soLuongKhach'];

            $trangThai = 1;

            $this->ban->datBan($maBan, $tenKhachHang, $sdt, $ngayDatBan, $khungGioDatBan, $soLuongKhach);

            $this->ban->updateTrangThai($maBan, $trangThai);
            header("Location: danh-sach-ban");
        }
    }
}
