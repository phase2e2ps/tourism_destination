<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    form {
        max-width: 600px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
    #message{
        height: 150px;
        resize: vertical;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #218838;
    }
</style>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "gers_db") OR die('connection error');

        //Initialize variables
        $id = $name = $email = $contact = $message = "";

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Fetch the existing data
            $sql = "SELECT * FROM contact_tb WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $id = $row['id'];
                $name = $row['name_tb'];
                $email = $row['email_tb'];
                $contact = $row['contact_tb'];
                $message = $row['message_tb'];
            } else {
                echo "No record found!";
            }
        }

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $message = $_POST['message'];

            // Update the record
            $sql = "UPDATE contact_tb SET name_tb='$name', email_tb='$email', contact_tb='$contact', message_tb='$message' WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully!";

                header("Location: ../admin/admin-dashboard.php");
                exit();
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    ?>
    <form action="" method="post">
        <h1>Update Admin-dashboard</h1>
            <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">

            <label for="name">Name:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
            <br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
            <br><br>

            <label for="phone">contact:</label>
            <input type="text" name="contact" value="<?= htmlspecialchars($contact) ?>">
            <br><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message"><?= htmlspecialchars($message) ?></textarea>

            <br><br>
            <button name="update" type="submit">Update</button>
    </form>
</body>

</html>