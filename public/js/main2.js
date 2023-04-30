
function play(u) {
    document.getElementById('ads').innerHTML = '<iframe width="100%" height="400" src="https://www.youtube.com/embed/fhXgYy5W2u4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    u.style.display = "none";
}	
var nom = document.getElementById('zo1');
var mail = document.getElementById('zo2');
var phone = document.getElementById('zo3');
var msg = document.getElementById('zo4');


function myFunc() {
    var tst = true;
    if (nom.value == "") {
        nom.style.border = "1px solid red";
        document.getElementById('a').style.display = "block";
        document.getElementById('A').innerHTML = "Veuillez remplir ce champ";
        tst = false;
    } else {
        nom.style.border = "1px solid rgb(255, 102, 0)";
        document.getElementById('a').style.display = "none";
        document.getElementById('A').innerHTML = "";
    }

    if (mail.value == "") {
        mail.style.border = "1px solid red";
        document.getElementById('b').style.display = "block";
        document.getElementById('B').innerHTML = "Veuillez remplir ce champ";
        tst = false;
    } else {
        mail.style.border = "1px solid rgb(255, 102, 0)";
        document.getElementById('b').style.display = "none";
        document.getElementById('B').innerHTML = "";
    }

    if (phone.value == "") {
        phone.style.border = "1px solid red";
        document.getElementById('c').style.display = "block";
        document.getElementById('C').innerHTML = "Veuillez remplir ce champ";
        tst = false;
    } else {
        phone.style.border = "1px solid rgb(255, 102, 0)";
        document.getElementById('c').style.display = "none";
        document.getElementById('C').innerHTML = "";
    }

    if (msg.value == "") {
        msg.style.border = "1px solid red";
        document.getElementById('d').style.display = "block";
        document.getElementById('D').innerHTML = "Veuillez remplir ce champ";
        tst = false;
    } else {
        msg.style.border = "1px solid rgb(255, 102, 0)";
        document.getElementById('d').style.display = "none";
        document.getElementById('D').innerHTML = "";
    }
    if (tst) {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            show();
        };

        xmlhttp.open("GET", "Index/send.php?nom=" + nom.value + "&mail=" + mail.value + "&phone=" + phone.value +
            "&msg=" + msg.value, true);
        xmlhttp.send();
    }
}

function show() {
    $('#myModal').modal('show');
    setTimeout("stop()", 2000);
}

function stop() {
    $('#myModal').modal('hide');

    nom.value = "";
    mail.value = "";
    phone.value = "";
    msg.value = "";
}