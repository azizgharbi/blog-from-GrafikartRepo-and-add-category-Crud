@extends('admin.layout')

@section('content')
    <h1>Manage posts</h1>

    <p>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Add a new post</a>
    </p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Publication date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-primary">Edit</a>
                        {!! Form::model($post, ['method' => 'DELETE', 'route' => ['admin.posts.destroy', $post], 'style' => 'display:inline;','class'=>'delete_form']) !!}
                            <button type="button" class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="navigation">
        {{ $posts->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection
@section('js')
<script type="text/javascript">
 $(document).ready(function () {
 $('.btn-danger').on('click', function(e){
       e.preventDefault();
       var self = $(this);
       swal({
           title             : "Are you sure?",
           text              : "You will not be able to recover this post !",
           type              : "warning",
           showCancelButton  : true,
           confirmButtonColor: "#DD6B55",
           confirmButtonText : "Yes, delete it!",
           cancelButtonText  : "No, Cancel delete!",
           closeOnConfirm    : false,
           closeOnCancel     : false
       },
       function(isConfirm){
           if(isConfirm){
               swal("Deleted!","this cpost has been deleted", "success");
               setTimeout(function() {
                   self.parents(".delete_form").submit();
               }, 2000); //2 second delay (2000 milliseconds = 2 seconds)
           }
           else{
                 swal("cancelled","this certification is safe", "error");
           }
       });
   });

});
</script>
@endsection
