{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline'] ) !!}
    <a class="btn btn-xs btn-primary" href="{{ $show_url }}"><i class="fa fa-user" aria-hidden="true"></i> Show</a>
    <a class="btn btn-xs btn-success" href="{{ $edit_url }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
    {!! Form::submit('Delete', ['class'=>'btn btn-xs btn-danger']) !!}
{!! Form::close()!!}
