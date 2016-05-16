<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <a href="{{ URL::previous() }}" class="btn btn-xs btn-default pull-right" type="button"> x </a>
            <h4 class="modal-title">Update Information</h4>
        </div>
        <div class="modal-body">

            {!! Form::model($data, ['files'=>'true','method' => 'PATCH', 'route'=> ['blog_item-update', $data->slug]]) !!}
               @include('blog_item.add')
            {!! Form::close() !!}

        </div>
    </div>
</div>