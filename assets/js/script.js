jQuery(function () {
  jQuery("#receita_voto").bind("rated", function () {
    jQuery(this).rateit("readonly", true)

    var id = jQuery(this).attr("data-id")
    var voto = jQuery(this).rateit("value")

    jQuery.ajax({
      type: "POST",
      url: receita_obj.ajax_url,
      data: { action: "olmbr_voto_receita", id: id, voto: voto },
      success: function (data) {
        
      },
    })
  })
})
