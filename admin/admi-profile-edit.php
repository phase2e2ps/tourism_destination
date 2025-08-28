<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <div class="inquiry-container">
        <h2>Edit Profile</h2>
        <form action="admin-profile-edit.php" method="post">
            <table>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Update Profile</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>