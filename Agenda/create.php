    <?php
    include_once("templates/header.php");
    ?>
    <div class="container">
        <?php include_once("templates/backbtn.php"); ?>
        <h1 id="main-title">Criando Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="mb-3">
                <label for="name">Nome do Contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do contato" required>
            </div>
            <div class="mb-3">
                <label for="phone">Telefone do Contato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
            </div>
            <div class="mb-3">
                <label for="observations">Observações:</label>
                <input type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3" required>
            </div>
            <button type="submit" class="btn btn-primary">Criar Contato</button>
        </form>
    </div>
    <?php
    include_once("templates/footer.php");
    ?>