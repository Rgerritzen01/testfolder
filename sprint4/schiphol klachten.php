<!DOCTYPE html>
<html>
<head>
    <title>klachten</title>
    <meta charset="utf-8">
    <style>
        .topbar {
            width: 100%;
            height: 10%;
            background-color: red;
            text-align: center;
            font-size: 2em;
        }
        .topbar > a {
            color: black;
        }
        .topbarbutton {
            text-decoration: none;
            width: 25%;
            height: 101px;
            background-color: #007bff;
            position: absolute;
            top: 0;
            z-index: 18;
            border-top: solid 2px black;
            border-bottom: solid 2px black;
        }
        .topbarbutton > span {
            position: relative;
            top: 30%;
        }
        .topbarbuttonpoint {
            position: absolute;
            top: 2px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 50px 0 50px 50px;
            border-color: transparent transparent transparent #007bff;
        }
        .topbarbuttonpointborder {
            position: absolute;
            top: -2px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 54px 0 54px 54px;
            border-color: transparent transparent transparent #000000;
        }
        .button1 > .topbarbutton {left: 0;z-index:8;}
        .button1 > .topbarbuttonpoint {left: 25%;z-index:8;}
        .button1 > .topbarbuttonpointborder {left: 25%;z-index:7;}
        .button2 > .topbarbutton {left: 25%;z-index:6;}
        .button2 > .topbarbuttonpoint {left: 50%;z-index:6;}
        .button2 > .topbarbuttonpointborder {left: 50%;z-index:5;}
        .button3 > .topbarbutton {left: 50%;z-index:4;}
        .button3 > .topbarbuttonpoint {left: 75%;z-index:4;}
        .button3 > .topbarbuttonpointborder {left: 75%;z-index:3;}
        .button4 > .topbarbutton {left: 75%;z-index:2;}
        .button4 > .topbarbuttonpoint {left: 100%;z-index:2;}
        .button5 > .topbarbuttonpointborder {left: 100%;z-index:1;}
        .tabel1 {
            font-size: 1.5em;
            position: absolute;
            top: 25%;
            left: 20%;
            width: 60%;
            height: 75%;
        }
        .lefttd {
            text-align: right;
        }
        lefttd > span {
            font-size: 0.6em;
            color: grey;
        }
        .klachttitel            {height: 40px;  width: 440px;}
        .klachtomschrijving     {height: 200px; width: 440px;}
        .klachtwanneertevreden  {height: 160px; width: 440px;}
        .voornaam           {height: 40px; width: 440px;}
        .achternaam         {height: 40px; width: 440px;}
        .straatenhuisnummer {height: 40px; width: 440px;}
        .postcode           {height: 40px; width: 140px;}
        .woonplaats         {height: 40px; width: 286px;}
        .telefoonnummer     {height: 40px; width: 440px;}
        .email              {height: 40px; width: 440px;}
        .informatie         {height: 80px; width: 440px;}
        .woonplaats {margin-left: 10px;}
    </style>
</head>
<body>

<div class="tab topbar">
    <button class="tablinks button1" onclick="openTab(event, 'tab1')"><div class="topbarbutton"><span>Beschrijf uw klacht</span></div><div class="topbarbuttonpoint"></div><div class="topbarbuttonpointborder"></div></button>
    <button class="tablinks button2" onclick="openTab(event, 'tab2')"><div class="topbarbutton"><span>Uw persoonlijke gegevens</span></div><div class="topbarbuttonpoint"></div><div class="topbarbuttonpointborder"></div></button>
    <button class="tablinks button3" onclick="openTab(event, 'tab3')"><div class="topbarbutton"><span>Extra services</span></div><div class="topbarbuttonpoint"></div><div class="topbarbuttonpointborder"></div></button>
    <button class="tablinks button4" onclick="openTab(event, 'tab4')"><div class="topbarbutton"><span>Publiceer uw klacht</span></div></button>
</div>

<form method="POST">
    <div id="tab1" class="tabcontent">
        <div class="tabel1">
            <table>
                <tr><td class="lefttd">type van uw klacht</td>          <td><select name="klachttype"><option value="geluidsoverlast">geluidsoverlast</option><option value="verkeer">verkeer</option><option value="millieu">millieu</option><option value="touristen">touristen</option><option value="parkeren">parkeren</option><option value="overig">overig</option></select></td></tr>
                <tr><td class="lefttd">titel van uw klacht</td>          <td><input class="klachttitel"             type="text" name="klachttitel"></td></tr>
                <tr><td class="lefttd">omschrijving van uw klacht</td>   <td><input class="klachtomschrijving"      type="text" name="klachtomschrijving"></td></tr>
                <tr><td class="lefttd">wanneer zou u tevreden zijn?</td> <td><input class="klachtwanneertevreden"   type="text" name="klachtwanneertevreden"></td></tr>
            </table>
        </div>
    </div>

    <div id="tab2" class="tabcontent">
        <div class="tabel1">
            <table>
                <tr><td class="lefttd">voornaam</td>                <td><input class="voornaam"             type="text" name="voornaam"></td></tr>
                <tr><td class="lefttd">achternaam</td>              <td><input class="achternaam"           type="text" name="achternaam"></td></tr>
                <tr><td class="lefttd">straat en huisnummer</td>    <td><input class="straatenhuisnummer"   type="text" name="straatenhuisnummer"></td></tr></tr>
                <tr><td class="lefttd">postcode en woonplaats</td>  <td><input class="postcode"             type="text" name="postcode"><input class="woonplaats" type="text" name="woonplaats"></td></tr></tr>
                <tr><td class="lefttd">telefoonnummer</td>          <td><input class="telefoonnummer"       type="text" name="telefoonnummer"></td></tr></tr>
                <tr><td class="lefttd">Email</td>                   <td><input class="email"                type="text" name="email"></td></tr></tr>
                <tr><td class="lefttd">extra informatie<br><span>(optioneel)</span></td><td><input class="informatie" type="text" name="informatie"></td></tr></tr>
            </table>
        </div>
    </div>

    <div id="tab3" class="tabcontent">
        <div class="tabel1">
            <table>
                <tr><td>hebt u deze klacht ook bij schiphol gemeld?</td><tr>
                <tr><td><input type="radio" name="gemeld" value="1">ja</inputradio></td></tr>
                <tr><td><input type="radio" name="gemeld" value="0">nee</radio></td></tr>
                <tr><td><hr></td></tr>
                <tr><td>wilt u liever gebeld worden?</td><tr>
                <tr><td><input type="radio" name="gebeld" value="1">ja</inputradio></td></tr>
                <tr><td><input type="radio" name="gebeld" value="0">nee</radio></td></tr><tr></tr>
            </table>
        </div>
    </div>

    <div id="tab4" class="tabcontent">
        <div class="tabel1">
            <button name="send" id="send">verstuur uw klacht</button>
        </div>
    </div>
</form>

</body>
</html>



<script>
    openTab(event, 'tab1');
    function openTab(evt, id) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(id).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>



<?php
//     $_POST['klachttitel'];
//     $_POST['klachtomschrijving'];
//     $_POST['klachtwanneertevreden'];
//     $_POST['voornaam'];
//     $_POST['achternaam'];
//     $_POST['straatenhuisnummer'];
//     $_POST['postcode'];
//     $_POST['woonplaats'];
//     $_POST['telefoonnummer'];
//     $_POST['email'];
//     $_POST['informatie'];
//     $_POST['gemeld'];
//     $_POST['gebeld'];
//     $_POST['klachttype']; [geluidsoverlast/verkeer/millieu/touristen/parkeren/overig]
?>