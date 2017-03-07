var barCode = (function() {

    return {
        addInputField: function() {
            let listField = document.getElementById('listCodeBar'),
                field = document.createElement('DIV'),
                label = document.createElement('LABEL'),
                input = document.createElement('INPUT'),
                time = new Date().getTime(),
                text = document.createTextNode('Código de barras');

            label.setAttribute('for', time);
            label.appendChild(text);
            input.setAttribute('name', 'barCodes[]');
            input.setAttribute('id', time);


            field.appendChild(label);
            field.appendChild(input);
            listField.appendChild(field);

        }
    }
})();
