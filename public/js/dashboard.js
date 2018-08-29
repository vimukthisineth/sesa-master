/**
 * Created by Dilusha on 11/26/2017.
 */
 var events=[];
 var articles=[];


$(function(){
   var gotArticles = $.get(host_url+'blog/allToDashboard',function(data){
      articles=data;
   });
    var gotEvents = $.get(host_url+'event/allToDashboard',function(data){
        events=data;//console.log(events['data']);
    });

    $.when(gotArticles,gotEvents).done(function(){
        //console.log(events);
        $.merge(events['data'],articles['data']);
        var content=events['data'];
        console.log(content);
        //var content2=events['data'][0];



        //console.log(content2.created_at);

        content.sort(function (a, b) {

            //console.log(a);
            var date1 = new Date(a['created_at']);
            var date2 = new Date(b['created_at']);



            return date2-date1;
        });


       // console.log(content);




        var contentToAppend="";


            for(var h=0;h<content.length;h++){


                contentToAppend += '<div class="rep_content" style="margin:1em 0.1em;background-color:#ffffff;padding: 0.3em;"><div class="media" style="" ><div class="media-body"><div class="row" style="padding: 0.2em;">'+
                    ' <a href="'+host_url+content[h]['type']+'/show/'+content[h]['id']

                    +'" class="post-link">'+
                    '<p class="post-font">'+
                    content[h]['title']+
                    '</p></a></div><div class="row"><a href="' + host_url+content[h]['type']+'/show/'+content[h]['id']
                    +'"> <img src="'+
                    host_url+ content[h]['filepath']+
                    '" class="img-responsive"  style="padding: 0.1em 0.5em;width: 100%;cursor:pointer" alt=""></a></div><div class="row"><h4 class="media-heading"> <span>by '+
                    content[h]['user']['name']+
                    ' </span></h4></div></div><a href="javascript:;" class="pull-right"><img src="'+
                    host_url+'img/propic/'+content[h]['user_id']%1+'.jpg'+
                    '" alt="" class="media-object-post"></a></div></div>';
            }


        $('#content').html(contentToAppend);
       // console.log(events['data']);
        //console.log("diilusha");
    });

});



