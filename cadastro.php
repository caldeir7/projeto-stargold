<?php require"inc/cabecalho.php" ?>

<div id="formu-cont">
    <form action="" method="post" id="cadrastro-cliente" name="">

        <div class="container-cad">
            <div class="campos-cad">
                <label for="nome">Nome Completo</label>
                <input class="" type="text" id="nome" name="nome" required placeholder="Digite Seu Nome Completo">
            </div>
            <div class="campos-cad">
                <label for="email">E-mail:</label>
                <input class="" type="email" id="email" name="email" required placeholder="Digite seu Email">
            </div>
            <div class="campos-cad">
                <label for="cpf">CPF</label>
                <input class="" type="text" id="cpf" name="cpf" required placeholder="Digite seu CPF">
            </div>
            <div class="campos-cad">
                <label for="datanasc">Data de Nascimento</label>
                <input class="" type="date" id="datanasc" name="datanasc" required>
            </div>
            <div class="campos-cad">
                <!-- innput tip radio o name tem que ser igual pra todos e o id tem que ser diferente pra cada um  -->
                <div class="sex">
                    <p>Sexo:</p>
                    <input value="Masculino" type="radio" name="sexo" id="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input value="Feminino" type="radio" name="sexo" id="masculino" required>
                    <label for="masculino">Masculino</label>
                </div>
            </div>
            <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
            <div class="campos-cad">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" maxlength="9" required placeholder="Digite seu CEP">
                <button id="localizar-cep">Localizar</button>
                <b id="status"></b>
            </div>
            <div class="campos-cad">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" size="30">
            </div>
            <div class="campos-cad">
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro">
            </div>
            <div class="campos-cad">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade">
            </div>
            <div class="campos-cad">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado">
            </div>
                <!-- /FIM HTML PARA CEP/ENDEREÇO -->
            <div class="campos-cad">
            <label for="senha">Senha:</label>
            <input class="" type="password" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <button class="cadastro-buto" name="entrar" type="submit">Efetuar Cadastro</button>
        </div>
    </form>
</div>



<?php
require "inc/rodape.php";
?>