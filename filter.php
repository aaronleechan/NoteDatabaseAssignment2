<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 2/25/18
 * Time: 5:19 PM
 */
     $className             = filter_input(INPUT_POST, "className");
     $departmentName        = filter_input(INPUT_POST,"departmentName");
     $professorfirstName    = filter_input(INPUT_POST,"professorfirstName");
     $professorlastName     = filter_input(INPUT_POST,"professorlastName");
     $notebookName          = filter_input(INPUT_POST,"notebookName");
     $noteName              = filter_input(INPUT_POST,"noteName");

    if(isset($_POST['submit'])){

        if($className != "" && $departmentName == "" && $professorfirstName == "" && $professorlastName == "" && $notebookName == "" && $noteName == ""){
            $query = "select * from Class" . " WHERE ClassName = '$className'" . ";";
        }else if($className == "" && $departmentName != "" && $professorfirstName == "" && $professorlastName == "" && $notebookName == "" && $noteName == "") {
            $query = "select * from Department" . " WHERE DepartmentName = '$departmentName'" . ";";
        }if($className == "" && $departmentName == "" && $professorfirstName != "" && $professorlastName != "" && $notebookName == "" && $noteName == "") {
            $query = "select * from Professor" . " WHERE FirstName = '$professorfirstName' AND LastName = '$professorlastName'" . ";";
        }if($className == "" && $departmentName == "" && $professorfirstName != "" && $professorlastName == "" && $notebookName == "" && $noteName == "") {
            $query = "select * from Professor" . " WHERE FirstName = '$professorfirstName' " . ";";
        }if($className == "" && $departmentName == "" && $professorfirstName == "" && $professorlastName != "" && $notebookName == "" && $noteName == "") {
            $query = "select * from Professor" . " WHERE LastName = '$professorlastName' " . ";";
        }

        // Testing Purpose
        echo " $className . $departmentName . $professorfirstName . $professorlastName . $notebookName . $noteName";

    }else if (isset($_REQUEST['query'])){
        $query = $_REQUEST['query'];
    }else{
        $query = '';
    }

?>