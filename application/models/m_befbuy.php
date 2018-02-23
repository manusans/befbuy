<?php


Class M_befbuy extends CI_Model{

#get and returns all categories and categories info
public function get_categories(){
            $categories = array(); 
            $query = $this->db->query("SELECT * FROM `category`");
             if ($query->num_rows() > 0)
                    {
                        foreach ($query->result() as $row)
                        {
                                $category['bef_cat_id']=$row->bef_cat_id;
                                $category['bef_cat_name']=$row->bef_cat_name;
                                $category['bef_cat_description']=$row->bef_cat_description;
                                $category['bef_cat_image']=$row->bef_cat_image;
                                array_push($categories, $category);
                        }

                    }
                    return $categories;
        }

}