
!function($) {
    "use strict";

    var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {
        
    //Basic
    $('#sa-basic').click(function(){
        swal("Here's a message!");
    });

    //A title with a text under
    $('#sa-title').click(function(){
        swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.")
    });

    //Success Message
    $('#sa-success').click(function(){
        swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.", "success")
    });

    //Warning Message
    $(document).ready(function(){
        
        $(document).on('click','#del-warning' ,function(){  
            var id = $(this).attr("data-id");
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#3085d6", 
            cancelButtonColor:'#d33',
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false ,


            preConfrim: function(){
                return new Promise(function(resolve){
                    $.ajax({
                        url: 'delete.php',
                        type:'post',
                        data: 'delete='+tes_id,
                        dataType: 'json'
                    })
                    .done(function(respondse){
                        swal('Deleted!', response.message, response.status);

                    })
                    .fail(function(){
                        swal('Oops....','Something went wrong with ajax !', 'error');
                    });
                });
            },
            allowOutsideClick: false
        });
    });

    });

    //Parameter
    $('#sa-params').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            cancelButtonText: "No, cancel plx!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {     
                swal("Deleted!", "Your imaginary file has been deleted.", "success");   
            } else {     
                swal("Cancelled", "Your imaginary file is safe :)", "error");   
            } 
        });
    });

    //Custom Image
    $('#sa-image').click(function(){
        swal({   
            title: "Govinda!",   
            text: "Recently joined twitter",   
            imageUrl: "../../images/avatar.png" 
        });
    });

    //Auto Close Timer
    $('#sa-close').click(function(){
         swal({   
            title: "Auto close alert!",   
            text: "I will close in 2 seconds.",   
            timer: 2000,   
            showConfirmButton: false 
        });
    });


    },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.SweetAlert.init()
}(window.jQuery);