<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Update Record</title>
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
            <div class="col-sm-4"><button class="btn btn-info"><a href="GetidUpdate.php">Update2</a></button></div>
            <div class="col-sm-4">
                <?php
            try
            {
                $conn=new PDO("mysql:host=localhost;dbname=KumarPiyush","root","");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                $stmt=$conn->prepare("select * from blooddonation where ID=:ID");
                $stmt->bindValue(':ID',$_GET['ID'],PDO::PARAM_INT);
                $stmt->execute();
                $rec=$stmt->fetch();
                if(empty($rec))
                {
                    echo"<h1>Sorry !!  Invalid Id</h1>";
                }
                else
                {
                    ?>
                <form action="Updatebloodrecord.php" method="get">
                    <div class="row">
                        <div class="col-sm-4 bg-light"></div>
                        <div class="col-sm-8"><br /><br /><label>ID</label>
                            <div class="input-field">
                                <input type="number" name="ID" class="form-control" value="<?=$rec['ID']?>"
                                    required /><br />
                            </div>
                            <div class="input-field">
                                <input type="text" placeholder="Name" name="name" class="form-control"
                                    value="<?=$rec['name']?>" required /><br />
                            </div>
                            <div class="input-field">
                                <select class="form-select" name="bgroup" value="<?=$rec['bgroup']?>">
                                    <option type="radio" value="A+">A+</option>
                                    <option type="radio" value="A-">A-</option>
                                    <option type="radio" value="B+">B+</option>
                                    <option type="radio" value="B-">B-</option>
                                    <option type="radio" value="AB+">AB+</option>
                                    <option type="radio" value="AB-">AB-</option>
                                    <option type="radio" value="O+">O+</option>
                                    <option type="radio" value="O-">O-</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <input type="radio" name="gender" value="<?=$rec['gender']?>"
                                    checked><label>Male</label>
                                <input type="radio" name="gender"
                                    value="<?=$rec['gender']?>"><label>Female</label><br />
                                <input type="radio" name="gender" value="<?=$rec['gender']?>"><label>Third
                                    Gender</label><br /><br />
                            </div>
                            <div class="input-field">
                                <input type="number" placeholder="Weight" name="weight" class="form-control"
                                    value="<?=$rec['weight']?>" required /><br />
                            </div>
                            <div class="input-field">
                                <input type="number" placeholder="Age" name="age" class="form-control"
                                    value="<?=$rec['age']?>" required /><br />
                            </div>
                            <div class="input-field">
                                <input type="text" placeholder="last" name="last" class="form-control"
                                    value="<?=$rec['last']?>" required /><br />
                            </div>
                            <div class="input-field">
                                <input type="number" placeholder="number" name="number" class="form-control"
                                    value="<?=$rec['number']?>" required /><br />
                            </div>
                            <div class="input-field">
                                <input type="address" placeholder="Adress" name="address" class="form-control"
                                    value="<?=$rec['address']?>" required /><br />
                            </div>
                            <div class="input-field">
                                <table>
                                    <tr>
                                        <td><input type="reset" class="btn btn-primary" /></td>
                                        <td><input type="submit" class="btn btn-primary" value="Update" /></td>
                                    </tr>
                                </table>
                                <!--<input type="reset" class="btn btn-primary"/><input type="submit" class="btn btn-primary" value="Update"/>-->
                            </div>
                        </div>
                </form>
                <?php
                }
            }catch(Exception $e)
            {

            }
            ?>
            </div>
            <div class="col-sm-4"></div>
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