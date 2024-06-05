<!DOCTYPE html>
<html>
<head>
<title>MySQL в PHP</title>
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
                    <h1 class="post-info__title" style="text-align:center;">Работа с&nbsp;MySQL в&nbsp;PHP</h1>
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
                    <p>PHP поддерживает работу с&nbsp;базой данных MySQL. Специальные встроенные функции для работы с&nbsp;MySQL позволяют просто и&nbsp;эффективно работать с&nbsp;этой СУБД: выполнять любые запросы, читать и&nbsp;записывать данные, обрабатывать ошибки.</p>
                    <p>Сценарий, который подключается к&nbsp;БД, выполняет запрос и&nbsp;показывает результат, будет состоять всего из&nbsp;нескольких строк. Для работы с&nbsp;MySQL не&nbsp;надо ничего дополнительно устанавливать и&nbsp;настраивать; всё необходимое уже доступно вместе со&nbsp;стандартной поставкой PHP.</p>
                    <h2 style="text-align:center;"><strong>Что такое mysqli?</strong></h2>
                    <p>mysqli (MySQL Improved)&nbsp;— это расширение PHP, которое добавляет в&nbsp;язык полную поддержку баз данных MySQL. Это расширение поддерживает множество возможностей современных версий MySQL.</p>
                    <h2 style="text-align:center;"><strong>Как выглядит работа с&nbsp;базой данных</strong></h2>
                    <p>Типичный процесс работы с&nbsp;СУБД в&nbsp;PHP-сценарии состоит из&nbsp;нескольких шагов:</p>
                    <ol>
                        <li>Установить подключение к&nbsp;серверу СУБД, передав необходимые параметры: адрес, логин, пароль.</li>
                        <li>Убедиться, что подключение прошло успешно: сервер СУБД доступен, логин и&nbsp;пароль верные и&nbsp;так далее.</li>
                        <li>Сформировать правильный SQL запрос (например, на&nbsp;чтение данных из&nbsp;таблицы).</li>
                        <li>Убедиться, что запрос был выполнен успешно.</li>
                        <li>Получить результат от&nbsp;СУБД в&nbsp;виде массива из&nbsp;записей.</li>
                        <li>Использовать полученные записи в&nbsp;своём сценарии (например, показать их&nbsp;в&nbsp;виде таблицы).</li>
                    </ol>
                    <h2 style="text-align:center;"><strong>Функция mysqli connect: соединение с&nbsp;MySQL</strong></h2>
                    <p>Перед началом работы с&nbsp;данными внутри MySQL, нужно открыть соединение с&nbsp;сервером СУБД. В&nbsp;PHP это делается с&nbsp;помощью стандартной функции&nbsp;<code>mysqli_connect()</code>. Функция возвращает результат&nbsp;— ресурс соединения. Данный ресурс используется для всех следующих операций с&nbsp;MySQL.</p>
                    <p>Но&nbsp;чтобы выполнить соединение с&nbsp;сервером, необходимо знать как минимум три параметра:</p>
                    <ul>
                        <li>Адрес сервера СУБД;</li>
                        <li>Логин;</li>
                        <li>Пароль.</li>
                    </ul>
                    <p>Если вы&nbsp;следовали стандартной процедуре установки MySQL или используете OpenServer, то&nbsp;адресом сервера будет&nbsp;<code>localhost</code>, логином&nbsp;—&nbsp;<code>root</code>. При использовании OpenServer пароль для подключения&nbsp;— это пустая строка <code>‘’</code>, а&nbsp;при самостоятельной установке MySQL пароль вы&nbsp;задавали в&nbsp;одном из&nbsp;шагов мастера установки.</p>
                    <p>Базовый синтаксис функции&nbsp;<code>mysqli_connect()</code>:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">mysqli_connect(&lt;адрес сервера&gt;, &lt;имя пользователя&gt;, &lt;пароль&gt;, &lt;имя базы данных&gt;);
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <h2 style="text-align:center;"><strong>Проверка соединения</strong></h2>
                    <p><i>Первое, что нужно сделать после соединения с&nbsp;СУБД&nbsp;— это выполнить проверку, что оно было успешным.</i> Эта проверка нужна, чтобы исключить ошибку при подключении к&nbsp;БД. Неверные параметры подключения, неправильная настройка или высокая нагрузка заставит MySQL отвергать новые подключения. Все эти ситуации приведут к&nbsp;невозможности соединения, поэтому программист должен проверить успешность подключения к&nbsp;серверу, прежде чем выполнять следующие действия.</p>
                    <p>Соединение с&nbsp;MySQL устанавливается один раз в&nbsp;сценарии, а&nbsp;затем используется при всех запросах к&nbsp;БД.</p>
                    <p>Результатом выполнения функции&nbsp;<code>mysqli_connect()</code>&nbsp;будет значение специального типа&nbsp;— ресурс. Если подключение к&nbsp;MySQL не&nbsp;удалось, то&nbsp;функция&nbsp;<code>mysqli_connect()</code>&nbsp;вместо ресурса вернёт логическое значение типа «ложь»&nbsp;— <code>false</code>. Хорошей практикой будет всегда проверять результат выполнения этой функции и&nbsp;сравнивать его с&nbsp;ложью.</p>
                    <p>Соединение с&nbsp;MySQL и&nbsp;проверка на&nbsp;ошибки:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="php language-php"><code class="language-php hljs" data-highlighted="yes">&lt;?php
