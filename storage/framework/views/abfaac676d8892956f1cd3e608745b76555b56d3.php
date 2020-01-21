<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="data:text/css;base64,LnVuZGVybmF2ew0KICAgIGhlaWdodDogMTBweDsNCn0NCmJvZHl7DQogICAgZGlyZWN0aW9uOiBsdHI7DQoNCn0NCi5hew0KICAgIHBhZGRpbmctbGVmdDogMCA7DQogICAgcGFkZGluZy1yaWdodDogMCA7DQp9DQoubS1wew0KICAgIG1hcmdpbi1sZWZ0OiAxMHB4Ow0KICAgIG1hcmdpbi1yaWdodDogMTBweDsNCn0NCmEuY2Fyb3VzZWwtY29udHJvbC1wcmV2LCBhLmNhcm91c2VsLWNvbnRyb2wtbmV4dCB7DQogICAgd2lkdGg6IDclOw0KfQ0KLmZvb3RlcmxpbmssLmZvb3Rlcmxpbms6aG92ZXINCnsNCiAgICBjb2xvcjogd2hpdGU7DQogICAgdGV4dC1kZWNvcmF0aW9uOiBub25lOw0KfQ0KaW1nIHsNCiAgICBtYXgtd2lkdGg6IDEwMCU7DQogICAgaGVpZ2h0OiBhdXRvOw0KfQ0KLnNsaWRlc2hvd3BpY3sNCiAgICBoZWlnaHQ6IDMwMHB4Ow0KICAgIHdpZHRoOiAxMDAlOw0KfQ0KLnRpdGxlew0KICAgIGNvbG9yOndoaXRlOw0KfQ0KLmJhbm5lcnsNCiAgICB3aWR0aDogNDklOw0KfQ0KLmNvbC1sZWZ0LWJveC10aXRsZXsNCiAgICBoZWlnaHQ6IDUwcHggOw0KICAgIHdpZHRoOiAxMDAlDQp9DQouY29sLWxlZnQtYm94LXRpdGxlLW5hbWV7DQogICAgdGV4dC1hbGlnbjogY2VudGVyOw0KICAgIGNvbG9yOiB3aGl0ZTsNCiAgICBwYWRkaW5nLXRvcDogMTNweDsNCn0NCi5jb2wtbGVmdC1ib3gsLnBvc3QtYm94ew0KICAgIGhlaWdodDogYXV0byA7DQogICAgd2lkdGg6IDEwMCU7DQoNCn0NCi5jb2wtbGVmdC1saXN0ew0KICAgIGxpc3Qtc3R5bGUtdHlwZTpub25lOw0KICAgIHBhZGRpbmctdG9wOjEzcHg7DQogICAgcGFkZGluZy1ib3R0b206IDEzcHgNCn0NCi5wb3N0Ym94LXJpZ2h0ew0KICAgIGZsb2F0OnJpZ2h0Ow0KICAgIGhlaWdodDogYXV0bzsNCiAgICBwYWRkaW5nLWJvdHRvbTogMTBweDsNCn0NCn0NCi5wb3N0Ym94LWxlZnR7DQogICAgZmxvYXQ6bGVmdDsNCiAgICBoZWlnaHQ6IGF1dG87DQogICAgcGFkZGluZy1ib3R0b206IDEwcHg7DQp9DQoucG9zdC1pbWd7DQogICAgYWxpZ24tY29udGVudDogY2VudGVyOw0KICAgIG1hcmdpbi10b3A6IDEwcHg7DQogICAgYm9yZGVyOiBzb2xpZCAxcHggZGVlcHNreWJsdWU7DQp9DQoucG9zdC10ZXh0ew0KICAgIGFsaWduLWNvbnRlbnQ6IGNlbnRlcjsNCiAgICBjb2xvcjogd2hpdGU7DQp9DQouYm94LWxpbmt7DQogICAgdGV4dC1kZWNvcmF0aW9uOiBub25lOw0KICAgIGNvbG9yOiBibGFjazsNCn0NCi5ib3gtbGluazpob3ZlcnsNCiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7DQogICAgY29sb3I6IGJsdWU7DQp9DQoucG9zdC1wYWdlLWltZ3sNCiAgICBoZWlnaHQ6IDE1MHB4Ow0KICAgIHdpZHRoOiAxMDAlOw0KICAgIGZsb2F0OiByaWdodDsNCiAgICBtYXJnaW4tdG9wOiAxMHB4Ow0KICAgIGNvbG9yOiBibGFjazsNCiAgICBtYXJnaW4tYm90dG9tOiAyMHB4Ow0KICAgIGZsb2F0OiBjZW50ZXI7DQoNCn0NCi5zdW1tZXJ5ew0KICAgIGZsb2F0OiBsZWZ0Ow0KfQ0KLnRhYmxlLXN0eWxlew0KICAgIHRleHQtYWxpZ246IGNlbnRlcjsNCn0=" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Bootstrap 4 tutorial</title>
    <style>
      body {
        font-family: "Lato", sans-serif;
      }
      
      .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgba(17, 17, 17, 0.979);
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        text-align:center;
      }
      
      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #faf0f0f1;
        display: block;
        transition: 0.3s;
      
      }
      
      .sidenav a:hover{
        color: #e02d2d;
      }
      
      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }
      .sideMenuStyle{
          font-size:30px;
          cursor:pointer;
          background-color:#353434c5;
      }
      
      @media  screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
      </style>
