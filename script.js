$(document).ready( function()
{
	$('#inscription').click( function()
	{
		form = $('#inscription-form');
		$('#connexion-form').css("display","none");

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
		form = $('#connexion-form');
		$('#inscription-form').css("display","none");
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

		email = $('#email').val();
		password = $('#password').val();
		passwordV = $('#passwordV').val();

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

		if(password != passwordV)
		{
			$('#passwordVError').css("display","block");
			return false;
		}

		$.post(
			"inscription.php",
			{
				nom: $("#nom").val(),
				prenom: $('#prenom').val(),
				email: $('#email').val(),
				password: $('#password').val()
			},
			function(data)
			{
				if(data == "success")
				{
					$("#inscription-form").css("display", "none");
					$("#connexion-form").css("display", "flex");
				}
				else if(data == "err")
				{
					$("main").prepend($("<p></p>").text("Les serveurs ne répondent pas."));
				}
				else if(data == "errMail")
				{
					$("main").prepend($("<p></p>").text("Le mail est déja pris."));
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
				email: $('#email-co').val(),
				password: $('#password-co').val()
			},
			function(data){
				$("#connexion-form").css("display", "none");
				$("body").prepend($('<p></p>').text("Bonjour "+data["nom"]));
			},
			"json"
		);

	});
})





/*Partie de Evan*/


but = document.getElementById("buttonajouter");

but.addEventListener('click', () => {
	alert(saisie)
})
function getValue() {
	var input = document.getElementById("tachename").value;
	let div = document.createElement("div");
	let br = document.createElement("br");
	let h1 = document.createElement("h1");
	let p = document.createElement("p");
	let div1 = document.createElement("div");
	let div2 = document.createElement("div");
	let div3 = document.createElement("div");
	let button1 = document.createElement("button");
	let button2 = document.createElement("button");

	div.className =  "div_list";
	div1.className =  "div_list_1";
	div2.className =  "div_list_2";
	div3.className =  "div_list_3";
	h1.append(input);
	p.append("Créer le : <br> + <!--date-->");
	button1.append("Tache accomplie");
	button2.append("Supprimer la tache");

	document.getElementById("art2").appendChild(div);
	document.getElementById("art2").appendChild(br);

	divlist = document.getElementsByClassName('div_list')
	divlist1 = document.getElementsByClassName('div_list_1')
	divlist2 = document.getElementsByClassName('div_list_2')
	divlist3 = document.getElementsByClassName('div_list_3')

	divlist.appendChild(div1);
	divlist.appendChild(div2);
	divlist.appendChild(div3);

	divlist1.appendChild(h1);
	divlist2.appendChild(p);
	divlist3.appendChild(button1);
	divlist3.appendChild(button2);


}

/*
<div class="div_list">
                <div class="div_list_1">
                    <h1>titretitretitre</h1>
                </div>
                <div class="div_list_2">
                    <p>Créer le <br>28/06/2021</p>
                </div>
                <div class="div_list_3">
                    <button>Tache accomplie</button>
                    <button>Supprimer la tache</button>
                </div>
            </div>*/

