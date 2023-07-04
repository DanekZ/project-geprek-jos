<?php 
class Pesan_model {

   private $table = 'tbpesan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

   public function tambahPesanan($data){
      
     $query = "INSERT INTO tbpesan VALUES 
     ('', :nama, :nowa, :alamat, :geprekOri, :geprekKeju, :geprekMatah)";
     
      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('nowa', $data['nowa']);
      $this->db->bind('alamat',$data['alamat']);
      $this->db->bind('geprekOri', $data['geprek_original']);
      $this->db->bind('geprekKeju', $data['Ayam_Geprek_Keju']);
      $this->db->bind('geprekMatah', $data['Geprek_Sambel_Matah']);
      
      $this->db->execute();

      return $this->db->rowCount();
   }
}
 ?>