//Arrow Function
	const validar=()=>{
		const cat_detalle=document.querySelector("#cat_detalle");

		if (cat_detalle.value.length==0){

			Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber llenar este campo',

})

			return false
            }


	}