<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    echo "<h3>Спасибо, $name!</h3>";
    echo "<p>Мы получили ваше сообщение: $message</p>";
    echo "<p>Ответ придет на: $email</p>";
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Ваше имя" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <textarea name="message" placeholder="Сообщение" required></textarea><br>
    <button type="submit">Отправить</button>
</form>
