<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Do an</title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/demoo.css')}}">
<link rel="stylesheet" href="{{url('/css/admin.css')}}">
    <link rel="stylesheet" href="{{url('/css/settings.css')}}">
    <link rel="stylesheet" href="{{url('/css/responsive.css')}}">
	<link rel="stylesheet" title="style" href="{{url('/css/style.css')}}">
	<link rel="stylesheet" href="{{url('/css/animate.css')}}">
  <link rel="stylesheet" title="style" href="{{url('/css/huong-style.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
<div class="page-admin">
  <div class="col-sm-2 page-left" >
  <h3>Admin</h3>
  <hr>
  <ul class="list">
<li><a href="/dashboard" target="content-admin"><i class="fa fa-pie-chart"></i> DASHBOARD</a></li>
<li><a href="/userprofile" target="content-admin"><i class="fa fa-user-edit"></i>USER PROFILE</a></li>
<li><a href="/guest" target="content-admin"><i class="fa fa-user-circle"></i>GUEST</a></li>
<li><a href="/product-admin" target="content-admin"><i class="fa fa-cookie"></i>PRODUCT</a></li>
<li><a href="/notif" target="content-admin"><i class="fa fa-bell"></i> NOTIFICATIONS</a></li>
  </ul>
  </div>
  {{-- jjj --}}
  <div class="col-sm-9 page-right">
{{-- menu --}}
<div class="menu">
<div class="left">
  <form action="" method="POST">
    @csrf
    <input type="text" placeholder="Nhập từ khóa...">
    {{-- <input type="submit" class="btn btn-primary" value="Search"> --}}
  </form>
</div>
 <div class="right">
   <ul class="menu-list">
     @if(Auth::check())
  
   <li><a href="{{route('logout-admin')}}" class="item-login">Đăng xuất</a></li>
   <li style="    border-radius: 50%;
   background-color: chartreuse;"><a href="#" class="item-login" >{{Auth::user()->full_name}}</a></li>
   {{-- @if($email=="admin@gmail.com" && $password=="123456") --}}
   @else
   <li><a href="#" class="item-login">Đăng nhập</a></li>
   @endif
   <form action="{{route('login-admin')}}" method="POST" class="form-login">
    @csrf
    {{-- @if(Session::has('thanhcong')) --}}
    {{-- <p class="alert alert-success">{{Session::get('thanhcong')}}</p>
    @else --}}
    {{-- <p class="alert alert-danger">{{Session::get('thatbai')}}</p> --}}
      <label for="">Email</label>
      <input type="email" placeholder="Nhập email" name="email">
      <label for="">Password</label>
      <input type="password" placeholder="Nhập password" name="password">
      <input type="submit" value="Submit" class="btn btn-primary">
   </form>   
   {{-- @endif --}}
   </ul>
 </div>
</div>

 {{-- .end menu --}}
 {{-- content --}}
 <div class="ifr">
<iframe src="/dashboard" frameborder="0" name="content-admin"></iframe>
 </div>

 {{-- .end content --}}
    {{-- setting --}}
       
    {{-- .end setting --}}
  </div>
</div>

<script>
  $(document).ready(function(){
    $('.item-login').click(function(){
      $('.form-login').fadeToggle(500);
    })
  })
</script>

{{--      
        <div id="wrapper">
      
     
          <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      
         
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
              </div>
              <div class="sidebar-brand-text mx-3">Admin</div>
            </a>
      
            <hr class="sidebar-divider my-0">
      
            
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>
      
        
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Components</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Custom Components:</h6>
                  <a class="collapse-item" href="#">Buttons</a>
                  <a class="collapse-item" href="#">Cards</a>
                </div>
              </div>
            </li>
      
          
            <hr class="sidebar-divider d-none d-md-block">
      
         
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
      
          </ul>
     
          <div id="content-wrapper" class="d-flex flex-column">
      
            <div id="content">
      
            
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      
           
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                </button>
      
               
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
      
                <ul class="navbar-nav ml-auto">
      
                
                  <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-search fa-fw"></i>
                    </a>
                
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                      <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                              <i class="fas fa-search fa-sm"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>
      
               
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bell fa-fw"></i>
              
                      <span class="badge badge-danger badge-counter">3+</span>
                    </a>
             
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                      <h6 class="dropdown-header">
                        Alerts Center
                      </h6>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500">December 12, 2019</div>
                          <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500">December 7, 2019</div>
                          $290.29 has been deposited into your account!
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500">December 2, 2019</div>
                          Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                      </a>
                      <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                  </li>
      
                
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-envelope fa-fw"></i>
                   
                      <span class="badge badge-danger badge-counter">7</span>
                    </a>
                
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                      <h6 class="dropdown-header">
                        Message Center
                      </h6>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                          <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                          <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                          <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                          <div class="status-indicator"></div>
                        </div>
                        <div>
                          <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                          <div class="small text-gray-500">Jae Chun · 1d</div>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                          <div class="status-indicator bg-warning"></div>
                        </div>
                        <div>
                          <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                          <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                          <div class="status-indicator bg-success"></div>
                        </div>
                        <div>
                          <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                          <div class="small text-gray-500">Chicken the Dog · 2w</div>
                        </div>
                      </a>
                      <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                    </div>
                  </li>
      
                  <div class="topbar-divider d-none d-sm-block"></div>
      
              
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                      <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                    </a>
                  
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                      </a>
                    </div>
                  </li>
      
                </ul>
      
              </nav>
             
              <div class="container-fluid">
      
          
                <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
      
              </div>
           
      
            </div>
          
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Your Website 2019</span>
                </div>
              </div>
            </footer>
         
      
          </div>
      
      
        </div>
     
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
      
      
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
            </div>
          </div>
        </div>
       --}}
      </body>
</html>