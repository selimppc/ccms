<div class="footer-wrapper">
    <div class="container">
        <div class="row add-clearfix same-height">
            @for($i=0; $i < $b=count($a=\Event::fire(new \App\Events\MyWidgets)); $i++)
                <div class="col-sm-6 col-md-3">

                        <?php echo($a[$i]);
                        if($i== $b-1){
                        ?>

                        <a href="#" class="back-to-top"><span></span></a>

                        <?php
                        }
                        ?>
                </div>
            @endfor
        </div>
    </div>
</div>
<div class="footer-bottom-area">
    <div class="container">
        <div class="copyright-area">
            <nav class="secondary-menu">
                    @if(\Illuminate\Support\Facades\Session::has('parent_footer'))
                    <ul class="nav nav-pills">
                        <?php $parent_footer = \Illuminate\Support\Facades\Session::get('parent_footer');  ?>
                            @if($parent_footer)
                                @foreach($parent_footer as $parents_footer)
                                    @if($parents_footer->id == $parents_footer->parent || $parents_footer->parent == 0 )
                                        <li><a href="{{ $parents_footer->url }}">{{ $parents_footer->name }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                    </ul>
                    @endif
            </nav>
            <div class="copyright">
                © 2015. All rights reserved <a href="{{URL::to('/')}}">bZm Graphics</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $( '#footer-write-to-us').on('submit', function(e) {
            $('#footer-loader-gif').show();
            $('.contact-submit-button').hide();
            e.preventDefault();

            var cl_name =  $('#footer-id-name').val();
            var email =  $('#footer-id-email').val();
            var phone =  $('#footer-id-phone').val();
            var message =  $('#footer-id-message').val();

            $.ajax({
                url: 'ajax-send-message',
                type: 'POST',
                dataType: 'json',
                data: {_token: '{!! csrf_token() !!}',cl_name:cl_name, email:email,phone:phone, message:message,},
                success: function(response)
                {
                    $('#footer-loader-gif').hide();
                    $('#footer-id-name').val('');
                    $('#footer-id-email').val('');
                    $('#footer-id-phone').val('');
                    $('#footer-id-message').val('');
                    $('#footer-success-messagessss').show();
                }
            });
        });
    });
</script>