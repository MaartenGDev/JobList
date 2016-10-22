@extends('layouts.app')

@section('content')
    <div class="container full-width-card">
        <h2 class="card-title">Import Data</h2>

        <div class="import-details">

            <section>
                <form action="/imports" method="POST">
                    {{ csrf_field() }}
                    <h2>Stage Plekken</h2>

                    <p>Location:</p>
                    <input type="text" name="city" placeholder="Apeldoorn" value="{{ old('city') }}">
                    <p>Study</p>
                    <input type="text" name="study" placeholder="Applicatie Ontwikkelaar" value="{{ old('study') }}">

                    <button class="btn btn-success">Import</button>
                </form>
            </section>
        </div>
    </div>
@endsection
