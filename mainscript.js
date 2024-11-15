function subscription(){

    var subEmail = document.getElementById('email2');
    if(subEmail == null){
        alert("Please Enter Your Email");
    }else if(
        subEmail.value.length < 5
    ){
        alert("Please Enter Valid Email");
    }else if(
        subEmail.value.length > 100
    ){
        alert('Please Enter Valid Email');
    }else{

        var f = new FormData();
        f.append("e",subEmail.value);

        var r = new XMLHttpRequest();

        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "success") {
                    alert("Thanks for Subscribe");
                    document.getElementById('email2').value=" ";
                    window.location.reload();
                } else {
                    alert(t);
                }
    
            }
        }
    
        r.open("POST", "subEmail.php", true);
        r.send(f);

    }  

    
}

function sendMsg(){
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var subject = document.getElementById('subject');
    var msg = document.getElementById('msg');
    
    var f =new FormData();
    f.append("email",email.value);
    f.append("subject",subject.value);
    f.append("msg",msg.value);
    f.append("name",name.value);

    var r = new XMLHttpRequest();

        r.onreadystatechange = function () {
            if (r.readyState == 4) {
                var t = r.responseText;
                if (t == "success") {
                    document.getElementById('msgbox').innerHTML = '<i class="zmdi zmdi-check-square"></i> Massage Send. We will respond it. Thanks for Contact Us.';
                    document.getElementById('msgbox').style = 'background-color: green; border-radius: 5px; color:black; margin-bottom: 15px; padding: 15px;';
                    document.getElementById('name').value= " ";
                    document.getElementById('email').value= " ";
                    document.getElementById('subject').value= " ";
                    document.getElementById('msg').value= " ";
                    
                }else {
                    document.getElementById('msgbox').innerHTML = '<i class="zmdi zmdi-alert-triangle"></i> ' + t;
                    document.getElementById('msgbox').style = 'background-color: red; border-radius: 5px; color:black; margin-bottom: 15px; padding: 15px;';
                }
    
            }
        }
    
    r.open("POST", "sendEmail.php", true);
    r.send(f);    

}
