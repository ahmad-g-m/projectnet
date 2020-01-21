<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>وب سایت من</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="data:text/css;base64,LnVuZGVybmF2ew0KICAgIGhlaWdodDogMTBweDsNCn0NCmJvZHl7DQogICAgZGlyZWN0aW9uOiBsdHI7DQoNCn0NCi5hew0KICAgIHBhZGRpbmctbGVmdDogMCA7DQogICAgcGFkZGluZy1yaWdodDogMCA7DQp9DQoubS1wew0KICAgIG1hcmdpbi1sZWZ0OiAxMHB4Ow0KICAgIG1hcmdpbi1yaWdodDogMTBweDsNCn0NCmEuY2Fyb3VzZWwtY29udHJvbC1wcmV2LCBhLmNhcm91c2VsLWNvbnRyb2wtbmV4dCB7DQogICAgd2lkdGg6IDclOw0KfQ0KLmZvb3RlcmxpbmssLmZvb3Rlcmxpbms6aG92ZXINCnsNCiAgICBjb2xvcjogd2hpdGU7DQogICAgdGV4dC1kZWNvcmF0aW9uOiBub25lOw0KfQ0KaW1nIHsNCiAgICBtYXgtd2lkdGg6IDEwMCU7DQogICAgaGVpZ2h0OiBhdXRvOw0KfQ0KLnNsaWRlc2hvd3BpY3sNCiAgICBoZWlnaHQ6IDMwMHB4Ow0KICAgIHdpZHRoOiAxMDAlOw0KfQ0KLnRpdGxlew0KICAgIGNvbG9yOndoaXRlOw0KfQ0KLmJhbm5lcnsNCiAgICB3aWR0aDogNDklOw0KfQ0KLmNvbC1sZWZ0LWJveC10aXRsZXsNCiAgICBoZWlnaHQ6IDUwcHggOw0KICAgIHdpZHRoOiAxMDAlDQp9DQouY29sLWxlZnQtYm94LXRpdGxlLW5hbWV7DQogICAgdGV4dC1hbGlnbjogY2VudGVyOw0KICAgIGNvbG9yOiB3aGl0ZTsNCiAgICBwYWRkaW5nLXRvcDogMTNweDsNCn0NCi5jb2wtbGVmdC1ib3gsLnBvc3QtYm94ew0KICAgIGhlaWdodDogYXV0byA7DQogICAgd2lkdGg6IDEwMCU7DQoNCn0NCi5jb2wtbGVmdC1saXN0ew0KICAgIGxpc3Qtc3R5bGUtdHlwZTpub25lOw0KICAgIHBhZGRpbmctdG9wOjEzcHg7DQogICAgcGFkZGluZy1ib3R0b206IDEzcHgNCn0NCi5wb3N0Ym94LXJpZ2h0ew0KICAgIGZsb2F0OnJpZ2h0Ow0KICAgIGhlaWdodDogYXV0bzsNCiAgICBwYWRkaW5nLWJvdHRvbTogMTBweDsNCn0NCn0NCi5wb3N0Ym94LWxlZnR7DQogICAgZmxvYXQ6bGVmdDsNCiAgICBoZWlnaHQ6IGF1dG87DQogICAgcGFkZGluZy1ib3R0b206IDEwcHg7DQp9DQoucG9zdC1pbWd7DQogICAgYWxpZ24tY29udGVudDogY2VudGVyOw0KICAgIG1hcmdpbi10b3A6IDEwcHg7DQogICAgYm9yZGVyOiBzb2xpZCAxcHggZGVlcHNreWJsdWU7DQp9DQoucG9zdC10ZXh0ew0KICAgIGFsaWduLWNvbnRlbnQ6IGNlbnRlcjsNCiAgICBjb2xvcjogd2hpdGU7DQp9DQouYm94LWxpbmt7DQogICAgdGV4dC1kZWNvcmF0aW9uOiBub25lOw0KICAgIGNvbG9yOiBibGFjazsNCn0NCi5ib3gtbGluazpob3ZlcnsNCiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7DQogICAgY29sb3I6IGJsdWU7DQp9DQoucG9zdC1wYWdlLWltZ3sNCiAgICBoZWlnaHQ6IDE1MHB4Ow0KICAgIHdpZHRoOiAxMDAlOw0KICAgIGZsb2F0OiByaWdodDsNCiAgICBtYXJnaW4tdG9wOiAxMHB4Ow0KICAgIGNvbG9yOiBibGFjazsNCiAgICBtYXJnaW4tYm90dG9tOiAyMHB4Ow0KICAgIGZsb2F0OiBjZW50ZXI7DQoNCn0NCi5zdW1tZXJ5ew0KICAgIGZsb2F0OiBsZWZ0Ow0KfQ0KLnRhYmxlLXN0eWxlew0KICAgIHRleHQtYWxpZ246IGNlbnRlcjsNCn0=" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php 
		use Illuminate\Support\Facades\Storage;
		$path = '';//background
		// $conte1 = Storage::get($path);
		// dd($addresscars[0]);
	?>
    <div>
        <!-- header-->
        <div class="container-fluid jumbotron mb-0 bg-dark">
            <div class="row">
                <div class="col-sm-4">
                    <h1 class="title"> MehT Car Store</h1>
                </div>
                <div class="col-sm-5"></div>
                <div class="col-sm-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary" >
                                <span class="spinner-grow spinner-grow-sm"></span>
                                Search
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Some text">
                    </div>
                </div>
            </div>
        </div>
        <!-- colorful nav -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-sm-12 bg-primary undernav"></div>
            </div>
        </div>
        <!--navbar-->
        <div class="container-fluid a ">
            <nav class="navbar navbar-expand-sm   navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav  mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Type
                        </a>
                        <div class="dropdown-menu sm-menu ">
                            <a class="dropdown-item" href="http://127.0.0.1:8000/machines/sedanscars">sedans</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/machines/classicscars">classics</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/machines/sportscars">sports</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
                <div class="social-part">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
            </div>
        </nav>
        </div>
        <!-- colorful nav -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-sm-12 bg-primary undernav"></div>
            </div>
        </div>
        <!--slide show-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                   
                    <img class="d-block slideshowpic"  style="height: 400px;" src="data:image/jpeg;base64,<?php echo e(base64_encode($addresscars[0])); ?>" alt="First slide" >
                </div>
                <div class="carousel-item">
                    <img class="d-block  slideshowpic" style="height: 400px;" src="data:image/jpeg;base64,<?php echo e(base64_encode($addresscars[1])); ?>" alt="Second slide" >
                </div>
                <div class="carousel-item">
                    <img class="d-block slideshowpic" style="height: 400px;" src="data:image/jpeg;base64,<?php echo e(base64_encode($addresscars[2])); ?>" alt="Third slide" >
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php
            $path1 = '0.gif';
            $conte1 = Storage::get($path1);
            $path2 = '1.gif';
            $conte2 = Storage::get($path2);
        ?>
        <!--post and colm-->
        <div class="container mt-1 ">
            <div class="row">
                <!--right colm-->
                <div class="col-sm-4  mr-4" >
                    <div>
                        <a href="#"><img src="data:image/gif;base64,<?php echo e(base64_encode($conte1)); ?>" class="banner"></a>
                        <a href="#"><img src="data:image/gif;base64,<?php echo e(base64_encode($conte2)); ?>" class="banner"></a>
                    </div>

                    <div class="border-dark mt-2">
                        <div class="bg-dark col-left-box-title">
                            <h4 class="col-left-box-title-name">Archive</h4>
                        </div>
                        <div  class="bg-light col-left-box">
                        <ul class="col-left-list">
                            <a href="http://127.0.0.1:8000/machines/sedanscars" class="box-link"><li>sedans</li></a>
                            <a href="http://127.0.0.1:8000/machines/classicscars" class="box-link"><li>classics</li></a>
                            <a href="http://127.0.0.1:8000/machines/sportscars" class="box-link"><li>sports</li></a>
                        </ul>
                        </div>

                    </div>
                    <div class="border-dark mt-2">
                        <div class="bg-dark col-left-box-title">
                            <h4 class="col-left-box-title-name">Car Brand</h4>
                        </div>
                        <div class="bg-light col-left-box">
                            <ul class="col-left-list">
                                <a href="#" class="box-link"><li>BMW</li></a>
                                <a href="#" class="box-link"><li>Ferrari</li></a>
                                <a href="#" class="box-link"><li>Lamborghini</li></a>
                                <a href="#" class="box-link"><li>Maserati</li></a>
                            </ul>
                        </div>

                    </div>

                </div>
                <!--post-->
                <div class="col-sm-7 ">
                    <div class="row">
                        <div class="col-sm-12 bg-light ">
                            <div class="row">
                                <?php $c=0; ?>
                            <?php $__currentLoopData = $carposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php  
                                    $conte = Storage::get($addressposts[$c]);
                                    $c++;
                                    if($car->mark == 1){
                                        $type = 'sedanscars';
                                    }
                                    if($car->mark == 2){
                                        $type = 'classicscar';
                                    }
                                    if($car->mark == 3){
                                        $type = 'sportscars';
                                    }
                                ?>
                                <div class="col-sm-6 border bg-dark mb-2  postbox-left">
                                    <a href="<?php echo e(url('machines/'.$type.'/carpage/'.$car->id)); ?>"><img class="rounded post-img" style="max-height: 200px;" src="data:image/jpeg;base64,<?php echo e(base64_encode($conte)); ?>" width="100%" height="200px" ></a>
                                    <p  class="post-text">aaaaaaaaaaaaaaaaaaaa</p>                                    
                                </div>
                                
                                <?php if($c==$max): ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- colorful nav -->
        <div class="container-fluid ">
            <div class="row">
                <div class="col-sm-12 bg-primary undernav"></div>
            </div>
        </div>
        <!--footer-->
        <div class="container-fluid bg-dark pt-5" style="height: 200px; color: white">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-7">
                    <ul>
                        <li><a class="footerlink" href="http://127.0.0.1:8000/">home</a> </li>
                        <li><a class="footerlink" href="#">about us</a> </li>
                        <li><a class="footerlink" href="#">contact</a> </li>
                        <li><a class="footerlink" href="#">others</a> </li>
                        <li><a class="footerlink" href="#">others</a> </li>
                    </ul>
                </div>
                <?php   
                    $contelogo = Storage::get('4.png');
                    $conte1 = Storage::get('facebook.png');
                    $conte2 = Storage::get('twitter.png');
                    $conte3 = Storage::get('instagram.png');
                    $conte4 = Storage::get('rss.png');
                ?>

                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12 bg-dark">
                            <img src="data:image/png;base64,<?php echo e(base64_encode($contelogo)); ?>" width="200px" height="100px;">
                            <br>
                            <br>
                            <a href="#"><img src="data:image/png;base64,<?php echo e(base64_encode($conte1)); ?>"></a>
                            <a href="#"><img src="data:image/png;base64,<?php echo e(base64_encode($conte2)); ?>"></a>
                            <a href="#"><img src="data:image/png;base64,<?php echo e(base64_encode($conte3)); ?>"></a>
                            <a href="#"><img src="data:image/png;base64,<?php echo e(base64_encode($conte4)); ?>"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH E:\wamp64\www\projectnet\projectnet\resources\views/index.blade.php ENDPATH**/ ?>