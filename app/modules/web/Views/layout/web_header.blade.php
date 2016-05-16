<div class="container">
    <div class="header-inner">
        <div class="branding">
            @if(Session::has('header_logo'))
                <h1 class="logo123">
                    <a href="{{URL::to('/')}}">
                        <img src="{{Session::get('header_logo')}}" alt="bZm Graphics" class="bgm_logo_img">
                    </a>
                    @else
                    <a href="{{URL::to('/')}}">bZm Graphics</a>
                </h1>
            @endif
        </div>

        <nav id="nav">
            <ul class="header-top-nav">
                <li class="mini-search">
                    <a href="#"><i class="fa fa-search has-circle"></i></a>
                    <div class="main-nav-search-form">
                        {!! Form::open(['method' =>'GET','url'=>'/search-result']) !!}
                        <div class="search-box">
                            <input type="text" id="search_result" name="query" value="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </li>
                <li class="visible-mobile">
                    <a class="collapsed" href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
                </li>
            </ul>

            {{--Top Menu Start--}}
            @if(\Illuminate\Support\Facades\Session::has('parent'))
                <?php $mainmenu = \Illuminate\Support\Facades\Session::get('parent'); ?>
                @if($mainmenu)
                    <ul id="main-nav" class="hidden-mobile">
                        @foreach($mainmenu as $parents)
                            @if($parents->id == $parents->parent || $parents->parent == 0 )

                                @if($parents->order == 1 && $parents->parent == 0)
                                    <?php $active_menu = 'menu-item-has-children active'; ?>
                                @else
                                    <?php $active_menu = 'menu-item-has-children'; ?>
                                @endif
                                <?php $level1 = 1;?>
                                {{--Parent node--}}
                                <li class="{{ $active_menu }}">
                                    <a href="{{ $parents->url }}">{{ $parents->name }}</a>
                                    {{--Child one--}}
                                    @foreach($mainmenu as $sub)

                                        @if($parents->id == $sub->parent)
                                            @if($level1)
                                                <ul class="sub-nav">
                                                    @endif
                                                    <li class="menu-item-has-children">
                                                        <a href="{{ $sub->url }}">{{ $sub->name }}</a>
                                                        {{--Child two--}}
                                                        <?php $level2 = 1;?>
                                                        @foreach($mainmenu as $sub2)
                                                            @if($sub->id == $sub2->parent)
                                                                @if($level2)
                                                                    <ul class="sub-nav">
                                                                        @endif
                                                                        <li>
                                                                            <a href="{{ $sub2->url }}">{{ $sub2->name }}</a>
                                                                        </li>
                                                                        <?php $level2 = 0;?>
                                                                        @endif

                                                                        @endforeach
                                                                        @if($level2 == 0)
                                                                    </ul>
                                                                @endif
                                                    </li>
                                                    <?php $level1 = 0;?>
                                                    @endif


                                                    @endforeach

                                                    @if($level1 == 0)
                                                </ul>
                                            @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            @endif

        </nav>
    </div>
</div>
<div style="height: 0px;" class="mobile-nav-wrapper visible-mobile collapse" id="mobile-nav-wrapper">
    @if(\Illuminate\Support\Facades\Session::has('parent'))
        @if($mainmenu)
            <ul class="mobile-nav">
                @foreach($mainmenu as $parents)

                    @if($parents->id == $parents->parent || $parents->parent == 0 )

                        @if($parents->order == 1 && $parents->parent == 0)
                            <?php $active_menu = 'menu-item-has-children active'; ?>
                        @else
                            <?php $active_menu = 'menu-item-has-children'; ?>
                        @endif
                        <?php $level1 = 1;?>

                        {{--Parent node--}}

                        <li class="{{ $active_menu }}">
                            <a href="{{ $parents->url }}">{{ $parents->name }}</a>
                            {{--Child one--}}
                            @foreach($mainmenu as $sub)
                                @if($parents->id == $sub->parent)
                                    @if($level1)
                                        <span class="open-subnav"></span>
                                        <ul class="sub-nav">
                                            @endif
                                            <li class="menu-item-has-children">
                                                <a href="{{ $sub->url }}">{{ $sub->name }}</a>
                                                {{--Child two--}}
                                                <?php $level2 = 1;?>
                                                @foreach($mainmenu as $sub2)
                                                    @if($sub->id == $sub2->parent)
                                                        @if($level2)
                                                            <span class="open-subnav"></span>
                                                            <ul class="sub-nav">
                                                                @endif
                                                                <li>
                                                                    <a href="{{ $sub2->url }}">{{ $sub2->name }}</a>
                                                                </li>
                                                                <?php $level2 = 0;?>
                                                                @endif
                                                                @endforeach
                                                                @if($level2 == 0)
                                                            </ul>
                                                        @endif
                                            </li>
                                            <?php $level1 = 0;?>
                                            @endif
                                            @endforeach
                                            @if($level1 == 0)
                                        </ul>
                                    @endif
                        </li>
                    @endif
                @endforeach
            </ul>
        @endif
    @endif
</div>

<script>
    $(document).ready(function(){

        $('.mini-search').click(function(){
            $('.search-box').show();
        });

    });
</script>