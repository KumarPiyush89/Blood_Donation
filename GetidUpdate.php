<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>GET ID</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?><br /><br /><br /></div>
        </div>
        <div class="row">
            <div class="col-sm-12"><img src="./images/customLogo.jpg" alt="" title=""
                    style="height: 350px; width:100%;" /></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="updaterecord.php" method="get"><br /><br /><br /><br />
                    <label class="form-label"> ID</label>
                    <input type="number" class="form-control" name="ID" required />
                    <input type="submit" class="btn btn-primary" value="Get Form" />
                </form>
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