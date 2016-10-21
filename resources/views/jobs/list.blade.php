@extends('layouts.app')

@section('content')
    <div class="container full-width-card">
        <h2 class="card-title">Bedrijven</h2>
        <a href="/jobs/create" class="btn btn-default import-data">Add Company</a>
        <a href="/jobs/import" class="btn btn-success import-data">Import Data</a>
    </div>

    <div class="container full-width-card">
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Pros</th>
                <th>Cons</th>
                <th>Edit</th>
                <th>Remove</th>
            </tr>
            @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->name }}</td>
                    <td>{{ substr($job->description, 0, 50) }}</td>
                    <td>{{ count($job->pros) }}</td>
                    <td>{{ count($job->cons) }}</td>
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
