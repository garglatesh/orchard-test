<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orchard Test</title>
        <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}">
    </head>
    <body>
        <!--start page content-->
        <div class="page-content">
            <header class="top_header clearfix">
                <!--start home logo-->
                <div class="logo col-md-4 col-sm-4 col-xs-12 text-left">
                    <a href="{{URL::to('/')}}" id="home">Home</a>
                </div>
                <!--end home logo-->
                <!--start home nav-->
                <div class="nav_bar">
                    <nav class="pull-right col-md-8 col-sm-8 col-xs-12 text-right navbar navbar-default">
                        <div class="navbar-header">
                            <button id="rt-menu-btn" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav nav-tabs f-light" id="topMenuBar">
                                <li class="dropdown"><a href="#" data-hover="dropdown">Root A</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" onclick="showBanner('banner1')">Sub1</a></li>
                                        <li><a href="#" onclick="showBanner('banner1')">Sub2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" data-hover="dropdown">Root B</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" onclick="showBanner('banner2')">Sub3</a></li>
                                        <li><a href="#" onclick="showBanner('banner2')">Sub4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </nav>
                </div>
                <!--end home nav-->
            </header>
            <!--start banner content-->
            <div class="banner1" id="banner1" style="height: 500px; width:100%;">
                
            </div>

            <div class="banner2 hide" id="banner2" style="height: 500px; width:100%;">
                
            </div>

            <!--end banner content-->
            <footer class="footer">
                <div class="container pos-relative footer-inner">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <ul>
                                <li><a href="{{URL::to('is-palindrome')}}">Section2 Question1</a></li>
                                <li><a href="{{URL::to('is-heterogram-isogram')}}">Section2 Question2</a></li>
                                <li><a href="{{URL::to('test-numbers')}}">Section Question5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="script/jquery.min.js"><\/script>');
        }
    </script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-hover-dropdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script>
        function showBanner(bannerId){
           
            if(bannerId == 'banner1'){
                $('#banner2').addClass('hide');
                $('#banner1').removeClass('hide');
            }else{
                $('#banner1').addClass('hide');
                $('#banner2').removeClass('hide');
                
            }
        }
    
    </script>
</html>
