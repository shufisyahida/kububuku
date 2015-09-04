<!DOCTYPE html>
<html>
    <head>
    <script>
        function loadXMLDoc() {
        var xmlhttp;
        if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
        }
        else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
        document.getElementById("cuaca").innerHTML = '';
        document.getElementById("jsonResponse").innerHTML = '';
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        //tampilkan json yang direturn oleh ajax
        document.getElementById("jsonResponse").innerHTML = xmlhttp.responseText;
        //parse object json yang direturn oleh ajax
        var hasil = JSON.parse(xmlhttp.responseText);
        //cek apakah ada error, jika sukses maka cod=200
        if (hasil.cod == 200) {
        //ambil cuaca di array ke 0
        var cuaca = hasil.weather[0].description;
        //convert dari kelvin ke celcius
        var suhu = parseInt(hasil.main.temp)-273;
        var kota = hasil.name;
        //gabungkan atau info yang ingin ditampilkan pada satu variabel
        var info = cuaca + " in " + kota + ", temperature " + suhu + "&#8451;";
        document.getElementById("cuaca").innerHTML = info;
        }
        else {
        document.getElementById("cuaca").innerHTML = hasil.message;
        }
        }
        }
        //ambil nama kota
        var kota = document.getElementById("kota").value;
        //query ke server
        xmlhttp.open("GET","http://mahasiswa.cs.ui.ac.id/~rizal.fa/ajax/weather.php?q="+kota,true);
        xmlhttp.send();
        }
    </script>
    </head>

    <body>
        <form id="form1" runat="server">
        <h2>Get Book Information</h2>
        Author: <input type="text" id="authorTextbox" value="Patrick Rothfuss" /> <br />
        Title: <input type="text" id="titleTextbox" value="The Name of the Wind" /> <br />
        <input type="button" value="Get Book Information" id="getButton" onclick='getBookInformation()' />
        <br /><br />
        <div id="DataContainer" ></div>
        </form>
    </body>
</html>
