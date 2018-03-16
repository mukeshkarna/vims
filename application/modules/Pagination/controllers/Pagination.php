<?php
class Pagination extends CI_Controller {
     
    public function __construct() {
        parent::__construct();
        $this->load->model('Pagination_model');
    }
     
    public function index() 
    {
        $pagination = "";
        $total_records =  $this->Pagination_model->posts_count(); //count number of records
         
        $page = 1;
        $num_rec_per_page = 3;
        $start_from = 0;
         
        if(isset($_GET['page']) && $_GET['page'] > 1)
        {
            $page  = $_GET["page"]; 
            $start_from = ($page-1) * $num_rec_per_page; 
            $previous  = $page-1;
            $next = $page+1;
        }
        else
        {
            $page  = 1; 
            $start_from = ($page-1) * $num_rec_per_page; 
            $previous  = $page-1;
            $next = $page+1;
        }
        if($total_records > $num_rec_per_page){
        $pagination = $this->Pagination_custom->paginationCustom($page,$start_from,$num_rec_per_page,$total_records,$previous,$next);
        }
        $data['userData'] = $this->load->Pagination_model->getAllPosts($start_from,$num_rec_per_page);
        $data['pagination'] = $pagination;
        $data['total_records']=$total_records;
        $this->load->view('Pagination/index',$data);        
    } 
}

?>