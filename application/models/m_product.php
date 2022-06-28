<?php
class m_product extends CI_Model {
    public function get_data(){
        return $this->db->get('product')->result_array();
    }
 public function get_category(){
     $this->db->where_in('id_category', '3');
     return $this->db->get('category_product');
 }   
}