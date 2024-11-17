<?php

namespace App\Models;

use App\Models\BaseModel;

class MonAnModel extends BaseModel
{
    function listMonAn()
    {
        $sql = "SELECT * FROM `monAn` INNER JOIN `loaiMonAn` ON monAn.maLoaiMonAn = loaiMonAn.maLoaiMonAn";
        return $this->getAllData($sql);
    }

    function listLoaiMonAn()
    {
        $sql = "SELECT * FROM `loaiMonAn`";
        return $this->getAllData($sql);
    }

    function addMonAn($maLoaiMonAn, $tenMonAn, $giaMonAn, $moTaMonAn)
    {
        $sql = "INSERT INTO `monan`(`maLoaiMonAn`, `tenMonAn`, `giaMonAn`, `moTaMonAn`) VALUES ('$maLoaiMonAn','$tenMonAn','$giaMonAn','$moTaMonAn')";
        return $this->getRowData($sql);
    }

    // function deleteMonAn($maMonAn)
    // {
    //     $sql = "DELETE FROM `monan` WHERE `maMonAn` = '$maMonAn'";
    //     return $this->getRowData($sql);
    // }


    function editMonAn($maMonAn)
    {
        $sql = "SELECT * FROM `monan` WHERE `maMonAn` = '$maMonAn'";
        return $this->getRowData($sql);
    }


    function updateMonAn($maMonAn, $maLoaiMonAn, $tenMonAn, $giaMonAn, $moTaMonAn)
    {
        $sql = "UPDATE `monan` SET`maLoaiMonAn`='$maLoaiMonAn',`tenMonAn`='$tenMonAn',`giaMonAn`='$giaMonAn',`moTaMonAn`='$moTaMonAn' WHERE `maMonAn` = '$maMonAn'";
        return $this->getRowData($sql);
    }
}
