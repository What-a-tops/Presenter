<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Presenter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="wrapper">
@include('Sidebar')

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                User
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a>
                                <a class="dropdown-item" href="#"> <i class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @include('Content/Contents')

{{--        <footer id="footer">--}}
{{--          <div class="container">--}}
{{--            <div class="row">--}}
{{--              <div class="col-xs-6 col-sm-6 col-md-3 column">--}}
{{--                  <h4>Information</h4>--}}
{{--                  <ul class="nav">--}}
{{--                    <li><a href="#">Products</a></li>--}}
{{--                    <li><a href="#">Services</a></li>--}}
{{--                    <li><a href="#">Benefits</a></li>--}}
{{--                    <li><a href="#">Developers</a></li>--}}
{{--                  </ul>--}}
{{--                </div>--}}
{{--              <div class="col-xs-6 col-md-3 column">--}}
{{--                  <h4>Follow Us</h4>--}}
{{--                  <ul class="nav">--}}
{{--                    <li><a href="#">Twitter</a></li>--}}
{{--                    <li><a href="#">Facebook</a></li>--}}
{{--                    <li><a href="#">Google+</a></li>--}}
{{--                    <li><a href="#">Pinterest</a></li>--}}
{{--                  </ul>--}}
{{--              </div>--}}
{{--              <div class="col-xs-6 col-md-3 column">--}}
{{--                  <h4>Contact Us</h4>--}}
{{--                  <ul class="nav">--}}
{{--                    <li><a href="#">Email</a></li>--}}
{{--                    <li><a href="#">Headquarters</a></li>--}}
{{--                    <li><a href="#">Management</a></li>--}}
{{--                    <li><a href="#">Support</a></li>--}}
{{--                  </ul>--}}
{{--              </div>--}}
{{--              <div class="col-xs-6 col-md-3 column">--}}
{{--                  <h4>Customer Service</h4>--}}
{{--                  <ul class="nav">--}}
{{--                    <li><a href="#">About Us</a></li>--}}
{{--                    <li><a href="#">Delivery Information</a></li>--}}
{{--                    <li><a href="#">Privacy Policy</a></li>--}}
{{--                    <li><a href="#">Terms &amp; Conditions</a></li>--}}
{{--                  </ul>--}}
{{--              </div>--}}
{{--            </div><!--/row-->--}}
{{--          </div>--}}
{{--        </footer>--}}

    </div>

</div>




<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>]
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.14/lodash.min.js"></script>
<script src="{{ asset('js/app1.js') }}"></script>

</body>

</html>