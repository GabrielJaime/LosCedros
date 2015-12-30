<?php namespace LosCedros\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Conceptos extends Model
{
    
	public $table = "conceptos";
    

	public $fillable = [
	    "id",
		"codigo",
		"detalle",
		"retencion",
		"familia",
		"haberdebe",
		"sumaresta",
		"for",
		"importe",
		"porcentaje",
		"por_sobre",
		"esfijo",
		"imp_por",
		"retencion1",
		"basico",
		"con_carga",
		"es_formula",
		"quefor",
		"ero1",
		"manual",
		"HBLF",
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
		"codigo" => "integer",
		"detalle" => "string",
		"retencion" => "string",
		"familia" => "string",
		"haberdebe" => "string",
		"sumaresta" => "string",
		"for" => "string",
		"por_sobre" => "string",
		"esfijo" => "string",
		"imp_por" => "string",
		"retencion1" => "string",
		"basico" => "string",
		"con_carga" => "string",
		"es_formula" => "string",
		"quefor" => "string",
		"ero1" => "integer",
		"manual" => "string",
		"HBLF" => "string"
    ];

	public static $rules = [
	    
	];

}
