<?php
  include '../config/db.php';
  $con = conDB();
  $sql = "SELECT * FROM tb_fornecedor WHERE cnpj = ". $_GET['code'];
  $query = $con->query($sql);
  $dados = $query->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <script language="javascript" src="validar.js"></script>
    <meta charset="utf-8">
    <title>Editando Fornecedor</title>
    <style>
    form {
      display: inline;
    }
    </style>
  </head>

    <h3>Editar Fornecedor: <?=$dados->nfantasia?></h3>
    <form name="form" method="post" action="editaFornecedor.php">
                <fieldset><legend>Dados Básicos</legend>
                    <label for="iempresa">Razão Social</label>
                    <input type="text" name="rsocial" id="rsocial" value="<?=$dados->rsocial?>"/><br/>

                    <label for="infantasia">Nome Fantasia</label>
                    <input type="text" name="nfantasia" id="nfantasia" value="<?=$dados->nfantasia?>"/><br/>

                    <label for="icnpj">CNPJ</label>
                    <input type="text" name="cnpj" id="cnpj" value="<?=$dados->cnpj?>"/><br/>

                    <label for="idescricao">Descrição</label>
                    <input type="textarea" name="descricao" id="descricao" value="<?=$dados->descricao?>"/><br/>
                </fieldset>

                <fieldset><legend>Endereço</legend>
                    <label for="iestado">Estado</label>
                    <input type="text" name="estado" id="estado" value="<?=$dados->estado?>"/><br/>

                    <label for="icidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" value="<?=$dados->cidade?>"/><br/>

                    <label for="icep">CEP</label>
                    <input type="text" name="cep" id="cep" value="<?=$dados->cep?>"/><br/>

                    <label for="iendereco">Bairro</label>
                    <input type="text" name="bairro" id="bairro" value="<?=$dados->bairro?>"/><br/>

                    <label for="iendereco">Rua</label>
                    <input type="text" name="rua" id="rua" value="<?=$dados->rua?>"/><br/>

                    <label for="iendereco">Número</label>
                    <input type="text" name="numero" id="numero" value="<?=$dados->numero?>"/><br/>

                    <label for="iendereco">Complemento</label>
                    <input type="text" name="complemento" id="complemento" value="<?=$dados->complemento?>"/><br/>
                </fieldset>

                <fieldset><legend>Contatos da Empresa</legend>
                    <label for="inome">Representante</label>
                    <input type="text" name="representante" id="representante" value="<?=$dados->representante?>"/><br/>

                    <label for="itelefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" value="<?=$dados->telefone?>"/><br/>

                    <label for="icelular">Celular</label>
                    <input type="text" name="celular" id="celular" value="<?=$dados->celular?>"/><br/>

                    <label for="isite">Site</label>
                    <input type="text" name="site" id="site" value="<?=$dados->site?>"/><br/>

                    <label for="iemail">Email</label>
                    <input type="text" name="email" id="email" value="<?=$dados->email?>"/><br/>
                </fieldset>

                <fieldset><legend>Dados Báncarios</legend>
                    <label for="iemail">Banco</label>
                    <input type="text" name="banco" id="banco" value="<?=$dados->banco?>"/><br/>

                    <label for="iemail">Agência</label>
                    <input type="text" name="agencia" id="agencia" value="<?=$dados->agencia?>"/><br/>

                    <label for="iemail">Conta Corrente</label>
                    <input type="text" name="conta" id="conta" value="<?=$dados->conta?>"/><br/>
                </fieldset>

                <button type="submit" name="button" id="button" onclick="return validar()">Gravar</button><br/>

            </form>
</html>
