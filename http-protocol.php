<!DOCTYPE html>
<html>
<head>
<title>HTTP протокол и формы</title>
<meta charset="utf-8">
<style>
   table {
    width: 700px; 
    border: 0px white; 
    margin: auto;
   }
   td {
    text-align: left; 
   }
</style>
</head>
<body>

<table>
<tr><td>

<div class="blog-section blog-section--post-info blog-section--fullwidth">
    <div class="blog-section__wrap">
        <div class="blog-section__content">
            <div class="blog-section__wrap-inner">
                <div class="post-info post-info--fullwidth">
                    <h1 class="post-info__title" style="text-align:center;">Протокол HTTP и&nbsp;работа с&nbsp;заголовками</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-section blog-section--post-content blog-section--fullwidth">
    <div class="blog-section__wrap">
        <div class="blog-section__content blog-section__content--short">
            <div class="blog-section__wrap-inner">
                <div class="post-content post-content--fullwidth">
                    <p>Весь современный веб построен на&nbsp;модели взаимодействия клиента и&nbsp;сервера. Как она работает:</p>
                    <ul>
                        <li>браузер пользователя (клиент) отправляет на&nbsp;сервер запрос с&nbsp;адресом сайта (URL);</li>
                        <li>сервер получает запрос и&nbsp;отдаёт клиенту запрошенный контент.</li>
                    </ul>
                    <p>Для реализации процесса используется универсальный протокол HTTP.</p>
                    <h2 style="text-align:center;">Как работает HTTP</h2>
                    <p>Программировать на&nbsp;PHP можно и&nbsp;без знания протокола HTTP. Но&nbsp;для решения ряда задач нужно знать, как именно работает веб-сервер. Ведь PHP&nbsp;— это в&nbsp;первую очередь серверный язык программирования.</p>
                    <p>Протокол HTTP очень прост и&nbsp;состоит из&nbsp;двух частей:</p>
                    <ul>
                        <li>Заголовков запроса/ответа;</li>
                        <li>Тела запроса/ответа.</li>
                    </ul>
                    <p>Сначала идёт список заголовков, затем пустая строка, после неё (если есть) тело запроса/ответа.</p>
                    <p>И&nbsp;клиент, и&nbsp;сервер могут посылать друг другу заголовки и&nbsp;тело ответа. У&nbsp;клиента доступные заголовки будут одни, у&nbsp;сервера&nbsp;— другие. Рассмотрим, как выглядит работа по&nbsp;протоколу HTTP, когда пользователь хочет загрузить главную страницу социальной сети «ВКонтакте».</p>
                    <ol>
                        <li>
                            <p>Браузер пользователя устанавливает соединение с&nbsp;сервером <a target="_blank" rel="noopener noreferrer" href="http://vk.com/">vk.com</a> и&nbsp;отправляет следующий запрос:</p>
                            <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">GET / HTTP/1.1
Host: vk.com

</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                        </li>
                        <li>
                            <p>Сервер принимает запрос и&nbsp;отправляет ответ:</p>
                            <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">HTTP/1.1 200 OK
Server: Apache

&lt;html&gt;
&lt;head&gt;
  &lt;title&gt;ВКонтакте&lt;/title&gt;
&lt;/head&gt;
&lt;!-- остальной контент страницы ниже --&gt;

