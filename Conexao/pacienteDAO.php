<?php

    include_once 'conexao.php';

    class PacienteDAO {
        public function Inserir(Paciente $pac) {
            try{

                if ((!empty($pac->getNome())) && (!empty($pac->getCpf())) && (!empty($pac->getEmail())) && (!empty($pac->getSenha())) && (!empty($pac->getTelefone())) && (!empty($pac->getDataNascimento())) && (!empty($pac->getLogradouro())) && (!empty($pac->getNumero())) && (!empty($pac->getCep())) && (!empty($pac->getSexo()))) {

                    $pdo = Conexao::getInstance();
    
                    $sql = $pdo->prepare("INSERT INTO `paciente` VALUE (default, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $sql->execute(array($pac->getNome(), $pac->getCpf(), $pac->getEmail(), md5($pac->getSenha()), $pac->getTelefone(), $pac->getDataNascimento(), $pac->getLogradouro(), $pac->getNumero(), $pac->getCep(),$pac->getSexo()));

                    if ($sql->rowCount() == 1){
                        return true;
                    } else {
                        return false;
                    }

                } else {
                    return false;
                }


            } catch (Exception $e) {
                print $e->getMessage();
            }
        }

        public function login($email, $senha) {
            try {

                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM paciente WHERE email = ? and senha = md5(?)");
                $sql->execute(array($email, $senha));

                $pacInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $pacInfo;

            } catch (Exception $e) {
                print $e->getMessage();
            }
        }
        public function Listar() {
            $pdo = Conexao::getInstance();
            $sql = $pdo->prepare("SELECT * FROM paciente ORDER BY id_paciente DESC");
            $sql->execute();
            $pacienteInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
            if ($pacienteInfo)
                return $pacienteInfo;
            else 
                return "erro!";
        }

        public function verificaCpf($cpf) {
            $pdo = Conexao::getInstance();
            $sql = $pdo->prepare("SELECT * FROM paciente WHERE cpf = ?");
            $sql->execute(array($cpf));
            $pacInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $pacInfo;
            
        }

        public function validaCpf($cpf){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM paciente WHERE cpf = ?");
                $sql->execute(array($cpf));
                $pacInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $pacInfo;
            }catch(PDOException $e){
                print $e->getMessage();
            }
        }

        public function validaEmail($email){
            try{
                $pdo = Conexao::getInstance();
                $sql = $pdo->prepare("SELECT * FROM paciente WHERE email = ?");
                $sql->execute(array($email));
                $pacInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $pacInfo;
            }catch(PDOException $e){
                print $e->getMessage();
            }
        }

    }

?>