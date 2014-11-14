<?php
class autocomplete extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('mautocomplete');
    }
    
    public function index(){
        $this->load->view('view_demo');
    }
    public function GetCountryName(){
        $keyword=$this->input->post('keyword');
        $data=$this->mautocomplete->GetRow($keyword);        
        echo json_encode($data);
    }
    
}
?>