<?php
include_once "../App/Model/conn.php";
include_once "../App/Model/funcionario/funcionarioDao.php";
$funcionario = new connect\FuncionarioDao();
?>
<html>
        <head>
                <title></title>
                <link rel="stylesheet" type="text/css" href="style.css"/>
        </head>
        <body>
                <h2 class="header-nome">Funcionário</h2>
                <div class="menu-acoes">
                <div>
                <ul class="menu">
                        <li><a href="#">Filtrar</a>
                        <ul>
                          <li><a href="#">Compras</a></li>
                          <li><a href="#">Ajuda Técnica</a></li>
                        </ul>
                        </li>
                </ul>
                </div>
                <div class="adicionar">
                <a href="adicionar.php?valor='cliente'">Adicionar</a>
                </div>
                </div>
                <div class="tabela-tab">
                <table class="tabela">
                        <tr>
                                <td class="titulo-tabela">Nome</td>
                                <td class="titulo-tabela">CPF</td>
				<td class="titulo-tabela">Telefone</td>
				<td class="">Salario</td>
                                <td class="mod">Modificar</td>
                        </tr>
                        <?php foreach($funcionario->read() as $c): ?>
                        <tr>
                                <td><?php echo $c['nome']; ?></td>
                                <td><?php echo $c['cpf']; ?></td>
				<td><?php echo $c['telefone']; ?></td>
				<td><?php echo $c['salario'];?></td>
                                <td class="modif">
                                        <a href="">editar</a>
                                        <hr>
                                        <a href="">apagar</a>
                                </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                </table>
                </div>
        </body>
</html>

