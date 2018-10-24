<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

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


    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        Department::create($request->all());


        return redirect()->route('departments.index')
            ->with('success','Department created successfully.');
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
    public function update(Request $request, Department $department)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        $department->update($request->all());


        return redirect()->route('departments.index')
            ->with('success','department updated successfully');
    }


    // delete department
    public function destroy(Department $department)
    {
        $department->id->delete();


        return redirect()->route('departments.index')
            ->with('success','department deleted successfully');
    }
}
