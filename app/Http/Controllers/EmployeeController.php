<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Models\Employee;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use SebastianBergmann\LinesOfCode\Counter;


class EmployeeController extends Controller
{
    /**
     * Вывод списка постов
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {

        $employees = Employee::paginate(7);

        return response()->json([

            'employees' => $employees

        ], 200);
    }

    /**
     * Сохранение новой записи
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */


    public function search($search)
    {
        if ($search != null and $search != '') {

            $employees = Employee::
            where('name', 'LIKE', '%' . $search . '%')->
            orWhere('id', 'LIKE', "%$search%")->
            orWhere('salary', 'LIKE', "%$search%")->
            orWhere('position', 'LIKE', "%$search%")->
            orWhere('date', 'LIKE', "%$search%")->
            orWhere('boss', 'LIKE', "%$search%")->
            paginate(7);

            return response()->json([

                'employees' => $employees

            ], 200);

        } else {
            return $this->showAll();
        }

    }

    public function create(CreateEmployeeRequest $request)
    {

        $data = $request->validated();

/*      $employee = Employee::create([
            "name" => $data["name"],
            "position" => $data["position"],
            "date" => $data["date"],
            'salary'=>$data["salary"],
            'boss'=>$data["boss"]



        ]);*/
        $employee = new Employee();
        $employee->name =$data['name'];
        $employee->position = $data['position'];
        $employee->date = $data['date'];
        $employee->salary =$data['salary'];
        $employee->boss = $data['boss'];
        if ($request->image != "") {
            $strpos = strpos($request->image, ';');
            $sub = substr($request->image, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time() . "." . $ex;
            $img = Image::make($request->image)->resize(200, 200);
            $upload_path = public_path() . "/upload/";
            $img->save($upload_path . $name);
            $employee->image = $name;

        } else {
            $employee->image = null;
        }

        $employee->save();

    }

    public function getEdit($id)
    {
        $employee = Employee::find($id);

        return response()->json([

            'employee' => $employee

        ], 200);
    }


    public function updateEmployee(CreateEmployeeRequest $request, $id)
    {
       $data= $request->validated();
        $employee = Employee::find($id);
        $employee->name =$data['name'];
        $employee->position = $data['position'];
        $employee->date = $data['date'];
        $employee->salary = $data['salary'];
        $employee->boss = $data['boss'];
        if ($employee->image != $request->image) {
            $strpos = strpos($request->image, ';');
            $sub = substr($request->image, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time() . "." . $ex;
            $img = Image::make($request->image)->resize(200, 200);
            $upload_path = public_path() . "/upload/";
            $img_path = $upload_path . $employee->image;
            $img->save($upload_path . $name);
            if (file_exists($img_path)) {
                @unlink($img_path);
            }

        } else {
            $name = $employee->image;
        }
        $employee->image = $name;
        $employee->save();
        return response()->json([

            'employee' => $employee

        ], 200);
    }

    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $image_path = public_path() . "/upload";
        $image = $image_path . $employee->photo;
        if (file_exists($image)) {
            @unlink($image);
        }
        $employee->delete();

    }

    public function sort(Request $request, $sort)
    {

        $employees = match ($sort) {
            'id1' => Employee::orderBy('id')->paginate(7),
            'id2' => Employee::orderByDesc('id')->paginate(7),
            'name1' => Employee::orderBy('name')->paginate(7),
            'name2' => Employee::orderByDesc('name')->paginate(7),
            'position1' => Employee::orderBy('position')->paginate(7),
            'position2' => Employee::orderByDesc('position')->paginate(7),
            'date1' => Employee::orderBy('date')->paginate(7),
            'date2' => Employee::orderByDesc('date')->paginate(7),
            'salary1' => Employee::orderBy('salary')->paginate(7),
            'salary2' => Employee::orderByDesc('salary')->paginate(7),
            'boss1' => Employee::orderBy('boss')->paginate(7),
            'boss2' => Employee::orderByDesc('boss')->paginate(7),
            default => "No match!",
        };


        return response()->json([

            'employees' => $employees

        ], 200);
    }

}
