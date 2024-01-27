<?php

class ArticleModel extends CI_Model{
    function fetch_all_articles(){
      $resultQuery =   $this->db->query("SELECT `blogid`, `blog_title`, `blog_desc`, `blog_img`, `status`, `created_on`, `updated_on`,`tag` FROM `articles` where `status`='1' ");
   
        return $resultQuery->result_array();        
    }

    function fetch_blog_detail($blog_id){
        $resultQuery =   $this->db->query("SELECT `blogid`, `blog_title`, `blog_desc`, `blog_img`, `status`, `created_on`, `updated_on`,`tag` FROM `articles` where `blogid`='$blog_id' ");
        return $resultQuery->result_array();        
    }

    function fetch_top_blog(){
        $resultQuery =   $this->db->query("SELECT * FROM `articles` ORDER BY `view` DESC LIMIT 5;");
        return $resultQuery->result_array();
    }

    function update_view_count($blog_id) {
        $this->db->set('view', 'view+1', FALSE);
        $this->db->where('blogid', $blog_id);
        $this->db->update('articles');
    }

}

?>