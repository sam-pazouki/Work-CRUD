<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
 
class EmployeeController extends Controller
{  
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }  
    public function store(Request $request)
    {
        $employees = new Employee([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'mobile' => $request->input('mobile'),
        ]);
        $employees->save();
        return response()->json('Employee created!');
    }
    public function show($id)
    {
        $contact = Employee::find($id);
        return response()->json($contact);
    }
    public function update(Request $request, $id)
    {
       $employees = Employee::find($id);
       $employees->update($request->all());
       return response()->json('Employee updated');
    }
    public function destroy($id)
    {
        $employees = Employee::find($id);
        $employees->delete();
        return response()->json(' deleted!');
    }
}