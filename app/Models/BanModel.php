<?php

namespace App\Models;

use App\Models\BaseModel;

class BanModel extends BaseModel
{
    function listTabels()
    {
        $sql = "SELECT * FROM `ban` LEFT JOIN `setBuffet` ON ban.maSetBuffet = setBuffet.maSetBuffet";
        return $this->getAllData($sql);
    }

    function getInfoById($maBan)
    {
        $sql = "SELECT * FROM `ban` WHERE `maBan` = '$maBan'";
        return $this->getRowData($sql);
    }

    function datBan($maBan, $tenKhachHang, $sdt, $ngayDatBan, $khungGioDatBan, $soLuongKhach)
    {
        $sql = "INSERT INTO `datban`(`maBan`, `tenKhachHang`, `sdt`, `ngayDatBan`, `khungGioDatBan`, `soLuongKhach`) VALUES ('$maBan','$tenKhachHang','$sdt','$ngayDatBan','$khungGioDatBan','$soLuongKhach')";
        return $this->getRowData($sql);
    }

    function updateTrangThai($maBan, $trangThai)
    {
        $sql = "UPDATE `ban` SET`trangThai`='$trangThai' WHERE `maBan` = '$maBan'";
        return $this->getRowData($sql);
    }
}
