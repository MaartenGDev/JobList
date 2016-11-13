@extends('layouts.app')

@section('content')
    <div class="container board-jobs">
        <table class="board-jobs__list">
            <tr class="board-jobs__header">
                <th class="board-jobs__column board-jobs__column--title">Name</th>
                <th class="board-jobs__column board-jobs__column--title">Description</th>
                <th class="board-jobs__column board-jobs__column--title">Pros</th>
                <th class="board-jobs__column board-jobs__column--title">Cons</th>
                <th class="board-jobs__column board-jobs__column--title">Edit</th>
                <th class="board-jobs__column board-jobs__column--title">Remove</th>
            </tr>
        @foreach($jobs as $job)
            <tr class="board-jobs__item">
                <td class="board-jobs__column">{{ $job->name }}</td>
                <td class="board-jobs__column">{{ substr($job->description, 0, 50) }}</td>
                <td class="board-jobs__column">{{ count($job->pros) }}</td>
                <td class="board-jobs__column">{{ count($job->cons) }}</td>
                <td class="board-jobs__column"><a href="/jobs/{{ $job->id }}/edit">Edit</a></td>
                <td class="board-jobs__column">
                    <a href="/jobs/{{ $job->id }}"
                       onclick="event.preventDefault(); document.getElementById('remove-form-{{ $job->id }}').submit();">
                        Remove
                    </a>

                    <form id="remove-form-{{ $job->id }}" action="/jobs/{{ $job->id  }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
@endsection
