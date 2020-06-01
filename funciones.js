var form = document.getElementById('formulario');
var resultado = document.getElementById('resultado');
var listado = document.getElementById('listado');
form.addEventListener('submit', function(e) {
    e.preventDefault();
    var datos = new FormData(form);
    fetch('guardar.php', {
            method: 'POST',
            body: datos
        })
        .then(res => res.json())
        .then(data => {
            if (data === 'error') {
                resultado.innerHTML = `
                <div class="alert alert-danger my-2" role="alert">
                    ¡Llena todo los campos!
                </div>`
            } else {
                resultado.innerHTML = `
                <div class="alert alert-primary my-2" role="alert">
                ${data} 
                </div>`;
                //window.location = 'consulta.html';
                return true;
            }
        });
});

function listar() {
    fetch('listado.php')
        .then(respuesta => respuesta.json())
        .then(data => {
            var datos = JSON.stringify(data);
            for (let i = 0; i < datos.length; i++) {
                var Id = data[i]['id'];
                var Nombre = data[i]['nombre'];
                var Precio = data[i]['precio'];
                var Codigo = data[i]['codigo'];
                var Imagen = data[i]['imagen'];
                if (Imagen == null) {
                    Imagen = 'sinfoto.png'
                }
                listado.innerHTML += `
                <tr >
                    <th scope="row">${Id}</th>
                        <td><img width=35" src="img/producto/${Imagen}" > </th>
                        <td>${Nombre}</td>
                        <td>${Precio}</td>
                        <td>${Codigo}</td>
                        <td>
                            <div id="editar" class="btn btn-primary btn-sm">
                                <span class="material-icons"> edit </span>
                            </div>
                            <div id="${Id}" onClick="borrar(this.id)" class="btn btn-sm btn-danger">
                                <span class="material-icons"> delete </span>
                            </div>
                        </td>
                    </tr>
                `;
            }
        });
}
listar();

function borrar(producto_id) {
    var IdProducto = producto_id;
    alert('Estas seguro que desea borrar en ID ' + IdProducto);
    fetch('eliminar.php?id=' + IdProducto, {
            method: 'GET',
            data: IdProducto
        })
        .then(respuesta => respuesta.json())
        .then(data => {
            if (data === 'error') {
                resultado.innerHTML = `
                <div class="alert alert-danger my-2" role="alert">
                    ¡Llena todo los campos!
                </div>`;
            } else {
                resultado.innerHTML = `
                <div class="alert alert-primary my-2" role="alert">
                ¡Item eliminado!
                </div>`;
            }
            //window.location = 'consulta.html';
        });

}