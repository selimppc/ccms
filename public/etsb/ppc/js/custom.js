// --------------------------------------------------------
//	Slider Caption
// -------------------------------------------------------- 
$(document).ready(function() {	
    $("a[data-gal^='prettyPhoto']").prettyPhoto(); // Pretty Photo for Lightbox Image
	$('#message').hide();
	
	var url=jQuery(location).attr('href');
			var msg=url.split("?");
			if(msg[1]=="result=success")
			{
			$('#banner-form').fadeOut(500);
			$('#message').show();
			$('#message h2').html('You have Successfully Subscribed');
			}
			else if(msg[1]=="result=error")
			{
			$('#banner-form').fadeOut(500);
			$('#message').show();
			$('#message h2').html('Error');
			}
			else if(msg[1]=="result=file_exists")
			{
			$('#banner-form').fadeOut(500);
			$('#message').show();
			$('#message h2').html('File Exists, <a href="index.html">Try again<a href="index.html"></a>');
			}
			else if(msg[1]=="result=subscribed_already")
			{
			$('#banner-form').fadeOut(500);
			$('#message').show();
			$('#message h2').html('You are already subscribed with us.');
			}
			else if(msg[1]=="contact=error")
			{
			 alert('Message not Sent');
			}
			else if(msg[1]=="contact=success")
			{
			 alert('Message Sent');
			}
	
});

// --------------------------------------------------------
//	Scroll Up
// -------------------------------------------------------- 	
$(window).scroll(function() {
	if ($(this).scrollTop() > 100) {
		$('.scroll-up').fadeIn();
	} else {
		$('.scroll-up').fadeOut();
	}
});

$('.scroll-up').click(function() {
	$("html, body").animate({
		scrollTop: 0
	}, 600);
	return false;
});

$('#addmorefile').click(function() {
	
	if ($('#file2').hasClass('hide')){
        $("#file2").removeClass("hide");
    } 
	else {
        $("#file3").removeClass("hide");
      }
	return false;
});


// --------------------------------------------------------
//	Navigation Bar
// -------------------------------------------------------- 	
$(window).scroll(function(){	
	"use strict";	
	var scroll = $(window).scrollTop();
	if( scroll > 60 ){		
		$(".navbar").addClass("scroll-fixed-navbar");				
	} else {
		$(".navbar").removeClass("scroll-fixed-navbar");
	}
});

// --------------------------------------------------------
//	Smooth Scrolling
// -------------------------------------------------------- 	
$(".navbar-nav li a[href^='#']").on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $(this.hash).offset().top
    }, 1000);
});

// --------------------------------------------------------
//	Accordion (FAQ)
// -------------------------------------------------------- 
function toggleIcon(e) {
	$(e.target)
		.prev('.panel-heading')
		.find('.panel-title a')
		.toggleClass('active')
		.find("i.fa")
		.toggleClass('fa-plus-square fa-minus-square');
}
$('.panel').on('hidden.bs.collapse', toggleIcon);
$('.panel').on('shown.bs.collapse', toggleIcon);

// --------------------------------------------------------
//	Banner Form
// -------------------------------------------------------- 
//$('#banner-form').on('submit', function(e) {
//    e.preventDefault(); //Prevents default submit
//    var form = $(this);
//    var post_url = form.attr('action');
//    var post_data = form.serialize(); //Serialized the form data for process.php
//    $('.form-process').html('<p><i class="fa fa-spinner fa-spin fa-2x"></i> Please Wait...</p>');
//    $.ajax({
//        type: 'POST',
//        url: 'banner-form-new.php', // Your form script
//        data: post_data,
//        success: function(msg) {
//			$(form).fadeOut(500, function() {
//                form.html(msg).fadeIn();
//            });
//            
//        }
//    });
//});

// --------------------------------------------------------
//	Middle Form
// -------------------------------------------------------- 
$('#middle-form').on('submit', function(e) {
    e.preventDefault(); //Prevents default submit
    var form = $(this);
    var post_url = form.attr('action');
    var post_data = form.serialize(); //Serialized the form data for process.php
    $('.form-process-middle').html('<p><i class="fa fa-spinner fa-spin fa-2x"></i> Please Wait...</p>');
    $.ajax({
        type: 'POST',
        url: 'middle-form.php', // Your form script
        data: post_data,
        success: function(msg) {
            $(form).fadeOut(500, function() {
                form.html(msg).fadeIn();
            });
        }
    });
});


// --------------------------------------------------------
//	Contact Form
// -------------------------------------------------------- 
// $('#contact-form').on('submit', function(e) {
    // e.preventDefault(); //Prevents default submit
    // var form = $(this);
    // var post_url = form.attr('action');
    // var post_data = form.serialize(); //Serialized the form data for process.php
    // $('.form-process-contact').html('<p><i class="fa fa-spinner fa-spin fa-2x"></i> Please Wait...</p>');
    // $.ajax({
        // type: 'POST',
        // url: 'banner-form.php', // Your form script
        // data: post_data,
        // success: function(msg) {
            // $(form).fadeOut(500, function() {
                // form.html(msg).fadeIn();
            // });
        // }
    // });
// });