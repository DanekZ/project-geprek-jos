<?php 
class Pesan extends Controller {
   public function index(){
      $data['judul'] = 'Pesan';
      $data['menu'] = $this->model('Menu_model')->getAllMenu();
      $this->view('templates/header', $data);
      $this->view('pesan/index', $data);
      $this->view('templates/footer');
   }

   public function pesanan(){
     
      if( $this->model('Pesan_model')->tambahPesanan($_POST) > 0 ) {
         echo "ok";
     } else {
      
     }
   }
}
 ?>