</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                        </li>
                        <li>Браузер принимает ответ и&nbsp;показывает готовую страницу.</li>
                    </ol>
                    <p>Нам интересен самый первый шаг, где браузер инициирует запрос к&nbsp;серверу <a target="_blank" rel="noopener noreferrer" href="http://vk.com/">vk.com</a>.</p>
                    <p>Здесь определяется несколько важных параметров:</p>
                    <ul>
                        <li>Метод, которым будет запрошен контент;</li>
                        <li>Адрес страницы;</li>
                        <li>Версия протокола.</li>
                    </ul>
                    <p><code>GET</code>&nbsp;—&nbsp;это метод (глагол), который&nbsp;применяется для доступа к&nbsp;указанной странице.&nbsp;<code>GET</code> используется очень часто, потому что&nbsp;говорит серверу о&nbsp;том, что клиент хочет прочитать указанный документ. Есть и&nbsp;другие методы, один из&nbsp;них мы&nbsp;рассмотрим уже в&nbsp;следующем разделе.</p>
                    <p>После метода идёт указание на&nbsp;адрес страницы&nbsp;— URI (универсальный идентификатор ресурса). Мы&nbsp;запрашиваем главную страницу сайта, поэтому используется просто слэш&nbsp;—&nbsp;<code>/</code>. В&nbsp;конце строки указана версия протокола,&nbsp;почти всегда это будет&nbsp;<code>HTTP/1.1</code>.</p>
                    <p>После строки с&nbsp;указанием основных параметров следует перечисление заголовков. Они передают серверу дополнительную полезную информацию: название и&nbsp;версию браузера, язык, кодировку, параметры кэширования и&nbsp;так далее.</p>
                    <p>Среди заголовков, которые передаются при каждом запросе, есть один обязательный и&nbsp;самый важный&nbsp;— это заголовок&nbsp;<code>Host</code>. Он&nbsp;определяет адрес домена, который запрашивает браузер клиента.</p>
                    <p>Сервер, получив запрос, ищет у&nbsp;себя сайт с&nbsp;доменом из&nbsp;заголовка&nbsp;<code>Host</code>, а&nbsp;также указанную страницу. Если запрошенный сайт и&nbsp;страница найдены, клиенту отправляется ответ:<code>HTTP/1.1 200 OK</code>. Такой ответ означает, что документ найден и&nbsp;будет отправлен клиенту.</p>
                    <div class="post-highlighted-text">
                        <p>&nbsp; &nbsp; &nbsp; Общая структура стартовой строки ответа:</p>
                        <p><code>HTTP/Версия Код состояния Пояснение</code></p>
                    </div>
                    <p>Больше всего здесь интересен именно код состояния, он&nbsp;же код ответа сервера. В&nbsp;этом примере код ответа&nbsp;— 200, что означает: сервер работает, документ найден и&nbsp;будет передан клиенту.</p>
                    <p>Не&nbsp;всегда всё идёт гладко.</p>
                    <p>Например, запрошенный документ отсутствует или сервер перегружен. В&nbsp;таком случае клиент не&nbsp;получит контент, а&nbsp;код ответа будет отличным от&nbsp;200.</p>
                    <ul>
                        <li>404&nbsp;— если сервер доступен, но&nbsp;запрошенный документ не&nbsp;найден;</li>
                        <li>503&nbsp;— если сервер не&nbsp;может обрабатывать запросы по&nbsp;техническим причинам.</li>
                    </ul>
                    <p>Спецификация HTTP 1.1 определяет 40&nbsp;различных кодов HTTP.</p>
                    <p>После стартовой строки следуют заголовки, а&nbsp;затем тело ответа.</p>
                    <h2 style="text-align:center;">Работа с&nbsp;заголовками в&nbsp;PHP</h2>
                    <p>В&nbsp;PHP есть все возможности для взаимодействия с&nbsp;HTTP:</p>
                    <ul>
                        <li>Получение тела запроса;</li>
                        <li>Получение заголовков запроса;</li>
                        <li>Добавление/изменение заголовков ответа;</li>
                        <li>Управление телом ответа.</li>
                    </ul>
                    <p>Разберём всё по&nbsp;порядку.</p>
                    <h3 style="text-align:center;">Получение тела запроса</h3>
                    <p>Тело запроса&nbsp;— это информация, которую передал браузер при запросе страницы. Но&nbsp;тело запроса присутствует только, если браузер запросил страницу методом&nbsp;<code>POST</code>. Дело в&nbsp;том, что&nbsp;<code>POST</code>&nbsp;— это метод, специально предназначенный для отправки данных на&nbsp;сайт. Чаще всего метод&nbsp;<code>POST</code>&nbsp;браузер задействует в&nbsp;момент отправки формы. В&nbsp;этом случае телом запроса будет содержимое формы.</p>
                    <p>В&nbsp;PHP-сценарии все данные отправленной формы будут доступны в&nbsp;специальном массиве&nbsp;<code>$_POST</code>. Более подробно об&nbsp;этом написано в&nbsp;следующей главе, посвящённой формам.</p>
                    <h3 style="text-align:center;">Получение заголовков запроса</h3>
                    <p>Напомним ещё раз, что заголовки запроса&nbsp;— это метаинформация, отправленная браузером при запросе сценария.</p>
                    <p>PHP автоматически извлекает такие заголовки и&nbsp;помещает их&nbsp;в&nbsp;специальный массив&nbsp;—&nbsp;<code>$_SERVER</code>. Стоит отметить, что в&nbsp;этом массиве, помимо заголовков, есть и&nbsp;другая информация. Значения заголовков запроса находятся под ключами, которые начинаются с&nbsp;<code>HTTP_</code>. Подробно всё содержимое этого массива описано в&nbsp;<a target="_blank" rel="noopener noreferrer" href="https://www.php.net/manual/ru/reserved.variables.server.php">официальной документации</a>.</p>
                    <p>Пример, как получить предыдущую страницу, с&nbsp;которой перешёл пользователь:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">print($_SERVER['HTTP_REFERER']);
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <h3 style="text-align:center;">Добавление/изменение заголовков ответа</h3>
                    <p>В&nbsp;PHP-сценарии можно управлять всеми заголовками ответа, которые попадут к&nbsp;пользователю вместе с&nbsp;контентом страницы. Это возможно, потому что PHP работает на&nbsp;стороне веб-сервера и&nbsp;имеет с&nbsp;ним очень тесную интеграцию. Вот примеры сценариев, когда пригодится управление заголовками ответа:</p>
                    <ul>
                        <li>Кэширование;</li>
                        <li>Переадресация пользователя;</li>
                        <li>Установка cookies;</li>
                        <li>Отправка файлов;</li>
                        <li>Передача дополнительной информации браузеру.</li>
                    </ul>
                    <p>Заголовки ответа нужны для выполнения множества важных задач.</p>
                    <p>В&nbsp;PHP есть функция для отправки или смены заголовков:&nbsp;<code>header()</code>.</p>
                    <p>Она принимает имя и&nbsp;значение заголовка и&nbsp;добавляет его в&nbsp;список из&nbsp;всех заголовков, которые уйдут в&nbsp;браузер пользователя после окончания работы сценария.</p>
                    <p>Например, так выполняется перенаправление пользователя на&nbsp;другую страницу:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">header("Location: /index.php");
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>За&nbsp;переадресацию отвечает заголовок с&nbsp;именем&nbsp;<code>Location</code>, а&nbsp;через двоеточие задаётся значение&nbsp;— адрес страницы для перехода.</p>
                    <p><strong>Важное замечание по&nbsp;использованию заголовков</strong></p>
                    <p>Есть одно ограничение: заголовки нельзя отправлять, если пользователю к&nbsp;этому моменту уже отправили любой контент. То&nbsp;есть если показать что-то&nbsp;на&nbsp;экране, например, через функцию&nbsp;<code>print()</code>, то&nbsp;после этого заголовки поменять уже не&nbsp;получится.</p>
                    <h3 style="text-align:center;">Управление телом ответа</h3>
                    <p>Всё, что PHP выводит на&nbsp;экран, является содержимым ответа. Иными словами, вызовы функций&nbsp;<code>print</code>,&nbsp;<code>echo</code>&nbsp;или показ текста через шорт-теги являются телом ответа, которое попадает в&nbsp;браузер пользователю.</p>
                    <h2 style="text-align:center;">Параметры запроса</h2>
                    <p>Мы&nbsp;привыкли, что на&nbsp;нашем сайте каждый PHP-сценарий отвечает за&nbsp;одну страницу. Посетитель сайта вводит в&nbsp;адресную строку путь, который состоит из&nbsp;имени домена и&nbsp;имени PHP-сценария. Например, так:&nbsp;<code>http://weather-diary.ru/day.php</code>.</p>
                    <p>Но&nbsp;как быть, если одна страница должна показывать разную информацию?</p>
                    <p>На&nbsp;сайте дневника наблюдений за&nbsp;погодой мы&nbsp;сделали отдельную страницу, чтобы показывать на&nbsp;ней информацию о&nbsp;погоде из&nbsp;истории за&nbsp;один конкретный день. То&nbsp;есть страница одна, но&nbsp;показывает разные данные, в&nbsp;зависимости от&nbsp;выбранного дня.</p>
                    <p>Также пользователи хотят добавить в&nbsp;закладки адреса страниц с&nbsp;нужными им&nbsp;днями. Получается, что, имея только один сценарий, сделать страницу, способную показывать дневник погоды за&nbsp;любой день невозможно? Вовсе нет!</p>
                    <h3 style="text-align:center;">Из&nbsp;чего состоит URI</h3>
                    <p>URI&nbsp;— это уникальный идентификатор ресурса. Ресурс в&nbsp;нашем случае&nbsp;— это полный путь до&nbsp;страницы сайта. И&nbsp;вот как может выглядеть ресурс для показа погоды за&nbsp;конкретный день:</p>
                    <p><code>http://weather-diary.ru/day.php?date=2017-10-15</code></p>
                    <p>Разберём, из&nbsp;чего состоит этот URI.</p>
                    <p>Здесь есть имя домена:&nbsp;<code>weather-diary.ru</code>.</p>
                    <p>Затем идёт имя сценария:&nbsp;<code>day.php</code>.</p>
                    <p>А&nbsp;всё, что идёт после&nbsp;—&nbsp;<strong>это параметры запроса</strong>.</p>
                    <p>Параметры запроса&nbsp;— это как&nbsp;бы дополнительные атрибуты адреса страницы. Они отделяются от&nbsp;имени страницы знаком запроса. В&nbsp;примере выше параметр запроса только один:&nbsp;<strong>date=2017-10-30</strong>.</p>
                    <p>Имя этого параметра: <code>date</code>, значение:&nbsp;<code>2017-10-15</code>.</p>
                    <p>Параметров запроса может быть несколько, тогда они разделяются знаком амперсанда:&nbsp;<code>?date=2017-10-15&amp;tscale=celsius</code>.</p>
                    <p>В&nbsp;примере выше указывается два аргумента: дата и&nbsp;единица измерения температуры.</p>
                    <h3 style="text-align:center;">Параметры запроса&nbsp;— как внешние переменные</h3>
                    <p>Теперь в&nbsp;адресе страницы используются параметры запроса, но&nbsp;какая нам от&nbsp;этого польза? Она состоит в&nbsp;том, что если имя страницы вызывает к&nbsp;исполнению соответствующий PHP-сценарий, то&nbsp;параметры запроса превращаются в&nbsp;специальные внешние переменные в&nbsp;этом сценарии. То&nbsp;есть если в&nbsp;адресе присутствуют такие параметры, то&nbsp;их&nbsp;легко получить внутри кода сценария и&nbsp;выполнить с&nbsp;ними какие-нибудь действия. Например, показать погоду за&nbsp;конкретный день в&nbsp;выбранных единицах измерения.</p>
                    <h3 style="text-align:center;">Получение параметров запроса</h3>
                    <p>Если есть внешние переменные, то&nbsp;как их&nbsp;прочитать?</p>
                    <p>Все параметры запроса находятся в&nbsp;специальном, ассоциативном массиве&nbsp;<code>$_GET</code>, а&nbsp;значит, сценарий, вызванный с&nbsp;таким адресом:&nbsp;<code>day.php?date=2017-10-15&amp;tscale=celsius</code> будет иметь в&nbsp;этом массиве два значения с&nbsp;ключами&nbsp;<code>date</code>&nbsp;и&nbsp;<code>scale</code>.</p>
                    <p>Запрос на&nbsp;получение данных за&nbsp;выбранный день выглядит так:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
