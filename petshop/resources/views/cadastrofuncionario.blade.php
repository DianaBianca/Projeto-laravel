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
	          <li class="">
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

	          <li class="nav-item dropright active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-cart-arrow-down mr-3"></span> Cadastro
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item " href="#">Cadastro Funcionário </a>
                <a class="dropdown-item" href="#">Cadastro Cliente</a>
                <a class="dropdown-item" href="#">Cadastro Fornecedor</a>
              </div>
	          </li>

            
	          
	        </ul>

	      </div>
    	</nav>

      <!-- Page Content  -->

      
      <div id="content" class="p-6 p-md-12 pt-5">
       <div class="container ">
         
     <div class="form-row tamanho">

    

       <div class="col-md-12 ">
         <input type="text" class="redondo form-control" placeholder="Nome Completo" id="nome" />
       </div><br><br><br>

       
       <div class="form-group col-md-4">
         <select class="redondo form-control" id="ano">
           <option value="">Sexo</option>
           <option value="2018">Feminimo</option>
           <option value="2019">Masculino</option>
         </select>
       </div>

       <div class="form-group col-md-4">
         <input type="text" class="redondo form-control" placeholder="Data de Nascimento" id="dia" />
       </div>

       <div class="form-group col-md-4">
         <input type="text" class="redondo form-control" placeholder="RG" id="rg" />
       </div>
     </div><br>


     <div class="form-row tamanho">
    
       <div class="form-group col-md-4">
         <input type="text" class="redondo form-control" placeholder="CPF" id="cpf" />
       </div>

       <div class="form-group col-md-4">
         <input type="text" class="redondo form-control" placeholder="Telefone" id="telefone" />
       </div>

       <div class="col-md-4">
         <input type="text" class="redondo form-control" placeholder="Celular" id="celular" />
       </div>
     </div><br>

     <div class="form-row tamanho">
      

       <div class="col-md-4 ">
         <select class=" redondo form-control" id="tipo">
           <option value="">Tipo</option>
           <option value="1">Cultura</option>
           <option value="2">Livros</option>
           <option value="3">Infraestrutura</option>
           <option value="4">Visita técnica</option>
           <option value="5">Transporte</option>
           <option value="6">Jardinagem</option>
           <option value="7">Bolsas</option>
         </select>
       </div>

       <div class="form-group col-md-4 ">
         <select class="redondo form-control" id="funcao">
           <option value="">Função</option>
           <option value="1">Atendente</option>
           <option value="2">Vendedor(a)</option>
           <option value="3">Tosador(a)</option>
           <option value="4">Veterinário(a)</option>
           <option value="5">Gerente</option>
           <option value="6">Supervisor(a)</option>
           <option value="7">Entregador(a)</option>
         </select>
       </div>

       <div class="col-md-4">
         <input type="text" class="redondo form-control" placeholder="Valor" id="valor" />
       </div>
     </div><br>

     <div>
     <button class="redondo btn btn-info btn-block " type="">Cadastrar</button>
     </div>
   </div>
        

        
      </div>
		</div>







    <script src="{{ url('js/jquery.min.js')}}"></script>
    <script src="{{ url('js/popper.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/main.js')}}"></script>
  </body>
</html>
