<<<<<<< HEAD
<?php
include_once("templates/header.php");
?>
<div id="main-banner">
    <h1>Faça seu Pedido</h1>
</div>
<div id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Monte a Pizza como Desejar:</h2>
                <form action="process/pizza.php" method="POST" id="pizza-form">
                    <div class="form-group">
                        <label for="borda">Borda:</label>
                        <select name="borda" id="borda" class="form-control">
                            <option value="">Selecione a Borda</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tamanhos">Tamanhos:</label>
                        <select name="tamanhos" id="tamanhos" class="form-control">
                            <option value="">Selecione o Tamanho</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sabores">Sabores: (Máximo 4)</label>
                        <select multiple name="sabores[]" id="sabores" class="form-control">
                            <option value="">Selecione o Sabor</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Fazer Pedido">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once("templates/footer.php");
?>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu Pedido!</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>TESTANDO</h1>
    <i class="fas fa-sync-alt"></i>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>
>>>>>>> 019037c70efe43c74177bae0e881e7c8b094babf
