<?php

namespace connect;

class Relatorio {
	public function atendente() {
		$sql = "
			select funcionario.nome, count(nome) as contagem_vendas 
			from venda join atendente on venda.cod_atendente = atendente.cod 
			join funcionario on atendente.cod_func = funcionario.cod 
			group by funcionario.nome order by contagem_vendas desc limit 1;
		";
		
         	$stmt = Conn::getConn()->prepare($sql);
         	$stmt->execute();
         	// RowCount é uma função do PDO, que retorna a quantidade de valores no banco de dados 
         	if($stmt->rowCount() > 0): 
             		$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
             		return $resultado;
         	else:
             		// Caso não haja, irá retornar um array vazio 
             		return [];
        	endif;

	}
	public function servicosAssistente() {
		$sql = "
			select ordem_servico.cod, ordem_servico.descricao, funcionario.nome, ordem_servico.valor,			 aparelho.marca, aparelho.tipo 
			from 
			assistente, ordem_servico, funcionario, item, aparelho 
			where 
			assistente.cod = ordem_servico.cod_assistente and funcionario.cod = assistente.cod_func 
			and ordem_servico.cod = item.cod_ordem and item.cod_aparelho = aparelho.cod;
		";

                $stmt = Conn::getConn()->prepare($sql);
                $stmt->execute();
                // RowCount é uma função do PDO, que retorna a quantidade de valores no banco de dados
                if($stmt->rowCount() > 0):
                        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                        return $resultado;
                else:
                        // Caso não haja, irá retornar um array vazio
                        return [];
                endif;

	}

	public function inventario() {
		$sql = "
		select  
			fornecedor.cnpj,
			produto.quantidade,     
			acessorio.nome as nome_acessorio,     
			celular.marca as nome_celular 
		from  
			fornecedor join produto on fornecedor.cod = produto.cod_fornecedor     
			left join acessorio on produto.cod = acessorio.cod_produto     
			left join celular on produto.cod = celular.cod_produto;
		"; 
   		$stmt = Conn::getConn()->prepare($sql);
                $stmt->execute();
		
                if($stmt->rowCount() > 0):
                        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                        return $resultado;
                else:
                        return [];
                endif;

	}
}

