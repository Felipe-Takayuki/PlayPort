<main>
    <article class="meio">
        <p class="page-name">Dados Login</p>
        <div class="dados">
            <h1>Informações</h1>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['page']) && $_GET['page'] == 'processar_login') {
    $email = $_POST['ctemail'];
    $senha = $_POST['ctsenha'];
    echo "<p>E-mail: $email</p>";
    echo "<p>Senha: $senha</p>";
}
?>

        </div>
    </article>
</main>



