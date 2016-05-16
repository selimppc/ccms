<div class="modal-dialog"  style="width: 75%;">
    <div class="modal-content">
        <div class="modal-header">
            <a href="{{ URL::previous() }}" class="btn btn-xs btn-default pull-right" type="button"> x </a>
            <h4 class="modal-title">Update Menu Type</h4>
        </div>
        <div class="modal-body">

            {!! Form::model($data, ['method' => 'PATCH', 'route'=> ['menu-type-update', $data->slug]]) !!}
               @include('menu_type._form')
            {!! Form::close() !!}

        </div>
    </div>
</div>