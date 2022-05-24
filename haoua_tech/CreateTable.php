<!DOCTYPE html>
<html>
    <head>
        <title>Creation Table</title>
        <meta charset="utf-8">
      
    </head>
    <body>
        <h1>Creation del table</h1>  
        <?php
            $servname = 'localhost';
            $dbname = 'haoua_tech';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE TABLE serveur(
                        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        proprietaire VARCHAR(30) NOT NULL,
                        Pays VARCHAR(30) NOT NULL,
                        Adresse VARCHAR(70) NOT NULL,
                        numero VARCHAR(20) NOT NULL,
                        Mail VARCHAR(50) NOT NULL,
                        UNIQUE(Mail))";
                
                $dbco->exec($sql);
                echo 'Table créée !';
            }
            
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>
