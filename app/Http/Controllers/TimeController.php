<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    //

   	public function index () {
   		return view('time/index');
   	}


   	protected function timeAdded(Request $request)
    {
        $this->validate($request, $this->rules());

        $user = $this->createTime($request->all());

        return redirect($this->index());
    }

    /**
     * Цаг бүртгэлд шаардлагатай мэдээлэл шалгах
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'sector' 	   => 'required',
	        'service' 	   => 'required',
	        'service_date' => 'required',
	        'userName' 	   => 'required|min:6',
	        'userNumber'   => 'required',
	        'addition'     => 'required',
	        'description'  => 'required',
        ];
    }

    /**
     * цаг бүртгэл.
     *
     * @param  array  $data
     * @return Time
     */
    protected function createTime(array $data)
    {
        $time = Time::create([
            'sector'       => $data['sector'],
            'service'      => $data['service'],
            'service_date' => $data['service_date'],
            'userName'     => $data['person'],
            'userNumber'   => $data['userNumber'],
            'addition'     => $data['addition'],
            'description'  => $data['description'],
        ]);

        return $time;
    }
}
