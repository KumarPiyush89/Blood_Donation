<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Delete Donor</title>
    <script>
    // JavaScript function to confirm before deleting the donor
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this donor?")) {
            // If the user confirms, redirect to delete.php with the donor's ID
            window.location.href = "delete.php?id=" + id;
            alert: "Donor delete Successfully";
        }
        // If the user clicks cancel, nothing happens (no redirection)
    }
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php"; ?><br /><br /><br /></div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <img src="images/customLogo.jpg" alt="" title="" style="height: 350px; width:100%;" />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <h1 class="text-center text-danger"><u>DONOR LIST</u></h1>
                <h4 class="text-center text-danger" style="height:450px; overflow:scroll;">
                    <?php
                        // Connection
                        $conn = new PDO("mysql:host=localhost;dbname=KumarPiyush;", "root", "");

                        // Fetch the data
                        $stmt = $conn->prepare("SELECT * FROM blooddonation");
                        $stmt->execute();
                        $blooddonation = $stmt->fetchAll();
                    ?>
                    <table class="table table-hover table-striped text-center table-bordered"
                        style="height:50%; overflow:scroll;">
                        <?php
                            echo "<tr style='position:relative;'><td class='bg-danger text-light'>ID</td>
                                  <td class='bg-danger text-light'>NAME</td>
                                  <td class='bg-danger text-light'>BLOOD GROUP</td>
                                  <td class='bg-danger text-light'>GENDER</td>
                                  <td class='bg-danger text-light'>AGE</td>
                                  <td class='bg-danger text-light'>WEIGHT</td>
                                  <td class='bg-danger text-light'>LAST DONATION</td>
                                  <td class='bg-danger text-light'>NUMBER</td>
                                  <td class='bg-danger text-light'>ADDRESS</td>
                                  
                                  <td class='bg-danger text-light'>DELETE</td></tr>";

                            // Loop through the donor data
                            foreach ($blooddonation as $donor) {
                                echo "<tr>
                                        <td class='bg-light'>{$donor['ID']}</td>
                                        <td class='bg-light'>{$donor['name']}</td>
                                        <td class='bg-light'>{$donor['bgroup']}</td>
                                        <td class='bg-light'>{$donor['gender']}</td>
                                        <td class='bg-light'>{$donor['age']}</td>
                                        <td class='bg-light'>{$donor['weight']}</td>
                                        <td class='bg-light'>{$donor['last']}</td>
                                        <td class='bg-light'>{$donor['number']}</td>
                                        <td class='bg-light'>{$donor['address']}</td>

                                        <td class='btn btn-danger'>
                                            <a href='#' onclick='confirmDelete({$donor['ID']});'>Delete</a>
                                        </td>
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