$date = $_GET['date'] ?? date('Y-m-d');
$sql = sprintf('SELECT * FROM weather WHERE day = "%s"', mysqli_real_escape_string($con, $date));
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>В&nbsp;первой строчке примера выше мы&nbsp;получаем значение параметра&nbsp;<code>date</code>, а&nbsp;если он&nbsp;отсутствует, то&nbsp;используем текущую дату в&nbsp;качестве выбранного дня.</p>
                    <p>Никогда не&nbsp;полагайтесь на&nbsp;существование параметра в&nbsp;массиве&nbsp;<code>$_GET</code>&nbsp;и&nbsp;делайте проверку либо функцией&nbsp;<code>isset()</code>, либо как в&nbsp;этом примере.</p>
                    <h3 style="text-align:center;">Формирование URI с&nbsp;параметрами запроса</h3>
                    <p>Иногда нужно совершить обратную операцию: сформировать адрес страницы, включив туда нужные параметры запроса из&nbsp;массива.</p>
                    <p>Скажем, на&nbsp;странице погодного дневника надо поставить ссылку на&nbsp;следующий и&nbsp;предыдущий день. Нужно также сохранить выбранную единицу измерений. То&nbsp;есть необходимо сохранить текущие параметры запроса, поменять значение одного из&nbsp;них (день), и&nbsp;сформировать новую ссылку.</p>
                    <p>Вот как это можно сделать:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
