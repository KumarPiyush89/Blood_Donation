<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    ::-webkit-scrollbar {
        width: 20px;
    }

    ::-webkit-scrollbar-track {
        background: white;

    }

    ::-webkit-scrollbar-thumb {
        background: red;
    }
    </style>
    <script src="ViewScript.js"></script>
    <title>View All Record</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?><br /><br /><br /></div>
        </div>
        <div class="row">
            <div class="col-sm-12"><img src="images/customLogo.jpg" style="height: 350px; width:100%;" /></div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1 class="text-center text-danger"><u>DONOR LIST</u></h1>
                <h4 class="text-center text-denger" style=" height:450px; overflow:scroll; ">
                    <?php
                //connection
                $conn=new PDO("mysql:host = localhost; dbname=KumarPiyush;" , "root" , "");
                
                $stmt=$conn->prepare("select * from blooddonation");

                $stmt->execute();
                $blooddonation=$stmt->fetchAll();
                ?>
                    <table class="table table-hover table-striped text-center table-bordered"
                        style=" height:50%; overflow:scroll; ">
                        <?php
                    echo"<tr style='position:relative;'><td class='bg-danger text-light'>ID</td><td class='bg-danger text-light'>NAME</td><td class='bg-danger text-light'>BLOOD GROUP</td><td class='bg-danger text-light'>GENDER</td><td class='bg-danger text-light'>AGE</td><td class='bg-danger text-light'>WEIGHT</td><td class='bg-danger text-light'>LAST DONATION</td><td class='bg-danger text-light'>NUMBER</td><td class='bg-danger text-light'>ADDRESS</td><td class='bg-danger text-light'>UPDATE</td></tr>";
                    foreach ($blooddonation as $blooddonation)
                    {
                        echo'<tr>
                        <td class="bg-light ">'.$blooddonation['ID']."</td>
                        <td class='bg-light '>".$blooddonation['name']."</td>
                        <td class='bg-light '>".$blooddonation['bgroup']."</td>
                        <td class='bg-light '>".$blooddonation['gender']."</td>
                        <td class='bg-light '>".$blooddonation['age']."</td>
                        <td class='bg-light '>".$blooddonation['weight']."</td>
                        <td class='bg-light '>".$blooddonation['last']."</td>
                        <td class='bg-light '>".$blooddonation['number']."</td>
                        <td class='bg-light '>".$blooddonation['address']."</td>
                        <td class='btn btn-primary'><a href='updaterecord.php?id=".$blooddonation['ID']."'>Update</a></td><td></td>
                        </tr>";
                    }
                    
                    
                    ?>
                    </table>
                </h4>
            </div>
            <div class="col-sm-1"></div>
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