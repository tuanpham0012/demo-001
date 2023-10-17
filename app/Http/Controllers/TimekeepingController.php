<?php

namespace App\Http\Controllers;

use App\Models\Timekeeping;
use App\Http\Requests\StoreTimekeepingRequest;
use App\Http\Requests\UpdateTimekeepingRequest;
use Illuminate\Support\Facades\Session;

class TimekeepingController extends Controller
{
    protected $model;
    public function __construct(Timekeeping $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTimekeepingRequest $request)
    {
        $requestData = $request->all();
        $time = $this->model->where('employee_id', $requestData['employee_id'])->where('date', date('Y-m-d'))->first();
        if (!$time) {
            $time = new Timekeeping([
                'date'=> date('Y-m-d'),
                'employee_id' => $requestData['employee_id'],
                'checked_in_at' => array(date('H:i')),
            ]);
            $time->save();
        } else {
            $checlInTime = $time->checked_in_at;
            $time->checked_in_at = array_merge($time->checked_in_at, [date('H:i')]);
            $time->save();
        }
        Session::flash('message', 'Điểm danh thành công!');
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Timekeeping $timekeeping)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Timekeeping $timekeeping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTimekeepingRequest $request, Timekeeping $timekeeping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timekeeping $timekeeping)
    {
        //
    }
}
