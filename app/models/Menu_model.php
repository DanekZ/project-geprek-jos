<?php 
class Menu_model {
   private $table = 'tbmenu';
   private $db;

   public function __construct()
   {
       $this->db = new Database;
   }

   public function getAllMenu()
   {
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet();
   } 
}
 ?>