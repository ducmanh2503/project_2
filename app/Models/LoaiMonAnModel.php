<?php

namespace App\Models;

use App\Models\BaseModel;

class LoaiMonAnModel extends BaseModel
{
    function listLMA()
    {
        $sql = "SELECT * FROM `loaimonan`";
        return $this->getAllData($sql);
    }

    function addLMA($tenLoaiMonAn)
    {
        $sql = "INSERT INTO `loaimonan`(`tenLoaiMonAn`) VALUES ('$tenLoaiMonAn')";
        return $this->getRowData($sql);
    }

    function editLMA($maLoaiMonAn)
    {
        $sql = "SELECT * FROM `loaimonan` WHERE `maLoaiMonAn` = '$maLoaiMonAn'";
        return $this->getRowData($sql);
    }

    function updateLMA($maLoaiMonAn, $tenLoaiMonAn)
    {
        $sql = "UPDATE `loaimonan` SET `tenLoaiMonAn`='$tenLoaiMonAn' WHERE `maLoaiMonAn` = '$maLoaiMonAn'";
        return $this->getRowData($sql);
    }
}
