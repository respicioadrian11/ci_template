var base_url = $("#base_url").val();
$(function(){

  viewPost();

  function viewPost(){
    $.ajax({
      url :        'feed/viewPost',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){


      }
  })
}
$(document).on('submit','#post',function(e){
  e.preventDefault();

  $.ajax({
      url :        'feed/addPost',
      type:        'POST',
      data:        new FormData(this),
      contentType: false,
      cache:       false,
      processData: false,
      dataType:    'JSON',
      beforeSend: function(){

    },
    success:function(data){
      swal(data.type, data.message, data.type);
        if (data.status == 1) {
          $('#post').val("");
          location.reload();
         }else{
        
        }
      }
    })
  })

/*$(document).on('click', '.btnDelete', function(){
    var postId = $(this).attr('data-id');
    $.ajax({
      url :        'feed/deletePost',
      type:        'POST',
      data:        {'postID' : postId},
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
        swal(data.type, data.message, data.type);
        viewPost();
      }
    })
  });*/
})