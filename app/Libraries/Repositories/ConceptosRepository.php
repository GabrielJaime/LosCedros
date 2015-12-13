<?php namespace LosCedros\Libraries\Repositories;

use LosCedros\Models\Conceptos;
use Bosnadev\Repositories\Eloquent\Repository;
use Schema;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ConceptosRepository extends Repository
{

    /**
    * Configure the Modeli
    *
    **/
    public function model()
    {
      return 'LosCedros\Models\Conceptos';
    }

	public function search($input)
    {
        $query = Conceptos::query();

        $columns = Schema::getColumnListing('conceptos');
        $attributes = array();

        foreach($columns as $attribute)
        {
            if(isset($input[$attribute]) and !empty($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] = $input[$attribute];
            }
            else
            {
                $attributes[$attribute] =  null;
            }
        }

        return [$query->get(), $attributes];
    }

    public function apiFindOrFail($codigo)
    {
        $model = $this->find($codigo);

        if(empty($model))
        {
            throw new HttpException(1001, "Conceptos not found");
        }

        return $model;
    }

    public function apiDeleteOrFail($codigo)
    {
        $model = $this->find($codigo);

        if(empty($model))
        {
            throw new HttpException(1001, "Conceptos not found");
        }

        return $model->delete();
    }
}
