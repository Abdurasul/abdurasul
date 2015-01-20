<?
    $region = getAllRegions();
?>
<script>
	$(document).ready(function() {
	    $('#one').removeClass('active');
		$('#four').addClass('active');
	})
	function getCity() {
		
		var obj = document.form.regions;
		var id = obj.options[obj.selectedIndex].value;
		var req = getXmlHttpRequest();

		req.onreadystatechange = function() {
			if (req.readyState != 4)
				return ;

			var city = document.getElementsByTagName('select')[1];

			while(city.hasChildNodes())
                   city.removeChild(city.lastChild);

            var ans = JSON.parse(req.responseText);

            for(var i = 0; i < ans.length; i++){
            	
                oid = document.createTextNode(ans[i].id);
				cName = document.createTextNode(ans[i].name);
						
						
				option = document.createElement('option');
				option.setAttribute('value', ans[i].id);
				option.appendChild(cName);
                city.appendChild(option);


            }
		}
		req.open('GET', 'components/filter/ajax.php?id='+id, true);
		req.send(null);
	}
	
</script>
<div class="row">
<div class="col-lg-12">
	<div class="alert alert-info"><b>Фильтр поиска</b></div>
</div>
<hr>
	<div class="col-lg-12">
		<form action="" method="post" class="form" name="form" role="form">
			<div class="form-group">
				<label for="">Вилоятро интихоб кунед:</label>
				<select class="form-control"  onchange="getCity(); " name="region" id="regions">
					<?php
					    for($i = count($region) - 1; $i >= 0; $i--) {
					    	$val = $region[$i]->id;
					    	echo "<option value='$val'>".$region[$i]->name.'</option>';
					    }
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Шаҳрро интихоб кунед:</label>
				<select class="form-control" name="city" id="cities" id="">
				</select>
			</div>
			<!--<div class="form-group">
				<label for="">Шуъбаро интихоб кунед:</label>
				<select class="form-control" name="" id="">
					<option value="">1</option>
					<option value="">2</option>
					<option value="">3</option>
					<option value="">4</option>
					<option value="">5</option>
				</select>
			</div>-->
			<div class="form-group">
				<label for="">Ҷинс:</label>
				<select class="form-control" name="sex" id="">
					<option value="no">Фарқ надорад</option>
					<option value="Мард">Мард</option>
					<option value="Зан">Зан</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Сину сол:</label>
				<select class="form-control" name="age" id="">
					<option value="no">Фарқ надорад</option>
					<option value="1">0 - 20 сола</option>
					<option value="2">20 - 40 сола</option>
					<option value="3">40 - 60 сола</option>
					<option value="4">аз 60 боло</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Ҷустуҷу</button>
		</form>
	</div>
</div>