$params = $_GET;
$date = $params['date'] ?? date('Y-m-d');

$tomorrow = date('Y-m-d', strtotime('tomorrow', strtotime($date)));
$params['date'] = $tomorrow;

$url = basename(__FILE__) . '/?' . http_build_query($params);
print($url);
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Здесь мы&nbsp;использовали две функции:</p>
                    <ul>
                        <li><code>basename(__FILE__)</code>&nbsp;—&nbsp;получает имя текущего сценария;</li>
                        <li><code>http_build_query()</code>&nbsp;—&nbsp;преобразует ассоциативный массив в&nbsp;строку запроса.</li>
                    </ul>
                    <div class="blog-section blog-section--post-info blog-section--fullwidth">
                        <div class="blog-section__wrap">
                            <div class="blog-section__content">
                                <div class="blog-section__wrap-inner">
                                    <div class="post-info post-info--fullwidth">
                                        <h1 class="post-info__title" style="text-align:center;">Массивы $_POST и $_GET в PHP. Обработка форм</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-section blog-section--post-content blog-section--fullwidth">
                        <div class="blog-section__wrap">
                            <div class="blog-section__content blog-section__content--short">
                                <div class="blog-section__wrap-inner">
                                    <div class="post-content post-content--fullwidth">
                                        <p>Формы&nbsp;— это часть языка HTML. Формы нужны для передачи данных от&nbsp;клиента на&nbsp;сервер. Чаще всего формы используются для регистрации пользователей, заполнения анкет, оформления заказа в&nbsp;интернет магазине, и&nbsp;так далее.</p>
                                        <p>Через формы можно отправлять как простую текстовую информацию, так и&nbsp;файлы.</p>
                                        <p>Большую часть времени программирования на&nbsp;PHP вы&nbsp;будете так или иначе работать с&nbsp;формами и&nbsp;данными из&nbsp;них.</p>
                                        <p>HTML описывает то, из&nbsp;каких элементов состоит форма, и&nbsp;как она выглядит. Но&nbsp;без принимающей стороны, то&nbsp;есть сервера, который принимает эти данные и&nbsp;обрабатывает их&nbsp;нужным образом, создавать формы нет никакого смысла.</p>
                                        <p>PHP содержит множество средств для работы с&nbsp;формами. Это позволяет очень просто решать типичные задачи, которые часто возникают в&nbsp;веб-программировании:</p>
                                        <ul>
                                            <li>Регистрация и&nbsp;аутентификация пользователя;</li>
                                            <li>Отправка комментариев на&nbsp;форумах и&nbsp;социальных сетях;</li>
                                            <li>Оформление заказов.</li>
                                        </ul>
                                        <p>Практически любой современный сайт содержит как минимум несколько разных HTML-форм.</p>
                                        <h2 style="text-align:center;"><strong>Отправка формы</strong></h2>
                                        <p>Рассмотрим один типичный пример&nbsp;— форма обратной связи. Для связи пользователей с&nbsp;авторами сайта, как правило, используются формы обратной связи, где человек указывает имя, почту для обратной связи и&nbsp;текст своего сообщения.</p>
                                        <p>Такая форма в&nbsp;HTML может выглядеть следующим образом:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="json language-json"><code class="language-plaintext hljs language-json" data-highlighted="yes">&lt;form name="feedback" method="POST" action="form.php"&gt;
	&lt;label&gt;Ваше имя: &lt;input type="text" name="name"&gt;&lt;/label&gt;
	&lt;label&gt;Ваш email: &lt;input type="text" name="email"&gt;&lt;/label&gt;
	&lt;label&gt;Сообщение: &lt;textarea name="message"&gt;&lt;/textarea&gt;&lt;/label&gt;
	&lt;input type="submit" name="send" value="Отправить"&gt;
