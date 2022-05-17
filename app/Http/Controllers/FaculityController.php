<?php

namespace App\Http\Controllers;

use App\Http\Resources\FaculityResource;
use App\Models\Faculity;
use Illuminate\Http\Request;

class FaculityController extends Controller
{
  public function index()
  {
     return FaculityResource::collection(Faculity::with(['students'])->get());
  }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

}
