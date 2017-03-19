var reset = (function(){
  var obj = {};

  obj.doReset = function(){
    obj.n_senha = document.querySelector('#n_passwd').value;
    obj.c_senha = document.querySelector('#c_passwd').value;

    if(obj.n_senha !== obj.c_senha){
      alert('As senhas não conferem');
    }

    var qrStr = {
      n_senha:obj.n_senha,
      c_senha:obj.c_senha
    };
    resource.post('reset.senha.php',
      JSON.stringify(qrStr),
      function(response){
        document.getElementById('alert').innerHTML = response.data;
          console.log(response);
          if(response.status == 200){
            location.href = response.data;
          }
      });



  };

  return obj;
})();
