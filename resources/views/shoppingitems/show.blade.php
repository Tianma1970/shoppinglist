@extends('layouts/app')

@section('content')
<ul>
@foreach($shoppinglists as $shoppinglist)

<li><h3>{{ $shoppinglist->title }}</h3></li>

@endforeach
</ul>

@endsection
