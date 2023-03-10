<?php
$filename = "users.csv";
$delimiter = ",";
$username = $_POST['username'];
$password = $_POST['password'];
if (($handle = fopen($filename, "r")) !== false) {
        while (($data = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if ($data[0] === $username && $data[1] === $password) {
                        // Redirect to the success page
                        header("Location: success.php");
                        exit;
                }
        }
        fclose($handle);
}
// Redirect to the failed page
header("Location: failed.php");
exit;
?>
