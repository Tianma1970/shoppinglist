@extends('layouts/app')

@section('content')

<div class="container">
    <div class="jumbotron col-10">
        <h1 class="text-center">{{ __('Add some Shopping items') }}</h1>

        <form method="POST" action="/shoppingitems/store">
            <!--We need to set a csrf-token (Cross site request forgery)in order to send the form-->
            @csrf
            <!--/We need to set a csrf-token in order to send the form-->
            <div class="form-group row">
                <label for="category" class="col-md-4 text-md-right control-label">{{ __('Category') }}</label>
                <div class="col-md-6">
                    <select class="form-control" name="category" id="category">
                        <option value="">{{ __('Select a Category') }}</option>
                        <option value="food">{{ __('Food') }}</option>
                        <option value="snack">{{ __('Snack') }}</option>
                        <option value="other">{{ __('Other') }}</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="shoppinglist_id" class="col-md-4 text-md-right control-label">{{ __('Shoppinglist') }}</label>
                    <div class="col-md-6">
                        <select class="form-control" name="shoppinglist_id" id="shoppinglist_id">
                        <option value="">{{ __('Select a Shoppinglist') }}</option>
                        @foreach($shoppinglists as $shoppinglist)
                            <option value="{{ $shoppinglist->id }}">{{ $shoppinglist->title }}
                        @endforeach
                        </select>
                    </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 text-md-right control-label">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input type="textarea" name ="name" id="name" class="form-control" placeholder="Name of your Shoppinglist">
                </div>
            </div>
            <div class="form-group row">
                <label for="quantity" class="col-md-4 text-md-right control-label">{{ __('Quantity') }}</label>
                <div class="col-md-6">
                    <input type="textarea" name ="quantity" id="quantity" class="form-control" placeholder="Number of Shopping Items">
                </div>
            </div>
            <input type="submit" class="btn btn-info" value="Save your Shopping item">
        </form>
    </div>

    <div class="row">
        <div class="jumbotron col-5">
        <h1 class="text-center">{{ __(' Your Shoppinglists') }}</h1>
        <ul>
            @foreach($shoppinglists as $shoppinglist)
                <li><a href="/shoppinglists/show/{{ $shoppinglist->id }}">{{ $shoppinglist->title }}</a></li>
            @endforeach
        </ul>
        </div>

        <div class="jumbotron col-5">
            <h1 class="text-center">{{ __('Your Shoppingitems') }}</h1>
            <ul>
                @foreach($shoppingitems as $shoppingitem)
                        {{ __('Name: ') }}{{ $shoppingitem->name }}<br>
                        {{ __('Category: ') }}{{ $shoppingitem->category }}<br>
                        {{ __('Quantity: ') }}{{ $shoppingitem->quantity }}<br>
                        {{ __('Shoppinglist: ') }}{{ $shoppingitem->shoppinglist->title }}</li><hr>
                @endforeach
            </ul>
        </div>
    </div>
</div>



@endsection
