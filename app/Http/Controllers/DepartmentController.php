<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;

class DepartmentController extends Controller
{
    protected $model;
    public function __construct(Department $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = $this->model->withDepth()->orderBy('_lft')->get()->toTree();
        return view('department', [ 'departments' => $entries]);
        // return response()->json($entries, 200);
    }

    public function moveUp(string $id)
    {
        $entry = $this->model->find($id);
        if($entry){
            $entry->up();
            // dd($entry->refresh());
        }
        return redirect('/departments');
    }

    public function moveDown(string $id)
    {
        $entry = $this->model->find($id);
        if($entry){
            $entry->down();
            // dd($entry->refresh());
        }
        return redirect('/departments');
    }
}
