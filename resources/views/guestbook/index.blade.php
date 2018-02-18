@extends('layouts.app')
@section('content')
    @php
    $hasErrors = $errors->count() > 0;
    $locationErrorClass = '';
    $entryErrorClass = '';
    if($hasErrors)
    {
        $locationErrorClass = 'is-valid';
        $entryErrorClass = 'is-valid';
        if($errors->has('entry')){
            $entryErrorClass = 'is-invalid';
        }
        if($errors->has('location'))
        {
            $locationErrorClass = 'is-invalid';
        }
    }
    @endphp
    <div class="container">
        <h2>Guest Book</h2>
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" class="form-control {{ $locationErrorClass  }}">
                @if($hasErrors)
                    @if($errors->has('location'))
                        <div class="invalid-feedback">
                        @foreach($errors->get('location') as $message)
                            {{ $message }}
                        @endforeach
                        </div>
                    @else
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    @endif
                @endif
            </div>
            <div class="form-group">
                <label for="entry">Entry</label>
                <textarea id="entry" name="entry" class="form-control {{ $entryErrorClass }}" rows="3"></textarea>
                @if($hasErrors)
                    @if($errors->has('entry'))
                        <div class="invalid-feedback">
                            @foreach($errors->get('entry') as $message)
                                {{ $message }}
                            @endforeach
                        </div>
                    @else
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    @endif
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Sign Guest Book</button>
        </form>
    </div>

    <div class="container mt-5">
        @foreach($entries as $entry)
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title">{{ $entry->user->name }}</h3>
                    <h4 class="mb-2 text-muted card-subtitle">{{ $entry->location }}</h4>
                    <p class="card-text bg-light p-2 h5">
                        &#8220; {{ $entry->entry }}	&#8221;
                    </p>
                    <div class="row">
                        <div class="col-auto ml-auto">{{ $entry->created_at->format('n/j/y g:i a') }}</div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $entries->links() }}
    </div>
@endsection