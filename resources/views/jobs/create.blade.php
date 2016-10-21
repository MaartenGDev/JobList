@extends('layouts.app')

@section('content')
    <div class="container card">
        <h2>Create Job</h2>
       <form action="/jobs" method="POST">
           {{ csrf_field() }}
           <p>Name</p>
           <input type="text" name="name">
           <p>Website</p>
           <input type="text" name="url">
           <p>Description:</p>
           <textarea class="input-description" name="description"></textarea>
           <p>Tags</p>
           <input type="text" name="tags">
           <p>Pros</p>
           <input type="text" name="pros">
           <p>Cons</p>
           <input type="text" name="cons">
           <button class="btn btn-primary">Create</button>
       </form>
    </div>
@endsection
