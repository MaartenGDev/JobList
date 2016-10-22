@extends('layouts.app')

@section('content')
    <div class="container full-width-card">
        <h2 class="card-title">Bedrijven</h2>
        <a href="/jobs/create" class="btn btn-default import-data">Add Company</a>
        <a href="/imports" class="btn btn-success import-data">Import Data</a>
    </div>

    <div class="container full-width-card">
        <table>
            <tr>
                <th>Name</th>
                <th class="job-extra-detail">Description</th>
                <th class="job-extra-detail">Pros</th>
                <th class="job-extra-detail">Cons</th>
                <th>Edit</th>
                <th>Remove</th>
            </tr>
            @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->name }}</td>
                    <td class="job-extra-detail">{{ substr($job->description, 0, 50) }}</td>
                    <td class="job-extra-detail">{{ count($job->pros) }}</td>
                    <td class="job-extra-detail">{{ count($job->cons) }}</td>
                    <td class="company-edit"><a href="/jobs/{{ $job->id }}/edit">Edit</a></td>
                    <td class="company-remove">
                        <a href="/jobs/{{ $job->id }}"
                           onclick="event.preventDefault(); document.getElementById('remove-form-{{ $job->id }}').submit();">
                            Remove
                        </a>

                        <form id="remove-form-{{ $job->id }}" action="/jobs/{{ $job->id  }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
