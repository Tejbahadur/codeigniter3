<?php
/**
 * Recipes model
 */
class Recipes_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function getAllRecipes()
  {
    $this->db->select("recipe_id,recipe_name,description");
    $query = $this->db->get("recipes");
    $recipe_response = array();
    foreach ($query->result() as $row) {
      $recipe_response['recipe_id'] = $row->recipe_id;
      $recipe_response['recipe_name'] = $row->recipe_name;
      $recipe_response['description'] = $row->description;
    }
    return $recipe_response;
  }
}
