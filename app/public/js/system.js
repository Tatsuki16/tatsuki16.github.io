$(document).ready(function(){
	$("#auth").click(function(){
		$("#info").html('<div class="alert alert-danger"><a href="#" class="alert-link">Загрузка....!</a></div>');
		var login = $("#login").val();
		var password = $("#password").val();
		var auth = $("#auth").val();
		$.post("/engine/login.php", {login: login, password: password,auth: auth}, function(data){
			if(data == "notfound") $("#info").html('<div class="alert alert-danger"><a href="#" class="alert-link">Ошибка! Указаны неправильные данные!</a></div>');
			else if(data == "success") $("#info").html('<div class="alert alert-success"><a href="#" class="alert-link">Bы успешно авторизовались!</a></div><META HTTP-EQUIV="REFRESH" CONTENT="1;/?l=info">');
		    else if(data == "pole") $("#info").html('<div class="alert alert-info"><a href="#" class="alert-link">Заполните все поля!</a></div>');
		});
	});
	$("#rec").click(function(){	
		var rnick = $("#rnick").val();
		var remail = $("#remail").val();
		var rec = $("#rec").val();
		$("#info").html('<div class="alert alert-info"><a href="#" class="alert-link">Загрузка...</a></div>');
		$.post("/engine/login.php", {rnick: rnick, remail: remail,rec: rec}, function(data){
			if(data == "notfound") $("#info").html('<div class="alert alert-danger"><a href="#" class="alert-link">Ошибка! Указаны неправильные данные!</a></div>');
			else if(data == "success") $("#info").html('<div class="alert alert-success"><a href="#" class="alert-link">На ваш E-mail отправлен пароль!</a></div><META HTTP-EQUIV="REFRESH" CONTENT="1;/?l=login">');
		    else if(data == "pole") $("#info").html('<div class="alert alert-info"><a href="#" class="alert-link">Заполните все поля!</a></div>');
		});
	});	
});