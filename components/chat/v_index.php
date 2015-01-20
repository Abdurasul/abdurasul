<script>
	$(document).ready(function() {
	    $('#one').removeClass('active');
		$('#three').addClass('active');
	})
</script>
<style>
#messages
{
    width:100%;
    height:400px;
    overflow:auto;
    border:1px solid silver;
}
</style>


<!--Подключаем Jquery!--> 
<script> 
    //Функция отправки сообщения
    function send()
    {
        //Считываем сообщение из поля ввода с id mess_to_add
        var mess = $("#mess_to_send").val();

        // Отсылаем паметры
        $.ajax({
                type: "POST",
                url: "components/chat/add_mess.php",
                data:"mess="+mess,
                // Выводим то что вернул PHP
                success: function(html)
                {
                    //Если все успешно, загружаем сообщения

                    load_messes();
                    //Очищаем форму ввода сообщения
                    $("#mess_to_send").val('');
                }
        });

    }

    //Функция загрузки сообщений
    function load_messes()
    {
        $.ajax({
                type: "POST",
                url:  "components/chat/load_messes.php",
                data: "req=ok",
                // Выводим то что вернул PHP
                success: function(html)
                {
                    //Очищаем форму ввода
                    $("#messages").empty();
                    //Выводим что вернул нам php
                    $("#messages").append(html);
                    //Прокручиваем блок вниз(если сообщений много)
                    $("#messages").scrollTop(90000);
                }
        });
    }

</script>
<div class="row">
	<div class="col-lg-12">

	<table width="100%">
		<tr>
			<td>
				<div id="messages"></div>
			</td>
		</tr>
		<tr>
			<td>
				<form action="">
				<hr>
					<input type="text" class="form-control" id="mess_to_send">
				<br>
					<button class="btn btn-success btn-sm" onclick='send()'>Отправить</button>
				</form>
			</td>
		</tr>
	</table>
	</div>
</div>
<script>
//При загрузке страницы подгружаем сообщения
load_messes();
//Ставим цикл на каждые три секунды
setInterval(load_messes,3000);
</script>
