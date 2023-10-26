<?php
include_once "../App/Model/conn.php";
include_once "../App/Model/ordemServico/ordemServicoDao.php";
$ordem = new connect\OrdemServicoDao();
?>
<html>
        <head>
                <title></title>
                <link rel="stylesheet" type="text/css" href="style.css"/>
        </head>
        <body>
                <h2 class="header-nome">Serviço</h2>
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
                                <td class="titulo-tabela">Descrição</td>
                                <td class="titulo-tabela">Valor</td>
                                <td class="titulo-tabela">Abertura</td>
                                <td class="titulo-tabela">Fechamento</td>
                                <td class="mod">Modificar</td>
                        </tr>
                        <?php foreach($ordem->read() as $c): ?>
                        <tr>
                                <td><?php echo $c['descricao']; ?></td>
                                <td><?php echo $c['valor']; ?></td>
                                <td><?php echo $c['data_abertura']; ?></td>
                                <td><?php echo $c['data_finalizacao']; ?></td>
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

