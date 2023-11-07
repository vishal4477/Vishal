<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function AddData()
    {
        return view('/add');
    }
    public function SavaData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'email' => 'required|min:5',
            'category' => 'required|min:5',
        ]);
        if($validator->passes()) {
            $model = new Product();
            $model->name = $request->name;
            $model->email = $request->email;
            $model->category = $request->category;
            $model->save();
            return redirect('/add');
        } else {
            return redirect('/add')->withInput()->withErrors($validator);
        }
    }
}
