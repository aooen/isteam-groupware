
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var agree = $('input[name="agree"]');
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var message1 = $('.validate-input textarea[name="message1"]');
    var message2 = $('.validate-input textarea[name="message2"]');
    var message3 = $('.validate-input textarea[name="message3"]');
    var message4 = $('.validate-input textarea[name="message4"]');

    $('.validate-form').on('submit',function(){
        var check = true;

        if (!$('input[name="agree"]')[0].checked) {
            alert('개인정보 취급방침에 동의해주세요.');
            return false;
        }

        if(name.val().trim() == ''){
            showValidate(name);
            check=false;
        }

        if(email.val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }

        if(message1.val().trim() == ''){
            showValidate(message1);
            check=false;
        }

        if(message2.val().trim() == ''){
            showValidate(message2);
            check=false;
        }

        if(message3.val().trim() == ''){
            showValidate(message3);
            check=false;
        }

        if(message4.val().trim() == ''){
            showValidate(message4);
            check=false;
        }

        if (check) check = confirm('정말로 지원서를 제출하시겠습니까?\n수정이 불가능합니다.');
        else alert('빠진 내용이 있으니 다시 한번 확인하고 제출하시기 바랍니다.');

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }


    $("#close").click(function(){
        window.open('','_parent','');
        window.close();
    });



})(jQuery);