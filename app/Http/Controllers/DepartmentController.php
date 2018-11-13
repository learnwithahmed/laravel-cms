<?php

namespace App\Http\Controllers;


use App\Models\Department;
use App\Http\Requests\StoreDepartment;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::all();
        return view('departments.index')->with('departments', $departments);
    }


    public function create()
    {
        return view('departments.create');
    }


    public function store(StoreDepartment $request)
    {
        $request->validated();
       Department::create($request->all());
         return back()->with
            ('success','Department created successfully.');
    }


    public function show($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->route('departments.index');
    }


    public function edit(Department $department)
    {
        return view('departments.edit',compact('department'));
    }


    //update department
    public function update(StoreDepartment $request, Department $department)
    {
       $request->validated();
        $department->update($request->all());
        return redirect()->route('departments.index')
            ->with('success','department updated successfully');
    }


    // delete department
    public function destroy(Department $department)
    {
        $department->delete();


        return redirect()->route('departments.index')
            ->with('success','department deleted successfully');
    }
}
