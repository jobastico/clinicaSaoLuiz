<?php

    include_once 'conexao.php';

    class ServicoDAO {
        public function Inserir(Servico $ser) {
            try {

                if ((!empty($ser->getIdDepartamento())) && (!empty($ser->getNomeServico())) && (!empty($ser->getDescricao())) && (!empty($ser->getValor())) && (!empty($ser->getDuracao()))) {

                    $pdo = Conexao::getInstance();
                    $sql = $pdo->prepare("INSERT INTO servico VALUES (default,?,?,?,?,?)");
                    $sql->execute(array($ser->getIdDepartamento(), $ser->getNomeServico(), $ser->getDescricao(), $ser->getValor(), $ser->getDuracao()));

                    return true;

                } else {
                    return false;
                }

            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        public function Listar(){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM servico INNER JOIN departamento ON servico.id_departamento = departamento.id_departamento ORDER BY id_servico DESC");
                $sql->execute();
                $serInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $serInfo;
            }catch (PDOException $e){
                print $e->getMessage();
            }
        }
        public function Excluir($id){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("DELETE FROM servico WHERE id_servico = ?");
                $sql->execute(array($id));
                if ($sql->rowCount() == 1){
                    return true;
                } else {
                    return false;
                }
            }catch(PDOException $e){
                print $e->getMessage();
            }
        }
        public function Alterar($id, $nome, $dep, $dura, $val, $desc){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("UPDATE servico SET nome_servico = ?, id_departamento = ?, duracao = ?, valor = ?, descricao_servico = ? WHERE id_servico = ?");
                $sql->execute(array($nome, $dep, $dura, $val, $desc, $id));

                if ($sql->rowCount() == 1){
                    return true;
                } else {
                    return false;
                }
                
            }catch(PDOException $e){
                print $e->getMessage();
            }
        }
        public function pegaDuracao($id){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM servico WHERE id_servico = ?");
                $sql->execute(array($id));
                $serInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $serInfo;
            }catch(PDOException $e){
                print $e->getMessage();
            }
        }
    }

?>