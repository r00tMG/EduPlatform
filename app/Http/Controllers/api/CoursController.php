<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CoursResource;
use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function index()
    {
        return CoursResource::collection(Cours::all());
    }
}
