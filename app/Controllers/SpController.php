<?php

namespace App\Controllers;

use App\Models\SpModel;

class SpController extends baseController
{
    protected $SP;
    public function __construct()
    {
        $this->SP = new SpModel();
    }

    function index()
    {
        return $this->render("admin.index");
    }

    function getAllSetBuffet()
    {
        $SP = $this->SP->listSetBuffett();
        // var_dump($SP);
        return $this->render("admin.setBF.setBuffet", ["SP" => $SP]);
    }

    function formAddSetBuffet()
    {
        return $this->render("admin.setBF.addSetBuffet");
    }

    // function addSetBF()
    // {
    //     if (isset($_POST['btn_add'])) {
    //         $tenSetBuffet = $_POST['tenSetBuffet'];
    //         $giaSetBuffet = $_POST['giaSetBuffet'];
    //         $moTaSetBuffet = $_POST['moTaSetBuffet'];
    //         $this->SP->addSetBuffet($tenSetBuffet, $giaSetBuffet, $moTaSetBuffet);
    //         header("Location: set-buffet");
    //     }
    // }

    function addSetBF()
    {
        if (isset($_POST['btn_add'])) {
            $setBuffets = [];
            foreach ($_POST['setBuffets'] as $buffet) {
                $setBuffets[] = [
                    'tenSetBuffet' => $buffet['tenSetBuffet'],
                    'giaSetBuffet' => $buffet['giaSetBuffet'],
                    'moTaSetBuffet' => $buffet['moTaSetBuffet'],
                ];
            }
            $this->SP->addMultipleSetBuffets($setBuffets);
            header("Location: set-buffet");
        }
    }

    function deleteSetBF()
    {
        $maSetBuffet = $_GET['id'];
        $this->SP->deleteSetBuffet($maSetBuffet);
        header("Location: set-buffet");
    }

    function editSetBF()
    {
        $maSetBuffet = $_GET['id'];
        $setBF = $this->SP->editSetBuffet($maSetBuffet);
        return $this->render("admin.setBF.updateSetBuffet", ["setBF" => $setBF]);
    }

    function updateSetBF()
    {
        if (isset($_POST["btn_update"])) {
            $maSetBuffet = $_POST["maSetBuffet"];
            $tenSetBuffet = $_POST["tenSetBuffet"];
            $giaSetBuffet = $_POST["giaSetBuffet"];
            $moTaSetBuffet = $_POST["moTaSetBuffet"];

            $this->SP->updateSetBuffet($maSetBuffet, $tenSetBuffet, $giaSetBuffet, $moTaSetBuffet);
            header("Location: set-buffet");
        }
    }

    function bulkActionSetBuffet()
    {
        if (isset($_POST['selectedIds']) && is_array($_POST['selectedIds'])) {
            $selectedIds = $_POST['selectedIds'];
            $actionType = $_POST['actionType'];
    
            if ($actionType === 'delete') {
                foreach ($selectedIds as $id) {
                    $this->SP->deleteSetBuffet($id); // Xóa từng mục
                }
                header("Location: set-buffet");
            } elseif ($actionType === 'edit') {
                // Chuyển đến form sửa, có thể truyền danh sách ID qua query string hoặc hiển thị form sửa riêng
                $ids = implode(',', $selectedIds);
                header("Location: cap-nhat-nhieu-set-buffet?ids=" . $ids);
            }
        } else {
            header("Location: set-buffet");
        }
    }
    
}
