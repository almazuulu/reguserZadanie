<?php
	include("includes/header.php"); 
?>
<title>Регистрация нового пользователя</title>
</head>
<body>
	<div class="container">
		<div class="login-form col-md-4 offset-md-4">
			<!--стили для формы регистрации-->
			<div class="jumbotron" style="margin-top: 20px; padding-top: 25px;">
				<h3 align="center"> Форма Регистрации</h3>
				<form method="post" enctype="multipart/form-data">	
				<!--e-mail пользователя-->
				<div class="form-group">
					<label>E-mail пользователя : </label>
					<input type="text" name="emailuser" placeholder="E-mail" class="form-control">
				</div>
				<!--имя пользователя-->
				<div class="form-group">
					<label>Имя пользователя : </label>
					<input type="text" name="userName" placeholder="Имя пользователя" class="form-control">
				</div>

				<!--пароль-->
				<div class="form-group">
					<label>Пароль : </label>
					<input type="password" name="password" placeholder="пароль" class="form-control">
				</div>

				<!--повторный ввод пароля-->
				<div class="form-group">
					<label>Подтвердить пароль : </label>
					<input type="password" name="passwordConfirm" placeholder="Подтвердить пароль" class="form-control">
				</div>

				<!--фамилия -->
				<div class="form-group">
					<label>Фамилия пользователя : </label>
					<input type="text" name="lastName" placeholder="Фамилия" class="form-control">
				</div>

				<!--имя -->
				<div class="form-group">
					<label>Имя : </label>
					<input type="text" name="firstName" placeholder="Имя" class="form-control">
				</div>

				<!--отчество -->
				<div class="form-group">
					<label>Отчество : </label>
					<input type="text" name="middleName" placeholder="Отчество" class="form-control">
				</div>

				<!--отчество -->
				<div class="form-group">
					<label>Выберите Пол : </label>
					<select class="form-control">
					  <option value="мужской">Мужской</option>
					  <option value="женский">Женский</option>
					</select>
				</div>

				<div class="form-group">
			<label>Выберите Страну : </label>
			<select class="form-control" name="country" id="country"><option value="+7" data-id="10414533690">Россия</option><option value="+7" data-id="26334910464">Абхазия</option><option value="+61" data-id="10400654407">Австралия</option><option value="+43" data-id="10426428818">Австрия</option><option value="+994" data-id="10410450732">Азербайджан</option><option value="+355" data-id="10410522537">Албания</option><option value="+213" data-id="10419531540">Алжир</option><option value="+244" data-id="10400909101">Ангола</option><option value="+1264" data-id="10395022134">Ангуилья</option><option value="+376" data-id="10396157513">Андорра</option><option value="+1268" data-id="10401935333">Антигуа и Барбуда</option><option value="+599" data-id="10425952826">Антильские острова</option><option value="+54" data-id="10401434079">Аргентина</option><option value="+374" data-id="10417232037">Армения</option><option value="+93" data-id="10410310303">Афганистан</option><option value="+1242" data-id="10407551720">Багамские острова</option><option value="+880" data-id="10396352095">Бангладеш</option><option value="+1246" data-id="10411706009">Барбадос</option><option value="+973" data-id="10406995556">Бахрейн</option><option value="+375" data-id="10423319006">Беларусь</option><option value="+501" data-id="10394079228">Белиз</option><option value="+32" data-id="10408272261">Бельгия</option><option value="+229" data-id="10423428619">Бенин</option><option value="+1441" data-id="10414686106">Бермуды</option><option value="+359" data-id="10393631600">Болгария</option><option value="+591" data-id="10409174087">Боливия</option><option value="+387" data-id="10396139862">Босния/Герцеговина</option><option value="+267" data-id="10401213745">Ботсвана</option><option value="+55" data-id="10394346015">Бразилия</option><option value="+1284" data-id="10409651721">Британские Виргинские о-ва</option><option value="+673" data-id="10419484235">Бруней</option><option value="+226" data-id="10404060904">Буркина Фасо</option><option value="+257" data-id="10404374905">Бурунди</option><option value="+975" data-id="10404540364">Бутан</option><option value="+678" data-id="10412870819">Вануату</option><option value="+379" data-id="10411136417">Ватикан</option><option value="+44" data-id="10406170538">Великобритания</option><option value="+36" data-id="10409956165">Венгрия</option><option value="+58" data-id="10396486463">Венесуэла</option><option value="+84" data-id="10415852578">Вьетнам</option><option value="+241" data-id="10393450888">Габон</option><option value="+509" data-id="10417683703">Гаити</option><option value="+592" data-id="10403255122">Гайана</option><option value="+220" data-id="10399865285">Гамбия</option><option value="+233" data-id="10397676008">Гана</option><option value="+590" data-id="10414930207">Гваделупа</option><option value="+502" data-id="10419428643">Гватемала</option><option value="+224" data-id="10413226540">Гвинея</option><option value="+245" data-id="10403555674">Гвинея-Бисау</option><option value="+49" data-id="10397571399">Германия</option><option value="+441481" data-id="10399224101">Гернси остров</option><option value="+350" data-id="10406295560">Гибралтар</option><option value="+504" data-id="10399351736">Гондурас</option><option value="+852" data-id="10412717530">Гонконг</option><option value="+970" data-id="12850988277547">Государство Палестина</option><option value="+1473" data-id="10395467357">Гренада</option><option value="+299" data-id="10408186696">Гренландия</option><option value="+30" data-id="10410192803">Греция</option><option value="+995" data-id="10411801535">Грузия</option><option value="+243" data-id="10414151425">ДР Конго</option><option value="+45" data-id="10398024550">Дания</option><option value="+447" data-id="10392982119">Джерси остров</option><option value="+253" data-id="10423910652">Джибути</option><option value="+18" data-id="10392890835">Доминиканская Республика</option><option value="+20" data-id="10402537077">Египет</option><option value="+260" data-id="10422229795">Замбия</option><option value="+212" data-id="10405794288">Западная Сахара</option><option value="+263" data-id="10410213419">Зимбабве</option><option value="+972" data-id="10424542073">Израиль</option><option value="+91" data-id="10415489530">Индия</option><option value="+62" data-id="10394991378">Индонезия</option><option value="+962" data-id="10412777633">Иордания</option><option value="+964" data-id="10405044887">Ирак</option><option value="+98" data-id="10419405993">Иран</option><option value="+353" data-id="10421760139">Ирландия</option><option value="+354" data-id="10420187771">Исландия</option><option value="+34" data-id="10423450359">Испания</option><option value="+39" data-id="10414775922">Италия</option><option value="+967" data-id="10418754394">Йемен</option><option value="+238" data-id="10396069806">Кабо-Верде</option><option value="+7" data-id="10415971874">Казахстан</option><option value="+855" data-id="10410376034">Камбоджа</option><option value="+237" data-id="10417801476">Камерун</option><option value="+1" data-id="10393621238">Канада</option><option value="+974" data-id="10424568667">Катар</option><option value="+254" data-id="10421430373">Кения</option><option value="+357" data-id="10401168591">Кипр</option><option value="+86" data-id="10397251386">Китай</option><option value="+57" data-id="10398961528">Колумбия</option><option value="+506" data-id="10415000877">Коста-Рика</option><option value="+225" data-id="10397441630">Кот-д'Ивуар</option><option value="+53" data-id="10400805253">Куба</option><option value="+965" data-id="10425905274">Кувейт</option><option value="+682" data-id="10417619125">Кука острова</option><option value="+996" data-id="10405644775" selected="selected">Кыргызстан</option><option value="+856" data-id="10422182119">Лаос</option><option value="+371" data-id="10405172143">Латвия</option><option value="+266" data-id="10404932758">Лесото</option><option value="+231" data-id="10426378265">Либерия</option><option value="+961" data-id="10394492001">Ливан</option><option value="+218" data-id="10396193388">Ливия</option><option value="+370" data-id="10408982062">Литва</option><option value="+423" data-id="10402377389">Лихтенштейн</option><option value="+352" data-id="10417321877">Люксембург</option><option value="+230" data-id="10421455265">Маврикий</option><option value="+222" data-id="10402331337">Мавритания</option><option value="+261" data-id="10395008003">Мадагаскар</option><option value="+389" data-id="10403452946">Македония</option><option value="+60" data-id="10424318428">Малайзия</option><option value="+223" data-id="10392808561">Мали</option><option value="+960" data-id="10419625380">Мальдивские острова</option><option value="+356" data-id="10418580649">Мальта</option><option value="+212" data-id="10398888997">Марокко</option><option value="+52" data-id="10405114643">Мексика</option><option value="+258" data-id="10395900020">Мозамбик</option><option value="+373" data-id="10397135919">Молдова</option><option value="+377" data-id="10406156316">Монако</option><option value="+976" data-id="10400052977">Монголия</option><option value="+95" data-id="10397507309">Мьянма (Бирма)</option><option value="+441624" data-id="10425274320">Мэн о-в</option><option value="+264" data-id="10398918582">Намибия</option><option value="+977" data-id="10395547483">Непал</option><option value="+227" data-id="10403897067">Нигер</option><option value="+234" data-id="10403906713">Нигерия</option><option value="+31" data-id="10416691196">Нидерланды (Голландия)</option><option value="+505" data-id="10415455264">Никарагуа</option><option value="+64" data-id="10416927951">Новая Зеландия</option><option value="+687" data-id="10417478473">Новая Каледония</option><option value="+47" data-id="10403907946">Норвегия</option><option value="+971" data-id="10407515868">О.А.Э.</option><option value="+968" data-id="10413735381">Оман</option><option value="+92" data-id="10407624473">Пакистан</option><option value="+441624" data-id="32108942709">Палау</option><option value="+507" data-id="10417127108">Панама</option><option value="+675" data-id="10414119671">Папуа Новая Гвинея</option><option value="+595" data-id="10397730315">Парагвай</option><option value="+51" data-id="10397453891">Перу</option><option value="+64" data-id="10420475109">Питкэрн остров</option><option value="+48" data-id="10414896014">Польша</option><option value="+351" data-id="10396879941">Португалия</option><option value="+1787" data-id="10413603686">Пуэрто Рико</option><option value="+242" data-id="10410395082">Республика Конго</option><option value="+262" data-id="10395017596">Реюньон</option><option value="+250" data-id="10421210322">Руанда</option><option value="+40" data-id="10416439221">Румыния</option><option value="+1" data-id="10395431810">США</option><option value="+503" data-id="10401272160">Сальвадор</option><option value="+685" data-id="10418117522">Самоа</option><option value="+378" data-id="10425587057">Сан-Марино</option><option value="+239" data-id="10402425385">Сан-Томе и Принсипи</option><option value="+966" data-id="10410580805">Саудовская Аравия</option><option value="+268" data-id="10408209383">Свазиленд</option><option value="+1758" data-id="10411324250">Святая Люсия</option><option value="+850" data-id="10394159876">Северная Корея</option><option value="+248" data-id="10392716690">Сейшеллы</option><option value="+508" data-id="10415402038">Сен-Пьер и Микелон</option><option value="+221" data-id="10399264429">Сенегал</option><option value="+1869" data-id="10413542523">Сент Китс и Невис</option><option value="+1784" data-id="10397340738">Сент-Винсент и Гренадины</option><option value="+381" data-id="10403797723">Сербия</option><option value="+65" data-id="10403882021">Сингапур</option><option value="+963" data-id="10421914141">Сирия</option><option value="+421" data-id="10394488739">Словакия</option><option value="+386" data-id="10412478477">Словения</option><option value="+677" data-id="10399243721">Соломоновы острова</option><option value="+252" data-id="10402270246">Сомали</option><option value="+249" data-id="10422456146">Судан</option><option value="+597" data-id="10399143993">Суринам</option><option value="+232" data-id="10419209718">Сьерра-Леоне</option><option value="+992" data-id="10426480621">Таджикистан</option><option value="+66" data-id="10420570186">Таиланд</option><option value="+886" data-id="10394605145">Тайвань</option><option value="+255" data-id="10412575230">Танзания</option><option value="+228" data-id="10406981529">Того</option><option value="+690" data-id="10394734441">Токелау острова</option><option value="+676" data-id="10417023658">Тонга</option><option value="+1868" data-id="10424065948">Тринидад и Тобаго</option><option value="+688" data-id="10400207372">Тувалу</option><option value="+216" data-id="10399201022">Тунис</option><option value="+993" data-id="10396721959">Туркменистан</option><option value="+1649" data-id="10396777362">Туркс и Кейкос</option><option value="+90" data-id="10406909768">Турция</option><option value="+256" data-id="10410627224">Уганда</option><option value="+998" data-id="10423529949">Узбекистан</option><option value="+380" data-id="10424076448" >Украина</option><option value="+681" data-id="10395074682">Уоллис и Футуна острова</option><option value="+598" data-id="10426234429">Уругвай</option><option value="+298" data-id="10395058357">Фарерские острова</option><option value="+679" data-id="10423400059">Фиджи</option><option value="+63" data-id="10423933302">Филиппины</option><option value="+358" data-id="10405620585">Финляндия</option><option value="+33" data-id="10394185598">Франция</option><option value="+689" data-id="10395243227">Французская Полинезия</option><option value="+385" data-id="10421079332">Хорватия</option><option value="+235" data-id="10393424473">Чад</option><option value="+382" data-id="26287387136">Черногория</option><option value="+420" data-id="10395033214">Чехия</option><option value="+56" data-id="10397429545">Чили</option><option value="+41" data-id="10401982134">Швейцария</option><option value="+46" data-id="10393232409">Швеция</option><option value="+94" data-id="10400772860">Шри-Ланка</option><option value="+593" data-id="10408281200">Эквадор</option><option value="+240" data-id="10413994177">Экваториальная Гвинея</option><option value="+291" data-id="10422842223">Эритрея</option><option value="+372" data-id="10399393757">Эстония</option><option value="+251" data-id="10404948045">Эфиопия</option><option value="+27" data-id="10396767805">ЮАР</option><option value="+82" data-id="10409076784">Южная Корея</option><option value="+7" data-id="26334910720">Южная Осетия</option><option value="+1876" data-id="10415454380">Ямайка</option><option value="+81" data-id="10404808625">Япония</option></select>
		</div>


				

			</div>
			
		</div>		
			
	</div>		

</body>
</html>