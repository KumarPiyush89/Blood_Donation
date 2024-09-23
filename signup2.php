<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form action="signup2.php" method="get">
                <input type="text" placeholder="username" name="username"/>
                <label>password</label>
                <input type="password" placeholder="xxxxxxxx" name="pwd"/>
                <input type="submit" class="btn btn-success"/>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
            <?php




    try
    {
        $conn = new PDO("mysql:host=localhost;dbname=kumarpiyush", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt =$conn->prepare("insert into userinfo(username,pwd) values(:username,:pwd)");
        
        //Bind Values to statements
        $stmt->bindValue(':username',$_GET['username']);
        $stmt->bindValue(':pwd',$_GET['pwd']);
        /*$stmt = $con->prepare("select * from userinfo where username=:username and pwd=:pwd");
        $stmt->bindValue(":username", $_POST['username']);
        $stmt->bindValue(":pwd", $_POST['pwd']);
        */
        $stmt->execute();

        echo"<h1 class='text-center'>sussessfully</h1>";
    }
    catch(Exception $e)
    {
        echo"<h1>".$e->getMessage()."</h1>";
    }

?>
            </div>
        </div>
    </div>
</body>
</html>