$(document).ready(function (){
    function verificaCampos(nome, cpf, email, senha, tele, sexo, data, cep, logra, num){
        if (nome == "" || cpf == "" || email == "" || senha == "" || tele == "" || sexo == "" || data == "" || cep == "" || logra == "" || num == ""){
            $('#message-result').empty();
            $('#message-result').prepend('<div class="alert alert-danger" role="alert">Preencha todos os campos!</div>');
            return false;
        } else {
            $('#message-result').empty();
            return true;
        }
    }

    $('#btn-cad-pac').click(function (){
        let nome = $('#nome').val();
        let cpf = $('#cpf').val();
        let email = $('#email').val();
        let senha = $('#senha').val();
        let tele = $('#telefone').val();
        let sexo = $('#sexo').val();
        let data = $('#data').val();
        let cep = $('#cep').val();
        let logra = $('#logradouro').val();
        let num = $('#numero').val();

        let res = verificaCampos(nome, cpf, email, senha, tele, sexo, data, cep, logra, num);

        if (res){
            $.ajax({
                url: '../Controller/cadastrar-paciente.php',
                method: 'POST',
                data: {nome: nome, cpf: cpf, email: email, senha: senha, telefone: tele, sexo: sexo, data: data, cep: cep, logradouro: logra, numero: num},
                dataType: 'json'
            }).done(function (result){
                console.log(result);
                if (result == "Paciente cadastrado com successo"){
                    $('#message-success').empty();
                    $('#message-success').prepend('<div class="alert alert-success" role="alert">'+ result +'</div>');
                    $("#form-cad-pac").trigger("reset");
                    $("#cad-pac-modal").modal('hide');
                    setTimeout(() => {
                        $("#message-success").fadeOut("Slow");
                    }, 1500);
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                } else {
                    $('#message-result').empty();
                    $('#message-result').prepend('<div class="alert alert-danger" role="alert">'+ result +'</div>');
                }
            });
        } else {
            console.log("erro");
        }
    })
});