<?php
include 'databasePrint.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Export</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="print.css" media="print">
    </head>
    <body>
    <div class="containner">
        <div class="row">
            <div class="col-md-12">
                <h2>User Data</h2>
                <table class="table table-bordered">
                    <thead>
                    <th>Numero</th>
                    <th>Marque</th>
                    <th>Modele</th>
                    <th>Volume max</th>
                    </thead>
                    <tbody>
                        <?php
                            $reponse=$bdd->query("SELECT idMarque, marque, modele, volumeMax FROM typeCamion");
                            while($element=$reponse->fetch()){  
                        ?>
                        <tr>
                            <td><?php echo $element['idMarque']?></td>
                            <td><?php echo $element['marque']?></td>
                            <td><?php echo $element['modele']?></td>
                            <td><?php echo $element['volumeMax']?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="text-center">
                            <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>