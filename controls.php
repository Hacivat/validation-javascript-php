<script>
    //OnKeys
    function onKeyName () {
        document.getElementById("nameId").style.color = "black";
    }
    function onKeySurname () {
        document.getElementById("surnameId").style.color = "black";
    }
    function onKeyMail () {
        document.getElementById("mailId").style.color = "black";
    }
    function onKeyTel () {
        document.getElementById("telId").style.color = "black";
    }
    function onKeyAdres () {
        document.getElementById("adresId").style.color = "black";
    }
    var dateSelected = false;
    function onChangeDate () {
        document.getElementById("dateId").style.color = "black";
        dateSelected = true;
    }
    function onKeyAnneAdi () {
        document.getElementById("anneAdiId").style.color = "black";
    }
    function onKeyAnneKizlik () {
        document.getElementById("anneAdiId").style.color = "black";
    }
    function onKeyUname () {
        document.getElementById("unameId").style.color = "black";
    }

    //OnFocues
    function onFocusMail () {
        if ($('input[name=gender]:checked').length == 0) {
            var ok = confirm("Lütfen Cinsiyet Seçiniz."); 
            if (ok || !ok) {
                document.getElementById("genderErkek").focus();
            } 
        }
    }

/* Tel Format
+1 8087339090
+91 8087339090
+912 8087339090
8087339090
08087339090
+1-8087339090
+91-8087339090
+912-8087339090
+918087677876
+9108087735454
*/

//Blurs

//Name Val
    var regex = /^\s*[a-zA-ZçÇğĞıİöÖşŞüÜ\s]+\s*$/;
    function nameBlurFunc(){
        var val = document.getElementById("nameId").value;
        var nameValid = false;      
        if (!regex.test(val) || val == "") {
            var ok = confirm("İsim Uygun Değil");
            if (ok || !ok) {
                document.getElementById("nameId").value = "Hatalı İsim";
                document.getElementById("nameId").style.color = "red";
                document.getElementById("nameId").focus();
            }
         }
    }
