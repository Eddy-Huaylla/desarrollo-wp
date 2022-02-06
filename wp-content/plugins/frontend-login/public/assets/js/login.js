window.addEventListener("DOMContentLoaded",function(){

	let $form = document.querySelector("#login");
	let $msg = document.querySelector(".msg");

	$form.addEventListener("submit",function(e){
		e.preventDefault();

		let datos = new FormData($form);
		let datosParse = new URLSearchParams(datos);

		console.log($msg);

		fetch("https://cursodesarrollowp.com/wp-json/plz/login",
			{
				method: "POST",
				body: datosParse
			}
		)
		.then(res=>res.json())
		.then(json=>{
			console.log(json);
			$msg.innerHTML = json;
		})
		.catch(err=>{
			console.log(`Hay un error: ${err}`)
		})
	});
});
