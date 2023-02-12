function check(login, password){
    $.ajax({
        url: '../php/ajaxProcessing/Definition.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'check', login:login, password:password},
        success: function(data){
            if(data.length==0){
                window.location.href = 'HousePage.php';
            }
            else alert(data);
        }
    });
}

function define(){
    check(document.getElementById('login').value, document.getElementById('password').value)
}