&lt;/form&gt;
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>Это очень простая форма, состоящая из&nbsp;трёх полей и&nbsp;одной кнопки отправки.</p>
                                        <p>Почти весь приведённый код описывает внешний вид и&nbsp;содержание формы, но&nbsp;следует обратить внимание на&nbsp;два атрибута тега <code>&lt;form&gt;</code>, которые нужны для указания на&nbsp;способ обработки данных:</p>
                                        <p>method&nbsp;— этот атрибут используется для определения метода HTTP, который будет использован для передачи данных на&nbsp;сервер. Вы&nbsp;уже знакомы с&nbsp;HTTP-методом GET, предписывающим серверу просто вернуть определённый документ.</p>
                                        <p>Метод POST сообщает о&nbsp;намерении передать на&nbsp;сервер некоторую информацию, что, впрочем, не&nbsp;отменяет последующее получение контента.</p>
                                        <p>action&nbsp;— содержит адрес PHP-скрипта, который должен обработать эту форму.</p>
                                        <p>После нажатия на&nbsp;кнопку «отправить», браузер выполняет POST запрос со&nbsp;введёнными данными на&nbsp;адрес, указанный в&nbsp;атрибуте action.</p>
                                        <h2 style="text-align:center;"><strong>Обработка формы</strong></h2>
                                        <p>После отправки формы управление передаётся PHP-скрипту, который должен получить переданные данные, выполнить с&nbsp;ними какие-либо действия (например, сохранить в&nbsp;базе данных) и&nbsp;показать результат.</p>
                                        <p>Результатом может быть какое-нибудь сообщение об&nbsp;успешном завершении операции, например, «ваши данные успешно отправлены».</p>
                                        <p>Поэтому требуется в&nbsp;первую очередь научиться получать данные из&nbsp;формы в&nbsp;сценарии.</p>
                                        <p>В&nbsp;PHP это делается легко&nbsp;— все данные из&nbsp;формы находятся в&nbsp;глобальном ассоциативном массиве <code>$_POST</code>. Этот массив всегда будет неявно присутствовать в&nbsp;сценарии, если он&nbsp;был загружен по&nbsp;методу POST.</p>
                                        <p>Каждое поле из&nbsp;формы будет находиться в&nbsp;массиве, где ключом будет значение атрибута name, а&nbsp;значением содержимое поля. Например, чтобы вывести из&nbsp;формы всю информацию на&nbsp;экран, можно написать такой сценарий:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="json language-json"><code class="language-plaintext hljs language-json" data-highlighted="yes">&lt;?php
	if (isset($_POST)) {
		print("Имя: " . $_POST['name']);
		print("&lt;br&gt;Email: " . $_POST['email']);
		print("&lt;br&gt;Сообщение: " . $_POST['message']);
	}
