<?php namespace LosCedros\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Conceptos extends Model
{
    
	public $table = "conceptos";
    

	public $fillable = [
	    "id",
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
		"1ero",
		"manual",
		"HBLF"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
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
		"manual" => "string",
		"HBLF" => "string"
    ];

	public static $rules = [
	    "id" => "required",
		"detalle" => "required",
		"retencion" => "required",
		"familia" => "required",
		"haberdebe" => "required",
		"sumaresta" => "required",
		"for" => "required",
		"por_sobre" => "required",
		"esfijo" => "required",
		"imp_por" => "required",
		"retencion1" => "required",
		"basico" => "required",
		"con_carga" => "required",
		"es_formula" => "required",
		"1ero" => "required",
		"manual" => "required",
		"HBLF" => "required"
	];

}
