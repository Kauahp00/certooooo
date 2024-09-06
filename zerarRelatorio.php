<!DOCTYPE html>
<html>
<head>
    <title>Excluir Todos os Registros</title>
</head>
<body>
    <h1>Excluir Todos os Registros</h1>

    <p>**Atenção:** Esta ação é irreversível. Todos os dados da tabela serão perdidos.</p>

    <form method="post">
        <button type="submit" name="delete" onclick="return confirm('Tem certeza que deseja deletar TODOS os registros? Esta ação é irreversível.');">Deletar Todos</button>
    </form>

    <?php
   // Connect to the database
include 'conexao.php';

    if(isset($_POST['delete'])) {
        // Consulta SQL para deletar todos os registros
        $sql = "DELETE FROM students";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Todos os registros foram deletados com sucesso.</p>";
        } else {
            echo "<p>Erro ao deletar registros: " . $conn->error . "</p>";
        }
    }

    $conn->close();
    ?>
</body>
</html>