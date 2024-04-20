<main>
    <article class="meio">
        <p class="page-name">Dados Jogo</p>
        <div class="dados">
            <h1>Informações</h1>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['page']) && $_GET['page'] == 'processar_jogo') {
    $nome = $_POST['ctnome'];
    $descricao = $_POST['ctdescricao'];
    $genero = $_POST['ctgenero'];
    echo "<p>Nome: $nome</p>";
    echo "<p>Descrição: $descricao</p>";
    echo "<p>Genero: $genero </p>";
}
?>

        </div>
    </article>
</main>



