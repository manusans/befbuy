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
                    $product['bef_prd_name'] = $row->bef_prd_name;
                    $product['bef_prd_rate'] = $this->getProductRate( $row->bef_prd_id);
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

public function getProductRate($product_id){ // return the product rate average
    $sum = 0;
    $avg = 0;
    $query = $this->db->query("SELECT bef_rev_rate FROM `review` WHERE bef_prd_id = $product_id");
    if ($query->num_rows() > 0)
    {
        foreach ($query->result() as $row)
        {
            $sum += $row->bef_rev_rate;
        }
        $avg = $sum / ($query->num_rows());
    }
    return $avg;
}

#get and returns all product info
public function get_product_info($product_id){
            $query = $this->db->query("SELECT * FROM `product` WHERE bef_prd_id = $product_id");
             if ($query->num_rows() > 0)
                    {
                        foreach ($query->result() as $row)
                        {
                                $product['bef_prd_id']=$row->bef_prd_id;
                                $product['bef_prd_name']=$row->bef_prd_name;
                                $product['bef_prd_description']=$row->bef_prd_description;
                                $product['bef_prd_rate'] = $this->getProductRate( $row->bef_prd_id);
                        }
                    }
                    return $product;
}

#get and returns all product info
public function get_product_reviews($product_id){
    $reviews = array();
    $reviews['bef_rate_count'] = array(0,0,0,0,0,0);//contain the count of reviews rated with [0], [1], [2], [3], [4] ,[5] stars

    $query = $this->db->query("SELECT * FROM `review` where bef_prd_id = $product_id");
    if($query->num_rows() > 0)
    {
        foreach($query->result() as $row)
        {

            $review['bef_rev_id'] = $row->bef_rev_id;
            $review['bef_rev_title'] = $row->bef_rev_title;
            $review['bef_rev_content'] = $row->bef_rev_content;
            $review['bef_rev_rate'] = $row->bef_rev_rate;
            $review['bef_usr_id'] = $row->bef_usr_id;
            $review['bef_rev_date'] = $row->bef_rev_date;
            $reviews['bef_rate_count'][$row->bef_rev_rate] += 1;

            array_push($reviews, $review);
        }
    }
    return $reviews;
}

}