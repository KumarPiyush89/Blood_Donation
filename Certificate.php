<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?></div><br/><br/><br/>
        </div>
        <div class="row"><div class="col-sm-12"><img src="images/customLogo.jpg"  style="height: 350px; width:100%;"/></div></div><br/><br/>
        <h1 class="text-center text-danger"><u><i>CERTIFICATE</i></u></h1>
        <?php
        $conn=new PDO("mysql:host = localhost; dbname=KumarPiyush;" , "root" , "");
                
        $stmt=$conn->prepare("select name,bgroup from blooddonation");

        $stmt->execute();
        $blooddonation=$stmt->fetchAll();
        ?>
        <table>
        <?php
        foreach ($blooddonation as $blooddonation)
        {
        echo"<tr>
            
            
            <div class='row'><br/><hr/>
            <div class='col-sm-12 text-center'><img src='images/image_2022_09_01T17_59_25_854Z.png'/></div>
            </div>
            <div class='row'>
                <div class='col-sm-1 '>.</div>
                <div class='col-sm-2 bg-secondary'>.</div>
                <div class='col-sm-7  text-danger text-center '><h1>
                
                <h2>
                <?php
                <td>Name&nbsp;&nbsp;<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$blooddonation['name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>&nbsp;&nbsp; &nbsp;Blood Group&nbsp;<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$blooddonation['bgroup']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                
                </h2>
                
                </div>
                
                <div class='col-sm-1 bg-secondary'>.</div>
                <div class='col-sm-1'></div>
            </div>
            <div class='row'>
            <div class='col-sm-12 text-center'><img src='images/image_2022_09_01T17_59_51_934Z.png' style='height:100%; weight:100%;'/></div>
            </div><br/><hr/><br/>
            <?php
        </tr>";
        }
        ?>
        </table>
    </div>    
</body>
</html>