<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illnuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->query('paginate') === "false") {
            $branch = Branch::filter(request()->only(['search', 'name', 'contact', 'address', 'from', 'to']))->latest()->get();
        } else {
            $branch = Branch::filter(request()->only(['search', 'name', 'contact', 'address', 'from', 'to']))->latest()->paginate(15)->setPath('')->withQueryString();
        }

        return response()->json([
            'message' => __('api.read.success', ['model' => __('branch')]),
            'data' => [
                'branch' => $branch
            ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illnuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getByUser(Request $request)
    {
        $branches = Branch::whereHas('users', function ($query) use ($request) {
            $query->where('users.id', $request->query('user_id'));
        })->with(['roles' => function ($query) use ($request) {
            $query->wherePivot('user_id', $request->query('user_id'))->distinct();
        }, 'roles.permissions'])->get();

        return response()->json([
            'message' => __('api.read.success', ['model' => __('branch')]),
            'data' => [
                'branches' => $branches
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBranchRequest $request)
    {
        DB::beginTransaction();

        try {
            $branch = Branch::create($request->validated());

            DB::commit();

            return response()->json([
                'message' => __('api.store.success', ['pluralization' => 'a', 'model' => __('branch')]),
                'data' => [
                    'branch' => $branch
                ]
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        return response()->json([
            'message' => __('api.read.success', ['model' => __('branch')]),
            'data' => $branch
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBranchRequest $request)
    {
        DB::beginTransaction();

        try {
            $branch = Branch::find($request->input('id'));

            $branch->update($request->validatedExcept('id'));

            DB::commit();

            return response()->json([
                'message' => __('api.update.success', ['pluralization' => 'a', 'model' => __('branch')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'id' => 'required|exists:branches,id'
            ]);

            $branch = Branch::find($request->input('id'));

            $branch->delete();

            DB::commit();

            return response()->json([
                'message' => __('api.destroy.success', ['pluralization' => 'a', 'model' => __('branch')])
            ]);
        } catch (Handler $e) {
            DB::rollBack();

            return response()->json($e);
        }
    }
}
