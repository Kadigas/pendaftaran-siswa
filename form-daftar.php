<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Poppins'/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/form.css"/>
</head>

<body>
    <header class="d-flex justify-content-center">
        <h1>Formulir Pendaftaran Siswa Baru</h1>
    </header>

    <div class="d-flex justify-content-center mt-4">
        <form action="proses-pendaftaran.php" method="POST">

            <fieldset>

            <p>
                <label for="nama" class="d-block">Nama: </label>
                <input type="text" name="nama" maxlength="50" class="my-2" size="50" placeholder="Nama lengkap..."/>
            </p>
            <p>
                <label for="alamat" class="d-block">Alamat: </label>
                <textarea name="alamat" id="alamat" cols="53" rows="4" class="my-2"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin" class="d-block">Jenis Kelamin: </label>
                <label class="mx-2"><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                <label class="mx-2"><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama" class="mx-2">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal" class="d-block">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" maxlength="50" class="my-2" size="50" placeholder="Nama sekolah..."/>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" class="btn btn-primary"/>
            </p>

            </fieldset>

        </form>
    </div>

</body>
</html>