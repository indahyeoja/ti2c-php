<html>
<head>
    <title>Form siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 0 auto;
            border: 200px solid #ffff;
            border-image: radial-gradient(circle, rgba(174,215,238,1) 11%, rgba(20,83,157,1) 95%);
            border-image-slice: 1;
            background: rgb(174,215,238);
            background: radial-gradient(circle, rgba(174,215,238,1) 0%, rgba(71,124,186,1) 100%);
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: blue;
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
    </style>
</head>
<body>

<h2>Form Siswa</h2>
<form method="post" action="proses.php">
    <label for="name">Nama:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="placebirth">TTL:</label><br>
    <input type="text" id="placebirth" name="placebirth"><br>
    <label for="age">Usia:</label><br>
    <input type="text" id="age" name="age"><br><br>
    <label for="gender">Jenis_kelamin:</label><br>
    <select id="gender" name="gender">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    <label for="address">Alamat:</label><br>
    <input type="text" id="address" name="address"><br>
    <input type="submit" value="Submit">

</form>
</body>
</html>
