<?php
// Set cookies with different delays using JavaScript
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<script>
        setTimeout(function() {
            document.cookie = 'firstname=' + encodeURIComponent('" . $_POST['firstname'] . "') + '; path=/';
        }, 10000);
        setTimeout(function() {
            document.cookie = 'middlename=' + encodeURIComponent('" . $_POST['middlename'] . "') + '; path=/';
        }, 20000);
        setTimeout(function() {
            document.cookie = 'lastname=' + encodeURIComponent('" . $_POST['lastname'] . "') + '; path=/';
        }, 30000);
        setTimeout(function() {
            window.location.href = 'show_cookies.php';
        }, 31000);
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Set Personal Info Cookies</title>
</head>
<body>
<h2>Enter Your Personal Information</h2>
<form method="POST">
    First Name: <input type="text" name="firstname"><br><br>
    Middle Name: <input type="text" name="middlename"><br><br>
    Last Name: <input type="text" name="lastname"><br><br>
    <input type="submit" value="Set Cookies">
</form>
</body>
</html>