function check(login, password){
    $.ajax({
        url: '../php/ajaxProcessing/Definition.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'check', login:login, password:password},
        success: function(data){
            if(data.length==0){
                window.location.href = 'Authorization.php';
            }
            else alert(JSON.parse(data));
        }
    });
}

function logout(){
    $.ajax({
        url: '../php/ajaxProcessing/Definition.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'logout'},
        success: function(data){
            //window.location.href = 'Authorization.php';
        }
    });
}

function define(){
    check(document.getElementById('login').value, document.getElementById('password').value)
}