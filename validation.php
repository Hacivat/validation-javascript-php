<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<p align="center" class="green"><b>Başarıyla Kayıt Oldunuz.</b></p>
<hr>
<table>
    <tr>
        <td>Adınız: </td>
        <td> <?php echo $_POST['name']; ?></td>
    </tr>
    <tr>
        <td>Soyadınız: </td>
        <td> <?php echo $_POST['surname']; ?></td>
    </tr>
    <tr>
        <td>Cinsiyetiniz: </td>
        <td> <?php echo $_POST['gender']; ?></td>
    </tr>
    <tr>
        <td>E-Mail: </td>
        <td> <?php echo $_POST['email']; ?></td>
    </tr>
    <tr>
        <td>Tel No: </td>
        <td> <?php echo $_POST['tel']; ?></td>
    </tr>
    <tr>
        <td>Adres: </td>
        <td> <?php echo $_POST['adres']; ?></td>
    </tr>
    <tr>
        <td>Doğum Tarihi: </td>
        <td> <?php echo $_POST['dt']; ?></td>
    </tr>
    <tr>
        <td>Anne Adı: </td>
        <td> <?php echo $_POST['annename']; ?></td>
    </tr>
    <tr>
        <td>Baba Adı: </td>
        <td> <?php echo $_POST['babaname']; ?></td>
    </tr>
    <tr>
        <td>Anne Kızlık Soyadı: </td>
        <td> <?php echo $_POST['annekizliksoyad']; ?></td>
    </tr>
    <tr>
        <td>Kullanıcı Adı: </td>
        <td><b> <?php echo $_POST['uname']; ?></b></td>
    </tr>
    <tr>
        <td>Şifre: </td>
        <td> <b><?php echo $_POST['pass']; ?></b></td>
    </tr>
</table>
</body>
</html>
