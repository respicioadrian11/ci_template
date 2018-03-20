var base_url = $("#base_url").val();

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
         }else{
        
        }
      }
    })
  })