<?php 
  
 namespace connect; 
  
 class LojaDao { 
  
     // a função Create está passando por parâmetro uma instância $p, que no index.php vamos passar depois os dados prontos 
     public function Create(Loja $p) { 
  
         // podemos passar os valores no VALUES como (?,?) e depois colocar em sequência a numeração para inserir no banco de dados  
         $sql = 'INSERT INTO loja (cnpj, telefone1, telefone2, cep, rua, bairro, numero, id) VALUES (?,?,?,?,?,?,?,?)'; 
  
         // $stmt está pegando a classe Conexao, e o método getConn() e usando uma função prepare(), passando como parâmetro o banco de dados, que é uma maneira rápida e segura de se trabalhar 
         $stmt = Conn::getConn()->prepare($sql); 
  
         // $p que está vindo como uma instância, para depois podermos acessar os dados que quisermos da classe Produto, basicamente só retornando o valor 
         $stmt->bindValue(1, $p->getCnpj()); 
         $stmt->bindValue(2, $p->getTelefone1()); 
         $stmt->bindValue(3, $p->getTelefone2()); 
         $stmt->bindValue(4, $p->getCep()); 
         $stmt->bindValue(5, $p->getRua()); 
         $stmt->bindValue(6, $p->getBairro()); 
         $stmt->bindValue(7, $p->getNumero()); 
         $stmt->bindValue(8, $p->getId()); 
  
         // depois usamos o execute() para fazer a query com o banco de dados   
         $stmt->execute(); 
     } 
  
     // a funcão Read vai ler todos os dados do banco de dados e depois repassá-los com a lógica usada abaixo 
     public function Read() { 
  
         $sql = 'SELECT * FROM loja'; 
         $stmt = Conn::getConn()->prepare($sql); 
         $stmt->execute(); 
  
         // RowCount é uma função do PDO, que retorna a quantidade de valores no banco de dados 
         if($stmt->rowCount() > 0): 
             // FetchAll é uma função que é retornado em forma de Array(). Isso vai ser retornado, caso haja valores no banco de dados 
             $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC); 
             return $resultado; 
         else: 
             // Caso não haja, irá retornar um array vazio 
             return []; 
         endif; 
  
  
     } 
  
     // Essa função irá atualizar uma linha específica no banco de dados 
     public function Update(Loja $p) { 
      
         $sql = 'UPDATE loja SET cnpj=?, telefone1=?, telefone2=?, cep=?, rua=?, bairro=?, numero=? WHERE id = ?'; 
  
         $stmt = Conn::getConn()->prepare($sql); 
  
         // aonde vai retornar os valores e atualizá-los
         $stmt->bindValue(1, $p->getCnpj()); 
         $stmt->bindValue(2, $p->getTelefone1()); 
         $stmt->bindValue(3, $p->getTelefone2()); 
         $stmt->bindValue(4, $p->getCep()); 
         $stmt->bindValue(5, $p->getRua()); 
         $stmt->bindValue(6, $p->getBairro()); 
         $stmt->bindValue(7, $p->getNumero()); 
         $stmt->bindValue(8, $p->getId()); 

         $stmt->execute(); 
  
     } 
  
     // A função que irá deletar os dados específicos de uma linha no banco de dados, passando como parâmetro um $id para específicar. Podemos também passar uma instância, como em Create e Update, para chamarmos $produtoDao->Delete($produto->getId($id)); 
     public function Delete($c) { 
  
         // Vamos deletar dessa forma a linha que queremos 
         $sql = 'DELETE FROM loja WHERE id = ?'; 
         $stmt = Conn::getConn()->prepare($sql); 
         $stmt->bindValue(1, $c); 
         $stmt->execute(); 
  
     } 
  
 }