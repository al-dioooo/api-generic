<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use App\Models\Application;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $applications = Application::latest()->get();

            return response()->json([
                'message' => __('api.read.success', ['model' => 'applications']),
                'data' => $applications
            ]);
        } catch (Handler $e) {
            return response()->json($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApplicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicationRequest $request)
    {
        DB::beginTransaction();

        try {
            Application::create($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.store.success', ['pluralization' => 'an', 'model' => 'application']),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return response()->json([
            'message' => __('api.read.success', ['model' => 'application']),
            'data' => $application
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicationRequest  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicationRequest $request, Application $application)
    {
        DB::beginTransaction();

        try {
            $application->update($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.update.success', ['pluralization' => 'an', 'model' => 'application'])
            ]);
        } catch (Handler $e) {
            DB::rollback();

            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        DB::beginTransaction();

        try {
            $application->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.destroy.success', ['pluralization' => 'an', 'model' => 'appli$application']),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
