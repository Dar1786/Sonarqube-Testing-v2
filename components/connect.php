<?php
$db_name = 'mysql:host=localhost;dbname=course_db';
$user_name = 'root';
$user_password = '';

$conn = new PDO('mysql:host=localhost;dbname=course_db', 'root', '');
    // $conn = mysqli_connect("localhost", "root", "", "cybercourse");

    function create_unique_id() {
        $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
        $rand = array();
        $length = strlen($str) - 1;
        for ($i = 0; $i < 20; $i++) {
            $n = mt_rand(0, $length);
            $rand[] = $str[$n];
        }
        return implode($rand);
    }
?>