function validar() {
    var cnpj = form.cnpj.value;
    var rsocial = form.rsocial.value;
    var nfantasia = form.nfantasia.value;
    var descricao = form.descricao.value;
    var telefone = form.telefone.value;
    var celular = form.celular.value;

    if (cnpj == "") {
        alert('Preencha o campo CNPJ');
        form.cnpj.focus();
        return false;
        }

    if (rsocial == "") {
        alert('Preencha o campo Razão Social');
        form.rsocial.focus();
        return false;
        }

    if (nfantasia == "") {
        alert('Preencha o campo Nome fantasia');
        form.nfantasia.focus();
        return false;
        }
                
    if (descricao == "") {
        alert('Preencha o campo Descrição');
        form.descricao.focus();
        return false;
        }
                
    if (telefone == "" && celular ==""){
    alert('Preencha pelo menos um número de contato');                   
    return false;
    }               
            
}