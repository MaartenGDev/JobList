@extends('layouts.dashboard')

@section('content')
    <div class="container full-width-card">
        <h2 class="card-title">Import Data</h2>

        <div class="import-details">

            <section>
                <h2>Stage Plekken</h2>

                <a href="/imports/create" class="btn btn-success">Import</a>
            </section>

            <section>
                <h2>Externe Bedrijven</h2>

                <a href="#" class="btn btn-success">Import</a>
            </section>
        </div>
    </div>
@endsection
