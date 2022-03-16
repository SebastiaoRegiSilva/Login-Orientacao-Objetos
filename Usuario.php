<?php
    class Usuario
    {
        private $usuario;
        private $senha;
        private $nome;
        private $tipoUsuario;
    
        // Usamos get para obter informações. Esse tipo de método sempre retorna um valor.
        public function getUsuario()
        {
            return $this->usuario;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getTipoUsuario()
        {
            return $this->tipoUsuario;
        }

        // Usamos set para definir valores. Esse tipo de método geralmente não retorna valores.
        public function setUsuario($usuario)
        {
            $this->usuario =$usuario;
        }

        public function setSenha($senha)
        {
            $this->senha =$senha;
        }

        public function setNome($nome)
        {
            $this->nome =$nome;
        }

        public function setTipoUsuario($tipoUsuario)
        {
            $this->tipoUsuario =$tipoUsuario;
        }
        
        // Construtor com parâmetros.
        public function __construct($usuario, $senha /*, $nome ,$tipoUsuario*/)
        {
            $this->usuario = $usuario;
            $this->senha = $senha;
            //$this->nome = $nome;
            //$this->tipoUsuario = $tipoUsuario;
        }
        
        // Demais funções da classe.

        public function ValidateAccess($usuario,  $senha)
        {
            ini_set('display_errors', 0 );
                error_reporting(0);

            $senhaUser = crypt(md5('12'),'etec');
            $passwordMD5 = md5($senha);
            $passwordEncript = crypt($passwordMD5, 'etec');

            if($usuario == 'juliana' && $senhaUser == $passwordEncript)
            {
                $_SESSION['usuario'] = $usuario;
                
                // Header ele faz o redirecionamento pra outra página.
                header('Location: principal.php');
            }
            else
                header('Location: index.php?erro=User or Passaword Falid');
        }
    }
?>