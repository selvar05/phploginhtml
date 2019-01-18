$(document).ready(function () {
    $(".applicationstatusmap").knob();
 var popoverHtml =$(this).next(".bs-wizard-info text-center").html()
    $('.bs-wizard-dot').popover({
        container:'.bs-wizard',
         html : true,
        content:function() {
            return $(this).next(".bs-wizard-info").find(".details").html()
        },
        boundary:"scrollParent",
        placement:'bottom',
        fallbackPlacement:'flip',
        title:function() {
            return $(this).next(".bs-wizard-info").find(".title-txt").html()
        },
       
        })
      $('.bs-wizard-dot').popover('show')
})
