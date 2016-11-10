var http = require('http');
var fs = require('fs');
var ubicacion = "./files/";
//decalrar un array de objetos
var categorias = [  
    {  nombre: "Bebidas",  
        subcategorias: [ "Sin alcohol", "Cocteles", "Jugos" ] }, 
    {  nombre: "Comidas",
        subcategorias: [ "Carne", "Pollo", "De mar" ] }, 
    { "nombre": "Entradas",
        subcategorias: [  "Ensaladas", "Tapas" ] },
    { nombre: "Postres", 
    	subcategorias: [  "Nacional", "Extranjero" ] },
    { nombre: "CATEGORIA", subcategorias: [  "Light", "Heavy" ]}
      ];

      var productos;
      try{
    var archivo = fs.readFileSync(ubicacion +"producto.json", 'utf8');
    productos = JSON.parse(archivo);
}catch(error){
	console.log(error);
	productos = [];
}


// Crea el servidor Web, que será atendido por la funcion serverCallback
var server = http.createServer( serverCallback );

function GuardarProducto(req,res)
{		
		console.log("estan guardando un producto");
		console.log(req.method);

		//programa en el evento "data" par cuadno llegue el payload de la peticion
		console.log("voy a programar el evento");
		req.on("data",recibir);//teine 2 parametros 1 cual es el evento que quiero programar y el otro cual es la fucnion que se va a llamar
		console.log("ya lo progrtame");
	
		//funcion que se ejecuta en el evento data del request
		function recibir(data)
		{
			
			console.log("estoy holi");

			console.log(data.toString());

			var p = JSON.parse(data.toString());

			console.log(p);
			productos.push(p);
			console.log(productos);

			res.end("ya recibi el producto");

			fs.writeFile(ubicacion+"producto.json", JSON.stringify(productos,null, '\t'),null);

		}
		
}



// funcion que atiende las peticiones
function serverCallback(req, res){
	console.log("peticion recibida" + req.url);
	if (req.url == "/") 
		{
			fs.readFile(ubicacion+"index.html",returnFile);
		}
	else if(req.url == "/categorias"){
		var s = "";
		s = JSON.stringify(categorias);
		console.log(s);
		res.end(s);

	}
	else if (req.url.substring(0,9) == "/producto")
	{
		console.log(req.url.substring(0,5));
		if (req.method == 'POST') {
			//llamar a la funcion que guarda el payload
			GuardarProducto(req,res);
		} else{
			var codigo = req.url.substring(10);
			console.log("me estan pidiendo el producto" + req.url);
		}
		

	}
	else{
		fs.readFile(ubicacion+req.url,returnFile);
	}
	

function returnFile(error,datos)
{
	if (error != null) {
		console.log("Function returnFile: " + error);//muestra el error
		res.writeHead(404,{});
		res.end( error.toString() );
		return;
	}
	res.end(datos);
}

}


console.log( "Servidor HTTP corriendo. Ctrl-c para terminar")
// Ejecuta el servidor
server.listen(process.argv[2] || 80 );