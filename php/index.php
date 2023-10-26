<?php
include_once "App/Model/conn.php";
include_once "App/Model/relatorios.php";
$relatorio = new connect\Relatorio();

?>
<html>

	<head>
		<title>girltech</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>

	<body>
		<div class="cabecalho">
			<div class="cabecalho-titulo"><h1>Girl Tech</h1></div>
			<div class="cabecalho-menu">
				<div class="cabecalho-menu-func">
					<a href="menu/funcionario.php">Funcionários</a>
				</div>
				<div class="cabecalho-menu-clientes">
					<a href="menu/cliente.php">Clientes</a>
				</div>
				<div class="cabecalho-menu-serv">
					<a href="menu/servico.php">Serviços</a>
				</div>
			</div>			
		</div>

		<div class="principal">
			<div class="principal-bv">
			<?php
				// configurando a hora para exibir print personalizado
				$timezone = new DateTimeZone('America/Sao_Paulo');
				$agora = new DateTime('now', $timezone);
				$tempo = $agora->format('H');
				if ($tempo > 4 and $tempo < 13) echo "<h3>Bom dia!</h3>";
				else if ($tempo > 12 and $tempo < 18) echo "<h3>Boa tarde!</h3>";
				else echo "<h3>Boa noite!<h3>";
			?>
			</div>
			
			<div class="relatorio-nome">RELATÓRIOS</div>
			<div class="relatorios">
				<div class="relatorio-clientes">
					<div class="nome-relatorio">Atendentes com mais vendas feitas</div>
					<div class="relatorio-clientes-nomes">
						<div class="relatorio-clientes-nome-n">Nome</div>
						<div class="relatorio-clientes-servico-n">Vendas</div>
					</div>
					<table class="tabela1">
					<?php
					foreach ($relatorio->atendente() as $a):
					?>
					<tr>
						<td> 
							<?php
								echo $a['nome'];
							?>
						 </td>
						<td>
							<?php
								echo $a['contagem_vendas'];
							?>
						</td>
					</tr>
					<?php
					endforeach;
					?>
					</table>	
				</div>			
			
				<div class="relatorio-assistencia">
					<div class="nome-relatorio">Assistências Feitas</div>
					<div class="relatorio-assistencia-nomes">
						<div class="relatorio-assistencia-nome-n">Descrição</div>
						<div class="relatorio-assistencia-servico-n">Nome</div>
						<div class="relatorio-assistencia-valor-n">valor</div>
					</div>
					<div class="tabelaAssistencia">
					<table>
					<?php foreach($relatorio->servicosAssistente() as $s): ?>
						<tr>
							<td>
							<?php
								echo $s['descricao'];
							?>
							</td>
							<td>
							<?php
								echo $s['nome'];
							?>
							</td>
							<td>
							<?php
								echo $s['valor'];
							?>
							</td>
						</tr>
					<?php
					endforeach;
					?>
					</table>
					</div>
				</div>


				<div class="relatorio-aparelho">
					<div class="nome-relatorio">Inventário</div>
					<div class="relatorio-aparelho-nomes">
						<div class="relatorio-aparelho-nome-n">cnpj</div>
						<div class="relatorio-aparelho-servico-n">quantidade</div>
						<div>acessorio</div>
						<div>celular</div>
					</div>
					<table>
					<?php
					foreach ($relatorio->inventario() as $r):
					?>
						<tr>
							<td><?php echo $r['cnpj']; ?><td>
							<td><?php echo $r['quantidade']; ?><td>
							<td><?php echo $r['nome_acessorio'] ?><td>
							<td><?php echo $r['nome_celular'] ?></td>
						<tr>
					<?php
					endforeach;
					?>
					</table>
				</div>

			</div>
		</div>		

	</body>

</html>
