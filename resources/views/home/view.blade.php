@extends('layouts.app')

@section('content')
    <div class="container full-width-card">
        <h2 class="card-title">{{ $job->name }}</h2>
        <div class="job-details">
            <div class="job-links">
                <a class="job-link" href="{{ $job->url }}"><i class="fa fa-external-link" aria-hidden="true"></i>{{ $job->url }}</a>
            </div>
            <section>
                <h2>Description</h2>
                <p>{{ $job->description }}</p>

            </section>

            <section>
                <h2>Details</h2>
                <p>Tags</p>
                @foreach($job->tags as $tag)
                    <span class="chip chip-primary">{{ $tag }}</span>
                @endforeach
                <p>Pros</p>
                @foreach($job->pros as $pro)
                    <span class="chip chip-success">{{ $pro }}</span>
                @endforeach
                <p>Cons</p>
                @foreach($job->cons as $con)
                    <span class="chip chip-danger">{{ $con }}</span>
                @endforeach
            </section>

            <section>
                <h2>Location</h2>
                <input type="text" name="city" placeholder="City" value="{{ $job->city  }}">
                <input type="text" name="address" placeholder="Address" value="{{ $job->address }}">
                <input type="text" name="postal" placeholder="Postal" value="{{ $job->postal }}">
            </section>

            <section>
                <h2>Options</h2>

                <a class="btn btn-default" href="/jobs/{{ $job->id }}/edit"><i class="fa fa-heart" aria-hidden="true"></i> Favorite</a>
                <a class="btn btn-primary" href="/jobs/{{ $job->id }}/edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
            </section>
        </div>
    </div>
@endsection
