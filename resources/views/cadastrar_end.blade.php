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
<div class="row">
</div>
    <div class="mb-3">
		
					
            <div class="resultado1">Cadastro:</div>
        
            <style>
            .resultado1 {
                
                font-size: 40px;
                color: black;
                border-radius: 30px;
                background-color: rgb(0, 255, 179);
                height: 45px;
                line-height: 45px;
                
            }
            </style>
    
    </div>
    <form method="POST" action="{{ route('cadastroEndereco')}}"> 
        @csrf     
				<div class="mb-3">
					
						<div class="resultado">Insira a baixo o CEP da sua cidade:</div>
					
						<style>
						.resultado {
							color: black;
							border-radius: 30px;
							background-color: gray;
							height: 25px;
							line-height: 25px;
							
						}
						</style>
                </div>
                <div class="mb-3">
    <input type="number"  class="form-control" id="CEP" name="CEPusuario" >
                </div>



                <div class="mb-3">
					
                    <div class="resultado">Insira a baixo seu logradouro:</div>
                
            </div>
            <div class="mb-3">
<input type="text"  class="form-control" id="logradouro" name="logradouroUsuario" >
            </div>


            <div class="mb-3">
					
                <div class="resultado">Insira a baixo o número de sua residência:</div>
            
        </div>
        <div class="mb-3">
<input type="number"  class="form-control" id="nCasa" name="NcasaUsuario" >
        </div>


        <div class="mb-3">
					
            <div class="resultado">Insira a baixo um complemento de endereço:</div>
        
    </div>
    <div class="mb-3">
<input type="text"  class="form-control" id="complemento" name="complementoUsuario" >
    </div>

    <div class="mb-3">
					
        <div class="resultado">Insira a baixo seu bairro:</div>
    
</div>
<div class="mb-3">
<input type="text"  class="form-control" id="bairro" name="bairroUsuario" >
</div>

<div class="mb-3">
					
    <div class="resultado">Insira a baixo a cidade onde mora:</div>

</div>
<div class="mb-3">
<input type="text"  class="form-control" id="cidade" name="cidadeUsuario" >
</div>

<div class="mb-3">
					
    <div class="resultado">Insira a baixo o Estado onde mora:</div>

</div>
<div class="mb-3">
<input type="text"  class="form-control" id="estado" name="estadoUsuario" >
</div>



    
    
        <div class="mb-3"> 
                
            <button type="submit"   class="botao">Cadastrar</button>
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