//Surname Val
    function surnameBlurFunc(){
        var val = document.getElementById("surnameId").value;
        if (!regex.test(val) || val == "") {
            var ok = confirm("Soyisim Uygun Değil");
            if (ok || !ok) {
                document.getElementById("surnameId").value = "Hatalı Soyisim";
                document.getElementById("surnameId").style.color = "red";
                document.getElementById("surnameId").focus();
            }
         }
    }
    var mailRegEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    function mailBlurFunc() {
        var val = document.getElementById("mailId").value;
        if (!mailRegEx.test(val)) {
            var ok = confirm("Geçersiz Mail Adresi");
            if (ok || !ok) {
                document.getElementById("mailId").value = "example@example.com";
                document.getElementById("mailId").style.color = "red";
                document.getElementById("mailId").focus();
                
            }
        }
    }
    var telRegex = /^(\+\d{1,3}[- ]?)?\d{10}$/;
    function telBlurFunc() {
        var val = document.getElementById("telId").value;
        if (!telRegex.test(val)) {
            var ok = confirm("Geçersiz Telefon Numarası");
            if (ok || !ok) {
                document.getElementById("telId").value = "+900000000000";
                document.getElementById("telId").style.color = "red";
                document.getElementById("telId").focus();
            }
        }
    }
    function adresBlurFunc() {
        var val = document.getElementById("adresId").value;
        if (val == "") {
            var ok = confirm("Adres Boş Geçilemez");
            if (ok || !ok) {
                document.getElementById("adresId").style.color = "red";
                document.getElementById("adresId").value = "Lütfen Geçerli Bir Adres Giriniz";
                document.getElementById("adresId").focus();
            }
        }
    }
    function dateBlurFunc() {
        var val = document.getElementById("dateId").value;
        if (val == "gg.aa.yyyy") {
            var ok = confirm("Doğum Tarihi Boş Geçilemez");
            if (ok || !ok) {
                document.getElementById("dateId").style.color = "red";   
            }
        }
    }
    function anneAdiBlurFunc() {
        var val = document.getElementById("anneAdiId").value;
        if (!regex.test(val)) {
            var ok = confirm("İsim Uygun Değil");
            if(ok || !ok) {
                document.getElementById("anneAdiId").value = "Hatalı İsim";
                document.getElementById("anneAdiId").style.color = "red";
                document.getElementById("anneAdiId").focus();
            }
        }
    }
    function babaAdiBlurFunc() {
        var val = document.getElementById("babaAdiId").value;
        if (!regex.test(val)) {
            var ok = confirm("İsim Uygun Değil");
            if(ok || !ok) {
                document.getElementById("babaAdiId").value = "Hatalı İsim";
                document.getElementById("babaAdiId").style.color = "red";
                document.getElementById("babaAdiId").focus();
            }
        }
    }
    function anneKizlikBlurFunc() {
        var val = document.getElementById("anneKizlikId").value;
        if (!regex.test(val)) {
            var ok = confirm("Soyisim Uygun Değil");
            if(ok || !ok) {
                document.getElementById("anneKizlikId").value = "Hatalı Soyisim";
                document.getElementById("anneKizlikId").style.color = "red";
                document.getElementById("anneKizlikId").focus();
            }
        }
    }
    var unameRegEx = /^[a-zA-Z\-]+$/;
    function unameBlurFunc(){
        var val = document.getElementById("unameId").value;
        if (!unameRegEx.test(val)) {
            var ok = confirm("Hatalı Kullanıcı Adı");
            if(ok || !ok) {
                document.getElementById("unameId").value = "Hata";
                document.getElementById("unameId").style.color = "red";
                document.getElementById("unameId").focus();
            }
        }
    }
    var passRegEx = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    function passBlurFunc(){
        var val = document.getElementById("passId").value;
        if (!passRegEx.test(val)) {
            var ok = confirm("Şifre en az 1 rakam 1 harf içermelidir ve en az 8 karakter içermelidir");
            if(ok || !ok) {
                document.getElementById("passId").value = "";
            }
        }
    }
    //Jquery Submit Check
    $(document).ready(function(){
        $('#sign').on('submit', function(e){
            $("div").empty();
            var validAgree = true;
            e.preventDefault();
            if (document.getElementById("lisansId").checked === false) {
                alert("Lisans Sözleşmesi'ni okuyup kabul etmeden kayıt olamazsınız.");
                validAgree = false;
                return;
            }
            if (!regex.test(document.getElementById("nameId").value) || document.getElementById("nameId").value == "" || document.getElementById("nameId").value == "Hatalı İsim") {
                $("div").append("* Hatalı İsim </br>");
                validAgree = false;
            }
            if (!regex.test(document.getElementById("surnameId").value) || document.getElementById("surnameId").value == "" || document.getElementById("surnameId").value == "Hatalı Soyisim") {
                $("div").append("* Hatalı Soyisim </br>");
                validAgree = false;
            }
            if ($('input[name=gender]:checked').length == 0) {
                $("div").append("* Hatalı Cinsiyet </br>");
                validAgree = false;
            }
            if (!mailRegEx.test(document.getElementById("mailId").value) || document.getElementById("mailId").value == "" || document.getElementById("mailId").value == "example@example.com") {
                $("div").append("* Hatalı E-Mail </br>");
                validAgree = false;
            }
            if (!telRegex.test(document.getElementById("telId").value) || document.getElementById("telId").value == "" || document.getElementById("telId").value == "+900000000000") {
                $("div").append("* Hatalı Tel. No </br>");
                validAgree = false;
            }
            if (document.getElementById("adresId").value == "" || document.getElementById("adresId").style.color == "red") {
                $("div").append("* Hatalı Adres </br>");
                validAgree = false;
            }
            if (!dateSelected){
                $("div").append("* Hatalı Doğum Tarihi </br>");
                validAgree = false;
            }
            if (!regex.test(document.getElementById("anneAdiId").value) || document.getElementById("anneAdiId").value == "" || document.getElementById("anneAdiId").value == "Hatalı İsim") {
                $("div").append("* Hatalı Anne Adı </br>");
                validAgree = false;
            }
            if (!regex.test(document.getElementById("babaAdiId").value) || document.getElementById("babaAdiId").value == "" || document.getElementById("babaAdiId").value == "Hatalı İsim") {
                $("div").append("* Hatalı Baba Adı </br>");
                validAgree = false;
            }
            if (!regex.test(document.getElementById("anneKizlikId").value) || document.getElementById("anneKizlikId").value == "" || document.getElementById("anneKizlikId").value == "Hatalı Soyisim") {
                $("div").append("* Hatalı Soyisim </br>");
                validAgree = false;
            }
            if (!unameRegEx.test(document.getElementById("unameId").value) || document.getElementById("unameId").value == "" || document.getElementById("unameId").value == "Hata") {
                $("div").append("* Hatalı Kullanıcı Adı </br>");
                validAgree = false;
            }
            if (!passRegEx.test(document.getElementById("passId").value) || document.getElementById("passId").value == "") {
                $("div").append("* Hatalı Şifre </br>");
                validAgree = false;
            } 
            else if (validAgree){
                $("div").empty();
                this.submit();
            }
        });
    });
</script>