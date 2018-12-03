<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Login | Ujian Berbasis Komputer</title>
  

  <!-- MyCSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">

	<!-- FontAwesome -->
    <link rel="stylesheet" href="<?=base_url('assets/fontawesome/css/all.css');?>">
  
</head>

<body>

  <!--
  This was created based on the Dribble shot by Deepak Yadav that you can find at https://goo.gl/XRALsw
  I am @hurickkrugner on Twitter or @hk95 on GitHub. Feel free to message me anytime.
-->

<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title">Selamat Datang <br>di SMK N 1 Kedungwuni</h2>
        <p class="user_unregistered-text">Gunakan NIS dan Passsword untuk masuk,</p>
        <p>Jika lupa password, klik tombol di bawah</p>
        <button class="user_unregistered-signup" id="signup-button">LUPA PASSWORD</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">TUTORIAL</h2>
        <ol>
          <li>Masukkan NIS lalu enter,</li>
          <li>Akan muncul pertanyaan yang sudah anda buat sebelumnya,</li>
          <li>Isi sesuai jawaban yang anda buat</li>
          <li>Klik ok, kemudian lakukan reset password</li>
        </ol>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form class="form padding-b">
  		    <input type="text" placeholder="NIS" autofocus required="" />
  		    <i class="fa fa-user"></i>
  		    <input type="password" placeholder="Password" required="" />
  		    <i class="fa fa-lock"></i>
          <button type="submit">
  		      Log in
  		    </button> 
		    </form>
      </div>
      <div class="user_forms-signup">
        <h2 class="forms_title">Lupa Password</h2>
        <form class="form">
          <input id="tanya" type="text" placeholder="NIS" autofocus required="" />
          <i class="fa fa-user"></i> 
          <span hidden="" class="">
            <p>1. Siapa pedagang bakso di Pringlangu yang anda tahu?</p>
            <input type="text" class="jawab" id="jawab" placeholder="Jawaban">
            <i class="fa fa-key"></i>
          </span>
          
          <!-- <button id="tanya">
            Pertanyaan
          </button> -->
        </form>
      </div>
    </div>
  </div>
</section>

<script  src="<?=base_url('assets/js/login.js');?>"></script>
</body>
</html>