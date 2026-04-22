<!DOCTYPE html>
<html>
    <head>
        <title>Form Mahasiswa</title>
        <style>
            body {font-family: Arial, sans-serif;
        }
        .form-group{
            margin-bottom: 10px;
        }
        label {
            width: 250px;
            font-weight: bold;
        }
        input, textarea {
            border: 1px solid #999;
            border-radius: 4px;
        }

        </style>
        </head>
    <body>

        <h2>Form Data Mahasiswa</h2>

        <form action="#" method="POST">
            @csrf 

            <div class="form group">
                <label>Nama Lengkap</label> :
                <input type="text" name="Fullname">
            </div>

            <div class="form-group">
                <label>Nomor Induk Mahasiswa</label> :
                <input type="text" name="NIM">
            </div>

            <div class="form-group">
                <label>Nomor Induk Siswa Nasional</label> :
                <input type="text" name="NIDN">
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label> :
                <input type="text" name="Tempat Lahir">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label> :
                <input type="text" name="Tanggal Lahir">
            </div>

            <div class="form-group">
                <label>Alamat</label> :
                <input type="text" name="Alamat">
            </div>