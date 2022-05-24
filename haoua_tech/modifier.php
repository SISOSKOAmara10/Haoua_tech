<!DOCTYPE html>
<html>
    <head>
                    
    </head>
    <body>
         
        <?php
            $servname = "localhost"; $dbname = "haoua_tech"; $user = "root"; $pass = "";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                //Crée la table Users
                $sql = "CREATE TABLE Users (
                  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  Prenom VARCHAR(30) NOT NULL,
                  Nom VARCHAR(30) NOT NULL,
                  Mail VARCHAR(50) NOT NULL
                )";
                $dbco->exec($sql);
                
                //On prépare la requête et on lie les paramètres
                $sth = $dbco->prepare("
                  INSERT INTO Users (Prenom, Nom, Mail)
                  VALUES (:prenom, :nom, :mail)
                ");
                $sth->bindParam(':prenom', $prenom);
                $sth->bindParam(':nom', $nom);
                $sh->bindParam(':mail', $mail);
                
                //Insère une première entrée
                $prenom = "Aliou"; $nom = "Coulibaly"; $mail = "aliuoucoulibaly@yahoo.com";
                $sth->execute();
                
                //Insère une deuxième entrée
                $prenom = "Sadio"; $nom = "Camara"; $mail = "camara1sadd@yahoo.com";
                $sth->execute();
                
                //Insère une troisième entrée
                $prenom = "Kanoute"; $nom = "Aliou"; $mail = "kanoute.a@gmail.com";
                $sth->execute();
                echo "Bravo";
                }                
                           
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>
