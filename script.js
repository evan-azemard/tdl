$(document).ready( function()
{
	$('#inscription').click( function()
	{
		coco = $('#index_article2');
		form = $('#inscription_form');
		co = $('#index_article1');
		$('#index_article1').css("display","none");
		$('#connexion_form').css("display","none");

		if(form.css("display")== 'none')
		{
			form.css("display","flex");
			coco.css("display","flex");
		}
		else
		{
			form.css("display","none");
			coco.css("display","none");
		}
	});

	$('#connexion').click( function()
	{
		co = $('#index_article1');
		$('#index_article2').css("display","none");
		form = $('#connexion_form');
		$('#inscription_form').css("display","none");
		if(form.css("display") == 'none')
		{
			form.css("display","flex");
			co.css("display","flex");
		}
		else
		{
			form.css("display","none");
			co.css("display","none");
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
					$("#inscription_form").css("display", "none");
					$("#connexion_form").css("display", "flex");
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
				$("#connexion_form").css("display", "none");
				$("#index_article2").css("display", "none");
				$("header").prepend($('<p></p>').text("Bonjour "+data["nom"]));
			},
			"json"
		);

	});
})




/*Partie de Evan*/

function getValue() {

	var fo = document.createElement("form");
	var input = document.getElementById("tachename").value.trim();
	var input2 = document.getElementById("tachename").value.trim();
	let div = document.createElement("div");
	let br = document.createElement("br");
	let h1 = document.createElement("h1");
	let p = document.createElement("p");
	let div1 = document.createElement("div");
	let div2 = document.createElement("div");
	let div3 = document.createElement("div");
	let button1 = document.createElement("button");
	let button2 = document.createElement("button");

	let para = "Créer le ";
	let date = new Date();

//On crée une date
	let date1 = new Date();

	let dateLocale = date1.toLocaleString('fr-FR',{
		year: 'numeric',
		month: 'numeric',
		day: 'numeric',
		hour: 'numeric',
		minute: 'numeric',
	});


	if (input2){
		if (input2.length < 25){

			button1.className = "button1";
			button2.className = "button2";
			div.className =  "div_list";
			div1.className = "div_list_1";
			div2.className = "div_list_2";
			div3.className = "div_list_3";
			h1.append(input);
			p.append(para,br,dateLocale);
			button1.append("Tache accomplie");
			button2.append("Supprimer la tache");
			fo.className = "div_listform";

			document.getElementById("art2").appendChild(div);
			document.getElementById("art2").appendChild(br);


			$.post(
				"list.php",
				{
					input: input,
					dateLocale: dateLocale,
					utilisateur: id,

				});


			/*$.post(
            "recup.php",
            {
                input: input,
            });
*/




			div.appendChild(fo);
			fo.appendChild(div1);
			fo.appendChild(div2);
			fo.appendChild(div3);

			div1.appendChild(h1);
			div2.appendChild(p);
			div3.appendChild(button1);
/*
			div3.appendChild(button2);
*/


		}else {
			alert("Le nom de la tache est trop grande ! (" + input2.length + ")")
		}


	}else {
		alert('Vous devez avoir un nom de tache !')
	}

}let ajouter = document.getElementById('buttonajouter');

ajouter.addEventListener("click", () => {
	getValue()
});




function getValider() {

	var input = document.getElementsByClassName("div_list_1").innerHTML;
	var date1 = document.getElementsByClassName("debutdate").innerHTML;
	let div = document.createElement("div");
	let br = document.createElement("br");
	let h2 = document.createElement("h2");
	let p2 = document.createElement("p");
	let pp = document.createElement("p");
	let div1 = document.createElement("div");
	let div2 = document.createElement("div");
	let div3 = document.createElement("div");


	let para = "Créer le ";
	let p1 = "Finit le ";
	let date = new Date();

//On crée une date
	var date1 = new Date();
	let dateLocale = date1.toLocaleString('fr-FR',{
		year: 'numeric',
		month: 'numeric',
		day: 'numeric',
		hour: 'numeric',
		minute: 'numeric',
	});


	div.className =  "div_list";
	div1.className = "div_list_1";
	div2.className = "div_list_2";
	div3.className = "div_list_3";
	h2.append(input);
	p2.append(para,br,dateLocale);
	pp.append(p1,br,date1);

	document.getElementById("art3").appendChild(div);
	document.getElementById("art3").appendChild(br);


	div.appendChild(div1);
	div.appendChild(div2);
	div.appendChild(div3);
	div1.appendChild(h2);
	div2.appendChild(p1);
	div3.appendChild(p2);


	/*$.post(
        "list.php",
        {
            input: input,
            dateLocale: dateLocale,
            utilisateur: id,

        });
    */
}




let valider = document.querySelector('.button2');


valider.addEventListener("click", () => {
	/*
    getValider()
    */
	e = document.querySelector('.div_list_1').innerHTML
	
	$.post(
		"delete.php",
		{
			data: e,
		});


	form = valider.parentNode.parentNode.parentNode

	form.remove()





})

