<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../public/assets/css/styles.css">

        <title>Cadastro de Clientes</title>
    </head>
    
    <body>
            <h1>Cadastro de Clientes de supermercado</h1>
            <form action="#" method="POST">
                <label>Nome do cliente:</label>
                <input type="text" name="name" placeholder="Eliabe Mota">

                <label>Data de nascimento:</label>
                <input type="date" name="dt_nascimento">

                <label>CPF:</label>
                <input type="text" name="cpf" placeholder="123.456.789-98">

                <label>Cidade:</label>
                <input type="text" name="cidade" placeholder="Blumenau">

                <label>Celular:</label>
                <input type="number" name="celular" placeholder="49 9 8842 6048 ">
                <button>Cadastrar</button>
            </form>
            <?php
            
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $nome = $_POST['name'];
                $nascimento = $_POST['dt_nascimento'];
                $cpf = $_POST['cpf'];
                $cidade = $_POST['cidade'];
                echo "o form é post"
                echo "<p>$nome<p><br>";
                echo "<p>$nascimento<p><br>";
                echo "<p>$cpf<p><br>";
                echo "<p>$cidade<p><br>";
            }
            ?>
    </body>
</html>
