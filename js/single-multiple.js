$(function(){
  $('.content .tab_content').hide()
  $('.content .tab_content:first-child').show()

  $("body").on('click','button',function(){
    var current_tab=$(this).attr('data-list')
    $('.content .tab_content').hide()
    $('.'+current_tab).show()
  })
})