﻿<?php
$servername = "localhost";
$username = "root";
$password = "root_1234";
$dbcn=mysqli_connect($servername, $username, $password);
if (!$dbcn) {
exit( "<P>В настоящий момент сервер базы данных не доступен,
поэтому корректное отображение страницы невозможно.</P>" );
}
else
{
 echo "";
}
$q = "CREATE DATABASE IF NOT EXISTS doonspu1";
if(mysqli_query($dbcn, $q))
{
echo "";	
}
else
{
	echo "<p>База данных не создана</p>";	
}
mysqli_select_db($dbcn, "doonspu1");
$a1="CREATE TABLE members(number INT(11) NOT NULL AUTO_INCREMENT, pib VARCHAR(100) DEFAULT NULL, year DATE, place VARCHAR(200) DEFAULT NULL, tvory VARCHAR(1000) DEFAULT NULL, janr VARCHAR(30) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB";
if(mysqli_query($dbcn, $a1))
{
	echo "";
}
else
{
	echo"";
}
mysqli_select_db($dbcn, "doonspu1");

$q1 = "INSERT INTO members VALUES('1', 'Андреєв Сергій Юрійович ', '1952-08-05', 'м. Дніпро', '«Счастливая примета», «Одинокая толпа», «Снижение снега»', 'поет')";
$q2 = "INSERT INTO members VALUES('2', 'Берлін Євген Гедеонович ', '1956-10-05', 'м. Кам'янське', '«Цена откровения», «Ближе к рассвету», «Небо земли»', 'поет')";
$q3 = "INSERT INTO members VALUES('3', 'Бідняк Григорій Прокопович ', '1933-03-21', 'м. Марганці', '«Слово для спраглих», «З Україною в серці»', 'поет')";
$q4 = "INSERT INTO members VALUES('4', 'Бурлаков Сергій Романович ', '1938-06-21', 'Луганщина', '«Трояндові світання», «Русло»', 'поет, критик')";
$q5 = "INSERT INTO members VALUES('5', 'Волик Олег Володимирович ', '1958-10-05', 'Дніпропетровщина', '«Кліо і Фантаз»', 'прозаїк-фантаст')";
$q6 = "INSERT INTO members VALUES('6', 'Веретенников Віктор Олександрович ', '1940-08-22', 'Дніпро', '«Красний лог», «Волчий гон»', 'прозаїк')";
$q7 = "INSERT INTO members VALUES('7', 'Вусик Олексій Сергійович', '1927-12-12', 'Полтавщина', '«На вус намотане», «Між нами, хлопці, кажучи»', 'прозаїк')";
$q8 = "INSERT INTO members VALUES('8', 'Гарченко Григорій Миколайович ', '1949-01-30', 'Дніпропетровщина', '«Сльоза бюрократа», «Йог і смог»', 'сатирик')";
$q9 = "INSERT INTO members VALUES('9', 'Гриценко Віктор Васильович ', '1946-03-07', 'Дніпропетровщина', '«Літопис любові», «Терновий вінок»', 'поет, прозаїк')";
$q10 = "INSERT INTO members VALUES('10', 'Гусейнов Григорій Джамалович ', '1950-08-23', 'м. Помішна', '«Незаймані сніги»', 'прозаїк')";
$q11 = "INSERT INTO members VALUES('11', 'Данилюк Іван Володимирович ', '1950-09-11', 'Дніпропетровщина', '«Пломінь-камінь», «Розвидені води»', 'поет, прозаїк')";
$q12 = "INSERT INTO members VALUES('12', 'Дружко Марія Олександрівна ', '1982-03-01', 'Дніпропетровщина', '«Журливі журавлі», «Сонячна соната»', 'поетеса')";
$q13 = "INSERT INTO members VALUES('13', 'Дяченко Михайло Григорович ', '1947-08-15', 'Дніпропетровщина', '«Ще зозулі слово не погасло», «Свято білої лілеї»', 'поет, перекладач')";
$q14 = "INSERT INTO members VALUES('14', 'Завгородній Олександр Сергійович ', '1940-01-25', 'м. Кам'янське', '«Радію людям», «Перевесла», «Життя мойого птах»', 'поет, перекладач')";
$q15 = "INSERT INTO members VALUES('15', 'Злата Леонід Дмитрович ', '1928-01-07', 'Херсонщина', '«Мальчишки», «Жили на сіті дві подружки»', 'поет, прозаїк')";
$q16 = "INSERT INTO members VALUES('16', 'Заремба Володимир Іванович ', '1941-07-04', 'Рівненщина', '«Подарунок на іменини», «Долі», «Живе слово»', 'прозаїк')";
$q17 = "INSERT INTO members VALUES('17', 'Злючий Сергій Дмитрович ', '1953-06-15', 'м. Кам'янське', '«Білий час», «Січеслав»', 'поет, перекладач')";
$q18 = "INSERT INTO members VALUES('18', 'Зобенко Марія Олександрівна ', '1950-03-13', 'м. Мелітополь', '«Жінка, яку ти любив», «Літературні етюди»', 'прозаїк, критик')";

$q20 = "INSERT INTO members VALUES('20', 'Карплюк Микола Андрійович ', '1923-08-11', 'Житомирщина', '«Осінні ночі», «Ганка»', 'прозаїк')";
$q21 = "INSERT INTO members VALUES('21', 'Кібець Юрій Іванович ', '1946-08-06', 'Дніпропетровщина', '«П’ята пора року», «Оріль»', 'поет, перекладач, прозаїк')";
$q22 = "INSERT INTO members VALUES('22', 'Ковтуненко Валерій Іванович ', '1951-06-09', 'Сумщина', '«Пісня іволги», «Шанс»', 'поет')";
$q23 = "INSERT INTO members VALUES('23', 'Корж Віктор Федорович ', '1938-04-15', 'м. Бобринці', '«Борвій», «Закон пензля»', 'поет')";
$q24 = "INSERT INTO members VALUES('24', 'Коцюбинський Андрій Федорович ', '1938-12-08', 'Черкащина', '«Березова каша», «Троянди для незнайомки»', 'прозаїк')";
$q25 = "INSERT INTO members VALUES('25', 'Кравченко Олександра Петрівна ', '1951-12-17', 'м. Дніпро', '«Тайна преображения», «Киевская невеста»', 'прозаїк')";
$q26 = "INSERT INTO members VALUES('26', 'Кудрявцев Михайло Леонідович ', '1953-08-09', 'м. Дніпро', '«Небесна Борозна»', 'поет')";
$q27 = "INSERT INTO members VALUES('27', 'Кривенко Наталя Іванівна ', '1976-12-21', 'Дніпропетровщина', '«Я – розділяю!», «Ляльки і колізеї»', 'поет')";
$q28 = "INSERT INTO members VALUES('28', 'Лебідь Сергій Якимович ', '1953-10-05', 'м. Дніпро', '«Ерудит за сумісництвом»', 'публіцист')";
$q29 = "INSERT INTO members VALUES('29', 'Левченко Людмила Григорівна ', '1950-01-02', 'Дніпропетровщина', '«Півень-сурмач», «Золотий бриль»', 'поетеса')";
$q30 = "INSERT INTO members VALUES('30', 'Липицький Анатолій Григорович ', '1933-08-12', 'Кривий Ріг', '«Амгуэмская переправа», «Пересечение»', 'прозаїк, публіцист')";
$q31 = "INSERT INTO members VALUES('31', 'Луценко Володимир Антонович ', '1941-04-28', 'Комсомольськ на Амурі', '«Фейлетонна епоха», «товариші сатани»', 'сатирик-гуморист')";
$q32 = "INSERT INTO members VALUES('32', 'Маменко Ростислав Петрович ', '1936-08-17', 'м. Кам'янське', '«Моя довіра», «Мій човен – він як птах»', 'поет')";
$q33 = "INSERT INTO members VALUES('33', 'Миколаєнко Микола Антонович ', '1919-12-05', 'Дніпропетровщина', '«Тепловій», «Патериця»', 'поет, прозаїк')";
$q34 = "INSERT INTO members VALUES('34', 'Невидайло Микола Гаврилович ', '1923-05-03', 'Дніпропетровщина', '«Приносини часів смутенних», «Динозаври»', 'прозаїк')";
$q35 = "INSERT INTO members VALUES('35', 'Ніколенко Валерій Васильович ', '1951-01-15', 'м. Новомосковськ', '«Покликання», «Афоризми»', 'есеїст')";
$q36 = "INSERT INTO members VALUES('36', 'Омельченко Олеся Олексіївна ', '1952-01-19', 'Дніпропетровщина', '«Зачарований обрій», «Скажи на мене: зірочка»', 'поетеса')";
$q37 = "INSERT INTO members VALUES('37', 'Парфімчук Жан Іванович ', '1938-08-04', 'Хмельниччина', '«Излом», «Эхо света»', 'поет')";
$q38 = "INSERT INTO members VALUES('38', 'Прокопенко Ірина Миколаївна ', '1926-09-06', 'м. Спас-Клепіки', '«Хто розбудив ліс», «Що шепотіли берізки»', 'прозаїк')";
$q39 = "INSERT INTO members VALUES('39', 'Пуппо Ігор Петрович ', '1931-01-09', 'м. Єнакієво', '«Степь золотая», «Баррикадная улица»', 'поет, публіцист')";
$q40 = "INSERT INTO members VALUES('40', 'Ратнер Олександр Григорович ', '1947-10-10', 'м. Дніпро', '«Тристапарк», «Заботы души»', 'поет, перекладач')";
$q41 = "INSERT INTO members VALUES('41', 'Рибицький Іван Васильович', '1936-05-21', 'Хмельниччина', '«Озброєне серце», «Хвилини і хвилі»', 'поет')";
$q42 = "INSERT INTO members VALUES('42', 'Савченко Віктор Васильович ', '1938-03-22', 'м. Вознесенськ', '«Тривожний крик папуги», «Ночівля в карбоні»', 'прозаїк')";
$q43 = "INSERT INTO members VALUES('43', 'Селезньов Михайло Сергійович ', '1923-12-18', 'Одещина', '«В кругу друзей», «Дубрава»', 'поет, прозаїк')";
$q44 = "INSERT INTO members VALUES('44', 'Сіренко Володимир Іванович ', '1931-12-07', 'Запоріжчина', '«Батькове поле», «Рождение песни»', 'поет')";
$q45 = "INSERT INTO members VALUES('45', 'Скалозуб Юрій Григорович ', '1935-06-26', 'м. Дніпро', '«Первая глубина», «Море в огне»', 'прозаїк')";
$q46 = "INSERT INTO members VALUES('46', 'Стариков Олексій Миколайович ', '1945-06-16', 'Московщина', '«Как поймать кита», «Сколько у звезды лучей»','поет')";
$q47 = "INSERT INTO members VALUES('47', 'Старченко Віталій Іванович ', '1947-04-13', 'м. Дніпро', '«Коріння тиші», «Кроки до обрію»', 'поет')";
$q48 = "INSERT INTO members VALUES('48', 'Сухоніс Фідель Анатолійович ', '1961-04-27', 'м. Дніпро', '«Америка у вишиванці», «Втеча у небі»', 'прозаїк, сатирик')";
$q49 = "INSERT INTO members VALUES('49', 'Тубальцева Надія Павлівна ', '1957-05-26', 'Алтайський край', '«Россы», «Ты прекрасна»', 'поетеса, прозаїк')";
$q50 = "INSERT INTO members VALUES('50', 'Твердохліб Олександр Васильович ', '1948-06-29', 'м. Запоріжжя', '«Касатка», «Земля моих творцов»', 'поет')";
$q51 = "INSERT INTO members VALUES('51', 'Селіванов Володимир Дмитрович ', '1944-04-07', 'м. Кам'янське', '«Молода трава», «Трикнижжя»', 'прозаїк')";
$q52 = "INSERT INTO members VALUES('52', 'Степовичка Леся Несторівна ', '1952-05-21', 'Дніпропетровщина', '«Галатея», «П’ємонт - недалеко»', 'поет, публіцист')";
$q53 = "INSERT INTO members VALUES('53', 'Теплов Володимир Володимирович ', '1938-03-11', 'м. Кривий Ріг', '«Адрес судьбы», «Признание в любви»', 'поет')";
$q54 = "INSERT INTO members VALUES('54', 'Фролова Клавдія Петрівна ', '1923-02-24', 'Орловська область', '«Андрій Головко», «Ярина»', 'критик')";
$q55 = "INSERT INTO members VALUES('55', 'Чернишов Костянтин Костянтинович ', '1935-04-25', 'Вітіпська область', '«Високий полудень», «Сонячні мости»', 'поет')";
$q56 = "INSERT INTO members VALUES('56', 'Шепітько Ганна Семенівна ', '1943-08-25', 'Дніпропетровщина', '«Весняні сходи», «Моя весна»', 'поет')";
$q57 = "INSERT INTO members VALUES('57', 'Шиян Григорій Іванович ', '1936-06-08', 'Дніпропетровщина', '«По суті кажучи», «Любов на балансі»', 'прозаїк')";
$q58 = "INSERT INTO members VALUES('58', 'Шкляр Анатолій Миколайович ', '1954-10-01', 'м. Дніпро', '«Скрипковий ключ», «Знак птаха»', 'поет')";
$q59 = "INSERT INTO members VALUES('59', 'Шковира Юрій Дмитрович ', '1931-05-04', 'Черкащина', '«Спалахи пам’яті», «Нова Енеїда»', 'геолог')";
$q60 = "INSERT INTO members VALUES('60', 'Карапиш Борислав Тимофійович ', '1929-08-01', 'Полтавщина', '«Флотський комірець», «Курсанти»', 'прозаїк')";
$q61 = "INSERT INTO members VALUES('61', 'Чабан Микола Петрович ', '1958-03-05', 'м. Дніпро', '«Молитва Богу невідомому», «Кобза»', 'краєзнавець')";
$q19 = "INSERT INTO members VALUES('19', 'Зайвий Олександр Федосійович ', '1935-11-01', 'Дніпропетровщина', '«Молодик», «Вогонь»', 'письменник, поет')";
for($i=1;$i<=61;$i++)
{
	$q=${'q'.$i};
	mysqli_query($dbcn, $q);
}


mysqli_select_db($dbcn, "doonspu1");
$order="pib";
$desc="ASC";
if(isset($_GET['pib']))
{
	$order=$_GET['pib'];
}
if(isset($_GET['add']))
{
	$desc = $_GET['add'];
}

$b = "SELECT * FROM members ORDER BY $order $desc";
if($desc == 'ASC')
{
	$desc = 'DESC';
}
else if ($desc == 'DESC')
{
	$desc= 'ASC';
}

$y = mysqli_query($dbcn, $b);
echo"<table border=5>
<tr>
<td>Номер</td>
<td><a href=$_SERVER[PHP_SELF]?order=pib&add=$desc>ПІБ</a></td>
<td>Рік народження</td>
<td>Місце народження</td>
<td>Вибрані твори</td>
<td>Жанр</td>
</tr>";
while($p=mysqli_fetch_assoc($y))
{
	echo"
	<tr>
	<td>".$p['number']."</td>
	<td>".$p['pib']."</td>
	<td>".$p['year']."</td>
	<td>".$p['place']."</td>
	<td>".$p['tvory']."</td>
	<td>".$p['janr']."</td>
	</tr>";
}
echo"</table>";
?>
