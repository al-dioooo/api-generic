<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::get();

        return response()->json([
            'message' => __('api.read.success', ['model' => __('countries')]),
            'data' => [
                'country' => $country
            ]
        ]);
    }
}
