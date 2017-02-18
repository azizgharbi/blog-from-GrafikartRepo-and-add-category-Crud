@extends('admin.layout')

@section('content')
    <h1>Manage posts</h1>

    <p>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add a new category</a>
    </p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Publication date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
                        {!! Form::model($category, ['method' => 'DELETE', 'route' => ['admin.categories.destroy',$category], 'style' => 'display:inline;']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="navigation">
        {{ $categories->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection
