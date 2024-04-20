<main>
    <article class="meio">
        <p class="page-name">Dados Cadastro</p>
        <div class="dados">
            <h1>Informações</h1>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['page']) && $_GET['page'] == 'processar_fale') {
    $nome = $_POST['ctnome'];
    $email = $_POST['ctemail'];
    $telefone = $_POST['cttelefone'];
    $assunto = $_POST['ctassunto'];
    $conteudo =  $_POST['ctconteudo'];
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telefone: $telefone</p>";
    echo "<p>Assunto: $assunto</p>";
    echo "<p>Conteúdo: $conteudo</p>";
}
?>

        </div>
    </article>
</main>



