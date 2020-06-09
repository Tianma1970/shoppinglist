@extends('layouts/app')

@section('content')

<div class="container">
    <div class="jumbotron col-md-8">
        <h1 class="text-center">{{ $shoppinglist->title }}</h1>
        <ol>
            @foreach($shoppinglist->shoppingitems as $shoppingitem)
            <li><br>
                {{ __('Name: ') }} {{ $shoppingitem->name}}<br>
                {{ __('Category: ') }}{{ $shoppingitem->category}}<br>
                {{ __('Quantity: ') }}{{ $shoppingitem->quantity }}<hr>
            </li>
            @endforeach
        </ol>
        <small><i>{{ __('list created at: ') }}{{ $shoppinglist->created_at }}</i></small>
    </div>
</div>
@endsection
