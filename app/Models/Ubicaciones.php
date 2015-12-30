<?php namespace LosCedros\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Ubicaciones extends Model
{
    
	public $table = "Ubicaciones";
    

	public $fillable = [
	    "id",
		"descripcion",
		"created_at",
		"updated_at"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
		"descripcion" => "string"
    ];

	public static $rules = [
	    
	];

}
