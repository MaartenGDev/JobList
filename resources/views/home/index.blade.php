@extends('layouts.app')

@section('content')
    <div class="job-list">
        @foreach($jobs as $job)
            <div class="job-list__item">
                <h2 class="job-list__item__title">{{ $job->name }}</h2>
                <p class="job-list__item__location"><i class="fa fa-building-o"></i> {{$job->city}}</p>
                <section class="job-list__item__details">
                    <div class="job-tags">
                        @foreach($job->tags as $tag)
                            <span class="chip chip-default">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                    <p class="job-list__item__details__description">{{ substr($job->description,0,100) }}...</p>

                    <a class="job-list__item__details__view" href="/jobs/{{ $job->id }}">VIEW JOB</a>
                </section>
            </div>
        @endforeach
    </div>
@endsection
