<h1>Editar Aluno</h1>
<?php
    $sql = "SELECT * FROM alunos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" value="<?php print $row->telefone; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Mensalidade</label>
        <input type="number" name="mensalidade" value="<?php print $row->mensalidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Situação</label>
        <div class="form-check">
            <input type="checkbox" name="situacao" <?php if ($row->situacao == 1) echo 'checked'; ?> class="situacao">
            <label class="form-check-label" for="situacao">
                Ativo
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label>Observação</label>
        <input type="text" name="observacao" value="<?php print $row->observacao; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>