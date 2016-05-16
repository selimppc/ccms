<div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">
        <div class="modal-header">
            <a href="{{ URL::previous() }}" class="btn btn-xs btn-default pull-right" type="button"> x </a>
            <h4 class="modal-title">{{$pageTitle}}</h4>
        </div>

        <div class="modal-body">
            <div style="padding: 5px; ">
                <table id="" class="table table-bordered table-hover table-striped" style="width: 99%;">
                    <tr>
                        <th > Title </th>
                        <td >{{ isset($data->title)?$data->title:''}}</td>
                    </tr>
                    <tr>
                        <th > Slug </th>
                        <td>{{ isset($data->slug)?$data->slug:'' }}</td>
                    </tr>
                    <tr>
                        <th > Featured Image </th>
                        <td>
                            <div>
                                @if($data->thumbnail)
                                <a href="{{ route('article.image.show', $data->slug) }}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#imageView"><img src="{{ URL::to($data->thumbnail) }}" alt="{{$data->thumbnail}}" />
                                </a>
                                    @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th > Desc </th>
                        <td>{!! isset($data->desc)? strip_tags($data->desc):'' !!}</td>
                    </tr>
                    <tr>
                        <th > Meta Title </th>
                        <td>{{ isset($data->meta_title)?$data->meta_title:'' }}</td>
                    </tr>
                    <tr>
                        <th > Meta Keyword </th>
                        <td>{{ isset($data->meta_keyword)?$data->meta_keyword:'' }}</td>
                    </tr>
                    <tr>
                        <th > Meta Desc </th>
                        <td>{{ isset($data->meta_desc)?$data->meta_desc:'' }}</td>
                    </tr>
                    <tr>
                        <th > Status </th>
                        <td>{{ isset($data->status)?$data->status:'' }}</td>
                    </tr>


                </table>
            </div>
        </div>
        <div class="modal-footer">
            <a href="" class="btn btn-default" type="button"> Close </a>
        </div>
    </div>
</div>