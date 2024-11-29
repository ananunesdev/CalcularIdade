<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">"
    <title>Calcular Idade</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group mb-2">
            <label for="data_nascimento" class="form-label">Calculador de Idade</label><br>
                <label for="data_nascimento" class="form-label">Digite sua data de nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-info">Calcular Idade</button>
        </form>
    </div>

    <?php 
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            //Verificar se a data foi enviada
            if(!empty($_POST['data_nascimento'])){
                $dataNascimento = trim($_POST['data_nascimento']);
                $dataAtual = new DateTime();
                $dataNascimentoObj = new DateTime($dataNascimento);

                //Calcular a diferença entre elas
                $idade = $dataAtual -> diff($dataNascimentoObj) -> y;
                $meses = $dataAtual -> diff($dataNascimentoObj) -> m;
                $dias = $dataAtual -> diff($dataNascimentoObj) -> d;
                $horas = $dataAtual -> diff($dataNascimentoObj) -> h;
                $minutos = $dataAtual -> diff($dataNascimentoObj) -> i;

                echo "<h4>Sua idade: $idade anos, $meses meses, $dias dias, $horas horas e $minutos minutos.</h4>";

            }
        }else{
            echo "<h2>Por favor, insira uma data de nascimento válida.</h2>";
        }
    ?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>"
</body>
</html>