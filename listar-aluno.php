<h1>Listar Alunos</h1>
<?php
    $sql = "SELECT * FROM alunos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Telefone</th>";
            print "<th>Mensalidade</th>";
            print "<th>Situação</th>";
            print "<th>Observação</th>";
            print "<th>Açôes</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->mensalidade."</td>";
            print "<td>".$row->situacao."</td>";
            print "<td>".$row->observacao."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\"class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'> Nenhum resultado foi encontrado!</p>";
    }
?>