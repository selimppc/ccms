<div class="modal-dialog"  style="width: 75%;">
    <div class="modal-content">
        <div class="modal-header">
            <a href="{{ URL::previous() }}" class="btn btn-xs btn-default pull-right" type="button"> x </a>
            <h4 class="modal-title">Update Information</h4>
        </div>
        <div class="modal-body">

            {!! Form::model($data, ['files'=>'true','method' => 'PATCH', 'route'=> ['media-update', $data->id]]) !!}
               @include('media._form')
            {!! Form::close() !!}

        </div>
    </div>
</div>