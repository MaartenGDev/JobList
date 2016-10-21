@extends('layouts.app')

@section('content')
    <div class="container card">
        <h2>Update Job</h2>
       <form action="/jobs/{{ $job->id }}" method="POST">
           {{ csrf_field() }}
           <p>Name</p>
           <input type="text" name="name" value="{{ $job->name }}">
           <p>Website</p>
           <input type="text" name="url" value="{{ $job->url }}">
           <p>Description:</p>
           <textarea class="input-description" name="description">{{ $job->description }}</textarea>
           <p>Tags</p>
           <input type="text" name="tags" value="{{ implode(', ',$job->tags) }}">
           <p>Pros</p>
           <input type="text" name="pros" value="{{ implode(', ',$job->pros) }}">
           <p>Cons</p>
           <input type="text" name="cons" value="{{ implode(', ',$job->cons) }}">

           <input type="hidden" name="_method" value="PATCH">

           <button class="btn btn-primary">Update</button>
       </form>
    </div>
@endsection
