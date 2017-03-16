const login = (function() {
    var lg = {
        data: {
            user: '',
            passwd: ''
        },
        doLogin: function() {
            lg.user = document.getElementById('user').value.trim();
            lg.passwd = document.getElementById('passwd').value.trim();

            resource.post('login/autentica.php', JSON.stringify(lg), function(response) {
                if (response.status == 401) {
                    let alert = document.querySelector('#alert');
                    alert.setAttribute('class', 'alert-danger');
                    alert.innerHTML = "<strong>Atenção:</strong>&nbsp;Autenticação falhou";
                    return false;
                }
                location.href = response.data;
            });
        }
    };

    return lg

})();
