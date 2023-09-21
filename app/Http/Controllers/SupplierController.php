<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
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
            $supplier = Supplier::filter($request->only(['search', 'name', 'from', 'to']))->latest()->get();
        } else {
            $supplier = Supplier::filter($request->only(['search', 'name', 'from', 'to']))->latest()->paginate(15)->setPath('')->withQueryString();
        }

        return response()->json([
            'message' => __('api.read.success', ['model' => __('supplier')]),
            'data' => $supplier
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $request)
    {
        DB::beginTransaction();

        try {
            Supplier::create($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.store.success', ['model' => __('supplier')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return response()->json([
            'message' => __('api.read.success', ['model' => __('supplier')]),
            'data' => $supplier
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        DB::beginTransaction();

        try {
            $supplier->update($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.update.success', ['model' => __('supplier')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        DB::beginTransaction();

        try {
            $supplier->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.update.success', ['model' => __('supplier')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
