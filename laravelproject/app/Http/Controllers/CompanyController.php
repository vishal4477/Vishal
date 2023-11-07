<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CompanyController extends Controller
{
    public function getdata()
    {
        return User::find(1)->CompanyData;
    }
}
