<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $mensalidade = $_POST["mensalidade"];
            $senha = md5($_POST["senha"]);
            $situacao = isset($_POST["situacao"]) ? 1 : 0;
            $observacao = $_POST["observacao"];

            $sql = "INSERT INTO alunos(nome, email, telefone, mensalidade, senha, situacao, observacao)
            VALUES ('{$nome}', '{$email}', '{$telefone}', '{$mensalidade}', '{$senha}','{$situacao}', '{$observacao}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro realizado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel realizar o cadastro');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
            
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $mensalidade = $_POST["mensalidade"];
            $senha = md5($_POST["senha"]);
            $situacao = isset($_POST["situacao"]) ? 1 : 0;
            $observacao = $_POST["observacao"];

            $sql = "UPDATE alunos SET
                        nome='{$nome}',
                        email='{$email}',
                        telefone='{$telefone}',
                        mensalidade='{$mensalidade}',
                        senha = '{$senha}',
                        situacao = '{$situacao}',
                        observacao = '{$observacao}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res=$conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel realizar a edição');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM alunos WHERE id=".$_REQUEST["id"];

            $res=$conn->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel realizar a exclusão');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        }