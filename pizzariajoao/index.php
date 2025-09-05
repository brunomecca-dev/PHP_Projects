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

