@section('js')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{asset('bower_components/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('js/editor.js')}}"></script>
@endsection



{!! Form::model($post, [
    'route' => $post->id ? ['admin.posts.update', $post] : 'admin.posts.index',
    'method' => $post->id ? 'PUT' : 'POST',
    'name'=>'myform',
    'file'=>true
]) !!}

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group @if($errors->first('name')) has-danger @endif">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @if($errors->first('name'))
                <small class="help-block">{{ $errors->first('name') }}</small>
                @endif
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group @if($errors->first('slug')) has-danger @endif">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                @if($errors->first('slug'))
                    <small class="help-block">{{ $errors->first('slug') }}</small>
                @endif
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group @if($errors->first('category_id')) has-danger @endif">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'required' => 'required']) !!}
                @if($errors->first('category_id'))
                    <small class="help-block">{{ $errors->first('category_id') }}</small>
                @endif
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group @if($errors->first('user_id')) has-danger @endif">
                {!! Form::label('user_id', 'User') !!}
                {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'required' => 'required']) !!}
                @if($errors->first('user_id'))
                    <small class="help-block">{{ $errors->first('user_id') }}</small>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group @if($errors->first('content')) has-danger @endif">
        {!! Form::label('content', 'Content') !!}
        <textarea name="content" class="form-control" id="editor" data-id="{{ $post->id }}" data-type="{{get_class($post)}}" data-url="{{route('uploads')}}" >{!! $post->content !!}</textarea>
        @if($errors->first('content'))
            <small class="help-block">{{ $errors->first('content') }}</small>
        @endif
    </div>
    {!! Form::submit($post->id ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
