<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class AdminsModel extends Model
{
    
	public $id;
	public $name;
	public $photo;
	public $email;
	public $password;
	public $created_at;
	public $updated_at;

}