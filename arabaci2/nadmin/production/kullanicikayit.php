<?php require 'kbaglan.php' ?>

    <head>
        <title>Kullanıcı Kayıt Formu</title>
        <meta charset="utf-8" />
        <style type="text/css">
            body{
                background:#080710;
                font-size:10px;
                font-family:Trebuchet MS;
            }
            #kayitFormu{
                
                border-radius:10px;
                background:Gray;
                width:360px;
                margin:auto;
                margin-top:20px;
                padding:15px;
                text-align:center;
            }
            input, button
            {
                border-radius:5px;
                border:none;
                width:300px;
                height:50px;
                margin:20px 0px 20px 0px;
                background:rgba(240,240,240,.5);
                padding-left:15px;
                font-style:italic;
                
            }
            
            .btn{
                background:#76b852;
                color:white;
            }
            h3{
                color:#333;
                text-transform:uppercase;
                font-size:20px;
            }
            
        </style>
    </head>

    <body>






        <div id="kayitFormu">
            <form action="kayityap.php" method="get">
                <h3>KULLANICI Kayıt Formu</h3>

                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_ad" placeholder="Adınızı Giriniz..." required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

               <div class="form-group">
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_soyad" placeholder="Soyadınızı Giriniz..." required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" id="first-name" name="kullanici_mail" placeholder="E-Mail Adresiniz..." required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

                 <div class="form-group">
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_adi" placeholder="Kullanıcı adınızı giriniz..." required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

                 <div class="form-group">
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="password" id="first-name" name="kullanici_sifre" placeholder="şifrenizi giriniz" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>





                <!--<input type="text" name="kullanici_adi" placeholder="kullanıcı adı" required  /> 

                <input type="text" name="Kullanidi_ad" placeholder="Adınızı Giriniz." required />

                <input type="text" name="Kullanici_soyad" placeholder="Soyad Giriniz." required />
            
                 <input type="email" name="kullanici_mail" placeholder="E-Mail giriniz." required />
                
                <input type="password" name="kullanici_sifre" placeholder="şifrenizi giriniz" required/>-->
                
                <button type="submit" class="btn" name="kullanicikayit" class="btn btn-success">Kayıt Ol</button> 
            </form>
            
        </div>
    
    
    </body>