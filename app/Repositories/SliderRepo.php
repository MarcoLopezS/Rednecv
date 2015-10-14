<?php namespace Rednecv\Repositories;

use Rednecv\Entities\Slider;

class SliderRepo extends BaseRepo{

    public function getModel()
    {
        return new Slider;
    }

}