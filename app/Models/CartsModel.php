<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class CartsModel extends Model
{
    
	public $id;
	public $product_id;
	public $customer_id;
	public $created_at;
	public $updated_at;

}