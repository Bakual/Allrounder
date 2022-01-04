function toggleElement(element, state) {
  if (state) {
    document.getElementById(element + "_text_icon").className = "icon-radio-unchecked text-danger";
    document.getElementById(element + "_icon").className = "icon-radio-checked text-success";
    document.getElementById("jform_params_" + element + "_text").disabled = true;
    document.getElementById("jform_params_" + element).disabled = false;
    if(document.getElementById("jform_params_" + element + "_chzn")){
      jQuery("#jform_" + element).trigger("liszt:updated");
    }
  } else {
    document.getElementById(element + "_text_icon").className = "icon-radio-checked text-success";
    document.getElementById(element + "_icon").className = "icon-radio-unchecked text-danger";
    document.getElementById("jform_params_" + element + "_text").disabled = false;
    document.getElementById("jform_params_" + element).disabled = true;
    if(document.getElementById("jform_params_" + element + "_chzn")){
      jQuery("#jform_" + element).trigger("liszt:updated");
    }
  }
}
