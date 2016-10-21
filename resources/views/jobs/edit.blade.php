@extends('layouts.app')

@section('content')
    <div class="container full-width-card">
        <form action="/jobs/{{ $job->id }}" method="POST">
            {{ csrf_field() }}
            <h2 class="card-title">Update Job</h2>
            <div class="job-details">
                <section>
                    <h2>Name</h2>
                    <input type="text" name="name" value="{{ $job->name}}" placeholder="Example Company">
                </section>
                <section>
                    <h2>Website</h2>
                    <input type="text" name="url" value="{{ $job->url }}" placeholder="Website Url">
                </section>
                <section>
                    <h2>Description</h2>
                    <textarea class="input-description" name="description" placeholder="A company that works with the latest software.">{{ $job->description }}</textarea>
                </section>
                <section>
                    <h2>Location</h2>
                    <input type="text" name="city" placeholder="City" value="{{ $job->city }}">
                    <input type="text" name="address" placeholder="Address" value="{{ $job->address }}">
                    <input type="text" name="postal" placeholder="Postal" value="{{ $job->postal }}">
                </section>
                <section>
                    <h2>Details</h2>
                    <p>Tags</p>
                    <input type="text" name="tags" placeholder="PHP 7, UX Design" value="{{ implode(',', $job->tags) }}">
                    <p>Pros</p>
                    <input type="text" name="pros" placeholder="Clean Website, Clean building, Working with cool software" value="{{ implode(',', $job->pros) }}">
                    <p>Cons</p>
                    <input type="text" name="cons" placeholder="Distance, Big Company" value="{{ implode(',', $job->cons) }}">
                </section>

                <section>
                    <button class="btn btn-primary">Update</button>
                </section>
            </div>
            <input type="hidden" name="_method" value="PATCH">
        </form>
    </div>
@endsection
