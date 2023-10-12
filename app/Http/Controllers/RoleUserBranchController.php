<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StoreRoleUserBranchRequest;
use App\Http\Requests\UpdateRoleUserBranchRequest;
use App\Models\Pivot\RoleUserBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleUserBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->query('paginate') === "false") {
            $map = RoleUserBranch::filter($request->only(['search', 'user', 'role', 'branch']))->latest()->get();
        } else {
            $map = RoleUserBranch::filter($request->only(['search', 'user', 'role', 'branch']))->with(['branch', 'user', 'role'])->latest()->paginate(15)->setPath('');
        }

        return response()->json([
            'message' => __('api.read.success', ['model' => __('role user branches')]),
            'data' => $map
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleUserBranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleUserBranchRequest $request)
    {
        DB::beginTransaction();

        try {
            $search = RoleUserBranch::where(function ($query) use ($request) {
                $query->where('user_id', $request->input('user_id'))->where('role_id', $request->input('role_id'))->where('branch_id', $request->input('branch_id'));
            })->first();

            if (!$search) {
                $map = RoleUserBranch::create($request->validated());

                DB::commit();

                return response()->json([
                    'message' => __('api.store.success', ['model' => __('role user branch')]),
                    'data' => $map
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
     * @param  \App\Models\Pivot\RoleUserBranch  $roleUserBranch
     * @return \Illuminate\Http\Response
     */
    public function show(RoleUserBranch $roleUserBranch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleUserBranchRequest  $request
     * @param  \App\Models\Pivot\RoleUserBranch  $roleUserBranch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleUserBranchRequest $request, RoleUserBranch $roleUserBranch)
    {
        DB::beginTransaction();

        try {
            $search = RoleUserBranch::where(function ($query) use ($request) {
                $query->where('user_id', $request->input('user_id'))->where('role_id', $request->input('role_id'))->where('branch_id', $request->input('branch_id'));
            })->first();

            if (!$search) {
                $roleUserBranch->update($request->validated());

                DB::commit();

                return response()->json([
                    'message' => __('api.update.success', ['model' => __('role user branch')])
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
     * @param  \App\Models\Pivot\RoleUserBranch  $roleUserBranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleUserBranch $roleUserBranch)
    {
        DB::beginTransaction();

        try {
            $roleUserBranch->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.destroy.success', ['pluralization' => 'a', 'model' => 'role user branch']),
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
