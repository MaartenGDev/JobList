<?php

namespace App\Http\Controllers;

use App\Jobs\AddStageJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImportController extends Controller
{
    public function index()
    {
        return view('import/index');
    }

    public function create()
    {
        return view('import/create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'city' => 'required|min:5',
            'study' => 'required|min:5'
        ]);

        if ($validator->fails()) {
            return redirect('/imports')
                ->withInput()
                ->withErrors($validator);
        }

        $city = $request->input('city');
        $study = $request->input('study');

        dispatch(new AddStageJobs($request->user(), $city, $study));

        return redirect('/imports')
            ->with('status', 'The data has been imported!');
    }
}
