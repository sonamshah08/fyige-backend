<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function storeFormData(Request $request)
    {

        return response()->json(['message' => 'Form data stored successfully'], 200);
    }
}
