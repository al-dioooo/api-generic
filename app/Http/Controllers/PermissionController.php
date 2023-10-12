<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->query('group') === "false" && $request->query('paginate') === "false") {
            $permissions = Permission::filter($request->only('application_id'))->get(['id', 'page', 'action', 'node', 'name', 'description']);
        } else if ($request->query('group') === "false" && $request->query('paginate') !== 'false') {
            $permissions = Permission::filter($request->only('application_id'))->paginate($request->query('paginate') ?? 15);
        } else {
            $permissions = Permission::filter($request->only('application_id'))->get(['id', 'page', 'action', 'node', 'name', 'description'])->groupBy('page');
        }

        return response()->json([
            'message' => __('api.read.success', ['model' => __('permissions')]),
            'data' => $permissions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionRequest $request)
    {
        DB::beginTransaction();

        try {
            Permission::create($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.store.success', ['model' => __('permission')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return response()->json([
            'message' => __('api.read.success', ['model' => __('permission')]),
            'data' => $permission
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showByRole(Request $request)
    {
        $permissions = Permission::whereHas('roles', function ($query) use ($request) {
            $query->where('roles.id', $request->query('role_id'));
        })->whereHas('application', function ($query) use ($request) {
            $query->where('applications.id', $request->query('application_id'));
        })->latest()->get();

        return response()->json([
            'message' => __('api.read.success', ['model' => __('permissions')]),
            'data' => [
                'permissions' => $permissions
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionRequest  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        DB::beginTransaction();

        try {
            $permission->update($request->validatedExcept(['id']));

            DB::commit();

            return response()->json([
                'message' => __('api.update.success', ['model' => __('permission')]),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        DB::beginTransaction();

        try {
            $permission->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.destroy.success', ['model' => __('permission')]),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
