<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('pesquisa.store')}}">
                @csrf
                <div class="mb-3">
                    <div class="form-group">
                        <select name="idade" class="custom-select" required>
                            <option value="">Selecione sua faixa de idade</option>
                            <option value="Ate 30 anos">Ate 30 anos</option>
                            <option value="De 30 a 50 anos">De 30 a 50 anos</option>
                            <option value="de 50 a 65 anos">de 50 a 65 anos</option>
                            <option value="acima de 65 anos">acima de 65 anos</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="custom-select" name="convenio" required>
                            <option value="">Selecione seu convenio</option>
                            <option value="INSS">INSS</option>
                            <option value="SIAPE">SIAPE</option>
                            <option value="Forcas Armadas">Forcas Armadas</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select  name="salario" class="custom-select" required>
                            <option value="">Selecione sua faixa salarial</option>
                            <option value="Ate 2 SM">Ate 2 SM</option>
                            <option value="de 2 a 4 SM">de 2 a 4 SM</option>
                            <option value="de 4 a 6 SM">de 4 a 6 SM</option>
                            <option value="Acima de 6 SM">Acima de 6 SM</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="motivo_emprestimo" class="custom-select" required>
                            <option value="">por que voce realizou o emprestimo ?</option>
                            <option value="Pagar Contas">Pagar Contas</option>
                            <option value="Reforma da casa">Reforma da casa</option>
                            <option value="Compra de carro">Compra de carro</option>
                            <option value="Outras">Outras</option>
                        </select>
                    </div>

                    <button type="submit" class="btn-primary">Enviar</button>
            </form>

        </div>
    </div>
</div>


</body>
</html>
