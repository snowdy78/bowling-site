<?php
    class Page 
    {
        static public $pages = array("main", "about", "filial", "balls", "login", "order", "profile", "register", "roads", "turnir");
        public $description = "";
        public $title = "Document";
        public $name;
        public function __construct() 
        {
            $this->name = isset($_GET['page']) ? $_GET['page'] : $this->pages[0];
            $this->title = $this->name;
        }
        public function display() 
        {
            $this->loadHeader();
            $this->loadContent();
            $this->loadFooter();
        }
        public function loadHeader() 
        {
            require ('php/load-header.inc');
        }
        public function loadContent() 
        {
            include "php/pages/".$this->name.".php";
        }
        public function loadFooter() 
        {
            require ('php/load-footer.inc');
        }
    } 
?>