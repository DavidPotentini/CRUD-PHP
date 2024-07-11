<h1>Novo Aluno</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" namoe="aca" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label>Mensalidade</label>
        <input type="number" name="mensalidade" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label>Situação</label>
        <div class="form-check">
            <input type="checkbox" name="situacao" class="situacao">
            <label class="form-check-label" for="situacao">
                Ativo
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label>Observação</label>
        <input type="text" name="observacao" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>