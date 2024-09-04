<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo de Consumo de Combustível</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Resultado do Cálculo de Consumo</h2>
            </div>
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    <h3 class="alert-heading">O valor total gasto será de</h3>
                    <ul class="list-unstyled">
                        <li><b>Gasolina:</b> R$ {{$valor}}</li>
                    </ul>
                </div>
                <a class="btn btn-primary" href="{{ URL('/') }}" role="button">Voltar</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
