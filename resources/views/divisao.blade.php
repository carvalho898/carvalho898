<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Syne + Mono & display = swap" rel = "folha de estilo">
  
   <style>
        body{
            font-family: 'Syne Mono'; 
        }
   
   
   </style>

    <title>Document</title>
</head>
<body>

<div class = "container">

<div class = "row mt-2">
  IFMA CAMPUS AVANÇADO PORTO FRANCO<br>
  FEITO POR ISAAC CIRQUEIRA CARVALHO<br>
  
</div>
<div class="row mt-5">
<h1>Calculadora</h1>
</div>
<div class="row">

<form method="POST" action="{{ route('dividir') }}">
  @csrf
  <div class="mb-3">
    <label for="primeirovalor" class="form-label">Primeiro valor</label>
    <input type="number" class="form-control" name="primeirovalor" >
    
  </div>
  <div class="mb-3"> 
  <label for="segundovalor" class="form-label">Segundo valor</label>
    <input type="number" class="form-control" name="segundovalor" >
    <button type="submit" class="btn btn-primary">multiplicar</button>
  </form>
   
    
    <div class ="mt-5">
      @COPYRIGHT Todos os direitos reservados ao discente e a instituição de ensino.
    </div>
    </div>

  </body>
</html> 
    