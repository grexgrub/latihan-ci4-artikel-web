$(document).ready(function(){

  $('#gambar').change(function(){
    let gambar = document.querySelector('#gambar')
    const reader = new FileReader();
    reader.readAsDataURL(gambar.files[0])
    reader.onload = function(e){
      $('#sampul').attr('src',e.target.result)
    }

  })



  $('#Pp').change(function(){
    let gambar = document.querySelector('#Pp')
    const reader = new FileReader();
    reader.readAsDataURL(gambar.files[0])
    reader.onload = function(e){
      $('.sampul').attr('src',e.target.result)
    }
  })




})
