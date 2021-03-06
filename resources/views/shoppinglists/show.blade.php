@extends('layouts/app')

@section('content')

<div class="container">
    @include('/partials/status')
    <form method = "Post" action ="/shoppingitem/delete">
        <div class="jumbotron col-md-12">
            @csrf
            <h1 class="text-center">{{ $shoppinglist->title }}</h1>
            <ol>
                @foreach($shoppinglist->shoppingitems as $shoppingitem)
                <li><br>
                    <input type ="checkbox" name="ids[]" value="{{ $shoppingitem->id }}">&nbsp;{{ __('Article: ') }} {{ $shoppingitem->name}}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;{{ __('Category: ') }}{{ $shoppingitem->category}}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;{{ __('Quantity: ') }}{{ $shoppingitem->quantity }}<br>
                    <a href="/shoppingitems/{{ $shoppingitem->id }}/edit" class="btn btn-info mt-3">Edit Shoppingitem</a>
                    <hr>
                </li>
                @endforeach
            </ol>
            <small><i>{{ __('list created at: ') }}{{ $shoppinglist->created_at }}</i></small>
        </div>
        <div class="d-flex justify-content-around">
            <a href="/shoppingitems/create" class="btn btn-info">{{ __('Back') }}</a>
            <a href="/shoppingitems/create" class=" btn btn-info">{{ __('Add some Shoppingitems') }}</a>
            <input type="submit" class=" btn btn-danger" value="Delete selected Item">
        </div>
    </form>

    @include('/templates/footer')
</div>
@endsection
