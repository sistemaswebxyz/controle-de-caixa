const resource = (function() {
    return {
        init: function(method, url, data, callback) {
            var xhttp = new XMLHttpRequest(),
                response = {
                    data: null,
                    status: 0
                };

            xhttp.open(method, url, true);
            if (method == 'POST') {
                xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            }
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4) {
                    response.data = xhttp.responseText;
                    response.status = xhttp.status;
                    callback(response);
                }
            }
            xhttp.send(data);
        },
        get: function(url, data, callback) {
            this.init('GET', url, data, callback);
        },
        post: function(url, data, callback) {
            this.init('POST', url, data, callback);
        }
    }
})();
