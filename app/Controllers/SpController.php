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

    function addSetBF()
    {
        if (isset($_POST['btn_add'])) {
            $tenSetBuffet = $_POST['tenSetBuffet'];
            $giaSetBuffet = $_POST['giaSetBuffet'];
            $moTaSetBuffet = $_POST['moTaSetBuffet'];
            $this->SP->addSetBuffet($tenSetBuffet, $giaSetBuffet, $moTaSetBuffet);
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
}
