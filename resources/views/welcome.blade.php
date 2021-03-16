<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Karthikeyan K">
    <title>Webpage Screenshots using Javascript & HTML5 - Demo by w3lessons.info</title>
    <!-- Bootstrap CSS file -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <style type="text/css">
        body {
            margin-top: 75px;
        }
        footer {
            margin: 10px 0;
        }

        .photo {
            margin-bottom: 10px;
        }
    </style>	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="{{ asset('css/cropper.css') }}" rel="stylesheet">
</head>
<body>
<!-- Header -->
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="font-size:22px;" target="_blank"><span class="label label-success">W3lessons</span></a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <form class="navbar-form navbar-right" role="search" action="https://w3lessons.info" method="GET">
                <div class="form-group">
                    <input type="text" name="s" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <ul class="nav navbar-nav">
                <li>
                    <a href="https://w3lessons.info/">Home</a>
                </li>
                <li>
                    <a href="https://w3lessons.info/about">About</a>
                </li>
                <li>
                    <a href="https://w3lessons.info/contact">Contact</a>
                </li>
                <li>
                    <a href="https://w3lessons.info/request-a-tutorial/" target="_blank">Request a Tutorial</a>
                </li>
            </ul>
        </nav>
    </div>
</header><style type="text/css">
    #x {
        color:#A1B9ED;
        cursor:pointer;
        display:none;
    }
    /* Set the hover state of "X" */
    #x:hover {
        color:#36c;
    }
    #result-image {
        height:auto;
        max-width:100%;
    }
</style>
<!-- Body -->
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <article>
                <h1><a href="">Webpage Screenshots using Javascript & HTML5 - Demo</a></h1>
                <div class="row">

                    <div class="col-sm-6 col-md-6">
                        <span class="glyphicon glyphicon-time"></span> September 09, 2019
                    </div>
                </div>
                <hr>
                <div class="form-group">

                    <div class="well">

                        <img src="about:blank" id="result-image" style="display: none;">

                    </div>


                    <a href="javascript:;" onclick="wholePage();" class="btn btn-success">Take Whole Page</a>

                    <a href="javascript:;" onclick="LatestPost();" class="btn btn-info">Take Latest Post Box</a>

                    <a href="javascript:;" onclick="TakeAboutMe();" class="btn btn-danger">Take About Me Box</a>

                </div>


                <div>
                    <a class="btn btn-lg btn-danger" href=" https://w3lessons.info/2017/09/19/instant-google-search-engine-api-using-jquery/">&larr; Back to Tutorial & Download</a>
                </div>

                <div style="width:100%; margin-top: 20px"><h2>Posts you may like</h2>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-format="autorelaxed"
                         data-ad-client="ca-pub-5104998679826243"
                         data-ad-slot="7569826231"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>


            </article>

        </div>
        <div class="col-md-4">

            <div class="well" id="profileBox">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-left pull-left">
                            <img class="img-rounded" style="margin-right:10px;" src="https://www.gravatar.com/avatar/526bba62d8d99c7cd96f2a7dbc6ab0d3.jpg" alt="Karthikeyan K - Founder at W3lessons">
                        </p>
                        <p class="text-left" style="padding-left:10px; margin-left:10px;"><strong>Karthikeyan K</strong><br/>AWS Consultant & Blogger<br/>Chennai, India <br/><a href="mailto:karthi@w3lessons.info">karthi@w3lessons.info</a></p>
                        <p class="text-left"><span class="glyphicon glyphicon-facebook"></span></p>
                    </div>

                    <div class="text-center">
                        <form class="form-inline" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=nextweb2', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" _lpchecked="1">
                            <div class="form-group">
                                <label class="sr-only">Subscribe to get latest updates to your inbox.</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Enter your Email ID here">
                                <input type="hidden" value="nextweb2" name="uri"><input type="hidden" name="loc" value="en_US">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Subscribe</button>
                            <p class="text-center"><br/><img src="https://feeds.feedburner.com/~fc/nextweb2?bg=FF9900&fg=000&anim=1&label=readers"></p>
                        </form>
                    </div>

                </div>

            </div>

            <div>
                <center>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Post Page1 - Responsive -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:336px;height:280px"
                         data-ad-client="ca-pub-5104998679826243"
                         data-ad-slot="6424151376"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                </center>
            </div>

            <!-- Latest Posts -->
            <div class="panel panel-default" id="LatestPost">
                <div class="panel-heading">
                    <h4>Latest Posts</h4>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/a1DGXYjsS-E/">20+ Useful jQuery Code Snippets for Web Developers in 2019</a> <span class="label label-default">4 Aug 2019</span></li>
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/65iBgfsF8nI/">how to show loading image in ajax request using jquery?</a> <span class="label label-default">3 Aug 2019</span></li>
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/ywzAfpCTjrU/">How to speed up software testing?</a> <span class="label label-default">25 Jul 2019</span></li>
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/u3zBZV9ce5o/">7 blogs every web designers should follow to stay productive</a> <span class="label label-default">12 Jul 2019</span></li>
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/wALp6FDrvBw/">How to find the difference between two dates in php?</a> <span class="label label-default">31 May 2019</span></li>
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/hOFcLfJ5TqQ/">New Gmail Account Login &amp; Registration Form with Material Design and jQuery</a> <span class="label label-default">2 Apr 2019</span></li>
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/9jnpcqwR56Y/">Removing index.php from Codeigniter URL</a> <span class="label label-default">27 Mar 2019</span></li>
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/w5DWM7orjCM/">PHP vs NodeJs – Which One is Better?</a> <span class="label label-default">19 Jan 2019</span></li>
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/AhzlA38E41A/">Export HTML Table Data to CSV, Excel, PNG, PDF, TXT, Doc, JSON &amp; XML using jQuery</a> <span class="label label-default">15 Jan 2019</span></li>
                    <li class="list-group-item"><a target="_blank" href="http://feedproxy.google.com/~r/nextweb2/~3/QpBYpTSpi-w/">How to Recognize Celebrity in an Image using PHP and Amazon Rekognition API?</a> <span class="label label-default">6 Jan 2019</span></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Categories</h4>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><a href="https://w3lessons.info/category/php/">PHP</a></li>
                    <li class="list-group-item"><a href="https://w3lessons.info/category/jquery/">jQuery</a></li>
                    <li class="list-group-item"><a href="https://w3lessons.info/category/facebook/">Facebook Style Scripts</a></li>
                    <li class="list-group-item"><a href="https://w3lessons.info/category/html5-2/">HTML5</a></li>
                    <li class="list-group-item"><a href="https://w3lessons.info/category/css3/">CSS3</a></li>
                </ul>
            </div>


        </div>	</div>