</head>
<body>
	<header class="masterHeader text-center text-white">
    <span class="sideMenuStyle navbar navbar-expand-sm fixed-bottom" style="height:2.5rem;" id="#nav" onclick="openNav()">&#9776; open dash board</span>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <?php echo e($tick = 'admin'); ?>

      <a href="http://127.0.0.1:8000/dashbord/profile/<?php echo e($idadmin); ?>/<?php echo e($tick); ?>">profile</a>
      <a href="<?php echo e(route('newpost')); ?>">add new post</a>
      <a href="<?php echo e(route('showUsers')); ?>">show users</a>
      <a href="#">edit or delet posts</a>
    </div>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
      }    
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>
    <br>
    <h4 class="text-dark">+new post</h4>
              
    <br/>
    <form action="<?php echo e(route('uploadAdmin')); ?>" method="post"  enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

      <div class="container">
        <div class="row">  
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="mx-auto col-lg-8 col-md-10 col-sm-11 col-xs-12">
              <div class="form-row">
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">brand</span>
                  </div>
                  <input type="text" class="form-control" name="brand">
                </div>
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">name</span>
                  </div>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">model</span>
                  </div>
                  <input type="text" class="form-control" name="model">
                </div>
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">year</span>
                  </div>
                  <input type="text" class="form-control" name="year">
                </div>
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">price</span>
                  </div>
                  <input type="text" class="form-control" name="price">
                  <div class="input-group-append">
                    <span class="input-group-text">$</span>
                  </div>
                </div>
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">time 0 to 100</span>
                  </div>
                  <input type="text" class="form-control" name="time0to100">
                </div>
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">transmission</span>
                  </div>
                  <input type="text" class="form-control" name="transmission">
                </div>
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">fuel type</span>
                  </div>
                  <input type="text" class="form-control" name="fueltype">
                </div>
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">engine power</span>
                  </div>
                  <input type="text" class="form-control" name="enginepowers">
                </div>
                <div class="input-group col-12 mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">cylander number</span>
                  </div>
                  <input type="text" class="form-control" name="numbercylinder">
                </div>          
                  <!-- fault:
                    <p class="error ml-5">incorrect information</p>
                  -->
              </div>  
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="mx-auto col-lg-9 col-md-10 col-sm-11 col-xs-12">
              <select name="cars" class="custom-select mb-3">
                <option value="1" selected>Sedon</option>
                <option value="3">Sport</option>
                <option value="2">Classic</option>
              </select>        
              <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="moredetail" placeholder="more details..."></textarea>
              </div>
              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="fileField" name="upFileFromAdmin[]" multiple>
                <label class="custom-file-label" for="customFile">Choose file</label>  
              </div>
              <div class="btn-group mb-3">
                <button type="submit" name="newPostBtn" class="btn btn-primary btn-success">Create</button>
                <button type="button" class="btn btn-primary btn-danger">Cancel</button>
              </div>          
            </div>
          </div>
        </div>
      </div>
    </form>
    <?php
        use Illuminate\Support\Facades\Storage;
        if(isset($contents)){
            // echo(Storage::disk('s3')->exists('photos/else/5FEl6nROVpape15BUu8hH5cnxMVFHyxn1QQ0TbKu.jpg'));
            foreach($contents as $cont){
                $c = $cont->address;
                $conte = Storage::get($c);
            
            ?>
            <img src="data:image/jpeg;base64,<?php echo e(base64_encode($conte)); ?>" style = "width : 150px ; height: 150px"
             alt="notingggg">
            <?php
            }
        }
        ?>
	</header>
</body>
</html>
<?php /**PATH E:\wamp64\www\projectnet\projectnet\resources\views/admin/admindashbord.blade.php ENDPATH**/ ?>