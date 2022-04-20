$(document).ready(function() {
    $('body').addClass('dark-horizontal');
    $('[data-toggle="tooltip"]').tooltip();

    $('.a-pagepiling').pagepiling({
        scrollingSpeed: 280,
        menu: '#menu',
        loopTop: true,
        loopBottom: true,
        navigation: {
            'position': 'right'
        },
        afterLoad: function(index){
            //console.log(index);




         /*   if(index == 5 ){
                $('body').addClass('white-horizontal');
                $('body').removeClass('dark-horizontal');
                $('body').removeClass('blue-horizontal');
                $('body').removeClass('green-horizontal');
            }
            else{
                $('body').addClass('white-horizontal');
                $('body').removeClass('blue-horizontal');
                $('body').removeClass('red-horizontal');
            }*/
        },

        onLeave: function(){
            $('.section.active .slide-bg-list .slide-bg').removeClass('active').eq(0).addClass('active')
        }
    });

    $('.a-pp-prev').on('click', function(){
        $.fn.pagepiling.moveSectionUp();
    });
    $('.a-pp-next').on('click', function(){
        $.fn.pagepiling.moveSectionDown();
    });
});