<div class="modal-dialog" style="width: 75%;">
    <div class="modal-content">
        <div class="modal-header">
            <a href="{{ URL::previous() }}" class="btn btn-xs btn-default pull-right" type="button"> x </a>
            <h4 class="modal-title">{{$pageTitle}}</h4>
        </div>

        <div class="modal-body">
            <div style="padding: 5px; ">
                <table id="" class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Title</th>
                        <td>{{ isset($data->title)?$data->title:''}}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ isset($data->slug)?$data->slug:'' }}</td>
                    </tr>
                    <tr>
                        <th>Desc</th>
                        <td>{!! isset($data->desc)?$data->desc:'' !!}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ isset($data->relBlogCat->title)?$data->relBlogCat->title:'' }}</td>
                    </tr>
                    <tr>
                        <th>Meta Title</th>
                        <td>{{ isset($data->meta_title)?$data->meta_title:'' }}</td>
                    </tr>
                    <tr>
                        <th>Meta Keyword</th>
                        <td>{{ isset($data->meta_keyword)?$data->meta_keyword:'' }}</td>
                    </tr>
                    <tr>
                        <th>status</th>
                        <td>{{ isset($data->status)?$data->status:'' }}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            {!! HTML::image('/'.$data->thumbnail) !!}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <a href="{{ URL::previous()}}" class="btn btn-default" type="button"> Close </a>
        </div>

    </div>
</div>