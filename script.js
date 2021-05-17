$(document).ready( function()
	{
		$('#inscription').click( function() 
		{
			form = $('#form_inscription');
			$('#form_connexion').css("display","none");
			
			if(form.css("display")== 'none')
			{
				form.css("display","flex");					
			}
			else
			{
				form.css("display","none");					
			}
		});
			
		$('#connexion').click( function() 
		{
			form = $('#form_connexion');
			$('#form_inscription').css("display","none");
			if(form.css("display") == 'none')
			{
				form.css("display","flex");					
			}
			else
			{
				form.css("display","none");					
			}
		});
		
		$("#inscription-submit").click(function(e) 
		{
			e.preventDefault();
			
			login = $('#login').val();
			password = $('#password').val();
			rpassword = $('#r_password').val();
			
			length = /.{8,30}/;
			symbol = /\W/;
			letter = /\w/;
			digit = /\d/;
			
			if(length.exec(password) == null || symbol.exec(password) == null ||
			letter.exec(password) == null || digit.exec(password)  == null)
			{
				$("#passwordError").css("display","block");
				return false;
			}
			else
			{
				$("#passwordError").css("display","none");
			}
			
			if(password != r_password)
			{
				$('#r_passwordError').css("display","block");
				return false;
			}
			
			$.post(
				"inscription.php",
				{
					nom: $("#nom").val(),
					prenom: $('#prenom').val(),
					login: $('#login').val(),
					password: $('#password').val()
				},
				function(data)
				{
					if(data == "success")
					{
						$("#form_inscription").css("display", "none");
						$("#form_connexion").css("display", "flex");
					}
					else if(data == "err")
					{
						$("main").prepend($("<p></p>").text("Les serveurs ne répondent pas."));
					}
					
				},
				'text'
			);
		});
		
		$("#connexion-submit").click(function(e) 
		{
			e.preventDefault();
			
			$.post(
				"connexion.php",
				{
					email: $('#c_login').val(),
					password: $('#c_password').val()
				},
				function(data){
					$("#form_connexion").css("display", "none");
					$("body").prepend($('<p></p>').text("Bonjour "+data["nom"]));
				},
				"json"
			);
			
		});
	});