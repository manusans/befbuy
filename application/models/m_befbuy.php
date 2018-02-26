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


public function get_products_category($category){ // return all products for a category
    $products = array();
    $querySubCat = $this->db->query("SELECT bef_sub_id FROM `subcategory` WHERE bef_cat_id = $category ");//iter all subcategories in category
    if ($querySubCat->num_rows() > 0)
    {
        foreach ($querySubCat->result() as $row)
        {
            $queryProd = $this->db->query("SELECT * FROM `product` WHERE bef_sub_id = $row->bef_sub_id ");//iter all products in subcategory
            if ($queryProd->num_rows() > 0)
            {
                foreach ($queryProd->result() as $row)
                {
                    $product['bef_prd_id'] = $row->bef_prd_id;
                    $product['bef_prd_name'] = $row->bef_prd_id;
                    array_push($products, $product);
                }
            } 
        }
    }

    return $products;

}

public function get_subcategories($category){ // return all products for a category
    $subcategory = array();
    $querySubCat = $this->db->query("SELECT * FROM `subcategory` WHERE bef_cat_id = $category ");//iter all subcategories in category
    if ($querySubCat->num_rows() > 0)
    {
        foreach ($querySubCat->result() as $row)
        {
            
            $subcat['bef_sub_id'] = $row->bef_sub_id;
            $subcat['bef_sub_name'] = $row->bef_sub_name;
            array_push($subcategory, $subcat);
        }
    }
    return $subcategory;
}






}