</div>


{{--// cropperjs - cắt ảnh--}}
<input type="file" name="image" id="image" style="display: none">
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Cắt ảnh</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <img id="image1" src="https://avatars0.githubusercontent.com/u/3456749">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="crop">Cắt</button>
            </div>
        </div>
    </div>
</div>
{{--// cropperjs - cắt ảnh--}}

<!-- Footer -->
<footer>
    <div class="container">
        <hr />
        <p class="text-center">Copyright &copy; <a href="https://w3lessons.info">w3lessons.info</a> 2019. All rights reserved.</p>
    </div>
</footer>
<!-- Bootstrap Script file -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="//load.sumome.com/" data-sumo-site-id="1cf2c3d548b156a57050bff06ee37284c67d0884b086bebd8e957ca1c34e99a1" async="async"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js" integrity="sha256-c3RzsUWg+y2XljunEQS0LqWdQ04X1D3j22fd/8JCAKw=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js" integrity="sha256-FPJJt8nA+xL4RU6/gsriA8p8xAeLGatoyTjldvQKGdE=" crossorigin="anonymous"></script>
<script src="{{ asset('js/cropper.js') }}"></script>

<script type="text/javascript">

    function wholePage()
    {
        html2canvas(document.body, {
            onrendered: function(canvas)
            {
                var img = canvas.toDataURL();
                $("#result-image").attr('src', img).show();

                canvas.toBlob(function(blob) {
                    saveAs(blob, "wholePage.png");
                });
            }
        });
        return false;
    }

    function TakeAboutMe()
    {
        html2canvas(document.querySelector("#profileBox"), {
            onrendered: function(canvas)
            {
                var img = canvas.toDataURL();
                $("#result-image").attr('src', img).show();
                canvas.toBlob(function(blob) {
                    saveAs(blob, "AboutMe.png");
                });
            },
            allowTaint: true,
            imageTimeout: 0,
            useCORS: true
        });
        return false;
    }

    function LatestPost()
    {
        html2canvas(document.querySelector("#LatestPost"), {
            onrendered: function(canvas)
            {
                var img = canvas.toDataURL();
                $("#result-image").attr('src', img).show();
                canvas.toBlob(function(blob) {
                    // saveAs(blob, "LatestPost.png");
                });
                saveImage(img)
            },
            allowTaint: true,
            imageTimeout: 0,
            useCORS: true
        });
        return false;
    }

    // cropperjs - cắt ảnh
    var avatar = $('iframe1').contents().find('img.logo-img');
    var image = document.getElementById('image1');
    var input = document.getElementById('image');
    var $progress = $('.progress');
    var $progressBar = $('.progress-bar');
    var $alert = $('.alert');
    var $modal = $('#modal');
    var cropper;

    $('[data-toggle="tooltip"]').tooltip();

    input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
            input.value = '';
            image.src = url;
            $alert.hide();
            $modal.modal('show');
        };
        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 0,
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    document.getElementById('crop').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;

        $modal.modal('hide');

        if (cropper) {
            canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 160,
            });
            initialAvatarURL = avatar.src;
            avatar.src = canvas.toDataURL();
            $progress.show();
            $alert.removeClass('alert-success alert-warning');
            canvas.toBlob(function (blob) {
                var formData = new FormData();

                formData.append('image', blob, 'avatar.jpg');
                formData.append('_token', '{{ csrf_token() }}');
                console.log(formData)
                $.ajax('/ajax_luu_anh', {
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,

                    xhr: function () {
                        var xhr = new XMLHttpRequest();

                        xhr.upload.onprogress = function (e) {
                            var percent = '0';
                            var percentage = '0%';

                            if (e.lengthComputable) {
                                percent = Math.round((e.loaded / e.total) * 100);
                                percentage = percent + '%';
                                $progressBar.width(percentage).attr('aria-valuenow', percent).text(percentage);
                            }
                        };

                        return xhr;
                    },

                    success: function (res) {
                        let img = $('#iframe1').contents().find('img.logo-img')
                        img.attr('src', res.data.image)
                        $alert.show().addClass('alert-success').text('Upload success');
                    },

                    error: function () {
                        avatar.src = initialAvatarURL;
                        $alert.show().addClass('alert-warning').text('Upload error');
                    },

                    complete: function () {
                        $progress.hide();
                    },
                });
            });
        }
    });
</script>
</body>
</html>
