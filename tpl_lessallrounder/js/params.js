function toggleElement(element, state) {
	if (state) {
		jQuery("#" + element + "_text_icon").addClass("icon-cancel");
		jQuery("#" + element + "_text_icon").removeClass("icon-checkmark");
		jQuery("#" + element + "_icon").addClass("icon-checkmark");
		jQuery("#" + element + "_icon").removeClass("icon-cancel");
		jQuery("#jform_params_" + element + "_text").attr("disabled", "disabled");
		jQuery("#jform_params_" + element).removeAttr("disabled");
		if(jQuery("#jform_params_" + element + "_chzn").length){
			jQuery("#jform_params_" + element).trigger("liszt:updated");
		}
	} else {
		jQuery("#" + element + "_text_icon").addClass("icon-checkmark");
		jQuery("#" + element + "_text_icon").removeClass("icon-cancel");
		jQuery("#" + element + "_icon").addClass("icon-cancel");
		jQuery("#" + element + "_icon").removeClass("icon-checkmark");
		jQuery("#jform_params_" + element + "_text").removeAttr("disabled");
		jQuery("#jform_params_" + element).attr("disabled", "disabled");
		if(jQuery("#jform_params_" + element + "_chzn").length){
			jQuery("#jform_params_" + element).trigger("liszt:updated");
		}
	}
}
