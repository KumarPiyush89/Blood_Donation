<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>UpdateRecord</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?><br /><br /><br /></div>
        </div>
        <div class="row">
            <div class="col-sm-12"><img src="images/customLogo.jpg" alt="" title=""
                    style="height: 350px; width:100%;" /></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php
            try
            {
                $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $stmt=$conn->prepare("update blooddonation set name=:name,bgroup=:bgroup,gender=:gender,age=:age,weight=:weight,last=:last,number=:number,address=:address where ID=:ID");

                //Bind Values to statements
                $stmt->bindValue(':ID',$_GET['ID'],PDO::PARAM_INT);
                $stmt->bindValue(':name',$_GET['name']);
                $stmt->bindValue(':bgroup',$_GET['bgroup']);
                $stmt->bindValue(':gender',$_GET['gender']);
                $stmt->bindValue(':age',$_GET['age']);
                $stmt->bindValue(':weight',$_GET['weight']);
                $stmt->bindValue(':last',$_GET['last']);
                $stmt->bindValue(':number',$_GET['number']);
                $stmt->bindValue(':address',$_GET['address']);

                //execute statement
                $stmt->execute();
                echo"<br /><br /><br /><br /><br /><h2 class='text-center'>Record Updated Successfully.&#128526;</h2> <br /><br /><br /><br /><br />";
            }
            catch(Exception $e)
            {
                echo '<h1 class="text-center text-danger">'.$ex->getMessage()."</h1>";

            }

            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Ensure the correct path to the Footer file -->
                <?php include "Footer.php"; ?>
            </div>
        </div>
    </div>
</body>

</html>