$link = mysqli_connect("localhost", "root", "");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
?&gt;
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Функция&nbsp;<code>mysqli_connect_error()</code>&nbsp;просто возвращает текстовое описание последней ошибки MySQL.</p>
                    <h2 style="text-align:center;"><strong>Установка кодировки</strong></h2>
                    <p>Первым делом после установки соединения крайне желательно явно задать кодировку, которая будет использоваться при обмене данными с&nbsp;MySQL. Если этого не&nbsp;сделать, то&nbsp;вместо записей со&nbsp;значениями, написанными кириллицей, можно получить последовательность из&nbsp;знаков вопроса: <code>?????????????????</code>. Вызовите эту функцию сразу после успешной установки соединения:&nbsp;<code>mysqli_set_charset($con, "utf8");</code></p>
                    <h2 style="text-align:center;">Выполнение запросов</h2>
                    <p>Установив соединение и&nbsp;определив кодировку мы&nbsp;готовы выполнить свои первые SQL-запросы. Вы&nbsp;уже умеете составлять корректные SQL команды и&nbsp;выполнять их&nbsp;через консольный или визуальный интерфейс MySQL-клиента. Те&nbsp;же самые запросы можно отправлять без изменений и&nbsp;из&nbsp;PHP-сценария. Помогут в&nbsp;этом несколько встроенных функций языка.</p>
                    <h2 style="text-align:center;"><strong>Два вида запросов</strong></h2>
                    <p>Следует разделять все SQL-запросы на&nbsp;две группы:</p>
                    <ol>
                        <li>Чтение информации (SELECT).</li>
                        <li>Модификация (UPDATE, INSERT, DELETE).</li>
                    </ol>
                    <p>При выполнении запросов из&nbsp;среды PHP, запросы из&nbsp;второй группы возвращают только результат их&nbsp;исполнения: успех или ошибку.</p>
                    <p>Запросы первой группы при успешном выполнении возвращают специальный ресурс результата. Его, в&nbsp;свою очередь, можно преобразовать в&nbsp;ассоциативный массив (если нужна одна запись) или в&nbsp;двумерный массив (если требуется список записей).</p>
                    <h2 style="text-align:center;"><strong>Добавление записи</strong></h2>
                    <p>Вернёмся к&nbsp;нашему проекту&nbsp;— дневнику наблюдений за&nbsp;погодой. Начнём практическую работу с&nbsp;заполнения таблиц данными. Для начала добавим хотя&nbsp;бы один город в&nbsp;таблицу <code>cities</code>.</p>
                    <p>Выражение&nbsp;<code>INSERT INTO</code>&nbsp;используется для добавления новых записей в&nbsp;таблицу базы данных.</p>
                    <p>Составим корректный SQL-запрос на&nbsp;вставку записи с&nbsp;именем города, а&nbsp;затем выполним его путём передачи этого запроса в&nbsp;функцию&nbsp;<code>mysqli_query()</code>, чтобы добавить новые данные в&nbsp;таблицу.</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
$link = mysqli_connect("localhost", "root", "");

$sql = 'INSERT INTO cities SET name = "Санкт-Петербург"';
$result = mysqli_query($link, $sql);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Обратите внимание, что первым параметром для функции&nbsp;<code>mysqli_query()</code>&nbsp;передаётся ресурс подключения, полученный от&nbsp;функции&nbsp;<code>mysqli_connect()</code>, вторым параметром следует строка с&nbsp;SQL-запросом.</p>
                    <p>При запросах на&nbsp;изменение данных (не&nbsp;SELECT) результатом выполнения будет логическое значение&nbsp;— <code>true</code> или <code>false</code>, которое будет означать, что запрос выполнить не&nbsp;удалось. Для получения строки с&nbsp;описанием ошибки существует функция&nbsp;<code>mysqli_error($link)</code>.</p>
                    <h2 style="text-align:center;"><strong>Функция insert id: как получить идентификатор добавленной записи</strong></h2>
                    <p>Следующим шагом будет добавление погодной записи для нового города. Погодные записи хранит таблица weather_log, но,&nbsp;чтобы сослаться на&nbsp;город, необходимо знать идентификатор записи из&nbsp;таблицы cities.</p>
                    <p>Здесь пригодится функция&nbsp;<code>mysqli_insert_id()</code>. Она принимает единственный аргумент&nbsp;— ресурс соединения, а&nbsp;возвращает идентификатор последней добавленной записи.</p>
                    <p>Теперь у&nbsp;нас есть всё необходимое, чтобы добавить погодную запись. Вот как будет выглядеть комплексный пример с&nbsp;подключением к&nbsp;MySQL и&nbsp;добавлением двух новых записей:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="php language-php"><code class="language-php hljs" data-highlighted="yes">&lt;?php
