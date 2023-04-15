$(document).ready(function(){
			// Validation
			$( "#j-pro" ).justFormsPro({
				rules: {
					nbs: {
						required: true
					},
					ruta: {
						required: true
					}
				},
				messages: {
					nbs: {
						required: "Pilih Nomor Blok Sensus"
					},
					ruta: {
						required: "Tuliskan Banyak Ruta"
					}
				}
			});
		});