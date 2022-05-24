<!DOCTYPE html>
<html>
    <head>
        <title>Creation de la Table</title>
    </head>
    <body>
        <h1>Creation de la base</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            try{
                $dbco = new PDO("mysql:host=$servername", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE DATABASE haoua_tech";
                $dbco->exec($sql);
                
                echo 'La base est créée.';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>

        
    </body>
</html>
