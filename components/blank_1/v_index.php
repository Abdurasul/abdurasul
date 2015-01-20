<script>
$(function(){

        var field = new Array("hatsayr", "NomiBemor", "SoliTavallud","address", "ImtieznokiiBemor", "hujjat", "NomiDuhtur", "TashhisiPeshaki");//поля обязательные 
                
        $("form").submit(function() {// обрабатываем отправку формы    
            var error=0; // индекс ошибки
            $("form").find(":input").each(function() {// проверяем каждое поле в форме
                for(var i=0;i<field.length;i++){ // если поле присутствует в списке обязательных
                    if($(this).attr("name")==field[i]){ //проверяем поле формы на пустоту
                        
                        if(!$(this).val()){// если в поле пустое
                            $(this).css('border', 'red 1px solid');// устанавливаем рамку красного цвета
                            error=1;// определяем индекс ошибки       
                                                        
                        }
                        else{
                            $(this).css('border', 'gray 1px solid');// устанавливаем рамку обычного цвета
                        }
                        
                    }               
                }
           })
           
            if(error==0){ // если ошибок нет то отправляем данные
                return true;
            }
            else{
            if(error==1) var err_text = "Не все обязательные поля заполнены!";
            $("#messenger").html(err_text); 
            $("#messenger").fadeIn("slow"); 
            return false; //если в форме встретились ошибки , не  позволяем отослать данные на сервер.
            }
            
            
                
        })
    });	

    
    if (document.createElement("input").webkitSpeech === undefined) {
	    alert("Speech input is not supported in your browser.");
    }	
</script>
<form action="" method="post" name="form">
				<div class="row">
					<div class="col-xs-4">
						<label for="exampleInputEmail1">Хатсайри бемор №:</label>
						<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Хатсайри бемор" name="hatsayr">
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="exampleInputEmail1">Ном ва насаби бемор:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Ном ва насаби бемор" name="NomiBemor">
                </div>
                    <div class="form-group">
						<label for="exampleInputEmail1">Соли таввалуд:</label>
						<input type="text" class="form-control input-sm input-sm" id="exampleInputEmail1" placeholder="Соли таввалуд" name="SoliTavallud" x-webkit-speech>
                    </div>
				<div class="row">
					<div class="col-xs-6">
						<label for="">Ҷинс: </label>
						<select name="sex" id="" class="form-control">
							<option value="Мард">Мард</option>
							<option value="Зан">Зан</option>
						</select>
					</div>
					<div class="col-xs-6">
						<label for="">Аз Вилояти:</label>
						<select name="region" id="regions" onchange="getCities(); " class="form-control">
							<?php 
							for($i = 0; $i < count($city); $i++) {
								$id = $city[$i]->id;
							    echo "<option value='$id'>".$city[$i]->name.'</option>';
							}
							?>
						</select>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="">Аз Шахри / Нохияи: </label>
					<select name="city" id="cities" class="form-control">
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Ҷои зисти бемор:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Чои зисти бемор" name="address" x-webkit-speech>
			    </div>
				<div class="row">
					<div class="col-xs-6">
						<label for="exampleInputEmail1">Имтиёзнокии бемор:</label>
						<input type="text" class="form-control input-sm" placeholder="Имтиёзнокии бемор" name="ImtieznokiiBemor" x-webkit-speech>
					</div>
					<div class="col-xs-4">
						<label for="exampleInputEmail1">№ Хуҷҷат:</label>
						<input type="text" class="form-control input-sm" placeholder="№ Хуччат" name="hujjat" x-webkit-speech>
					</div>
				</div>
				<br>

				<div class="form-group">
					<label for="exampleInputEmail1">Ном ва насаби табиб:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Ном ва насаби табиб" name="NomiDuhtur">
                                </div>
				<div class="form-group">
					<label for="exampleInputEmail1">Ташхиси пешаки:</label>
					<input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="Ташхиси пешаки" name="TashhisiPeshaki" x-webkit-speech>
			    </div>
			   

				<button type="submit" class="btn btn-primary" name="add"><span class="glyphicon glyphicon-plus"></span> Дохил кардан</button>
			</form>