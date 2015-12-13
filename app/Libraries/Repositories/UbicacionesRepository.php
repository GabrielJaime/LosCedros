<?php namespace LosCedros\Libraries\Repositories;

use LosCedros\Models\Ubicaciones;
use Bosnadev\Repositories\Eloquent\Repository;
use Schema;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UbicacionesRepository extends Repository
{

    /**
    * Configure the Model
    *
    **/
    public function model()
    {
      return 'LosCedros\Models\Ubicaciones';
    }

	public function search($input)
    {
        $query = Ubicaciones::query();

        $columns = Schema::getColumnListing('ubicaciones');
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

    public function apiFindOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "Ubicaciones not found");
        }

        return $model;
    }

    public function apiDeleteOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "Ubicaciones not found");
        }

        return $model->delete();
    }
}
