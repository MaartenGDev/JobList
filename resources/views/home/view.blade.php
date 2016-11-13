@extends('layouts.app')

@section('content')
    <div class="container full-width-card">
        <h2 class="card-title">{{ $job->name }}</h2>
        <div class="job-details">
            @if ($job->url)
                <div class="job-links">
                    <a class="job-link" href="{{ $job->url }}"><i class="fa fa-external-link"
                                                                  aria-hidden="true"></i>{{ $job->url }}</a>
                </div>
            @endif
            <section>
                <h2>Description</h2>
                @if($job->description)
                    <p>{{ $job->description }}</p>
                @else
                    <p>No description provided</p>
                @endif
            </section>

            <section>
                <h2>Details</h2>
                <p>Tags</p>
                @forelse($job->tags as $tag)
                    <span class="chip chip-primary">{{ $tag->name }}</span>
                @empty
                    <span class="chip chip-primary">None</span>
                @endforelse

                <p>Pros</p>
                @forelse($job->pros as $pro)
                    <span class="chip chip-success">{{ $pro->name }}</span>
                @empty
                    <span class="chip chip-success">None</span>
                @endforelse
                <p>Cons</p>
                @forelse($job->cons as $con)
                    <span class="chip chip-danger">{{ $con->name }}</span>
                @empty
                    <span class="chip chip-danger">None</span>
                @endforelse
            </section>

            <section>
                <h2>Location</h2>
                <p>{{ $job->city  }}</p>
                <p>{{ $job->address  }}</p>
                <p>{{ $job->postal  }}</p>
            </section>

            <section>
                <h2>Options</h2>

                <a class="btn btn-default" href="/jobs/{{ $job->id }}/edit"><i class="fa fa-heart"
                                                                               aria-hidden="true"></i> Favorite</a>
                <a class="btn btn-primary" href="/jobs/{{ $job->id }}/edit"><i class="fa fa-pencil"
                                                                               aria-hidden="true"></i> Edit</a>
            </section>
        </div>
    </div>
@endsection
