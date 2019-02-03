<?php 
    require_once('core.php');

    function create($sql){
        $obj = new sqlExec;
        return $obj->dbCUD($sql);
    }

    function read($sql) {
        $obj = new sqlExec; 
        $data = json_decode($obj->dbSelect($sql));
        return $data;
    }

    function update($sql){
        $obj = new sqlExec;
        $obj->dbCUD($sql);
    }
   
    function delete($sql){
        $obj = new sqlExec;
        $obj->dbCUD($sql);
    }

?>