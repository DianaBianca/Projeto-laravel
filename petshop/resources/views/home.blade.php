<!doctype html>
<html lang="en">
  <head>
  	<title>Home - PetShop 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ url('css/style.css')}}">
  </head>
  <body>
		
		<div class="container d-flex align-items-stretch">
			<nav id="sidebar" class="img" style="background-image: url(images/bg_1.jpg);">
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">Petshop <span>Petshop para doguinhos felizes</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>

            <li class="nav-item dropright">
              <a  href="{{ url('/ponto')}}"> <span class="fa  fa-user mr-3"></span> Controle Do Ponto </a>
	          </li>

            <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="fa fa-calendar mr-3"></span> Atendimento
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Agandamento</a>
                <a class="dropdown-item" href="#">Venda</a>
              </div>
            </li>

	          <li class="nav-item dropright">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-cart-arrow-down mr-3"></span> Cadastro
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ url('/cadfunc')}}">Cadastro Funcionário </a>
                <a class="dropdown-item" href="#">Cadastro Cliente</a>
                <a class="dropdown-item" href="#">Cadastro Fornecedor</a>
              </div>
	          </li>

            
	          
	        </ul>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        
        

        
      </div>
		</div>







    <script src="{{ url('js/jquery.min.js')}}"></script>
    <script src="{{ url('js/popper.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/main.js')}}"></script>
  </body>
</html>