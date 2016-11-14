@extends('layouts.dashboard')

@section('content')
    <div class="container full-width-card">
        <form action="/jobs" method="POST">
            {{ csrf_field() }}
            <h2 class="card-title">Create Job</h2>
            <div class="job-details">
                <section>
                    <h2>Name</h2>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Example Company">
                </section>
                <section>
                    <h2>Website</h2>
                    <input type="text" name="url" value="{{ old('url') }}" placeholder="Website Url">
                </section>
                <section>
                    <h2>Description</h2>
                    <textarea class="input-description" name="description" placeholder="A company that works with the latest software.">{{ old('description') }}</textarea>
                </section>
                <section>
                    <h2>Location</h2>
                    <input type="text" name="city" placeholder="City" value="{{ old('city') }}">
                    <input type="text" name="address" placeholder="Address" value="{{ old('address') }}">
                    <input type="text" name="postal" placeholder="Postal" value="{{ old('postal') }}">
                </section>
                <section>
                    <h2>Details</h2>
                    <p>Tags</p>
                    <input type="text" name="tags" placeholder="PHP 7, UX Design" value="{{ old('tags') }}">
                    <p>Pros</p>
                    <input type="text" name="pros" placeholder="Clean Website, Clean building, Working with cool software" value="{{ old('pros') }}">
                    <p>Cons</p>
                    <input type="text" name="cons" placeholder="Distance, Big Company" value="{{ old('cons') }}">
                </section>

                <section>
                    <button class="btn btn-primary">Create</button>
                </section>
            </div>
        </form>
    </div>
@endsection
