//var host_url='http://localhost:8383/sesa-master/public/';


$(document).ready(function(){

    var tag_list=[];
    function addToTag(tag){
        console.log(tag_list);

        if(tag_list.length==0){
            tag_list.push(tag);
        }
        else {
            for (var t = 0; t < tag_list.length; t++) {
                if (tag != tag_list[t]) {
                    tag_list.push(tag);
                    console.log(tag_list);
                }
            }
        }
    }

//    $("#tag-list").hide();
    $("#tags").keyup(function(e){
        e.preventDefault();
//alert('keyup');
        //console.log($('#tags').val());
        if($('#tags').val().match(/\S/)){
            $.get(
                host_url+'tag/getList/'+$('#tags').val(),
                function(data){
                    var text="";
                    loop1:
                        for(var i=0;i<data.length;i++){
                            loop2:
                                for(var r=0;r<tag_list.length;r++){
                                    if(data[i]==tag_list[r]){
                                        continue loop1;
                                    }
                                }

                            text+="<div style='cursor:pointer' class='create-tag'  data-lang='java'>"
                                +data[i]  + "</div>";

                        }

                    text+="<div style='cursor:pointer' class='create-tag'  data-lang='java'>"
                        +$('#tags').val()  + "</div>";
                    $("#tag-list").show();
                    $("#tag-list").html(text);
                    // console.log(data);
                }


            );
        }




 });

    $(document).on('hover','.create-tag',function(){
        //alert('cahge');
    });

    $(document).on('click','.create-tag',function(){
        if($("#tags").val().match(/\S/)){
            var selected_tag=$(this).html();
            // tag_list.push(selected_tag);
            addToTag(selected_tag);
            $('#tag-body').append('<li><a href="javascript:;"><i class="fa fa-tags"></i>'+ selected_tag +'</a></li>');
            $('#tag-list').hide();
            $('#tags').val("");
        }





    });

    $("#tags").keypress(function(e) {
        if(e.which == 13) {
            if($("#tags").val().match(/\S/)){
                var selected_tag=$(this).html();
                // tag_list.push(selected_tag);
                addToTag(selected_tag);
                $('#tag-body').append('<li><a href="javascript:;"><i class="fa fa-tags"></i>'+ selected_tag +'</a></li>');
                $('#tag-list').hide();
                $('#tags').val("");
            }

        }
    });




    $('#blog_form').on('submit',function (e) {
        e.preventDefault();
        //console.log($('#blog_form').serialize());


        var data_arr ={
            title : $('#title').val(),
            body : $('#body').val(),
            filepath : $('#thumbnail').val(),
            tag_list: tag_list,

        }

//console.log(data_arr);
        $.ajax({
           type:'POST',
            url: host_url+'blog/add',
            data: data_arr,

            success:function(data){
              // console.log(data);

               tag_list=null;
                window.location.href = host_url+"blog/all";



            }
        });

    });



   $('.reply_count').on('click',function () {
       //alert('ok');
       $(this).fadeOut(10);
       $(this).parent().siblings('#replies').slideDown();

   }) ;

   $('.submit-reply').on('submit',function(e){
       e.preventDefault();
      $.ajax({
          type: 'POST',
          url: host_url+'reply/add',
          data: $(this).serialize(),

          success: function (data) {
              //console.log(data);
              var id=data['reply']['user_id']%1;
              //console.log(id);
              var reply='<div class="media"><a href="javascript:;" class="pull-left"><img src="'+host_url+'img/propic/'+id+'.jpg"alt="" class="media-object">'+
                        '</a><div class="media-body"><div class="row"><h4 class="media-heading"><span>by '+
                        data['user_name']+'</span></h4></div><div class="row"><p>'+
                        data['reply']['body']+'</p></div> </div></div>';


                $(':focus').parent().parent().parent().siblings('.rep_content').append(reply);
                //alert(data['reply']['body']);




          }

      });
     // console.log($(this));
      $(this)[0].reset();
   });

    $('.media').on('click','.edit-comment',function(e){


                $('.edit-comment').on('submit',function (e) {
                   e.preventDefault();
                   $.ajax({
                       type:'PUT',
                       url:host_url+'comment/edit/'+comment_id,
                       data: $(this).serialize(),
                       success: function(data){
                           console.log(data);
                           notEditedComment.html(notEditedCommentHtml);
                           console.log(notEditedComment.children('.comment-body').html(data).data('comment',data));
                           //$(document).focus();
                       }
                   });
                });
    });

    $('.media').on('click','.delete-comment',function(){

        var comment_id=$(this).parent().data('comment-id');

        var confirmDelete=confirm("Are you sure to delete?");

               if(confirmDelete==true){
                   $.ajax({
                      type:'DELETE',
                       url:host_url+'comment/delete/'+comment_id,
                       success:function(data){
                           console.log($(':focus').parent().parent().parent().parent().parent().parent().html(" "));

                       }
                   });
               }
    });


    $('#question_form').on('submit',function (e) {
        e.preventDefault();
        //console.log($('#blog_form').serialize());
console.log(tag_list);

        var data_arr ={
            title : $('#title').val(),
            body : $('#body').val(),
            //filepath : $('#thumbnail').val(),
            tag_list: tag_list,

        }

//console.log(data_arr);
        $.ajax({
            type:'POST',
            url: host_url+'forum/question/add',
            data: data_arr,

            success:function(data){
                // console.log(data);

                tag_list=null;
                window.location.href = host_url+"forum/question/all";



            }
        });

    });


});




