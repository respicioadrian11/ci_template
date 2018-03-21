var base_url = $("#base_url").val();

$(document).on('submit','#frmReg',function(e){
  e.preventDefault();

  $.ajax({
      url :        'home/register',
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
            $('#myReg').modal('hide');
            $('#name').val('');
            $('#address').val('');
            $('#gender').val('');
            $('#birthday').val('');
            $('#username').val('');
            $('#password').val('');
         }else{
        
        }
      }
    })
  })

$(document).on('submit','#frmLogin',function(e){
  e.preventDefault();

  $.ajax({
      url :        'home/userlogin',
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
      if(data.status==0){

      }else{
       window.location.href="ind/enter";
      }
    }
  })
})

$(function(){

  getUsers();

function getUsers(){
    $.ajax({
      url :        'ind/getUsers',
      dataType:    'JSON',
      beforeSend: function(){

      },
      success: function(data){
      }
    })
  }

$(document).on('submit','#frmEdit',function(e){
  e.preventDefault();

  $.ajax({
      url :        'ind/editProfile',
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
          $('#editModal').modal('hide');
          $('#password').val('');
          getUsers();
         }else{
        
        }
      }
    })
  })
})

