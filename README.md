# basic OOP PHP
CRUD

## Insert
```
    $sql = "INSERT INTO peronal_informations (f_name, m_name) VALUES ('firstname', 'lastname')";
    create($sql);
 ```
 ### Insert with relationship
```
   $sql = "INSERT INTO peronal_informations (f_name, m_name) VALUES ('firstname', 'lastname')";
   $getInsertedID = create($sql);  
   $sql1 = "INSERT INTO personal_relationship (pi_id, f_name, m_name) VALUES ('$getInsertedID','firstname', 'lastname')";
   create($sql1);
 ```

## Read
```
    $sql = "SELECT * FROM peronal_informations";
    foreach (read($sql) as $result) {
        echo $result->f_name ;
        echo '<br>';
    }
 ```
 
## Update
```
    $sql = "UPDATE peronal_informations SET f_name = 'update lastname' WHERE id='1'";   
    update($sql); 
 ```
## Delete
```
    $sql = "DELETE FROM peronal_informations WHERE id='16'";
    delete($sql);
```