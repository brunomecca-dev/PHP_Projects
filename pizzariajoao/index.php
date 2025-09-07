<?php
include_once("templates/header.php");
include_once("process/pizza.php");
?>

<div id="main-banner">
    <h1>Faça seu Pedido</h1>
</div>

<div id="main-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 neon-box">
                <h2>Monte a Pizza como Desejar:</h2>
                <form action="process/pizza.php" method="POST" id="pizza-form">
                    <div class="form-group">
                        <label for="borda">Borda:</label>
                        <select name="borda" id="borda" class="form-control neon-select">
                            <option value="">Selecione a Borda</option>
                            <?php foreach ($bordas as $borda) : ?>
                                <option value="<?= $borda["id"] ?>"><?= $borda["tipo"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tamanhos">Tamanhos:</label>
                        <select name="tamanhos" id="tamanhos" class="form-control neon-select">
                            <option value="">Selecione o Tamanho</option>
                            <?php foreach ($tamanhos as $tamanho) : ?>
                                <option value="<?= $tamanho["id"] ?>"><?= $tamanho["tipo"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sabores">Sabores: <small>(Máximo 4)</small></label>
                        <select multiple name="sabores[]" id="sabores" class="form-control neon-select">
                            <?php foreach ($sabores as $sabor) : ?>
                                <option value="<?= $sabor["id"] ?>"><?= $sabor["nome"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group text-center mt-4">
                        <input type="submit" class="btn btn-primary neon-button" value="Fazer Pedido">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once("templates/footer.php");
?>