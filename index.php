<?php require_once('header.php'); ?>
    <h1>Hello, world!</h1>


    <?php 
    
        require_once('lib/function.php');
    // The comment is the reference of oop CRUD and relationship database
        //
        // 
        // $sql = "SELECT * FROM peronal_informations";
       
        // foreach (read($sql) as $result)
        // {
        //     echo $result->f_name ;
        //     echo '<br>';
        // }
        // $obj = new sqlExec;
       
        // $obj->dbCUD($sql);

        // $sql = "INSERT INTO peronal_informations (f_name, m_name) VALUES ('t5', 't6')";
        // $getInsertedID = create($sql);
        // echo $getInsertedID;   
        // $sql1 = "INSERT INTO personal_relationship (pi_id, f_name, m_name) VALUES ('$getInsertedID','tg33', 'tg44')";
        // create($sql1);

        // $sql3 = "UPDATE peronal_informations SET f_name = 'updatet5' WHERE id='20'";   
        // update($sql3);    

        // $sql = "DELETE FROM peronal_informations WHERE id='16'";
        // delete($sql);

        // $getid = getLastID();
        // echo $getid;
    
    ?>
<?php require_once('footer.php'); ?>