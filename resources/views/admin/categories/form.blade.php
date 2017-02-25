{!! Form::model($category, [
    'route' => $category->id ? ['admin.categories.update', $category] : 'admin.categories.index',
    'method' => $category->id ? 'PUT' : 'POST'
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
    </div>

    {!! Form::submit($category->id ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
