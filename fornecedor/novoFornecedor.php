<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Novo Fornecedor</title>
        <script language="javascript" src="validar.js"></script>
    </head>
    
    <body>
        <div class="" id="">
            <form name="form" class="" method="post" action="inserirFornecedor.php">
                <fieldset><legend>Dados Básicos</legend>
                    <label for="rsocial">Razão Social</label> 
                    <input type="text" name="rsocial" id="rsocial"/><br/>

                    <label for="nfantasia">Nome Fantasia</label> 
                    <input type="text" name="nfantasia" id="nfantasia"/><br/>

                    <label for="cnpj">CNPJ</label> 
                    <input type="text" name="cnpj" id="cnpj"/><br/>
                    
                    <label for="descricao">Descrição</label> 
                    <input type="textarea" name="descricao" id="descricao"/><br/>
                </fieldset>
                
                <fieldset><legend>Endereço</legend>
                    <label for="estado">Estado</label> 
                    <input type="text" name="estado" id="estado"/><br/>

                    <label for="cidade">Cidade</label> 
                    <input type="text" name="cidade" id="cidade"/><br/>

                    <label for="cep">CEP</label> 
                    <input type="text" name="cep" id="cep"/><br/>

                    <label for="bairro">Bairro</label> 
                    <input type="text" name="bairro" id="bairro"/><br/>
                    
                    <label for="rua">Rua</label> 
                    <input type="text" name="rua" id="rua"/><br/>
                    
                    <label for="numero">Número</label> 
                    <input type="text" name="numero" id="numero"/><br/>
                    
                    <label for="complemento">Complemento</label> 
                    <input type="text" name="complemento" id="complemento"/><br/>
                </fieldset>
                
                <fieldset><legend>Contatos da Empresa</legend>                         
                    <label for="representante">Representante</label> 
                    <input type="text" name="representante" id="representante"/><br/>

                    <label for="telefone">Telefone</label> 
                    <input type="text" name="telefone" id="telefone"><br/>
                
                    <label for="celular">Celular</label> 
                    <input type="text" name="celular" id="celular"/><br/>
                
                    <label for="site">Site</label> 
                    <input type="text" name="site" id="site"/><br/>
                
                    <label for="email">Email</label> 
                    <input type="text" name="email" id="email"/><br/>
                </fieldset>
                
                <fieldset><legend>Dados Báncarios</legend>
                    <label for="banco">Banco</label> 
                    <input type="text" name="banco" id="banco"/><br/>
                    
                    <label for="agencia">Agência</label> 
                    <input type="text" name="agencia" id="agencia"/><br/>
                    
                    <label for="conta">Conta Corrente</label> 
                    <input type="text" name="conta" id="conta"/><br/>
                </fieldset>
   
                <button type="submit" name="button" id="button" onclick="return validar()">Gravar</button><br/>
                
            </form>

        </div>
    </body>
</html>
