<?php namespace Rednecv\Repositories;

use Illuminate\Http\Request;

use Rednecv\Entities\PostHistory;

class PostHistoryRepo extends BaseRepo{

    public function getModel()
    {
        return new PostHistory;
    }

}