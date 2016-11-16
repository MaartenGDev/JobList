<?php

namespace App\Http\Controllers;

use App\Job;
use App\Tag;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use League\Flysystem\Exception;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $jobs = $request->user()->jobs()->get();

        return view('jobs/index', ['jobs' => $jobs]);
    }

    public function show(Job $job)
    {
        $this->authorize('view', $job);

        return view('home/view', ['job' => $job]);
    }

    public function create()
    {
        return view('jobs/create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5|max:255',
            'url' => 'required|min:5',
            'description' => 'required|min:5',
            'city' => 'required|min:5',
            'address' => 'required|min:5',
            'postal' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return redirect('/jobs/create')
                ->withInput()
                ->withErrors($validator);
        }

        $job = $request->user()->jobs()->create($request->all());

        $tagItems = [
            ['type' => 1, 'data' => array_filter(explode(',', $request->pros))],
            ['type' => 2, 'data' => array_filter(explode(',', $request->cons))],
            ['type' => 3, 'data' => array_filter(explode(',', $request->tags))]
        ];

        foreach ($tagItems as $item) {
            $typeId = $item['type'];
            $tags = $item['data'];

            foreach($tags as $tag){
                $tag = Tag::firstOrCreate(['name' => trim($tag)]);
                $job->tags()->attach([$tag->id => ['tag_type_id' => $typeId]]);
            }
        }

        return redirect('/jobs')
            ->with('status', 'The job has been created!');
    }

    public function update(Request $request, Job $job)
    {

        $this->authorize('update', $job);

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5|max:255',
            'url' => 'required|min:5',
            'description' => 'required|min:5',
            'city' => 'required|min:5',
            'address' => 'required|min:5',
            'postal' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $job->update($request->except(['_token', '_method']));

        $job->tags()->detach();

        $tagItems = [
            ['type' => 1, 'data' => array_filter(explode(',', $request->pros))],
            ['type' => 2, 'data' => array_filter(explode(',', $request->cons))],
            ['type' => 3, 'data' => array_filter(explode(',', $request->tags))]
        ];

        foreach ($tagItems as $item) {
            $typeId = $item['type'];
            $tags = $item['data'];

            foreach($tags as $tag){
                $tag = Tag::firstOrCreate(['name' => trim($tag)]);
                $job->tags()->attach([$tag->id => ['tag_type_id' => $typeId]]);
            }
        }

        return redirect('/jobs')
            ->with('status', 'The job has been updated!');

    }

    public function edit(Job $job)
    {
        $this->authorize('edit', $job);

        return view('jobs.edit', ['job' => $job]);
    }

    public function destroy(Job $job)
    {
        $this->authorize('delete', $job);

        $job->tags()->detach();

        $job->delete();

        return redirect('/jobs')
            ->with('status', 'The job has been removed!');
    }
}
