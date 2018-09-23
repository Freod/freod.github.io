//Baner
	var indeks_slajd = 0;
	przejscie();	
	function przejscie(){
		var slajdy = document.getElementsByClassName("pokaz_slajdow");
		for(i=0; i<slajdy.length; i++){
			slajdy[i].style.display = "none";
		}
		indeks_slajd++;
		if(indeks_slajd>slajdy.length){indeks_slajd=1}
		slajdy[indeks_slajd-1].style.display = "block";
		setTimeout(przejscie,2500);
	}
//Tworzenie akapitow
	/*ilosc_akapitow = 6;
	for(i=ilosc_akapitow; i>0; i--){
		document.getElementsByClassName("artykul")[0].innerHTML += ('<div class="komorka_info"><a class="powiekszenie_zdj" href=""><img class="miniaturka" alt="Obraz niedziała" title="Powieksz" src=""></a><span class="info"></span></div>');
		//document.getElementsByClassName("modal")[0].innerHTML += ('<div class="mySlides"><img class="img_powieksz" src="" style="width:100%"></div>');
	}
	ilosc_info = document.getElementsByClassName("info").length;
	console.log(ilosc_info);
	*/
	ilosc_akapitow = 6;
	for(i=0; i<ilosc_akapitow; i++){
		document.getElementsByClassName("tab-content")[0].innerHTML += ('<div class="tab-pane fade paragraph" id="paragraph'+i+'" role="tabpanel" aria-labelledby="paragraph-tab"><a class="extend_img" href="" title="Powieksz"><img class="miniature" alt="Obraz niedziała" src=""></a><span class="information"></span></div>');
		document.getElementsByClassName("dropdown-menu")[0].innerHTML += ('<a class="nav-link dropdown-item" id="paragraph-tab'+i+'" data-toggle="tab" href="#paragraph'+i+'" role="tab" aria-controls="paragraph" aria-selected="false">Akapit '+i+'</a>');
		//document.getElementsByClassName("modal")[0].innerHTML += ('<div class="mySlides"><img class="img_powieksz" src="" style="width:100%"></div>');
	}
//Zamiana wygladu co drugiego akapitu
	/*for(co_drugi=0; co_drugi<ilosc_info; co_drugi++){
		if(co_drugi%2!=0){
			document.getElementsByClassName("info")[co_drugi].style = "left: 0px; right: 212px;";
			document.getElementsByClassName("miniaturka")[co_drugi].style = "right: 0px;";
		}
	}*/
//Powiekszanie
/*	function openModal() {
	  document.getElementById('myModal').style.display = "block";
	}

	function closeModal() {
		document.getElementById('myModal').style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("img_powieksz");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
	}*/
//Ładowanie informacji
	/*var xmlhttp = new XMLHttpRequest();
	var url = "https://freod.github.io/skrypts/informacje.json";

	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var myArr = JSON.parse(this.responseText);
			//console.log(myArr);
			wyswietlanie(myArr);
		}
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	
	function wyswietlanie(tab){
		for(j=0; j<ilosc_info; j++){
			document.getElementsByClassName("information")[j].innerHTML += tab[j].info;
			document.getElementsByClassName("miniature")[j].src = tab[j].obraz;
			document.getElementsByClassName("extend_img")[j].href = tab[j].obraz;
			document.getElementsByClassName("information")[j].innerHTML += '<a class="czytaj_wiecej" href="">Czytaj wiecej...</a>';
			document.getElementsByClassName("read_more")[j].href = tab[j].wiecej;
			//document.getElementsByClassName
		}
	}*/
//Formularz
	function v(){
	var nameReg = /^[a-zA-Z]{3,}\s+[a-zA-Z]{3,}$/;
	var mailReg = /^[0-9a-zA-Z_.-]+@[0-9a-zA-Z.-]+\.[a-zA-Z]{2,3}$/;
	if (nameReg.test(document.getElementById("1").value) && nameReg.test(document.getElementById("2").value) && mailReg.test(document.getElementById("3").value)){
		document.getElementById("thx").innerHTML = "Wiadomość została wysłana.";
	}else
		document.getElementById("thx").innerHTML = "Poprawnie wypełnij rubryki.";
	}