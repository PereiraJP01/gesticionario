
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
	$(document).ready(function () {
    function removeClassFromElem(classSelect, classToRemove) {
        $(classSelect).each(function () {
            var currElem = $(this);
            if (currElem.hasClass(classToRemove)) {
                currElem.removeClass(classToRemove);
            }
        });
    }


    function createConfigurations() {
        for (let i = 1; i <= 20; i++) {
            const item = `<button class="col 1 button"><img src="https://PereiraJP01.github.io/gesticionario/assets/forma_da_mao/forma_${i}.png" data-index="${i}" class="${i===1 ?'configImg collapse-items active':'configImg collapse-items'}" id="img_btn"  alt="img"/></button>`
            $('#configs').append(item)
        }
    }

    function createLocations() {
        for (let i = 1; i <= 16; i++) {
            const item = `<button class="col 1 button"><img data-index="${i}" src="https://PereiraJP01.github.io/gesticionario/assets/localizacao/${i}.png" class="${i===1 ?'locationImg collapse-items active':'locationImg collapse-items'}" alt="location"/></button>`
            $('#locations').append(item)
        }
    }

    createConfigurations()
    createLocations()

    $('#configs').on("click", "button *", function (e) {
        removeClassFromElem('.configImg', 'active');
        $(e.currentTarget).addClass("active")
    })
	
    $('#locations').on("click", "button *", function (e) {
        removeClassFromElem('.locationImg', 'active');
        $(e.currentTarget).addClass("active")
    })
	
	$('#submit-search').on('click', function(e) {
		e.preventDefault()
		const selectedConfigIndex = $('#configs .active').attr('data-index')
		const selectedLocationIndex = $('#locations .active').attr('data-index')
		const getUrl = window.location;
		const baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
		window.location.href = `${baseUrl}/resultados.php?config=${selectedConfigIndex}&location=${selectedLocationIndex}`
		
	})
});
</script>
	
	<!--<script src="https://PereiraJP01.github.io/gesticionario/js/advanced-search.js"></script>-->
	<script>
		 M.AutoInit();
	</script>

</body>
</html>
