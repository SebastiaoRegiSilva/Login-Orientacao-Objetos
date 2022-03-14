<?php
    class Usuario
    {
        private String $usuario;
        private String $senha;
        private String $nome;
        private String $tipoUsuario;
    
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

        public function setUsuario($senha)
        {
            $this->senha =$senha;
        }

        public function setUsuario($nome)
        {
            $this->nome =$nome;
        }

        public function setUsuario($tipoUsuario)
        {
            $this->tipoUsuario =$tipoUsuario;
        }
        
        // Construtor com parâmetros.
        public function __construct($usuario, $senha, $nome ,$tipoUsuario)
        {
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->nome = $nome;
            $this->tipoUsuario = $tipoUsuario;
        }
        
        // Demais funções da classe.
        public function ValidateAccess($usuario, $senha)
        {
            $usuario = $_POST['username'];
            $passwordMD5 = md5($_POST['pass']);
            $passWordEncript = crypt($senhaMD5, 'etec');

            if(isset($_POST['btnLogin']))
            {
                $senhaUser = crypt(md5($_POST['pass']), 'etec');
                if($_POST['username'] == $usuario && $senhaUser == $senhaEncript)
                {
                    $_SESSION['usuario'] = $_POST['username'];
                    
                    // Header ele faz o redirecionamento pra outra página.
                    header('Location: principal.php');
                }
                else
                {
                    header('Location: index.php?erro=1');
                }
            }
        }
    }
?>