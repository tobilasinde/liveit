$(document).ready(function () {
    $(".btn-submit-contact").click(function (e) {
        e.preventDefault();
        let name = $("input[name='']").val();
        let email = $("input[name='email']").val();
        let checkbox_checked = $("input[name='confirmed']").prop('checked');
        if(name == '' || email == ''){
            alert("Please provide all inputs");
        }else if(checkbox_checked === false){
            alert("Please check the checkbox to confirm, you are human");
        }else{
            $("#contact-form").submit();
        }
    })

    $("body").tooltip({ selector: '[data-toggle=tooltip]',placement: 'top' });
})