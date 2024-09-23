<?php
/*
it will accept user id and pwd from user and send it to server
server will validate the id and pwd
if valid the redirect to index.php
on failure display error message
*/

$err = "";
if(isset($_POST['username']))
{
    try
    {
        $con = new PDO("mysql:host=localhost;dbname=kumarpiyush", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $con->prepare("select * from userinfo where username=:username and pwd=:pwd");
        $stmt->bindValue(":username", $_POST['username']);
        $stmt->bindValue(":pwd", $_POST['pwd']);

        $stmt->execute();

        $recs = $stmt->fetchAll();

        if(count($recs)==1)
        {
            session_start();
            $_SESSION['id'] = $recs[0]['id'];
            //redirect to index page
            header("location:BloodDonation.php");
        }
        else
        {   
            
            $err = "Invalid id or password";
        }


    }catch(Exception $ex)
    {
        $err = $ex->getMessage();
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
        <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:500,700&amp;display=swap">
        <link rel="stylesheet" href="login.css" />
    </head>
    <body>
        <?php
        if($err!="")
        {
            echo '<h1 class="animate__animated animate__shakeY " style="color:red; text-align:center;">' . $err . '</h1>';
        }
        ?>
        <div class="segment">
            <h1><b><u>Log</u>in</b></h1>
        </div>
        <form action="login.php" method="post">
            <label><input type="text" name="username" placeholder="User Id" required/></label><br/>
            <label><input type="password" name="pwd" placeholder="Password" required/></label><br/>
            
            <button class="red" type="submit"><i class="icon ion-md-lock" ></i> Log in</button>
        
        <div class="segment">
            <button class="unit" type="button"><i class="icon ion-md-arrow-back"></i></button>
            <button class="unit" type="button"><i class="icon ion-md-bookmark"></i></button>
            <button class="unit" type="button"><i class="icon ion-md-settings"></i></button>
        </div>
        <div class="input-group">
            <label>
                <input type="text" placeholder="User Id" />
            </label>
            <button class="unit" ><i class="icon ion-md-search"></i></button>
        </div>
        </form>
    </body>
</html>