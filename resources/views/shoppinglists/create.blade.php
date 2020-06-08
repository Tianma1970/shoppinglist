@extends('layouts/app')

@section('content')
<div class="container">
    @include('partials/status')
    <div class="jumbotron col-md-10">
        <h1 class="text-center">{{ __('Create a Shoppinglist') }}</h1>
        <form method="post" action="/shoppinglist/store">
            <!--We need to set a csrf token in order to send the form-->
            @csrf
            <div class="form-group row">
                <label for="title" class="col-md-4 text-md-right control-label">{{ __('Title') }}</label>
                <div class="col-md-6">
                    <input type="textarea" name ="title" id="quantity" class="form-control" placeholder="The title of your Shoppinglist">
                </div>
                <input type="submit" class="btn btn-info" value="Save yor Shopping list">
            </div>
        </form>
    </div>
</div>
@endsection
