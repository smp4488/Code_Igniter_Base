<?php

class Empty_model extends CI_Model{
  
  var $title = '';
  var $date_published = '';
  var $content = '';
  
  function __construct()
  {
      parent::__construct();
      
  }
  
  public function createEmpty(){
    
    $this->title   = $this->input->post('title');
    $this->date_published   = date('Y-m-d H:i:s');
    $this->content = $this->input->post('content');
    
    try 
    { 
      $this->load->database();
      $this->db->insert('blog_posts', $this); 
      
    }

    catch ( Exception $e )
    {
      show_error($e);
    }
    
    return true;
  }
  
  function deleteEmpty($emptyId){
    
    $this->db->where(array('id' => $blogPostId, 'author_id' =>$authorId));
    $this->db->delete('blog_posts');
    
  }
  
  public function getEmptyName(){
    return $this->title;
  }
  
  
}
?>
