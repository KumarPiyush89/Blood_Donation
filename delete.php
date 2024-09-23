<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeleteDonor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php include "Navigation.php"; ?><br /><br /><br />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <img src="images/customLogo.jpg" alt="" title="" style="height: 350px; width:100%;" />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php
// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    // Get the donor ID from the URL
    $id = $_GET['id'];

    // Establish a connection to the database
    try {
        $conn = new PDO("mysql:host=localhost;dbname=KumarPiyush;", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the DELETE statement
        $stmt = $conn->prepare("DELETE FROM blooddonation WHERE ID = :id");

        // Bind the ID parameter to the prepared statement
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect back to the donor list page after deletion
            header("Location: DeleteDonor.php");
            exit();
        } else {
            echo "Error deleting the record.";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    echo "Invalid ID.";
}
?>

            </div>
        </div>
    </div>

</body>

</html>