<?php

namespace App\Models;

use App\Models\BaseModel;

class SPModel extends BaseModel
{
    function listSetBuffett()
    {
        $sql = "SELECT * FROM `setBuffet`";
        return $this->getAllData($sql);
    }

    function addSetBuffet($tenSetBuffet, $giaSetBuffet, $moTaSetBuff)
    {
        $sql = "INSERT INTO `setbuffet`(`tenSetBuffet`, `giaSetBuffet`, `moTaSetBuff`) VALUES ('$tenSetBuffet','$giaSetBuffet','$moTaSetBuff')";
        return $this->getRowData($sql);
    }

    function deleteSetBuffet($maSetBuffet)
    {
        $sql = "DELETE FROM `setbuffet` WHERE `maSetBuffet` = '$maSetBuffet'";
        return $this->getRowData($sql);
    }
}
