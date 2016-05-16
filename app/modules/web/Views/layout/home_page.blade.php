@extends('web::layout.web_master')

@section('content')
    @if($data)
        <?php echo $data->desc; ?>
    @endif

    @if(isset($blog_data))
        @if($data->type=='home-page')

            <div class="section">
                <div class="container">
                    <div class="heading-box">
                        <h2 class="box-title">Latest News From Our Blog</h2>
                        <p class="desc-lg">What all the fuzz is about?</p>
                    </div>
                    <div class="row blog-posts">
                        @foreach($blog_data as $values)
                            {{--@foreach($users as $value)--}}
                        <div class="col-sm-4">

                            <article class="post post-masonry">
                                <div class="post-image">
                                    <div class="image">
                                        <img src="{{isset($values->image)?$values->image:''}}">
                                            <div class="image-extras">
                                                <a href="#" class="post-gallery"></a>
                                            </div>
                                    </div>
                                </div>
                                    <div class="post-content">
                                        <div class="post-author">
                                            <a href="#"><img src="{{isset($user->image)?$user->image:''}}"></a>
                                        </div>
                                        <div class="post-meta">
                                            <span class="entry-author fn">By <a href="#">{{isset($user->first_name)?ucfirst($user->first_name):''}}</a></span>
                                            <span class="entry-time"><span class="published">{{isset($values->created_at)?date('Y-m-d', strtotime($values->created_at)):''}}</span></span>
                                            <span class="post-category">In <a href="#">{{isset($values->relBlogCat->title)?$values->relBlogCat->title:''}}</a></span>
                                        </div>
                                        <h3 class="entry-title"><a href="#"></a></h3>
                                        <p>{{isset($values->desc)? substr($values->desc, 0,200):''}}</p>
                                    </div>
                                <div class="post-action">
                                    <a href="{{route('blog', $values->slug)}}" class="btn btn-sm style3 post-read-more">More</a>
                                </div>
                            </article>
                        </div>
                        @endforeach
                        {{--@endforeach--}}
                    </div>
                </div>
            </div>

        @endif
    @endif
@stop