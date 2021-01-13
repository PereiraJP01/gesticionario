$(document).ready(function () {
	
	
	  function createConfigurations() {
        for (let i = 1; i <= 20; i++) {
            const item = `<option value="1" data-index="${i}" data-icon="../assets/forma_da_mao/forma_${i}.png">Forma ${i}</option>`
            $('#configs').append(item)
        }
    }
	
	
	 createConfigurations()
	
	
	
	
	
	
	
});