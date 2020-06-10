@extends('layouts/app')

@section('content')
<div class="container">
    @include('partials/status')
    <div class="jumbotron col-md-12">
        <h1 class="text-center">{{ __('Edit a Shoppinglist') }}</h1>
        <form method="post" action="/shoppinglist/{{$shoppinglist->id}}/update">
            <!--We need to set a csrf token in order to send the form-->
            @csrf
            @method("PUT")
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
                <label for="title" class="col-md-4 text-md-right control-label">{{ __('Title') }}</label>
                <div class="col-md-6">
                    <input type="textarea" name ="title" id="quantity" class="form-control" placeholder="{{ __('Title') }}">
                </div>
                <input type="submit" class="btn btn-info" value="Update your Shopping list">
            </div>
        </form>
    </div>
    @include('/templates/footer')
</div>
@endsection
