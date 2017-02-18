@extends('admin.layout')

@section('content')
    <h1>New category</h1>
    <p>
        <a href="{{ route('admin.categories.index') }}">< Back to the list</a>
    </p>

    @include('admin.categories.form')
@endsection
