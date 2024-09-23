<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>SEARCH</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12"><?php include "Navigation.php";?><br/><br/><br/></div>
        </div>
        <div class="row">
        <div class="col-sm-12"><img src="customLogo.jpg" alt="" title="" style="height: 350px; width:100%;"/></div>
        </div>
        <h1 class="text-center text-danger"><hr/>SEARCH THE DONORS</h1>
        <h1 class="text-center">BLOOD GROUP</h1>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 text-center">
            <form action="" method="$_GET">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                    <select class="form-select" name="bgroup" id="bgroup"  required>
                <option>SELECT</option>
                <option  value="A+" >A+</option>
                <option  value="A-" >A-</option>
                <option  value="B+" >B+</option>
                <option  value="B-" >B-</option>
                <option  value="AB+" >AB+</option>
                <option  value="AB-" >AB-</option>
                <option  value="O+" >O+</option>
                <option  value="O-" >O-</option>
            </select><br/>
            
                
                    </div>
                    <div class="col-sm-3"><input type="number" name="age" class="form-control" id="age" required/></div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center"><button type="submit" class="btn btn-danger">Search</button></div>
                </div>
            </form>
            <?php
            //create connection
            $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
            /*if(isset($_GET['search_by_id']))
            {
                $bgroup=$_GET['bgroup'];
                $stmt=$conn->prepare("select * from blooddonation where bgroup='$bgroup'");
                $query_run = mysqli_query($connection, $query);
                if(mysqli_num_rows($query_run)>0)
                {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        echo $row('name');
                    }
                }
                else
                {
                    echo"No Data Found";
                }
            }*/
            $stmt=$conn->prepare("select * from blooddonation where bgroup=:bgroup,age=:age");
            $stmt->bindValue(':bgroup',$_GET['bgroup']);
            $stmt->bindValue(':age',$_GET['age']);
            $stmt->execute();
            $blooddonations=$stmt->fetchAll();
            
            ?>
            <table class="table table-hover table-striped text-center table-bordered"style=" height:150px; overflow:scroll; ">

            <?php
            
                echo"<tr style='position:relative;'><td class='bg-danger text-light'>ID</td><td class='bg-danger text-light'>NAME</td><td class='bg-danger text-light'>BLOOD GROUP</td><td class='bg-danger text-light'>AGE</td><td class='bg-danger text-light'>WEIGHT</td><td class='bg-danger text-light'>LAST DONATION</td><td class='bg-danger text-light'>NUMBER</td><td class='bg-danger text-light'>ADDRESS</td></tr>";
                
                
                foreach ($blooddonations as $blooddonation)
                
                    {
                        echo'<tr>
                        <td class="bg-light ">'.$blooddonation['ID']."</td>
                        <td class='bg-light '>".$blooddonation['name']."</td>
                        <td class='bg-light '>".$blooddonation['bgroup']."</td>
                        <td class='bg-light '>".$blooddonation['age']."</td>
                        <td class='bg-light '>".$blooddonation['weight']."</td>
                        <td class='bg-light '>".$blooddonation['last']."</td>
                        <td class='bg-light '>".$blooddonation['number']."</td>
                        <td class='bg-light '>".$blooddonation['address']."</td>
                        
                        </tr>";
                    }
            ?>

            </table>
            </div>

            <div class="col-sm-1"></div>
        </div>
    </div>
</body>
</html>