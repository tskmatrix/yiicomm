/* JS */


/* Navigation */

$(document).ready(function(){

  $(window).resize(function()
  {
    if($(window).width() >= 765){
      $(".sidebar .sidebar-inner").slideDown(350);
    }
    else{
      $(".sidebar .sidebar-inner").slideUp(350); 
    }
  });

  /*slimscroll for chats*/
    $('.chats').slimScroll({
        distance: '0px',
        height: '348px',
        scrollTop: '120px',
        size: '4px',
        wheelStep: 1
    });

});

$(document).ready(function(){

  $(".has_submenu > a").click(function(e){
    e.preventDefault();
    var menu_li = $(this).parent("li");
    var menu_ul = $(this).next("ul");

    if(menu_li.hasClass("open")){
      menu_ul.slideUp(350);
      menu_li.removeClass("open")
    }
    else{
      $(".navi > li > ul").slideUp(350);
      $(".navi > li").removeClass("open");
      menu_ul.slideDown(350);
      menu_li.addClass("open");
    }
  });

});

$(document).ready(function(){
  $(".sidebar-dropdown a").on('click',function(e){
      e.preventDefault();

      if(!$(this).hasClass("dropy")) {
        // hide any open menus and remove all other classes
        $(".sidebar .sidebar-inner").slideUp(350);
        $(".sidebar-dropdown a").removeClass("dropy");
        
        // open our new menu and add the dropy class
        $(".sidebar .sidebar-inner").slideDown(350);
        $(this).addClass("dropy");
      }
      
      else if($(this).hasClass("dropy")) {
        $(this).removeClass("dropy");
        $(".sidebar .sidebar-inner").slideUp(350);
      }
  });

});

/* Widget close */

$('.wclose').click(function(e){
  e.preventDefault();
  var $wbox = $(this).parent().parent().parent();
  $wbox.hide(100);
});

/* Widget minimize */

  $('.wminimize').click(function(e){
    e.preventDefault();
    var $wcontent = $(this).parent().parent().next('.widget-content');
    if($wcontent.is(':visible')) 
    {
      $(this).children('i').removeClass('icon-chevron-up');
      $(this).children('i').addClass('icon-chevron-down');
    }
    else 
    {
      $(this).children('i').removeClass('icon-chevron-down');
      $(this).children('i').addClass('icon-chevron-up');
    }            
    $wcontent.slideToggle(500);
  }); 

/* Calendar */

  $(document).ready(function() {
  
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next,today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      editable: true,
      events: [
        {
          title: 'All Day Event',
          start: new Date(y, m, 1)
        },
        {
          title: 'Long Event',
          start: new Date(y, m, d-5),
          end: new Date(y, m, d-2)
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d-3, 16, 0),
          allDay: false
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d+4, 16, 0),
          allDay: false
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d+1, 19, 0),
          end: new Date(y, m, d+1, 22, 30),
          allDay: false
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'http://google.com/'
        }
      ]
    });
    
  });

/* Progressbar animation */

    setTimeout(function(){

        $('.progress-animated .progress-bar').each(function() {
            var me = $(this);
            var perc = me.attr("data-percentage");

            //TODO: left and right text handling

            var current_perc = 0;

            var progress = setInterval(function() {
                if (current_perc>=perc) {
                    clearInterval(progress);
                } else {
                    current_perc +=1;
                    me.css('width', (current_perc)+'%');
                }

                me.text((current_perc)+'%');

            }, 600);

        });

    },600);

