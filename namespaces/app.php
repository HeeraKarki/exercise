<?php
namespace App;
include "project.php";
Use  Project\Table as ProjectTable;
class Table{
    public static function get(){
        echo"App.Table.get\n";
    }
}
ProjectTable::get();
