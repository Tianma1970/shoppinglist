@extends('layouts/app')

@section('content')

<div class="container">
    @include('/partials/status')
    <form method = "Post" action ="/shoppingitem/delete">
        <div class="jumbotron col-md-8">
            @csrf
            <h1 class="text-center">{{ $shoppinglist->title }}</h1>
            <ol>
                @foreach($shoppinglist->shoppingitems as $shoppingitem)
                <li><br>
                    <input type ="checkbox" name="ids[]" value="{{ $shoppingitem->id }}">&nbsp;{{ __('Name: ') }} {{ $shoppingitem->name}}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;{{ __('Category: ') }}{{ $shoppingitem->category}}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;{{ __('Quantity: ') }}{{ $shoppingitem->quantity }}<hr>
                </li>
                @endforeach
            </ol>
            <small><i>{{ __('list created at: ') }}{{ $shoppinglist->created_at }}</i></small>
        </div>
        <input type="submit" class=" btn btn-danger" value="Delete selected Item">
    </form>
</div>
@endsection
