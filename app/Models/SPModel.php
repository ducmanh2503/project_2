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

    // function addSetBuffet($tenSetBuffet, $giaSetBuffet, $moTaSetBuffet)
    // {
    //     $sql = "INSERT INTO `setbuffet`(`tenSetBuffet`, `giaSetBuffet`, `moTaSetBuffet`) VALUES ('$tenSetBuffet','$giaSetBuffet','$moTaSetBuffet')";
    //     return $this->getRowData($sql);
    // }

    function deleteSetBuffet($maSetBuffet)
    {
        $sql = "DELETE FROM `setbuffet` WHERE `maSetBuffet` = '$maSetBuffet'";
        return $this->getRowData($sql);
    }

    function editSetBuffet($maSetBuffet)
    {
        $sql = "SELECT * FROM `setBuffet` WHERE `maSetBuffet` = '$maSetBuffet'";
        return $this->getRowData($sql);
    }

    function updateSetBuffet($maSetBuffet, $tenSetBuffet, $giaSetBuffet, $moTaSetBuffet)
    {
        $sql = "UPDATE `setbuffet` SET `tenSetBuffet`='$tenSetBuffet',`giaSetBuffet`='$giaSetBuffet',`moTaSetBuffet`='$moTaSetBuffet' WHERE `maSetBuffet` = '$maSetBuffet'";
        return $this->getRowData($sql);
    }

    function addMultipleSetBuffets($setBuffets)
    {
        $values = [];
        foreach ($setBuffets as $buffet) {
            $values[] = "('{$buffet['tenSetBuffet']}', '{$buffet['giaSetBuffet']}', '{$buffet['moTaSetBuffet']}')";
        }
        $valuesString = implode(',', $values);
        $sql = "INSERT INTO `setbuffet`(`tenSetBuffet`, `giaSetBuffet`, `moTaSetBuffet`) VALUES $valuesString";
        return $this->getRowData($sql);
    }
}