?&gt;
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>Функция isset служит для определения, существует&nbsp;ли переданная ей&nbsp;переменная. Так мы&nbsp;проверяем, что сценарий загружен методом POST, то&nbsp;есть была отправлена форма.</p>
                                        <p>Как правило, после обработки формы в&nbsp;PHP, сценарий должен переадресовать пользователя на&nbsp;другую страницу. Это связано с&nbsp;тем, что если форма была отправлена через метод POST, то&nbsp;после обновления страницы данные будут отправлены ещё раз, а&nbsp;это, в&nbsp;большинстве случаев, нежелательное поведение.</p>
                                        <h2 style="text-align:center;"><strong>Отправка файлов</strong></h2>
                                        <p>Кроме текстовой информации, существует возможность отправлять на&nbsp;сервер файлы любых типов. Пример формы для загрузки файла:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="json language-json"><code class="language-plaintext hljs language-json" data-highlighted="yes">&lt;form name="file_upload" method="POST" action="form.php" enctype="multipart/form-data"&gt;
	&lt;label&gt;Ваш аватар: &lt;input type="file" name="avatar"&gt;&lt;/label&gt;
	&lt;input type="submit" name="send" value="Отправить файл"&gt;
&lt;/form&gt;
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>Тут есть два важных отличия от&nbsp;первого примера:</p>
                                        <ul>
                                            <li>Добавился новый атрибут enctype, который всегда должен иметь значение <code>multipart/form-data</code>. Если его не&nbsp;будет, то&nbsp;файл не&nbsp;отправится.</li>
                                            <li>Сам файл загружается при помощи поля с&nbsp;типом <i>file</i>.</li>
                                        </ul>
                                        <p>В&nbsp;PHP загруженный файл будет доступен в&nbsp;другом специальном массиве&nbsp;— <code>$_FILES</code>.</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="json language-json"><code class="language-plaintext hljs language-json" data-highlighted="yes">&lt;?php
	if (isset($_FILES['avatar'])) {
		$file = $_FILES['avatar'];
		print("Загружен файл с именем " . $file['name'] . " и размером " . $file['size'] . " байт");
	}
