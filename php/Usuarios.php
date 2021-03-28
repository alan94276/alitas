<?php

    class Usuarios{
        private $id;
        private $nombre;
        private $apellido;
        private $correo;
        private $privilegio;
        private $status;

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getApellido()
        {
            return $this->apellido;
        }

        /**
         * @param mixed $apellido
         */
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        /**
         * @return mixed
         */
        public function getCorreo()
        {
            return $this->correo;
        }

        /**
         * @param mixed $correo
         */
        public function setCorreo($correo)
        {
            $this->correo = $correo;
        }

        /**
         * @return mixed
         */
        public function getPrivilegio()
        {
            return $this->privilegio;
        }

        /**
         * @param mixed $privilegio
         */
        public function setPrivilegio($privilegio)
        {
            $this->privilegio = $privilegio;
        }

        /**
         * @return mixed
         */
        public function getStatus()
        {
            return $this->status;
        }

        /**
         * @param mixed $status
         */
        public function setStatus($status)
        {
            $this->status = $status;
        }


    }