/* ----------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 * 
 *
 * ---------------------------------------------------------------------------- */

  var showLoader = function(msg) {
              $.blockUI({ 
                  message: '<i class="spinner-border spinner-border-sm"></i><br><small>Loading...</small>'+msg,
                  //timeout: 5000, //unblock after 2 seconds
                  overlayCSS: {
                      backgroundColor: '#000000',
                      opacity: 0.8,
                      cursor: 'wait'
                  },
                  css: {
                      border: 0,
                      color: '#fff',
                      padding: 0,
                      backgroundColor: 'transparent'
                  }
              });
            }

 var hideLoader = function(){

 	$.unblockUI();
 }

  var loaderUp = function(msg) {
              $.blockUI({ 
                  message: '<i class="spinner-border spinner-border-sm"></i><br><small>Loading...</small>',
                  timeout: 2000, //unblock after 2 seconds
                  overlayCSS: {
                      backgroundColor: '#000000',
                      opacity: 0.8,
                      cursor: 'progress'
                  },
                  css: {
                      border: 0,
                      color: '#fff',
                      padding: 0,
                      backgroundColor: 'transparent'
                  }
              });
            }

            loaderUp();