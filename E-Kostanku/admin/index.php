<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>:: Admin Page ::</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                      <div style="font-family:Arial, Helvetica, sans-serif; font-size:20px; color:#0099FF;"> MENU </div> 
				    </a>               
				</li>
                <li>
                    <a href="?menu=home"><img src="../images/gambar/home.png">Beranda</a>
					                </li>
                
                <li>
                    <a href="?menu=kost"><img src="../images/gambar/product.png">Kostan</a>
					                </li>
                <li>
                    <a href="?menu=wilayah"><img src="../images/gambar/milestone.png">Wilayah</a>
					                </li>
                <li>
                    <a href="?menu=pemilik"><img src="../images/gambar/hire-me.png">pemilik</a>
					                </li>
                
                <li>
                    <a href="?menu=user"><img src="../images/gambar/my-account.png">User</a>
					                </li>
				<li>
                    <a href="log_out.php"><img src="../images/gambar/sign-out.png">LogOut</a>
		        </li>
            
			</ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
		<div style="background-color:#0099FF; width:1200px; height:100px; position:inherit;">
		   <div class="col-lg-12">
		     	<div style="font-size:40px">
               	             <small>Selamat datang di</small> Halaman Admin
             	</div>
				<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i><marquee>Selamat datang Ke halaman admin... :D akses web E-Kostanku Selengkapnya ada di sini... :D</marquee>
                            </li>
                        </ol>
		    </div>
		</div>
			
				<?php
				if(empty($_GET['menu']))
				{
				     echo" ";
				}else{
				     switch($_GET['menu'])
					 {
					      case'kost';
						       include"../modul/kostan/form_kostan.php";
						  break;
						  case'wilayah';
						       include"../modul/wilayah/form_wilayah.php";
						  break;
						  case'pemilik';
						       include"../modul/pemilik/form_pemilik.php";
						  break;
						  case'user';
						       echo"user";
						  break;
					 }
				}
				?>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
