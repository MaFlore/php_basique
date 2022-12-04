<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Formulaire</title>
    <style type="text/css">
        table{
            margin: 50px;
        }
        td{
            height: 40px;

        }
        input{

        box-sizing: border-box;

        border-radius: 9em;
        }
        #effet1{
            font-size: 20px;
            font-family: 'Trebuchet MS';
            font-weight: bold;
        }
        legend{
            font-weight: bold;  
            font-family: 'Trebuchet MS';
            font-size: 30px;
        }
    </style>
</head>
<body style="background-image: url('plage.jpeg'); margin: 100px;" >
<center>
    <form method="post" action="traitement.php">

   
        <legend>Formulaire D'embauche</legend>
        <!-- La balise Table pour formater l'affichage du formulaire -->
        <table>
            <tr>
                <td><label id="effet1" for="nom">Nom</label></td>
                <td><input type="text" placeholder="saisir votre nom" name="nom"/> </td>
            </tr>
            <tr>
                <td><label id="effet1" for="prenom">Prenom</label></td>
                <td><input type="text" placeholder="saisir votre prenom" name="prenom"/></td>
            </tr>
            <tr>
                <td><label id="effet1"for="email">Email</label></td>
                <td><input type="email" placeholder="saisir votre Email" name="email"/></td>
            </tr>
            <tr>
                <td id="effet1">Sexe</td>
                <!-- Les deux inputs radio doivent avoir le meme nom -->
                <td id="effet1">
                    Masculin <input type="radio" name="sexe" value="M" checked="checked">
                    Féminin <input type="radio" name="sexe" value="F">
                </td>
            </tr>
        
            <tr>
                <td><label>Pays</label></td>
                <td>
                    <select name="pays">
                        <option value="">Choisissez un pays</option>
                        <option value="Canada">Canada</option>
                        <option value="Togo">Togo</option>
                        <option value="Italie">Italie</option>
                    </select>
                </td>
            </tr>
            <tr id="effet1">
            <!-- l'utilisation l'attribut multiple permet le choix de plusieurs valeurs des options -->
                <td>Langages </td>
                <td>
                    <center>
                    <select  multiple="multiple" name="lang[]">
                        <option value="Java">Java</option>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="PHP">PHP</option>
                        <option value="PYTHON">Python</option>
                    </select>   
                    </center>
                    <!--(Pour faire plusieurs choix maintenir la touche CTRL enfoncée)-->
                </td>
            </tr>
        
            <tr id="effet1">
                <td><label>Domaines</label></td>
                <td><input  value="informatique" type="checkbox" name="domaine[]"> Informatique <input  value="Gestion" type="checkbox" name="domaine[]"> Gestion <input  value="pedagogie" type="checkbox" name="domaine[]" > Pédagogie</td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="2"><input type="submit" name="Envoyer" value="Envoyer"/>  <input type="reset" value="Annuler"/></td>
            </tr>
        </table>

    </form>
</center>
</body>
</html>