@extends('layouts.app')

@section('content')
    <h1 class="mb-0 text-2xl">Add Review for "{{ $book->title }}"</h1>
    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf
        <div class="mb-4">
            <label for="review">Your Review</label>
            <textarea name="review" id="review" required class="input mb-4">{{ old('review') }}</textarea>

            <label for="rating">Your Rating</label>
            <select name="rating" id="rating">
                <option value="">Select a rating</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection