<main>
    <article class="meio">
        <p class="page-name">Dados Cadastro</p>
        <div class="dados">
            <h1>Informações</h1>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['page']) && $_GET['page'] == 'processar_cadastro') {
    $nome = $_POST['ctnome'];
    $email = $_POST['ctemail'];
    $endereco = $_POST['ctendereco'];
    $senha = $_POST['ctsenha'];
    $cpf =  $_POST['ctcpf'];
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Endereço: $endereco</p>";
    echo "<p>Senha: $senha</p>";
    echo "<p>CPF: $cpf</p>";
}
?>

        </div>
    </article>
</main>



