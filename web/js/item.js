$(document).ready(function () {


 /*   $(document).on("click",".getyear_o_c",function(){

        $.ajax({
            url: get_archive_by_year,
            method: 'post',
            data: {
                year: $(this).data("y")
            },
            dataType:'json',
            success: function(result){
                var starter = '<img class="card-img-top" src="'+img_path+result["starter"][0]["filePath"]+'"   alt="Card image cap" style="height: 400px">' +
                    '<div class="card-body">' +
                    '<h2 class=" text-center">'+result["starter"][0]["title"]+'</h2>' +
                '<p class="text-center card-title">asdfasdfasdfasd&nbsp;</p>' +
                '</div>';
                $("#archive_starter").html(starter);
                var textAllItem = "";
                $.each(result["itemsAllData"],function (ndex, element) {


                    textAllItem += '<div class="col-lg-2 col-sm-12 wow bounceInUp portfolio-item filter-'+element["filtercategory"]+' " style="animation-name:  bounceInUp; padding-right: 1px;padding-left: 1px;" data-wow-delay="0.1s">' +
                        '<div class="card  p-3 mb-5">'+
                        '<img class="card-img-top"src="'+img_path+element["filePath"]+'"   alt="Card image cap" style="height: 400px">'+
                        '<div class="card-body">'+
                        '<h4 class=" text-center">'+element['title']+'</h4>'+
                        '<p class="text-center card-title">'+element['director']+'&nbsp;</p>'+
                        '</div>'+
                        '</div>'+
                        '</div>';



                })
                $("#itemsAllCat").empty();
                $("#itemsAllCat").prepend(textAllItem)
                },
        error:function () {

        }
        });


    })*/


    $(".sections").addClass("blockclass");

    $(".gallery li").on("click", function(){
        $(".blockclass").removeClass("blockclass");
        $("."+$(this).attr("data-id")+"").addClass("blockclass")
    });
})