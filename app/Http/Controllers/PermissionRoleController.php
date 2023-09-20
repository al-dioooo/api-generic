<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StorePermissionRoleRequest;
use App\Http\Requests\UpdatePermissionRoleRequest;
use App\Models\Pivot\PermissionRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionRoleController extends Controller
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
            $map = PermissionRole::filter($request->only(['search', 'permission', 'role']))->latest()->get();
        } else {
            $map = PermissionRole::filter($request->only(['search', 'permission', 'role']))->with(['permission', 'role'])->latest()->paginate(15)->setPath('');
        }

        return response()->json([
            'message' => __('api.read.success', ['model' => __('permission_role')]),
            'data' => [
                'map' => $map
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermissionRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionRoleRequest $request)
    {
        DB::beginTransaction();

        try {
            $search = PermissionRole::where(function ($query) use ($request) {
                $query->where('permission_id', $request->input('permission_id'))->where('role_id', $request->input('role_id'));
            })->first();

            if (!$search) {
                $map = PermissionRole::create($request->validated());

                return response()->json([
                    'message' => __('api.store.success', ['model' => __('permission_role')]),
                    'data' => [
                        'id' => $map->id
                    ]
                ]);
            } else {
                return response()->json([
                    'message' => __('api.exists'),
                    'errors' => []
                ], 422);
            }
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pivot\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function show(PermissionRole $permissionRole)
    {
        return response()->json([
            'message' => __('api.read.success', ['model' => __('permission_role')]),
            'data' => $permissionRole
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StorePermissionRoleRequest  $request
     * @param  \App\Models\Pivot\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionRoleRequest $request, PermissionRole $permissionRole)
    {
        DB::beginTransaction();

        try {
            $search = PermissionRole::where(function ($query) use ($request) {
                $query->where('permission_id', $request->input('permission_id'))->where('role_id', $request->input('role_id'));
            })->first();

            if (!$search) {
                $permissionRole->update($request->validated());

                return response()->json([
                    'message' => __('api.update.success', ['model' => __('permission_role')])
                ]);
            } else {
                return response()->json([
                    'message' => __('api.exists'),
                    'errors' => []
                ], 422);
            }
        } catch (Handler $e) {
            DB::rollback();

            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pivot\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissionRole $permissionRole)
    {
        DB::beginTransaction();

        try {
            $permissionRole->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.destroy.success', ['pluralization' => 'a', 'model' => 'permission_role']),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
