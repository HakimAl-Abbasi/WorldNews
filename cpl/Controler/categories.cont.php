<?php
@include('../includes/loader.inc.php');
@include('../Model/categoreis.mod.php');


class categories extends DB
{
    public function getAllCategory()
    {
        $model = new categories_mode();
        $sql = $model::GET_ALL_CATEGORIES;

        $db = $this->select($sql);
        return $db;
    }

    public function getCategoryId($id)
    {
        $model = new categories_mode();
        $sql = $model::GET_ALL_CATEGORIES_ID;
        $info = array('cat_id'=>$id);
        $db = $this->select($sql,$info);
        return $db;
    }


    public function getAllMainNamesCategories()
    {
        $model = new categories_mode();
        $sql = $model::GET_ALL_CATEGORIES_MAIN_PARENT;

        $db = $this->select($sql);
        return $db;
    }

    public function getAllSubNamesCategories()
    {
        $model = new categories_mode();
        $sql = $model::GET_ALL_CATEGORIES_SUB_PARENT;

        $db = $this->select($sql);
        return $db;
    }

    public function InsertIntoCategories($info)
    {

        $model = new categories_mode();

        $sql = $model::INSERT_ALL_CATEGORIES;

        $db = $this->insert($sql,$info);
        return$db;

    }

    public  function deleteCategory($id)
    {
        $model = new categories_mode();
        $sql = $model::DELETE_CATEGORIES_DATA;
        $info = array('cat_id'=>$id);
         $db =$this->delete($sql,$info);
         return $db;
    }



    public function UpdateCategory($id)
    {
        $model = new categories_mode();
        $sql = $model::UPDATE_CATEGORIES_ID;

        $db = $this->select($sql,$id);
        return $db;
    }
}





