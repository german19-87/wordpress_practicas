jQuery('body').prepend ("AI_HTML_CODE");

ai_check_js_errors = function () {
  jQuery('.ai-js-0').hide ();
  if (ai_js_errors.length != 0) {
    jQuery('.ai-js-2').show ();
    jQuery('.ai-js-1').hide ();
  } else {
      jQuery('.ai-js-1').show ();
      jQuery('.ai-js-2').hide ();
    }
}

ai_check_js_errors ();

setTimeout (ai_check_js_errors, 500);

setTimeout (ai_check_js_errors, 3000);
