<?php
    class Page 
    {
        public static $pages = ["main", "about", "filial", "balls", "login", "order", "profile", "register", "roads", "turnir", "ordered"];
        public $description = "";
        public $title = "Bowling";
        public $name;
        public function __construct()
        {
            $_GET['page'] ??= self::$pages[0];
            $this->name = $_GET['page'];
            $this->title = $this->name;
        }
        public function display() 
        {
            $this->loadHeader();
            $this->loadContent();
            $this->loadFooter();
        }
        private function loadHeader() 
        {
            require ('php/load-header.inc');
        }
        private function loadContent() 
        {
            include "php/pages/".$this->name.".php";
        }
        private function loadFooter() 
        {
            require ('php/load-footer.inc');
        }
    } 
?>