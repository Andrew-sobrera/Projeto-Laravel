$('#tp_pessoa').change(() => {
    let tp_pessoa = $('#tp_pessoa').val()
    if(tp_pessoa == 'Física'){
        $('#razao_social').prop('disabled', true);
    }else if(tp_pessoa == 'Jurídica'){
        $('#sobrenome').prop('disabled', true);
        $('#razao_social').prop('disabled', false);
    }
})