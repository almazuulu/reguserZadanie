<?php
	//подключаем необходимые файлы
	include("includes/header.php"); 
	include("includes/config.php");
	include("includes/functions.php");
	
	//инициализация необходимых сообщений
	$message1=""; $message2=""; $message3=""; $message4=""; $message5=""; $message6=""; $message7=""; $messageSucсess="";


	if(isset($_POST['submit']))
	{
		$mail=$_POST['emailuser'];
		$uName=$_POST['userName'];
		$psswrd=$_POST['password'];
		$psswrdCopy=$_POST['passwordConfirm'];
		$lName=$_POST['lastName'];
		$fName=$_POST['firstName'];
		$mName=$_POST['middleName'];
		$sexUser=$_POST['sex'];
		$countryUser=$_POST['country'];

		//дата регистрации
		$time = time() + (4*60*60);
		$dateRegistr= date("D M j G:i:s T Y",$time);
		
		//процедура валидации
		if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
		{
			$message5="<div class='error'>Пожалуйста введите правильный адрес почты!</div>";
		}
		else if(email_exists($mail,$conDB))
		{
			$message5="<div class='error'>Такой адрес почты уже существует!</div>";
		}
		else if(strlen($uName)<3)
		{
			$message1="<div class='error'>Имя пользователя должна содержать как минимум 3 буквы!</div>";
		}
		else if(strlen($fName)<3)
		{
			$message2="<div class='error'>Имя должна содержать как минимум 3 буквы!</div>";
		}
		else if(strlen($lName)<3)
		{
			$message3="<div class='error'>Фамилия должна содержать как минимум 3 буквы!</div>";
		}
		
		else if(empty($psswrd))
		{
			$message6="<div class='error'>Пароль не может быть пустым!</div>";
		}
		else if(strlen($psswrd)<6)
		{	
			$message6="<div class='error'>Пароль должен состоять как минимум из 6 символов!</div>";
		}
		else if(strlen($psswrd!==$psswrdCopy))
		{
			$message7="<div class='error'>Пароли не совпадают!</div>";
		}
		else 
		{	
			$psswrd=md5($psswrd); //шифруем пароль пользователя по методу md5
			mysqli_query($conDB,"SET NAMES utf8"); //устанавливаем русский шрифт

			//записываем в Базу данных записи
			mysqli_query($conDB,"INSERT INTO users (mail,uName,password,lastName,firstName,middleName,sexUser,countryUser,registrDate) VALUES('$mail','$uName','$psswrd','$lName','$fName','$mName','$sexUser','$countryUser','$dateRegistr')");
			//сообщение об успешной регистрации пользователя
			$messageSucсess="<div class='success'><center>Вы успешно зарегестрированы!</center></div>";
		}
	}
?>
<title>Регистрация нового пользователя</title>
</head>
<style type="text/css">
	.success
	{
		font-weight: bold;
		color:green;
	}
	.error
	{
		color: red;
	}
	#body-bg
	{
		background: url("images/imagebg.jpg") center no-repeat fixed;
	}


