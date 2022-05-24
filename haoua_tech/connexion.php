<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
        <?php
            $servname = 'localhost';
            $dbname = 'haoua_tech';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "INSERT INTO serveur(proprietaire,pays,Adresse,numero,Mail)
                        VALUES('ESCAE','Mali','Hamdallaye',',8300780,','eascae@escae.ml')";
                
                $dbco->exec($sql);
                echo 'Donnée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>
