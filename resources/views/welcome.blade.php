<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">

        <title>Cadastro de Clientes</title>
    </head>
    
    <body>
            <h1>Cadastro de Clientes</h1>
            <form action="{{ route('form_send') }}" method="post">
                @csrf
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
            
            if ($_SERVER['REQUEST_METHOD'] == "post") {
                $nome = $_POST['name'];
                $nascimento = $_POST['dt_nascimento'];
                $telefone = $_POST['telefone'];
                $cidade = $_POST['cidade'];
                echo "o form é post";
                echo "<p>$nome<p><br>";
                echo "<p>$nascimento<p><br>";
                echo "<p>$telefone<p><br>";
                echo "<p>$cidade<p><br>";
            }
            ?>

            <div class="table-result">
                <div class="tb-result-title bold">CADASTRO DE CLIENTS</div>
                <div class="bold">NOME</div>
                <div class="bold">NASCIMENTO</div>
                <div class="bold">CIDADE</div>
                <div class="bold">TELEFONE</div>
                <div class="bold">Editar</div>
                <div class="bold">Excluir</div>

                <!-- REGISTROS DE CLIENTES - EXEMPLO -->
                <div>Eliabe Mota</div>
                <div>26/01/2006</div>
                <div>Ponte Alta do Norte</div>
                <div>049 9 8842-6048</div>
                <div>&#9998;</div>
                <div>🗑</div>
                

                <!-- REGISTROS DE CLIENTES - EXEMPLO -->
                <div>Volni Pereira Mota</div>
                <div>28/07/1973</div>
                <div>Ponte Alta do Norte</div>
                <div>049 9 8847-7611</div>
                <div>&#9998;</div>
                <div>🗑</div>

                <!-- REGISTROS DE CLIENTES - EXEMPLO -->
                <div>Eden Mota</div>
                <div>28/11/1978</div>
                <div>Ponte Alta do Norte</div>
                <div>049 9 8896-7075</div>
                <div>&#9998;</div>
                <div>🗑</div>

            </div>
    </body>
</html>
