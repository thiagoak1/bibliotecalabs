

<?php

    class Conexao
    {
        /**
         * @var PDO
         */
        protected static $instance;

        /**
         * @var string
         */
        protected static $dsn = 'mysql:host=mysqllabs;dbname=mydb';

        /**
         * @var string
         */
        protected static $user = 'thiago';

        /**
         * @var string
         */
        protected static $pass = 'docker';

        /**
         *
         */
        public function __construct()
        {
            throw new Exception('Não instancie essa classe, use getInstance()');
        }

        /**
         * Esse metodo retorna a instancia do PDO
         */
        public static function getInstance()
        {
            if(!self::$instance) {
                self::$instance = new \PDO(
                    self::$dsn,
                    self::$user,
                    self::$pass
                );
            }

            return self::$instance;
        }
    }