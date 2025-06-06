<?php
include_once("templates/header.php");
?>
<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">EDITAR CONTATO</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">
        <div class="mb-3">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone">Telefone do contato:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"><?= $contact['observations'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">ATUALIZAR</button>
    </form>
</div>
<?php
include_once("templates/footer.php");
?>