function checkLogin(login){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkLogin', login:login},
        success: function(data){
            try{
                document.getElementById("loginSignal").innerHTML = data;
            }
            catch{
                document.getElementById("loginSignal").innerHTML = '';
            }
            if(data.length == 0){
                document.getElementById("flag").value += '1';
                checkPassword(document.getElementById('password').value)
            }
            else document.getElementById("flag").value = '0';
        }
    });
}

function checkPassword(password){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkPassword',password:password},
        success: function(data){
            try{
                document.getElementById("passwordSignal").innerHTML = data;
            }
            catch{
                document.getElementById("passwordSignal").innerHTML = '';
            }
            if(data.length == 0){
                document.getElementById("flag").value += '1';
                checkConfirm_password(document.getElementById('password').value, document.getElementById('confirm_password').value)
            }
            else document.getElementById("flag").value = '0';
        }
    });
}
    
function checkConfirm_password(password, confirm_password){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkConfirm_password', password:password, confirm_password:confirm_password},
        success: function(data){
            try{
                document.getElementById("confirm_passwordSignal").innerHTML = data;
            }
            catch{
                document.getElementById("confirm_passwordSignal").innerHTML = '';
            }
            if(data.length == 0){
                document.getElementById("flag").value += '1';
                checkEmail(document.getElementById('email').value)
            }
            else document.getElementById("flag").value = '0';
        }
    });
}

function checkEmail(email){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkEmail', email:email},
        success: function(data){
            try{
                document.getElementById("emailSignal").innerHTML = data;
            }
            catch{
                document.getElementById("emailSignal").innerHTML = '';
            }
            if(data.length == 0){
                document.getElementById("flag").value += '1';
                checkName(document.getElementById('name').value)
            }
            else document.getElementById("flag").value = '0';
        }
    });
}

function checkName(name){
    $.ajax({
        url: '../php/ajaxProcessing/Verification.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'checkName', name:name},
        success: function(data){
            try{
                document.getElementById("nameSignal").innerHTML = data;
            }
            catch{
                document.getElementById("nameSignal").innerHTML = '';
            }
            if(data.length == 0){
                document.getElementById("flag").value += '1';
                addUser(document.getElementById('login').value, document.getElementById('password').value, document.getElementById('email').value, document.getElementById('name').value, document.getElementById('flag').value);
            }
            else document.getElementById("flag").value = '0';
        }
    });
} 

function addUser(login, password, email, name, flag){
    $.ajax({
        url: '../php/ajaxProcessing/CRUD.php',
        method: 'POST',
        dataType: 'html',
        data: {func:'addUser', login:login, password:password, email:email, name:name, flag:flag},
        success: function(data){
            if(data.length>0){
                alert(data);
                window.location.href = 'Authorization.php';
            }
        }
    });
}

function verify(){
    document.getElementById("flag").value = '';
    checkLogin(document.getElementById('login').value)
    checkPassword(document.getElementById('password').value)
    checkConfirm_password(document.getElementById('password').value, document.getElementById('confirm_password').value)
    checkEmail(document.getElementById('email').value)
    checkName(document.getElementById('name').value)
}