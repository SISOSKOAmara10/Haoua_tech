<!DOCTYPE html>
<html>
    <head>
      
        <meta charset='utf-8'>
    </head>
    <body>
          
        <?php
            $servname = "localhost"; $dbname = "haoua_tech"; $user = "root"; $pass = "";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "DELETE FROM serveur WHERE proprietaire='escae'";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                $count = $sth->rowCount();
                print('Données supprimé.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>
