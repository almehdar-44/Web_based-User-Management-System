<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
        form { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h2>Add User</h2>
    <form method="POST" action="submit.php">
        Name: <input type="text" name="name" required>
        Age: <input type="number" name="age" required>
        <input type="submit" value="Submit">
    </form>

    <div id="userTable">
        <?php include 'fetch.php'; ?>
    </div>

    <script>
        function toggleStatus(id) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "toggle.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onload = function () {
                if (this.status === 200) {
                    document.getElementById("userTable").innerHTML = this.responseText;
                }
            };
            xhr.send("id=" + id);
        }
    </script>
</body>
</html>
