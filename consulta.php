<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Fetch</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <form id="formulario" enctype="multipart/form-data">
            <input type="text" placeholder="Nombre del Producto" name="nombre" class="form-control my-2">
            <input type="text" placeholder="Precio" name="precio" class="form-control my-2">
            <input type="text" placeholder="Codigo" name="codigo" class="form-control my-2">
            <input type="file" placeholder="Cargar imagen" name="imagen" class="form-control my-2">
            <button type="submit" class="btn btn-primary" id="enviar">Guardar</button>
        </form>
        
        <div id="resultado"></div>
    
        <div id="listado"></div>
        <div id="listado2"></div>



    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</div>
 
<script>
    var form = document.getElementById('formulario');
    var resultado = document.getElementById('resultado');
    var listado = document.getElementById('listado');
    form.addEventListener('submit', function(e){
        e.preventDefault();
        var datos = new FormData(form);
        fetch ('guardar.php', {
            method: 'POST', 
            body: datos
        })
        .then( res => res.json())
        .then( data => {
            if(data === 'error'){
                resultado.innerHTML = `
                <div class="alert alert-danger my-2" role="alert">
                    ¡Llena todo los campos!
                </div>`
            }else{
                resultado.innerHTML = `
                <div class="alert alert-primary my-2" role="alert">
                ${data} 
                </div>`
            }
        })
    })

    fetch ('listado.php')
    .then( respuesta => respuesta.json())
    .then( data => {
        var datos = JSON.stringify(data);
        listado.innerHTML = datos ; 
        for(let i = 0; i < datos.length; i++) {
           // listado.innerHTML = data[i]['id'];
           // console.log(data[i]['nombre']);
            
        }

    })



</script>   
</body>
</html>