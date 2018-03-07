<!-- BODY -->

<table>
    <form action="validation.php" method="post" id="sign" target='_blank'>
        <tr>
            <th colspan="2">
                Kayıt Formu
            </th>
        </tr>
        <tr>
            <td class="alnleft">İsim: </td>
            <td class="alnright">
                <input type="text" name="name" id="nameId" onblur="nameBlurFunc()" onKeyUp="onKeyName()">
            </td>
        </tr>
        <tr>
            <td class="alnleft"> Soyisim: </td>
            <td class="alnright">
                <input type="text" name="surname" id="surnameId" onblur="surnameBlurFunc()" onKeyUp="onKeySurname()">
            </td>
        </tr>
        <tr>
            <td>Cinsiyet: </td>
            <td class="alnright">
            Erkek
                <input type="radio" name="gender" id="genderErkek" value="Erkek">Kadın
                <input type="radio" name="gender" id="genderKadin" value="Kadın">
            </td>
        </tr>
        <tr>
            <td>E-Mail:</td>
            <td class="alnright">
                <input type="text" name="email" id="mailId" onfocus="onFocusMail()" onblur="mailBlurFunc()"  onKeyUp="onKeyMail()">
            </td>
        </tr>
        <tr>
            <td>Tel No: </td>
            <td class="alnright">
                <input type="tel" name="tel" id="telId" onFocus="onFocusTel()" onblur="telBlurFunc()" onKeyUp="onKeyTel()" >
            </td>
        </tr>
        <tr>
            <td>Adres:</td>
            <td class="alnright">
                <textarea name="adres" form="sign" name="adres" id="adresId" onFocus="onFocusAdres()" onblur="adresBlurFunc()" onKeyUp="onKeyAdres()"></textarea>
            </td>
        </tr>
        <tr>
            <td>Doğum Tarihi:</td>
            <td class="alnright">
                <input type="date" name="dt" id="dateId" onFocus="onFocusDate()" onblur="dateBlurFunc()" onchange="onChangeDate()">
            </td>
        </tr>
        <tr>
            <td>Anne Adı:</td>
            <td class="alnright">
                <input type="text" name="annename" id="anneAdiId" onFocus="onFocusAnneAdi()" onblur="anneAdiBlurFunc()" onKeyUp="onKeyAnneAdi()">
            </td>
        </tr>
        <tr>
            <td>Baba Adı:</td>
            <td class="alnright">
                <input type="text" name="babaname" id="babaAdiId" onFocus="onFocusBabaAdi()" onblur="babaAdiBlurFunc()" onKeyUp="onKeyBabaAdi()">
            </td>
        </tr>
        <tr>
            <td>Anne Kızlık Soyadı:</td>
            <td class="alnright">
                <input type="text" name="annekizliksoyad" id="anneKizlikId" onFocus="onFocusAnneKizlik()" onblur="anneKizlikBlurFunc()" onKeyUp="onKeyAnneKizlik()">
            </td>
        </tr>
        <tr>
            <td>Kullanıcı Adı:</td>
            <td class="alnright">
                <input type="text" name="uname" id="unameId" onFocus="onFocusUname()" onblur="unameBlurFunc()" onKeyUp="onKeyUname()">
            </td>
        </tr>
        <tr>
            <td id="justFocus">Şifre:</td>
            <td class="alnright">
                <input type="password" name="pass" id="passId" onFocus="onFocusPass()" onblur="passBlurFunc()" onKeyUp="onKeyPass()">
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" id="lisansId" name="">
                <a href="#">Lisans Sözleşmesi</a>'ni okudum ve kabul ediyorum.
            </td>
            <td class="alnright">
                <input type="submit" name="sub" id="" value="Kayıt Ol">
            </td>
        </tr>
    </form>
</table> <br> <br>
<div class="center" align="center">
</div>