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
    <title>View All Record</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?><br /><br /></div>
        </div>
        <div class="row">
            <div class="col-sm-12"><img src="images/customLogo.jpg" style="height: 350px; width:100%;" /></div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1 class="text-center text-danger "><u><i>DONOR</i></u> - <u><i>LIST</i></u></h1>
                <hr>
                <hr>
                <h4 class="text-center text-denger" style=" height:250px; overflow:scroll; ">
                    <?php
                //connection
                $conn=new PDO("mysql:host = localhost; dbname=KumarPiyush;" , "root" , "");
                
                $stmt=$conn->prepare("select * from blooddonation");

                $stmt->execute();
                $blooddonars=$stmt->fetchAll();
                ?>
                    <table class="table table-hover table-striped text-center table-bordered"
                        style=" height:600px; overflow:scroll; ">
                        <?php
                    echo"<tr style='position:relative;'><td class='bg-danger text-light'>ID</td><td class='bg-danger text-light'>NAME</td><td class='bg-danger text-light'>BLOOD GROUP</td><td class='bg-danger text-light'>GENDER</td><td class='bg-danger text-light'>AGE</td><td class='bg-danger text-light'>WEIGHT</td><td class='bg-danger text-light'>LAST DONATION</td><td class='bg-danger text-light'>NUMBER</td><td class='bg-danger text-light'>ADDRESS</td></tr>";
                
                        
                    foreach ($blooddonars as $blooddonor)
                        {                           
                            if($blooddonor['age']<20||$blooddonor['weight']<45)
                            $ct= 'bg-danger';
                            else
                            $ct='bg-light';

                            ?>
                        <tr class="<?=$ct?>">
                            <td><?=$blooddonor['ID']?></td>
                            <td><?=$blooddonor['name']?></td>
                            <td><?=$blooddonor['bgroup']?></td>
                            <td><?=$blooddonor['gender']?></td>
                            <td><?=$blooddonor['age']?></td>
                            <td><?=$blooddonor['weight']?></td>
                            <td><?=$blooddonor['last']?></td>
                            <td><?=$blooddonor['number']?></td>
                            <td><?=$blooddonor['address']?></td>
                        </tr>
                        <?php
                        }
                
            
                    ?>
                    </table>
                </h4>
                <hr>
                <hr>
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