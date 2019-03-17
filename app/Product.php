<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    protected $guarded = [];

    public function saveImage(Request $request)
    {
        $image = $request->file('main_image');
        $imageName = now().$image->getClientOriginalName();
        $imagePath = $image->move('admin-assets/productImages',$imageName);
        return $this->main_image = '../'.$imagePath->getPathname();
    }
}
