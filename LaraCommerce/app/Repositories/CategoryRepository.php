<?php
namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Str;
/**
 * Category Class
 */
class CategoryRepository
{
	
	public function getAllCategories()
	{
	    return Category::all();
	}
}