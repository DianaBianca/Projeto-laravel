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
      
      
  <form>
      <div id="content" class="p-6 p-md-12 pt-5">
       <div class="container ">

       <legend class="tamanho" > Informações Pessoais </legend>
       <div class="form-row tamanho">
       
       <div class="col-md-12 ">
         <input type="text" class="redondo form-control" placeholder="Nome Completo" id="nome" />
       </div><br><br><br>
       <div class="col-md-12 ">
         <input type="email" class="redondo form-control" placeholder="Email" id="email" />
       </div><br><br><br>
     
       
       <div class="form-group col-md-6">
         <select class="redondo form-control" id="ano">
           <option value="">Sexo</option>
           <option value="2018">Feminimo</option>
           <option value="2019">Masculino</option>
         </select>
       </div>

       <div class="form-group col-md-6">
         <input type="text" class="redondo form-control" placeholder="Data de Nascimento" id="dia" />
       </div>
      </div><br>

      <div class="form-row tamanho">
        

        <div class="col-md-4 ">
          <select class=" redondo form-control" id="estadocivil">
            <option value="">Estado civíl</option>
            <option value="Solteiro(a)">Solteiro(a)</option>
            <option value="Casado(a)">Casado(a)</option>
            <option value="Viuvo(a)">Viuvo(a)</option>
            <option value="Divorciado(a)">Divorciado(a)</option>
          </select>
        </div>

        <div class="form-group col-md-4 ">
          <select class="redondo form-control" id="escolaridade">
            <option value="">Escolaridade</option>
            <option value="Analfabeto">Analfabeto</option>
            <option value="Fundamaental Incompleto">Fundamaental Incompleto</option>
            <option value="Fundamaental Completo">Fundamaental Completo</option>
            <option value="Médio Incompleto">Médio Incompleto</option>
            <option value="Médio Completo">Médio Completo</option>
            <option value="Superior Incompleto">Superior Incompleto</option>
            <option value="Superior Completo">Superior Completo</option>
          </select>
        </div>

        <div class="col-md-4">
          <input type="number" class="redondo form-control" placeholder="Filhos" id="filihos" />
        </div>
      </div><br>

      
      <legend class="tamanho" > Documentos </legend>
      <div class="form-row tamanho">
        <div class="form-group col-md-6">
          <input type="text" class="redondo form-control" placeholder="RG" id="rg" />
        </div> 

        <div class="form-group col-md-6">
          <input type="text" class="redondo form-control" placeholder="CPF" id="cpf" />
        </div>
      </div><br>

      
      <legend class="tamanho" > Telefones Para Contato </legend>
      <div class="form-row tamanho">
        <div class="form-group col-md-6">
          <input type="text" class="redondo form-control" placeholder="Telefone" id="telefone" />
        </div>

        <div class="col-md-6">
          <input type="text" class="redondo form-control" placeholder="Celular" id="celular" />
        </div>
      </div><br>

      <legend class="tamanho" > Endereço </legend>
      <div class="form-row tamanho">
        <div class="form-group col-md-4">
          <input type="text" class="redondo form-control" placeholder="Rua" id="rua" />
        </div>

        <div class="col-md-4">
          <input type="text" class="redondo form-control" placeholder="Bairro" id="bairro" />
        </div>

        <div class="col-md-4">
          <input type="text" class="redondo form-control" placeholder="Numero" id="numero" />
        </div>
      </div><br>

      <div class="form-row tamanho">
        <div class="form-group col-md-4">
          <input type="text" class="redondo form-control" placeholder="Cidade" id="cidade" />
        </div>

        <div class="col-md-4">
          <input type="text" class="redondo form-control" placeholder="Estado" id="estado" />
        </div>

        <div class="col-md-4">
          <input type="text" class="redondo form-control" placeholder="Cep" id="cep" />
        </div>
      </div><br>

      

      <div>
      <button class="redondo btn btn-info btn-block " type="">Cadastrar</button>
      </div>
      </div>

  </form>







    <script src="{{ url('js/jquery.min.js')}}"></script>
    <script src="{{ url('js/popper.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/main.js')}}"></script>
  </body>
</html>