$link = mysqli_connect("localhost", "root", "");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    $sql = 'INSERT INTO cities SET name = "Санкт-Петербург"';
    $result = mysqli_query($link, $sql);

    if ($result == false) {
        print("Произошла ошибка при выполнении запроса");
    }
    else {
        $city_id = mysqli_insert_id($link);

        $sql = 'INSERT INTO weather_log SET city_id = ' . $city_id . ', day = "2017-09-03", temperature = 10, cloud = 1';

        $result = mysqli_query($link, $sql);

        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
        }
    }
}
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <h2 style="text-align:center;"><strong>Чтение записей</strong></h2>
                    <p>Другая частая операция при работе с&nbsp;базами данных в&nbsp;PHP&nbsp;— это получение записей из&nbsp;таблиц (запросы типа SELECT). Составим SQL-запрос, который будет использовать&nbsp;<code>SELECT</code>&nbsp;выражение. Затем выполним этот запрос с&nbsp;помощью функции&nbsp;<code>mysqli_query()</code>, чтобы получить данные из&nbsp;таблицы.</p>
                    <p>В&nbsp;этом примере показано, как вывести все существующие города из&nbsp;таблицы <code>cities</code>:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="php language-php"><code class="language-php hljs" data-highlighted="yes">&lt;?php

$sql = 'SELECT id, name FROM cities';

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {
    print("Город: " . $row['name'] . "; Идентификатор: . " . $row['id'] . "&lt;br&gt;");
}
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>В&nbsp;примере выше результат выполнения функции&nbsp;<code>mysqli_query()</code>&nbsp;сохранён в&nbsp;переменной&nbsp;<code>$result</code>. В&nbsp;этой переменной находятся не&nbsp;данные из&nbsp;таблицы, а&nbsp;специальный тип данных&nbsp;— так называемая ссылка на&nbsp;результаты запроса.</p>
                    <p>Чтобы получить действительные данные, то&nbsp;есть записи из&nbsp;таблицы, следует использовать другую функцию&nbsp;—&nbsp;<code>mysqli_fetch_array()</code>&nbsp;— и&nbsp;передать ей&nbsp;единственным параметром эту самую ссылку. Теперь каждый вызов функции <code>mysqli_fetch_array()</code> будет возвращать следующую запись из&nbsp;всего результирующего набора записей в&nbsp;виде ассоциативного массива.</p>
                    <p>Цикл&nbsp;<code>while</code>&nbsp;здесь используется для «прохода» по&nbsp;всем записям из&nbsp;полученного набора записей. Значение поля каждой записи можно узнать просто обратившись по&nbsp;ключу этого ассоциативного массива.</p>
                    <h2 style="text-align:center;"><strong>Как получить сразу все записи в&nbsp;виде двумерного массива</strong></h2>
                    <p>Иногда бывает удобно после запроса на&nbsp;чтение не&nbsp;вызывать в&nbsp;цикле <code>mysqli_fetch_array</code> для извлечения очередной записи по&nbsp;порядку, а&nbsp;получить их&nbsp;сразу все одним вызовом. PHP так тоже умеет.</p>
                    <p>Функция&nbsp;<code>mysqli_fetch_all($res, MYSQLI_ASSOC)</code>&nbsp;вернёт двумерный массив со&nbsp;всеми записями из&nbsp;результата последнего запроса. Перепишем пример с&nbsp;показом существующих городов с&nbsp;её&nbsp;использованием:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre class="php language-php"><code class="language-php hljs" data-highlighted="yes">&lt;?php

$sql = 'SELECT id, name FROM cities';
$result = mysqli_query($link, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC)

foreach ($rows as $row) {
    print("Город: " . $row['name'] . "; Идентификатор: . " . $row['id'] . "&lt;br&gt;");
}
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <h2><strong>Как узнать количество записей</strong></h2>
                    <p>Часто бывает необходимо узнать, сколько всего записей вернёт выполненный SQL-запрос. Это может помочь при организации постраничной навигации или просто в&nbsp;качестве информации. Узнать число записей поможет функция&nbsp;<code>mysqli_num_rows()</code>, которой следует передать ссылку на&nbsp;результат запроса.</p>
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
<a href="sql.php">Предыдущий раздел</a>| <a href="index.html">На главную</a> | <a href="objects.php">Следующий раздел</a>
</div>
<br></br>
</body>