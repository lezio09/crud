<?php
include 'db_connect.php';
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " - Nome: " . $row['nome'] . " - Usuário: " . $row['usuario'] . " - Email: " . $row['email'];
    echo "<form action='edit_user.php' method='POST' style='display:inline;'>
            <input type='hidden' name='id' value='" . $row['id'] . "'>
            <input type='text' name='nome' value='" . $row['nome'] . "' required>
            <input type='email' name='email' value='" . $row['email'] . "' required>
            <button type='submit' name='editar'>Editar</button>
          </form>";
    echo "<form action='delete_user.php' method='POST' style='display:inline;'>
            <input type='hidden' name='id' value='" . $row['id'] . "'>
            <button type='submit' name='remover'>Remover</button>
          </form><br>";
}
?>