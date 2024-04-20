    
    <main>
        <article class="meio">
            <p class="page-name">Cadastro</p>
                <form action="index.php?page=processar_cadastro" method="post" class="form-cadastro">
                    <input type="text" name="ctnome" placeholder="Nome">
                    <div class="row">
                        <div class="col-1">

                            <input type="text" name="ctemail" placeholder="E-mail">
                            <input type="text" name="ctendereco" placeholder="Endereço">
                        </div>
                        <div class="col-2">
                            
                            <input type="password" name="ctsenha" placeholder="Senha">
                            <input type="text" name="ctcpf" placeholder="CPF">
                        </div>
                    </div>
                    
                    <input type="submit" value="Enviar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                    <a href="index.php?page=login">Já possui uma conta?</a>
                </form>
        </article>
    </main>