?&gt;
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>PHP автоматически сохраняет все загруженные файлы во&nbsp;временную папку на&nbsp;сервере. Но&nbsp;хранить там файлы нельзя, потому что эта директория периодически очищается, и&nbsp;ссылку на&nbsp;такой файл нельзя дать на&nbsp;сайте. Решение здесь только одно&nbsp;— переместить загруженный файл в&nbsp;другую папку. Перемещение файла всегда выполняют сразу после загрузки.</p>
                                        <p>Для начала нужно убедиться, что в&nbsp;рабочей директории проекта существует папка для хранения загруженных файлов. Пусть она называется <code>uploads</code>.</p>
                                        <h2 style="text-align:center;"><strong>Перемещение загруженного файла</strong></h2>
                                        <p>Для перемещения файла нужно знать, где он&nbsp;находится сейчас, и&nbsp;адрес папки, в&nbsp;которую он&nbsp;будет переноситься.</p>
                                        <p>С&nbsp;текущим адресом всё крайне просто&nbsp;— он&nbsp;уже находится в&nbsp;массиве <code>$_FILES</code>. Новый адрес файла, в&nbsp;свою очередь, состоит из&nbsp;пути к&nbsp;папке и&nbsp;имени файла. Так как папка uploads находится там&nbsp;же, где и&nbsp;текущий сценарий, получить путь к&nbsp;ней можно так: <code>dirname(__FILE__</code>)`.</p>
                                        <p>Код для перемещения файла в&nbsp;новую папку:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="json language-json"><code class="language-plaintext hljs language-json" data-highlighted="yes">&lt;?php
	$current_path = $_FILES['avatar']['tmp_name'];
	$filename = $_FILES['avatar']['name'];
	$new_path = dirname(**__FILE__**) . '/' . $filename;
	move_uploaded_file($current_path, $new_path);
?&gt;
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>Функция <code>move_uploaded_file()</code>выполняет два действия:</p>
                                        <ul>
                                            <li>Проверяет, что файл действительно загружен через форму.</li>
                                            <li>Перемещает загруженный файл по&nbsp;новому адресу.</li>
                                        </ul>
                                        <h2 style="text-align:center;"><strong>Валидация формы</strong></h2>
                                        <p>Валидация формы&nbsp;— это проверка содержимого её&nbsp;полей. Задача такой проверки&nbsp;— убедиться, что необходимые поля заполнены, а&nbsp;значения в&nbsp;них соответствуют ожидаемому формату.</p>
                                        <p>Так, например, при регистрации пользователя на&nbsp;сайте, он&nbsp;должен заполнить поля с&nbsp;адресом электронной почты и&nbsp;придумать себе пароль. Оба поля обязательны к&nbsp;заполнению, но&nbsp;значение из&nbsp;поля email также должно быть корректным email-адресом.</p>
                                        <p>Помимо текстовых значений формы, можно проверять формат и&nbsp;размер загружаемых файлов.</p>
                                        <h2 style="text-align:center;"><strong>Общий подход к&nbsp;валидации</strong></h2>
                                        <p>При выполнения валидации любой формы порядок действий будет всегда одним:</p>
                                        <ul>
                                            <li>Сформировать массив с&nbsp;именами полей, обязательных к&nbsp;заполнению.</li>
                                            <li>Сформировать массив с&nbsp;правилами для валидации формата полей.</li>
                                            <li>Получить значения всех полей.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</tr></td>
</table>
<br></br>
<br></br>
<br></br>
<div align="center">
<a href="language-constructs.php">Предыдущий раздел</a>| <a href="index.html">На главную</a> | <a href="database.php">Следующий раздел</a>
</div>
<br></br>

</body>