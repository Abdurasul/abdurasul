function getCities() {
		
		var obj = document.form.regions;
		var id = obj.options[obj.selectedIndex].value;

		var req = getXmlHttpRequest();

		req.onreadystatechange = function() {

			if (req.readyState != 4)
				return ;

			var city = document.getElementsByTagName('select')[2];

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
		req.open('GET', 'components/blank_1/ajax.php?id='+id, true);
		req.send(null);
	}
	