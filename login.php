<style>

{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body{
    background: url("img/slider.jpg");
    background-size: 40cm 20cm;
}

div.konten{
    background: #ffffff;
    width: 350px;
    margin: 100px auto 0;
    border-radius: 16px;
    min-height: 256px;
    overflow: hidden;
}

div.kepala{
    background: green;
    padding: 10px 22px;
    height: 60px;
}

div.kepala h2.judul{
    color: #fff;
    font-weight: normal;
    line-height: 40px;
    display: inline-block;
}

div.lock{
    background-image: url("img/lockk.png");
    background-position: center;
    background-size: 38px;
    display: inline-block;
    width: 25px;
    height: 25px;
    margin-top: 8px;
    float: left;
    margin-right: 10px;
}

div.artikel{
    padding:10px 22px 0;
    color: #808080;
}

div.artikel div.grup{
    margin: 16px 0;
}

div.artikel div.grup label,
div.artikel div.grup input{
    display: block;
}

div.artikel div.grup label{
    font-size: 13px;
    margin-bottom: 10px;
}

div.artikel div.grup input[type="text"],
div.artikel div.grup input[type="password"]{
    width: 100%;
    height: 30px;
    padding: 0 10px;
    background: #eeeeee;
    border:none;
    color: #808080;
}

div.artikel div.grup input[type="submit"]{
    background: #33cd77;
    padding: 4px 16px;
    margin: 0 auto;
    border: 1px solid #33cd77;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
}

div.artikel div.grup input[type="submit"]:hover{
    background: #28a45e;
}
</style>
<head>
  <form name="submit" action="proses_login.php" method="POST">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Sign In</h2>
        </div>
        <div class="artikel">
                <div class="grup">
                    <label for="email">E-mail Address</label>
                    <input type="text" name="email" required placeholder="Masukkan Alamat Email Anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" name="password" required placeholder="Masukkan password Anda">
                </div>
                <div class="grup">
                  <input type="submit" name="submit" value="Sign In">
                </div></form>
                <form name="mendaftar" action="mendaftar.php" method="POST">
                  <p><center> klik mendaftar untuk membuat akun</center></p>
                <div class="grup">
                  <input type="submit" name="mendaftar" value="Mendaftar">
                </div>
            </form>
            <form action=index.php>
              <div class="grup">
              <input name="home" value="Kembali Ke Home" type="submit"></div>
            </form>
        </div>
    </div>
</body>
