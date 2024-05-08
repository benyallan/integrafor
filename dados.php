<?php
// Conexão com o banco de dados
$db = new SQLite3('dados.db');

// Verifica se a conexão foi estabelecida com sucesso
if(!$db) {
    die('Não foi possível conectar ao banco de dados.');
}

// Verifica se os dados do formulário foram enviados
if(isset($_POST['nome'], $_POST['end'], $_POST['agenda'], $_POST['instalacao'], $_POST['manut'])) {
    // Limpa os dados do formulário
    $nome = SQLite3::escapeString($_POST['nome']);
    $end = SQLite3::escapeString($_POST['end']);
    $agenda = SQLite3::escapeString($_POST['agenda']);
    $instalacao = isset($_POST['instalacao']) ? 1 : 0;
    $manut = isset($_POST['manut']) ? 1 : 0;

    // Insere os dados no banco de dados
    $query = "INSERT INTO formulario (nome, endereco, agenda, instalacao, manutencao) VALUES ('$nome', '$end', '$agenda', '$instalacao', '$manut')";
    $result = $db->query($query);

    // Verifica se a inserção foi bem sucedida
    if($result) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados.";
    }
} else {
    echo "Todos os campos do formulário devem ser preenchidos.";
}

// Fecha a conexão com o banco de dados
$db->close();
?>

