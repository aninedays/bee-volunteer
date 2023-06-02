<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | BEEVOLUNTEER</title>
    <link rel="stylesheet" href="css/join_activity.css">
</head>
<body>
    <div class="joinform"><h1>Donation Form</h1></div>
    <div class="main">
        <form>
            <div id="name">
                <h2 class="name">Name</h2>
                <input class="firstname" type="text" name="first_name" required><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last_name">
                <label class="lastlabel">last name</label>
            </div>

            <h2 class="name">Address</h2>
            <input class="address" type="text" name="address" required>

            <h2 class="name">Email</h2>
            <input class="email" type="email" name="email" required>

            <h2 class="name">Phone</h2>
            <input class="code" type="text" name="area_code" required>
            <label class="area-code">Area Code</label>
            <input class="number" type="text" name="phone" required>
            <label class="phone-number">Phone Number</label>

            <h2 class="name">Jenis Barang</h2>
            <input class="JenisBarang" type="text" name="JenisBarang">

            <h2 class="name">Berat Barang (Kg)</h2>
            <input class="BeratBarang" type="number" name="BeratBarang">

            <h2 class="name">Jasa Pengiriman</h2>
            <input class="JasaPengirim" type="text" name="JasaPengirim" required>
            <label class="jasa-pengiriman">(JNE/JNT/GOSEND/GRABSEND)</label>

            <h2 class="name">Nomor Resi</h2>
            <input class="NoResi" type="text" name="NoResi" required>


            <h2 class="name">Bukti Pengiriman Barang</h2>
            <input class="BuktiBarang" type="file" name="BuktiBarang" required>


            <button type="submit">Register</button>
        </form>
    </div>

</body>
</html>
