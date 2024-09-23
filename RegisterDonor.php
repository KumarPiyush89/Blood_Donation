<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="Registration1.css" />
    <title>Register Donor</title>

    <style>
    strong {
        text-shadow: 4px 4px 4px black;
        color: red;
    }
    </style>
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
            <div class="col-sm-12 text-center">
                <h1><b><strong><u>DONOR</u> - <u>REGISTER</u></strong></b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 bg-light"></div>
            <div class="col-sm-4" style="background-image: url(download.png); background-repeat: no-repeat;">
                <form action="RegisterDonor.php" method="post" class=" text-center">

                    <div class="row">
                        <div class="col-sm-6 text-danger"><br /><br />
                            <label><b>
                                    <h4>Full Name: </h4>
                                </b></label><br /><br /><br />
                            <label><b>
                                    <h4>Blood Group: </h4>
                                </b></label><br /><br />
                            <label><b>
                                    <h4>Gender: </h4>
                                </b></label><br /><br /><br />
                            <label><b>
                                    <h4>Age: </h4>
                                </b></label><br /><br />
                            <label><b>
                                    <h4>Weight: </h4>
                                </b></label><br /><br />
                            <label><b>
                                    <h4>Last Donation: </h4>
                                </b></label><br /><br /><br />
                            <label><b>
                                    <h4>Phone Number: </h4>
                                </b></label><br /><br />
                            <label><b>
                                    <h4>Address: </h4>
                                </b></label>
                        </div>
                        <div class="col-sm-6"><br /><br />
                            <input type="text" class="form-control" name="name" id="name" /><br /><br />
                            <select class="form-select" name="bgroup">
                                <option type="radio" value="A+">A+</option>
                                <option type="radio" value="A-">A-</option>
                                <option type="radio" value="B+">B+</option>
                                <option type="radio" value="B-">B-</option>
                                <option type="radio" value="AB+">AB+</option>
                                <option type="radio" value="AB-">AB-</option>
                                <option type="radio" value="O+">O+</option>
                                <option type="radio" value="O-">O-</option>
                            </select><br />
                            <input type="radio" name="gender" value="male" checked><label>Male</label>
                            <input type="radio" name="gender" value="female"><label>Female</label><br />
                            <input type="radio" name="gender" value="third"><label>Third Gender</label><br /><br />
                            <input type="number" name="age" id="age" class="form-control" /><br />
                            <input type="number" name="weight" id="weight" class="form-control" /><br />
                            <input type="date" name="last" id="last" class="form-control" /><br /><br />
                            <input type="number" name="number" id="number" class="form-control" /><br />
                            <input type="address" name="address" id="address" class="form-control" /><br />

                        </div>
                        <div class="row">
                            <div class="col-sm-6"><input type="reset" class="btn btn-danger" /></div>
                            <div class="col-sm-6"><input type="submit" class="btn btn-success" /></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4 bg-light"></div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                // Create a new PDO connection to the MySQL database
                $conn = new PDO("mysql:host=localhost;dbname=KumarPiyush", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Create a prepared statement to insert data into the blooddonation table
                $stmt = $conn->prepare("
                    INSERT INTO blooddonation(name, bgroup, gender, age, weight, last, number, address) 
                    VALUES(:name, :bgroup, :gender, :age, :weight, :last, :number, :address)
                ");

                // Check if form fields are set before binding values
                $stmt->bindValue(':name', isset($_POST['name']) ? $_POST['name'] : null);
                $stmt->bindValue(':bgroup', isset($_POST['bgroup']) ? $_POST['bgroup'] : null);
                $stmt->bindValue(':gender', isset($_POST['gender']) ? $_POST['gender'] : null);
                $stmt->bindValue(':age', isset($_POST['age']) ? $_POST['age'] : null);
                $stmt->bindValue(':weight', isset($_POST['weight']) ? $_POST['weight'] : null);
                $stmt->bindValue(':last', isset($_POST['last']) ? $_POST['last'] : null);
                $stmt->bindValue(':number', isset($_POST['number']) ? $_POST['number'] : null);
                $stmt->bindValue(':address', isset($_POST['address']) ? $_POST['address'] : null);

                // Execute the prepared statement
                $stmt->execute();

                // Confirmation message after successful insertion
                echo "<h4 class='text-center text-success'>Data successfully inserted!</h4>";
            } catch (Exception $e) {
                // Display error message in case of exception
                echo "<h1 class='text-center text-danger'>Error: " . $e->getMessage() . "</h1>";
            }
        } else {
            echo "<h4 class='text-center text-dark'>Please submit the form.</h4>";
        }
        ?>
                </div>
                <div class="col-sm-4"></div>
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