</style>
<body id="body-bg">
	<div class="container">
		<div class="login-form col-md-4 offset-md-4">
			<!--стили для формы регистрации-->
			<div class="jumbotron" style="margin-top: 20px; padding-top: 25px;">
				<h3 align="center"> Форма Регистрации</h3>
				<?php echo $messageSucсess; ?>	
			</br>
				
				<form method="post" enctype="multipart/form-data">	
				<!--e-mail пользователя-->
				<div class="form-group">
					<label>E-mail пользователя : </label>
					<input type="text" name="emailuser" placeholder="E-mail" class="form-control" required>
					<?php echo $message5; ?>
				</div>
				<!--имя пользователя-->
				<div class="form-group">
					<label>Имя пользователя : </label>
					<input type="text" name="userName" placeholder="Имя пользователя" class="form-control" required>
					<?php echo $message1; ?>
				</div>

				<!--пароль-->
				<div class="form-group">
					<label>Пароль : </label>
					<input type="password" name="password" placeholder="пароль" class="form-control" required>
					<?php echo $message6; ?>
				</div>

				<!--повторный ввод пароля-->
				<div class="form-group">
					<label>Подтвердить пароль : </label>
					<input type="password" name="passwordConfirm" placeholder="Подтвердить пароль" class="form-control" required>
					<?php echo $message7; ?>
				</div>

				<!--фамилия -->
				<div class="form-group">
					<label>Фамилия пользователя : </label>
					<input type="text" name="lastName" placeholder="Фамилия" class="form-control" required>
					<?php echo $message3; ?>
				</div>

				<!--имя -->
				<div class="form-group">
					<label>Имя : </label>
					<input type="text" name="firstName" placeholder="Имя" class="form-control" required>
					<?php echo $message2; ?>
				</div>

				<!--отчество -->
				<div class="form-group">
					<label>Отчество : </label>
					<input type="text" name="middleName" placeholder="Отчество" class="form-control">
				</div>

				<!--Пол пользователя -->
				<div class="form-group">
					<label>Выберите Пол : </label>
					<select class="form-control" name="sex">
					  <option value="Мужской">Мужской</option>
					  <option value="Женский">Женский</option>
					</select>
				</div>

				<!--Страна пользователя -->
				<div class="form-group">
			<label>Выберите Страну : </label>
			<select class="form-control" name="country" id="country"><option value="Россия" data-id="10414533690">Россия</option><option value="Абхазия" data-id="26334910464">Абхазия</option><option value="Австралия" data-id="10400654407">Австралия</option><option value="Австрия" data-id="10426428818">Австрия</option><option value="Азербайджан" data-id="10410450732">Азербайджан</option><option value="Албания" data-id="10410522537">Албания</option><option value="Алжир" data-id="10419531540">Алжир</option><option value="Ангола" data-id="10400909101">Ангола</option><option value="+Ангуилья" data-id="10395022134">Ангуилья</option><option value="Андорра" data-id="10396157513">Андорра</option><option value="Антигуа" data-id="10401935333">Антигуа и Барбуда</option><option value="+599" data-id="Антильские острова">Антильские острова</option><option value="Аргентина" data-id="10401434079">Аргентина</option><option value="Армения" data-id="10417232037">Армения</option><option value="Афганистан" data-id="10410310303">Афганистан</option><option value="Багамские острова" data-id="10407551720">Багамские острова</option><option value="Бангладеш" data-id="10396352095">Бангладеш</option><option value="Барбадос" data-id="10411706009">Барбадос</option><option value="Бахрейн" data-id="10406995556">Бахрейн</option><option value="Беларусь" data-id="10423319006">Беларусь</option><option value="Белиз" data-id="10394079228">Белиз</option><option value="Бельгия" data-id="10408272261">Бельгия</option><option value="Бенин" data-id="10423428619">Бенин</option><option value="Бермуды" data-id="10414686106">Бермуды</option><option value="Болгария" data-id="10393631600">Болгария</option><option value="Боливия" data-id="10409174087">Боливия</option><option value="Босния" data-id="10396139862">Босния/Герцеговина</option><option value="Ботсвана" data-id="10401213745">Ботсвана</option><option value="Бразилия" data-id="10394346015">Бразилия</option><option value="Британские Виргинские о-ва" data-id="10409651721">Британские Виргинские о-ва</option><option value="Бруней" data-id="10419484235">Бруней</option><option value="Буркина Фасо" data-id="10404060904">Буркина Фасо</option><option value="Бурунди" data-id="10404374905">Бурунди</option><option value="Бутан" data-id="10404540364">Бутан</option><option value="Вануату" data-id="10412870819">Вануату</option><option value="Ватикан" data-id="10411136417">Ватикан</option><option value="Великобритания" data-id="10406170538">Великобритания</option><option value="Венгрия" data-id="10409956165">Венгрия</option><option value="Венесуэла" data-id="10396486463">Венесуэла</option><option value="Вьетнам" data-id="10415852578">Вьетнам</option><option value="Габон" data-id="10393450888">Габон</option><option value="Гаити" data-id="10417683703">Гаити</option><option value="Гайана" data-id="10403255122">Гайана</option><option value="Гамбия" data-id="10399865285">Гамбия</option><option value="Гана" data-id="10397676008">Гана</option><option value="Гваделупа" data-id="10414930207">Гваделупа</option><option value="Гватемала" data-id="10419428643">Гватемала</option><option value="Гвинея" data-id="10413226540">Гвинея</option><option value="Гвинея-Бисау" data-id="10403555674">Гвинея-Бисау</option><option value="Германия" data-id="10397571399">Германия</option><option value="Гернси остров" data-id="10399224101">Гернси остров</option><option value="Гибралтар" data-id="10406295560">Гибралтар</option><option value="Гондурас" data-id="10399351736">Гондурас</option><option value="Гонконг" data-id="10412717530">Гонконг</option><option value="Государство Палестина" data-id="12850988277547">Государство Палестина</option><option value="Гренада" data-id="10395467357">Гренада</option><option value="Гренландия" data-id="10408186696">Гренландия</option><option value="Греция" data-id="10410192803">Греция</option><option value="Грузия" data-id="10411801535">Грузия</option><option value="ДР Конго" data-id="10414151425">ДР Конго</option><option value="Дания" data-id="10398024550">Дания</option><option value="Джерси остров" data-id="10392982119">Джерси остров</option><option value="Джибути" data-id="10423910652">Джибути</option><option value="Доминиканская Республика" data-id="10392890835">Доминиканская Республика</option><option value="Египет" data-id="10402537077">Египет</option><option value="Замбия" data-id="10422229795">Замбия</option><option value="Западная Сахара" data-id="10405794288">Западная Сахара</option><option value="Зимбабве" data-id="10410213419">Зимбабве</option><option value="Израиль" data-id="10424542073">Израиль</option><option value="Индия" data-id="10415489530">Индия</option><option value="Индонезия" data-id="10394991378">Индонезия</option><option value="Иордания" data-id="10412777633">Иордания</option><option value="Ирак" data-id="10405044887">Ирак</option><option value="Иран" data-id="10419405993">Иран</option><option value="Ирландия" data-id="10421760139">Ирландия</option><option value="Исландия" data-id="10420187771">Исландия</option><option value="Испания" data-id="10423450359">Испания</option><option value="Италия" data-id="10414775922">Италия</option><option value="Йемен" data-id="10418754394">Йемен</option><option value="Кабо-Верде" data-id="10396069806">Кабо-Верде</option><option value="Казахстан" data-id="10415971874">Казахстан</option><option value="Камбоджа" data-id="10410376034">Камбоджа</option><option value="Камерун" data-id="10417801476">Камерун</option><option value="Канада" data-id="10393621238">Канада</option><option value="Катар" data-id="10424568667">Катар</option><option value="Кения" data-id="10421430373">Кения</option><option value="Кипр" data-id="10401168591">Кипр</option><option value="Китай" data-id="10397251386">Китай</option><option value="Колумбия" data-id="10398961528">Колумбия</option><option value="Коста-Рика" data-id="10415000877">Коста-Рика</option><option value="Кот-д'Ивуар" data-id="10397441630">Кот-д'Ивуар</option><option value="Куба" data-id="10400805253">Куба</option><option value="Кувейт" data-id="10425905274">Кувейт</option><option value="Кука острова" data-id="10417619125">Кука острова</option><option value="Кыргызстан" data-id="10405644775" selected="selected">Кыргызстан</option><option value="Лаос" data-id="10422182119">Лаос</option><option value="Латвия" data-id="10405172143">Латвия</option><option value="Лесото" data-id="10404932758">Лесото</option><option value="Либерия" data-id="10426378265">Либерия</option><option value="Ливан" data-id="10394492001">Ливан</option><option value="Ливия" data-id="10396193388">Ливия</option><option value="Литва" data-id="10408982062">Литва</option><option value="Лихтенштейн" data-id="10402377389">Лихтенштейн</option><option value="Люксембург" data-id="10417321877">Люксембург</option><option value="Маврикий" data-id="10421455265">Маврикий</option><option value="Мавритания" data-id="10402331337">Мавритания</option><option value="Мадагаскар" data-id="10395008003">Мадагаскар</option><option value="Македония" data-id="10403452946">Македония</option><option value="Малайзия" data-id="10424318428">Малайзия</option><option value="Мали" data-id="10392808561">Мали</option><option value="Мальдивские острова" data-id="10419625380">Мальдивские острова</option><option value="Мальта" data-id="10418580649">Мальта</option><option value="Марокко" data-id="10398888997">Марокко</option><option value="Мексика" data-id="10405114643">Мексика</option><option value="Мозамбик" data-id="10395900020">Мозамбик</option><option value="Молдова" data-id="10397135919">Молдова</option><option value="Монако" data-id="10406156316">Монако</option><option value="Монголия" data-id="10400052977">Монголия</option><option value="Мьянма" data-id="10397507309">Мьянма (Бирма)</option><option value="Мэн о-в" data-id="10425274320">Мэн о-в</option><option value="Намибия" data-id="10398918582">Намибия</option><option value="Непал" data-id="10395547483">Непал</option><option value="Нигер" data-id="10403897067">Нигер</option><option value="Нигерия" data-id="10403906713">Нигерия</option><option value="Нидерланды (Голландия)" data-id="10416691196">Нидерланды (Голландия)</option><option value="Никарагуа" data-id="10415455264">Никарагуа</option><option value="Новая Зеландия" data-id="10416927951">Новая Зеландия</option><option value="Новая Каледония" data-id="10417478473">Новая Каледония</option><option value="Норвегия" data-id="10403907946">Норвегия</option><option value="О.А.Э." data-id="10407515868">О.А.Э.</option><option value="Оман" data-id="10413735381">Оман</option><option value="Пакистан" data-id="10407624473">Пакистан</option><option value="Палау" data-id="32108942709">Палау</option><option value="Панама" data-id="10417127108">Панама</option><option value="Папуа Новая Гвинея" data-id="10414119671">Папуа Новая Гвинея</option><option value="Парагвай" data-id="10397730315">Парагвай</option><option value="Перу" data-id="10397453891">Перу</option><option value="Питкэрн остров" data-id="10420475109">Питкэрн остров</option><option value="Польша" data-id="10414896014">Польша</option><option value="Португалия" data-id="10396879941">Португалия</option><option value="Пуэрто Рико" data-id="10413603686">Пуэрто Рико</option><option value="Республика Конго" data-id="10410395082">Республика Конго</option><option value="Реюньон" data-id="10395017596">Реюньон</option><option value="Руанда" data-id="10421210322">Руанда</option><option value="Румыния" data-id="10416439221">Румыния</option><option value="США" data-id="10395431810">США</option><option value="Сальвадор" data-id="10401272160">Сальвадор</option><option value="Самоа" data-id="10418117522">Самоа</option><option value="Сан-Марино" data-id="10425587057">Сан-Марино</option><option value="Сан-Томе и Принсипи" data-id="10402425385">Сан-Томе и Принсипи</option><option value="Саудовская Аравия" data-id="10410580805">Саудовская Аравия</option><option value="Свазиленд" data-id="10408209383">Свазиленд</option><option value="Святая Люсия" data-id="10411324250">Святая Люсия</option><option value="Северная Корея" data-id="10394159876">Северная Корея</option><option value="Сейшеллы" data-id="10392716690">Сейшеллы</option><option value="Сен-Пьер и Микелон" data-id="10415402038">Сен-Пьер и Микелон</option><option value="Сенегал" data-id="10399264429">Сенегал</option><option value="Сент Китс и Невис" data-id="10413542523">Сент Китс и Невис</option><option value="Сент-Винсент и Гренадины" data-id="10397340738">Сент-Винсент и Гренадины</option><option value="Сербия" data-id="10403797723">Сербия</option><option value="Сингапур" data-id="10403882021">Сингапур</option><option value="Сирия" data-id="10421914141">Сирия</option><option value="Словакия" data-id="10394488739">Словакия</option><option value="Словения" data-id="10412478477">Словения</option><option value="Соломоновы острова" data-id="10399243721">Соломоновы острова</option><option value="Сомали" data-id="10402270246">Сомали</option><option value="Судан" data-id="10422456146">Судан</option><option value="Суринам" data-id="10399143993">Суринам</option><option value="Сьерра-Леоне" data-id="10419209718">Сьерра-Леоне</option><option value="Таджикистан" data-id="10426480621">Таджикистан</option><option value="Таиланд" data-id="10420570186">Таиланд</option><option value="Тайвань" data-id="10394605145">Тайвань</option><option value="Танзания" data-id="10412575230">Танзания</option><option value="Того" data-id="10406981529">Того</option><option value="Токелау острова" data-id="10394734441">Токелау острова</option><option value="Тонга" data-id="10417023658">Тонга</option><option value="Тринидад и Тобаго" data-id="10424065948">Тринидад и Тобаго</option><option value="Тувалу" data-id="10400207372">Тувалу</option><option value="Тунис" data-id="10399201022">Тунис</option><option value="Туркменистан" data-id="10396721959">Туркменистан</option><option value="Туркс и Кейкос" data-id="10396777362">Туркс и Кейкос</option><option value="Турция" data-id="10406909768">Турция</option><option value="Уганда" data-id="10410627224">Уганда</option><option value="Узбекистан" data-id="10423529949">Узбекистан</option><option value="Украина" data-id="10424076448" >Украина</option><option value="Уоллис и Футуна острова" data-id="10395074682">Уоллис и Футуна острова</option><option value="Уругвай" data-id="10426234429">Уругвай</option><option value="Фарерские острова" data-id="10395058357">Фарерские острова</option><option value="Фиджи" data-id="10423400059">Фиджи</option><option value="Филиппины" data-id="10423933302">Филиппины</option><option value="Финляндия" data-id="10405620585">Финляндия</option><option value="Франция" data-id="10394185598">Франция</option><option value="Французская Полинезия" data-id="10395243227">Французская Полинезия</option><option value="Хорватия" data-id="10421079332">Хорватия</option><option value="Чад" data-id="10393424473">Чад</option><option value="Черногория" data-id="26287387136">Черногория</option><option value="Чехия" data-id="10395033214">Чехия</option><option value="Чили" data-id="10397429545">Чили</option><option value="Швейцария" data-id="10401982134">Швейцария</option><option value="Швеция" data-id="10393232409">Швеция</option><option value="Шри-Ланка" data-id="10400772860">Шри-Ланка</option><option value="Эквадор" data-id="10408281200">Эквадор</option><option value="Экваториальная Гвинея" data-id="10413994177">Экваториальная Гвинея</option><option value="Эритрея" data-id="10422842223">Эритрея</option><option value="Эстония" data-id="10399393757">Эстония</option><option value="Эфиопия" data-id="10404948045">Эфиопия</option><option value="ЮАР" data-id="10396767805">ЮАР</option><option value="Южная Корея" data-id="10409076784">Южная Корея</option><option value="Южная Осетия" data-id="26334910720">Южная Осетия</option><option value="Ямайка" data-id="10415454380">Ямайка</option><option value="Японияs" data-id="10404808625">Япония</option></select>
		</div>
		</br>

		<!--Кнопка подтвердить -->
		<center><input type="submit" value="Зарегестрировать!" name="submit" class="btn btn-success"></center>
	</form>
			</div>
		</div>		
	</div>		
</body>
</html>