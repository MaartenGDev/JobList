@extends('layouts.app')

@section('content')
    <div class="job-list">
        @foreach($jobs as $job)
            <div class="job-item">
                <h2 class="job-title">{{ $job->name }}</h2>
                <section>
                    <p class="job-rating"><i class="fa fa-check job-pros" aria-hidden="true"></i> {{ count($job->pros) }} pluspunten</p>
                    <p class="job-rating"><i class="fa fa-times job-cons" aria-hidden="true"></i> {{ count($job->cons) }} minpunten</p>

                    <div class="job-tags">
                        @foreach($job->tags as $tag)
                            <span class="chip chip-primary">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <a class="btn btn-success" href="/jobs/{{ $job->id }}">View</a>
                </section>
            </div>
        @endforeach
    </div>
@endsection
