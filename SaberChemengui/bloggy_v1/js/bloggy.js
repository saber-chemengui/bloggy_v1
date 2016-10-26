$(document).ready(function() {

	$("form").submit(function(eve){

		eve.preventDefault();

		$.ajax({

			method: "POST",

			url : "contact_action.php",

			data : {

				email : $("#email").val(),

				sujet : $("#sujet").val(),

				message : $("#message").val(),

				newsletter : $("#newsletter").prop('checked')?1:0

			},

			success : function(data) {
				msg=data.sujet;
				if (data.retour) {
					$("#notif").css('display','inline');
					$("#notif").html("Merci. Votre message intitulé "+msg+" a bien été enregistrée.");
				}
				alert(msg);
				console.log(data)

			}

		});

	});

});
