<?php 
namespace App\Models;
use App\Model;
class Categories extends Model{
protected string $table = 'categories';

protected $attributes = [
    "id" => 'int',
    "name" => 'string'
];
}
?>