<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use App\Models\Currency;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currency = Currency::get();

        return response()->json([
            'message' => __('api.read.success', ['model' => __('currencies')]),
            'data' => [
                'currency' => $currency
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCurrencyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrencyRequest $request)
    {
        DB::beginTransaction();

        try {
            Currency::create($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.store.success', ['model' => __('currency')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        return response()->json([
            'message' => __('api.read.success', ['model' => __('currency')]),
            'data' => $currency
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCurrencyRequest  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        DB::beginTransaction();

        try {
            $currency->update($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.update.success', ['model' => __('currency')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        DB::beginTransaction();

        try {
            $currency->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.destroy.success', ['pluralization' => 'an', 'model' => 'currency']),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
