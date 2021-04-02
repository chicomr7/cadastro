<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        
        <title>Document</title>
        
<style>
     
    div {
    position: relative;
    width: 800px;
}

    body{
        font-family: 'Noto Sans JP', sans-serif;
        background-color: black;
    }
</style>

    </head>   
    <body>
        
        <center>
<div class="class container">

    <div class="mb-3">
		
					
        <div class="resultado1">Endereço cadastrado com sucesso !!</div>
    
        <style>
        .resultado1 {
            
            font-size: 40px;
            color: black;
            border-radius: 30px;
            background-color: rgb(0, 255, 179);
            height: 60px;
            line-height: 60px;
            
        }
        </style>

</div>
<table class="table">
    <style>
        .table{
          color:rgb(0, 255, 179);
          background-color: rgb(15, 15, 15);
        }
       </style>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">CEP</th>
      <th scope="col">Logadouro</th>
      <th scope="col">Número</th>
      <th scope="col">Complemento</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Ações</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">{{$endereco->id}}</th>
      <td>{{$endereco->CEPusuario}}</td>
      <td>{{$endereco->logadouroUsuario}}</td>
      <td>{{$endereco->NcasaUsuario}}</td>
      <td>{{$endereco->complementoUsuario}}</td>
      <td>{{$endereco->bairroUsuario}}</td>
      <td>{{$endereco->cidadeUsuario}}</td>
      <td>{{$endereco->estadoUsuario}}</td>
      
      <td>  <button type="submit"   class="botao">Editar</button> </td>
    
  
    
      <td><button type="submit"   class="botao">Deletar</button></td>
    
    </tr>
  </tbody>


</table>

           


				
       
    
        <div class="mb-3">    
            <form method="GET" action="{{ route('menuForm')}}"> 
             @csrf   
            <button type="submit"   class="botao">Retornar ao menu</button>
            </form>
            </div>
        
</div>
    <style>
        .botao{
            position: center;
	font-weight: bold;
	padding: 10px;
	
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	background-color: rgb(0, 255, 179);
	border-top-color: rgb(0, 255, 179);
	border-right-color: rgb(0, 255, 179);
	border-bottom-color: rgb(0, 255, 179);
	border-left-color: rgb(0, 255, 179);
	color: black;
	margin-left: 20px;
    border-radius: 30px;
}

        footer {
           position:fixed;
           bottom:0;
           width:100%;
           text-align: center;
           color: black;
           background-color:gray;
           height: 40px;
           line-height: 40px;
          
           
       
        }
           </style>
            
            <footer>
                Todos os direitos reservados-Francisco de Jesus Coelho Morais Filho(2021);
            </footer>


                

</center>
    </body>
</html>