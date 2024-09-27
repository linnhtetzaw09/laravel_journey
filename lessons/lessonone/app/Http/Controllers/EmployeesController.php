<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){

        // dd("Hello Ko Lin");

        $data ['employeedatas'] = [
            'name' => 'Ko Lin',
            'email' => 'lin@gmial.com',
            'phone' => '092344893'
        ];

        // dd($employeedata);

        return view('employees/index',$data);
    }

    public function passingdataone(){

        $greeting = "Have a nice aday";
        $hifi = "HI Htet";

        $employees = [
            'Ko Htet',
            'htet@gmial.com',
            '0983448303'
        ];

        return view('employees/dataone',['greet'=>$greeting, 'hi'=>$hifi, 'staffs'=>$employees]);
    }

    public function passingdatatwo(){

        $greeting = "Have a good aday";
        $hifi = "HI SIR";

        $employees = [
            'Ko Zaw',
            'zaw@gmial.com',
            '0923448303'
        ];

        return view('employees/datatwo')->with('greet',$greeting)->with('hi',$hifi)->with('staffs',$employees);
    }

    public function passingdatathree(){

        $greeting = "Have a good aday";
        $hifi = "HI SIR";

        $employees = [
            'Ko Zaw',
            'zaw@gmial.com',
            '0923448303'
        ];

        return view('employees/datathree',compact('greeting','hifi','employees'));

    }

    public function show(){

        $greeting = "Have a good aday";
        $hifi = "HI SIR";

        $data ['employees'] = [
            'Ko Zaw',
            'zaw@gmial.com',
            '0923448303'
        ];

        return view('employees/show',$data);
    }

    public function edit(){

        $greeting = "Have a good aday";
        $hifi = "HI SIR";

        $data ['employees'] = [
            'Ko Zaw',
            'zaw@gmial.com',
            '0923448303'
        ];

        return view('employees/edit',compact('data'));
    }

    public function update(){

        $greeting = "Have a good aday";
        $hifi = "HI SIR";

        $data ['employees'] = [
            'Ko Zaw',
            'zaw@gmial.com',
            '0923448303'
        ];

        return view('employees/update',['employees'=>$data['employees']]);
    }

}
