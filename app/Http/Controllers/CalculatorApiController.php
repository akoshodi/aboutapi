<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorApiController extends Controller
{
    public function calculate(Request $request)
    {        
        $data = [];          
        
        if (strtolower($request->get('operation_type')) == 'addition'){

            $result = $request->get('x') + $request->get('y'); 

        } elseif (strtolower($request->get('operation_type')) == 'subtraction'){

            $result = $request->get('x') - $request->get('y');    

        } else {

            $result = $request->get('x') * $request->get('y');

        }
        
        $data['slackUsername'] = 'akoshodi'; 
        $data['result'] = (int) $result; 
        $data['operation_type'] = strtolower($request->get('operation_type')); 
           

        return response($data, 200)
            ->header('Content-Type', 'application/json');
    }
}
