
<?php include 'header.php';
include 'baglan.php' ?>

      
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>E-Mail Ayarları</h3>

<?php 

if($_GET['durum']=="ok")
{
  ?>
<b style="color:green;">İşlem Başarılı...</b>
<?php  }




if($_GET['durum']=="no")
{ ?>
<b style="color:red;">İşlem Başarısız...</b>
<?php }?>

              </div>





              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Genel Ayar <small>İşlem Durumu</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">




                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">HOST<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_smtphost"  value="<?php echo $ayarcek['ayar_smtphost'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">USER<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="user" value="<?php echo $ayarcek['user'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PASSWORD<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="password" value="<?php echo $ayarcek['password'] ?>"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PORT<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_smtpport" value="<?php echo $ayarcek['ayar_smtpport'] ?>"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       
                   
                      
                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right"class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="mailayarkaydet" class="btn btn-primary">Güncelle</button>
                         
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>








            </div>
          </div>
        </div>


        <?php include 'footer.php'; ?>
        <!-- sayfa sonu -->

      