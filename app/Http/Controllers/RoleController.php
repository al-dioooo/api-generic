<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
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
            $roles = Role::with(['users', 'permissions', 'application'])->filter(request()->only(['search', 'application_id', 'name', 'from', 'to', 'super']))->latest()->get();
        } else {
            $roles = Role::with(['users', 'permissions', 'application'])->filter(request()->only(['search', 'application_id', 'name', 'from', 'to', 'super']))->latest()->paginate(15)->setPath('')->appends(request()->except('application_id'));
        }

        return response()->json([
            'message' => __('api.read.success', ['model' => __('roles')]),
            'data' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        DB::beginTransaction();

        try {
            $role = Role::create($request->validatedExcept(['permission']));

            if ($request->input('permission')) {
                $role->permissions()->sync($request->input('permission'));
            }

            DB::commit();

            return response()->json([
                'message' => __('api.store.success', ['pluralization' => 'a', 'model' => 'role'])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role->load(['users', 'permissions', 'branches']);

        return response()->json([
            'message' => __('api.read.success', ['model' => 'role']),
            'data' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        DB::beginTransaction();

        try {
            $role->update($request->validatedExcept(['permission']));

            if ($request->has('permission')) {
                $role->permissions()->sync($request->input('permission'));
            }

            DB::commit();

            return response()->json([
                'message' => __('api.update.success', ['pluralization' => 'a', 'model' => 'role']),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        DB::beginTransaction();

        try {
            $role->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.destroy.success', ['pluralization' => 'a', 'model' => 'role']),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