/* Slider */

    $(function() {
        // Horizontal slider
        $( "#master1, #master2" ).slider({
            value: 60,
            orientation: "horizontal",
            range: "min",
            animate: true
        });

        $( "#master4, #master3" ).slider({
            value: 80,
            orientation: "horizontal",
            range: "min",
            animate: true
        });        

        $("#master5, #master6").slider({
            range: true,
            min: 0,
            max: 400,
            values: [ 75, 200 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });


        // Vertical slider 
        $( "#eq > span" ).each(function() {
            // read initial values from markup and remove that
            var value = parseInt( $( this ).text(), 10 );
            $( this ).empty().slider({
                value: value,
                range: "min",
                animate: true,
                orientation: "vertical"
            });
        });
    });



/* Support */

$(document).ready(function(){
  $("#slist a").click(function(e){
     e.preventDefault();
     $(this).next('p').toggle(200);
  });
});

/* Scroll to Top */


  $(".totop").hide();

  $(function(){
    $(window).scroll(function(){
      if ($(this).scrollTop()>300)
      {
        $('.totop').slideDown();
      } 
      else
      {
        $('.totop').slideUp();
      }
    });

    $('.totop a').click(function (e) {
      e.preventDefault();
      $('body,html').animate({scrollTop: 0}, 500);
    });

  });

/* jQuery Notification (Gritter) */

$(document).ready(function(){

  /* Auto notification */

  setTimeout(function() {

            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Howdy! User',
                // (string | mandatory) the text inside the notification
                text: 'Today you got some messages and new members. Please check it out!',
                // (string | optional) the image to display on the left
                image: './img/user-big.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'gritter-custom'
            });

            // You can have it return a unique id, this can be used to manually remove it later using
            setTimeout(function () {
                $.gritter.remove(unique_id, {
                    fade: true,
                    speed: 'slow'
                });
            }, 10000);

  }, 4000);

  
  /* On click notification. Refer ui.html file */

  /* Regulat notification */
  $(".notify").click(function(e){

            e.preventDefault();
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Howdy! User',
                // (string | mandatory) the text inside the notification
                text: 'Today you got some messages and new members. Please check it out!',
                // (string | optional) the image to display on the left
                image: './img/user-big.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'gritter-custom'
            });

            // You can have it return a unique id, this can be used to manually remove it later using
            setTimeout(function () {
                $.gritter.remove(unique_id, {
                    fade: true,
                    speed: 'slow'
                });
            }, 6000);

  });

  /* Sticky notification */
  $(".notify-sticky").click(function(e){

            e.preventDefault();
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Howdy! User',
                // (string | mandatory) the text inside the notification
                text: 'Today you got some messages and new members. Please check it out!',
                // (string | optional) the image to display on the left
                image: './img/user-big.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'gritter-custom'
            });

  });

  /* Without image notification */
  $(".notify-without-image").click(function(e){

            e.preventDefault();
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Howdy! User',
                // (string | mandatory) the text inside the notification
                text: 'Today you got some messages and new members. Please check it out!',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'gritter-custom'
            });

  });

/* Remove notification */

    $(".notify-remove").click(function(){

      $.gritter.removeAll();
      return false;

    });


});


/* Date picker */

  $(function() {
    $('#datetimepicker1').datetimepicker({
      pickTime: false
    });
  });



   $(function() {
    $('#datetimepicker2').datetimepicker({
      pickDate: false
    });
  });


  $(function() {
    $( "#todaydate" ).datepicker();
  });



/* CL Editor */

$(".cleditor").cleditor({
    width: "auto",
    height: "auto"
});

/* Modal fix */

$('.modal').appendTo($('body'));

/* Pretty Photo for Gallery*/

jQuery("a[class^='prettyPhoto']").prettyPhoto({
overlay_gallery: false, social_tools: false
});


/* Notification box */


$('.slide-box-head').click(function() {
    var $slidebtn=$(this);
    var $slidebox=$(this).parent().parent();
    if($slidebox.css('right')=="-252px"){
      $slidebox.animate({
        right:0
      },500);
      $slidebtn.children("i").removeClass().addClass("icon-chevron-right");
    }
    else{
      $slidebox.animate({
        right:-252
      },500);
      $slidebtn.children("i").removeClass().addClass("icon-chevron-left");
    }
}); 


$('.sclose').click(function(e){
  e.preventDefault();
  var $wbox = $(this).parent().parent().parent();
  $wbox.hide(0);
});


  $('.sminimize').click(function(e){
    e.preventDefault();
    var $wcontent = $(this).parent().parent().next('.slide-content');
    if($wcontent.is(':visible')) 
    {
      $(this).children('i').removeClass('icon-chevron-down');
      $(this).children('i').addClass('icon-chevron-up');
    }
    else 
    {
      $(this).children('i').removeClass('icon-chevron-up');
      $(this).children('i').addClass('icon-chevron-down');
    }            
    $wcontent.toggle(0);
  }); 


  /*----------------------------------------------------*/
/*  Bootstrap Daterange Picker
/*  https://github.com/dangrossman/bootstrap-daterangepicker
/*----------------------------------------------------*/
$(function(){
    if(jQuery().daterangepicker) {
        // Open Left
        $('.daterange.right').daterangepicker({
            opens: 'left'
        });

        // Open Right - default
        $('.daterange').daterangepicker();

        // Report range
        $('#reportrange').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                'Last 7 Days': [moment(), moment().add({ days: -6 })],
                'Last 30 Days': [moment().add({ days: -29 }), moment()]
            }
        },
        function(start, end) {
            $('#reportrange #rangedate').html(start.format('MMMM d, YYYY') + ' - ' + end.format('MMMM d, YYYY'));
        });
    }
});

/* Dynamically assign height */
function sizeContent() {
    if($(window).height() > $(".matter").height()) {
        console.log($(window).height());
        console.log($(".matter").height());
        var newHeight = $(window).height() - $("#footer").height() - $(".page-head").height() - 50 + "px";
        $(".matter").css("min-height", newHeight);
    }
}
$(window).resize(sizeContent);
jQuery(document).ready(function(){
    sizeContent();
});