<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->query('paginate') === "false") {
            $customer = Customer::filter($request->only(['search', 'code', 'name', 'phone', 'from', 'to']))->latest()->get();
        } else {
            $customer = Customer::filter($request->only(['search', 'code', 'name', 'phone', 'from', 'to']))->latest()->paginate(15)->setPath('')->withQueryString();
        }

        return response()->json([
            'message' => __('api.read.success', ['model' => __('customer')]),
            'data' => $customer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        DB::beginTransaction();

        try {
            $customer = Customer::create($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.store.success', ['model' => __('customer')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return response()->json([
            'message' => __('api.read.success', ['model' => __('customer')]),
            'data' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        DB::beginTransaction();

        try {
            $customer->update($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.update.success', ['model' => __('customer')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        DB::beginTransaction();

        try {
            $customer->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.destroy.success', ['model' => __('customer')]),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
