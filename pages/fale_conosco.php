    
    <main>
        <article class="meio">
            <div class="espaco"></div>
            <p class="page-name">Fale Conosco</p>
                <form action="index.php?page=processar_fale" method="post" class="form-fale">
                    
                    <div class="row">
                        <div class="col">
                            <input type="text" name="ctnome" placeholder="Nome">
                            <input type="text" name="ctemail" placeholder="E-mail">
                            <input type="text" name="cttelefone" placeholder="Telefone">
                        </div>
                         
                        <div class="col">
                            <input type="text" name="ctassunto" placeholder="Assunto">
                            <textarea name="ctconteudo" cols="30" rows="5" placeholder="Conteúdo do e-mail"></textarea>
                        </div>
                    </div>
                    
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
                </form>
        </article>
    </main>
</body>
</html>