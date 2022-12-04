<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body{
            background-image: url('tissu.jpg');
        }
        button:hover{
        background-color:purple;
        color:white;}
        h2{
            text-align:center;
        }
       body{background-color:rgba(0,0,0,0.5);;
    } 
    </style>
<body>
    <center>
    <?php 
         try{
            $base=new PDO('mysql:host=localhost;dbname=etudiant;charset=utf8','root', '');
        }
        catch(Exception $e){
            die('Erreur connexion non reussi'.$e->getMessage());
        }?>
     
        <h2>LISTE DES ETUDIANTS</h2>
        <button><a href="FORMULAIRE_AJOUT.php">Ajouter</a></button>
        
        <table border="1px">
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Sexe</th>
                        <th>E-mail</th>
                        <th>mot de passe</th>
                        <th>contact</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                $etudiant=$base->query("SELECT * FROM ETUDIANT");
                while($element=$etudiant->fetch()){
                ?>
            <tr>
                <td><?php echo $element['idEtudiant']?></td>
                <td><?php echo $element['Nom']?></td>
                <td><?php echo $element['Prenom']?></td>
                <td><?php echo $element['Age']?></td>
                <td><?php echo $element['sexe']?></td>
                <td><?php echo $element['email']?></td>
                <td><?php echo $element['mot_de_passe']?></td>
                <td><?php echo $element['Contact']?></td>
                <td>
                <button> <a href="MODIFIER.php?idEtudiant=<?=$element ['idEtudiant']?>">Modifier</a></button>
                <button> <a href="SUPPRIMER.php?idEtudiant=<?=$element ['idEtudiant']?>">Supprimer</a></button>
                </td>
            </tr>
            <?php } ?>
            </table>
          
        
      </center>
</body>
</html>