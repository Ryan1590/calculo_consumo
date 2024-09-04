<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cálculo de Consumo de Combustível</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <main class="container mt-5">
        <div class="card mb-4">
            <div class="card-header">
                <h2>Instruções</h2>
            </div>
            <div class="card-body">
                <p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo, e com a distância determinada por você!</p>
                <p>Os combustíveis disponíveis para este cálculo são:</p>
                <ul>
                    <li><b>Gasolina - R$ 5,90</b></li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Cálculo do valor (R$) do consumo</h2>
            </div>
            <div class="card-body">
                <form action="{{ url('/gasto') }}" method="get">
                    <div class="form-group">
                        <label for="distancia">Distância em Quilômetros a ser percorrida</label>
                        <input type="number" class="form-control" id="distancia" name="distancia" required />
                    </div>
                    <div class="form-group">
                        <label for="autonomia">Consumo de combustível do veículo (Km/L)</label>
                        <input type="number" class="form-control" id="autonomia" name="autonomia" required />
                    </div>
                    <button class="btn btn-primary" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
