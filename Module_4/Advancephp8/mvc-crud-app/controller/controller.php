<?php
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        parent ::__construct();
        //here fetching the data in users state dropdown list
        $showstate=$this->selectallthedata('tbl_state');

        //here fetching the data in user city dropdown list
        $showcity=$this->selectallthedata('tbl_city');

        // load tempelate here
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case'/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("content.php");
                    break;

                default:
                    require_once("index.php");
                    break;    
            }
        }
    }
}
$obj= new controller;
?>