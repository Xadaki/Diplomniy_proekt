<!DOCTYPE html>
<html>
<head>
<title>Синтаксис PHP</title>
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

<h1 style="text-align:center;">Синтаксис PHP</h1>
                    <p>&nbsp;</p>
                    <p>У&nbsp;каждого языка есть правила и&nbsp;конструкции, следуя которым мы&nbsp;выражаем мысли и&nbsp;делаем их&nbsp;понятными для другого человека. В&nbsp;программировании всё точно так&nbsp;же. Но&nbsp;вместо человеческого языка мы&nbsp;используем язык программирования PHP, а&nbsp;в&nbsp;роли нашего собеседника выступает PHP-интерпретатор. Поэтому, чтобы выразить свою мысль, мы&nbsp;должны сделать её&nbsp;понятной для интерпретатора.</p>
                    <h2 style="text-align:center;">Переменные</h2>
                    <p>Это основа любого языка программирования. Во&nbsp;время написания кода мы&nbsp;постоянно будем работать с&nbsp;переменными, понять их&nbsp;концепцию очень просто. Переменная&nbsp;— это контейнер, в&nbsp;котором содержатся данные, так&nbsp;же как напиток содержится в&nbsp;чашке. Любую информацию, которую мы&nbsp;будем использовать в&nbsp;коде, сначала необходимо сохранить в&nbsp;переменной.</p>
                    <p>У&nbsp;переменной обязательно должно быть имя, поэтому переменная всегда состоит из&nbsp;имени и&nbsp;значения. Значение&nbsp;— это любая информация, которая хранится внутри переменной.</p>
                    <p>Например, мы&nbsp;можем попросить посетителя страницы указать свой возраст, а&nbsp;затем использовать это значение для других целей&nbsp;— узнать год рождения или показать возраст самой странице.</p>
                    <h3 style="text-align:center;">Как работать с&nbsp;переменными</h3>
                    <p>Любую переменную следует вначале объявить, то&nbsp;есть дать ей&nbsp;имя и&nbsp;присвоить значение.</p>
                    <p>В&nbsp;синтаксисе PHP имя переменной записывается латинскими символами, но&nbsp;первым символом всегда должен быть знак доллара&nbsp;<code>$</code>, а&nbsp;затем идёт имя.</p>
                    <p>Не&nbsp;допускается начинать имя переменной с&nbsp;цифры, а&nbsp;также использовать любые значения, кроме букв алфавита и&nbsp;знака подчёркивания.</p>
                    <p>Примеры допустимых имён переменных:</p>
                    <figure class="table" style="float:left;">
    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <ul>
                        <li><code>$age</code>;</li>
                        <li><code>$favorite_color</code>;</li>
                        <li><code>$name2</code>.</li>
                    </ul>
                    </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Примеры&nbsp;<i>недопустимых</i>&nbsp;имён:</p>
                    <figure class="table" style="float:left;">
    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <ul>
                        <li><code>age</code>&nbsp;— забыт знак доллара в&nbsp;начале;</li>
                        <li><code>$42</code>&nbsp;— начинается с&nbsp;цифры;</li>
                        <li><code>$my-age</code>&nbsp;— содержит дефис.</li>
                    </ul>
                    </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <h3 style="text-align:center;">Присваивание</h3>
                    <p>Пустая переменная не&nbsp;будет слишком полезна. Поэтому давайте сразу что-нибудь туда поместим. Такое действие называется операцией присваивания.</p>
                    <p>Вот как выглядит присваивание информации в&nbsp;новую переменную: <code>$favorite_color = "green";</code>.</p>
                    <p>Знак «равно» в&nbsp;PHP является&nbsp;<i>оператором</i>&nbsp;и&nbsp;всегда означает операцию присваивания. Здесь мы&nbsp;записали слово green в&nbsp;переменную под именем&nbsp;<code>favorite_color</code>.</p>
                    <p>Обратите внимание: мы&nbsp;взяли в&nbsp;кавычки слово green. Кавычки всегда строго необходимы, если речь идёт об&nbsp;использовании текста. Но&nbsp;если в&nbsp;переменную помещается не&nbsp;текст, а&nbsp;число, то&nbsp;кавычки не&nbsp;нужны.</p>
                    <p>Пример: <code>$favorite_number = 42;</code></p>
                    <h3 style="text-align:center;">Использование</h3>
                    <p>Мы&nbsp;научились сохранять информацию в&nbsp;переменных. Теперь посмотрим, как получить доступ к&nbsp;этой информации в&nbsp;нашем сценарии.</p>
                    <p>Ведь когда мы&nbsp;пытаемся запомнить в&nbsp;голове новый телефонный номер, то&nbsp;делаем это, чтобы на&nbsp;него позвонить.</p>
                    <p>Это значит, что мы&nbsp;запоминаем информацию с&nbsp;целью вернуться к&nbsp;ней в&nbsp;дальнейшем и&nbsp;применить для какого-то&nbsp;действия&nbsp;— совершить звонок, написать сообщение и&nbsp;тому подобное.</p>
                    <p>Эта логика полностью работает и&nbsp;в&nbsp;программировании. Информацию, сохранённую однажды,&nbsp; можно использовать в&nbsp;дальнейшем для выполнения различных действий. Таким действием может быть вывод этой информации на&nbsp;экран.</p>
                    <p>Перепишем уже знакомый сценарий так, чтобы в&nbsp;нём использовались переменные.</p>
                    <figure class="table" style="float:left;">
    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre><code class="language-plaintext">&lt;?php
$welcome_text = "Привет, мир";
print($welcome_text);
</code></pre>
</td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Теперь этот простой сценарий состоит из&nbsp;двух шагов. На&nbsp;первом мы&nbsp;объявляем (инициализируем) новую переменную и&nbsp;помещаем туда текст. На&nbsp;втором шаге мы&nbsp;используем эту переменную, обращаясь к&nbsp;ней по&nbsp;имени в&nbsp;контексте вызова функции вывода на&nbsp;экран. То&nbsp;есть теперь функция&nbsp;<code>print</code>&nbsp;получает не&nbsp;текст напрямую, а&nbsp;переменную, которая содержит этот текст.</p>
                    <h3 style="text-align:center;">Конкатенация</h3>
                    <p>Этим страшным словом называется операция склеивания нескольких строк в&nbsp;одну. Предположим, у&nbsp;нас есть две уже знакомые переменные:&nbsp;<code>$favorite_color</code>&nbsp;и&nbsp;<code>$favorite_number</code>, а&nbsp;мы&nbsp;собираемся вывести их&nbsp;в&nbsp;одной строке, чтобы получить такой результат:</p>
                    <ul>
                        <li>“<i>Мой любимый цвет&nbsp;— зелёный, а&nbsp;любимое число&nbsp;— 42</i>”</li>
                    </ul>
                    <p>где значение цвета хранится в&nbsp;<code>$favorite_color</code>, а&nbsp;числа в&nbsp;<code>$favorite_number</code>.</p>
                    <p>Чтобы получить такую строку, необходимо использовать оператор конкатенации&nbsp;—&nbsp;<code>.</code>&nbsp;(точка). В&nbsp;качестве операндов он&nbsp;берёт две строки или переменные, содержащие строку, а&nbsp;затем возвращает новую строку.</p>
                    <p>Выглядит это так:</p>
                    <figure class="table" style="float:left;">
    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre><code class="language-plaintext">&lt;?php
$united_string = "Мой любимый цвет - " . $favorite_color . ", а любимое число - " . $favorite_number;
print($united_string);
</code></pre>
</td>
            </tr>
        </tbody>
    </table>
</figure>
                    <h3>Типы данных</h3>
                    <p>Выше уже упоминалось, что данные, помещённые в&nbsp;переменную, могут быть строкой текста или числом. В&nbsp;действительности таких типов данных гораздо больше, но&nbsp;первое время мы&nbsp;будем работать только с&nbsp;несколькими. Однако нам всё равно важно уже сейчас понимать, что такое «типы данных».</p>
                    <p>Тип данных в&nbsp;языке программирования определяет допустимые значения, а&nbsp;также допустимые операции с&nbsp;данными этого типа.</p>
                    <p>Например, с&nbsp;данными типа «целое число» допускается выполнять арифметические операции, а&nbsp;с&nbsp;данными типа «строка»&nbsp;— нет. Поделить строку на&nbsp;строку невозможно. Кроме того, числа могут быть только в&nbsp;определённых пределах (в&nbsp;версии PHP для 32-битной ОС, самое большое число: 2147483647), а&nbsp;строки обязательно должны находиться в&nbsp;кавычках.</p>
                    <h2>Операторы</h2>
                    <p>Оператором в&nbsp;программировании называется нечто, принимающее одно или более значений.</p>
                    <p>Например, в&nbsp;арифметике есть такие операторы: +, -, /, *. Что означает сложение, вычитание, деление и&nbsp;умножение. Оператор всегда работает только в&nbsp;паре с&nbsp;двумя значениями, например, складывает два числа (операнда) или умножает их&nbsp;друг на&nbsp;друга.</p>
                    <p>PHP дополняет уже знакомые нам из&nbsp;арифметики операторы, несколькими новыми:</p>
                    <ul>
                        <li>уже знакомый оператор присваивания&nbsp;<code>=</code>, который используется для присваивания значения переменной;</li>
                        <li>очень полезны операторы сравнения:&nbsp;<code>==</code>,&nbsp;<code>!=</code>,&nbsp;<code>&gt;</code>,&nbsp;<code>&lt;</code>&nbsp;— равно, не&nbsp;равно, больше и&nbsp;меньше;</li>
                        <li><code>%</code>&nbsp;—&nbsp;оператор остатка от&nbsp;деления одного числа на&nbsp;другое. Например:&nbsp;<code>5 % 2 == 1; // true</code>.</li>
                    </ul>
                    <h3>Условные конструкции</h3>
                    <p>Иногда, в&nbsp;зависимости от&nbsp;условия, нужно выполнять различные действия. Для этого используется оператор&nbsp;<code>if</code>. Например, мы&nbsp;спросили пол посетителя страницы, сохранили его в&nbsp;переменную, а&nbsp;теперь хотим вывести разное приветствие, в&nbsp;зависимости от&nbsp;того, мужчина это или женщина. Здесь пригодятся операторы&nbsp;<code>if</code>&nbsp;и&nbsp;<code>else</code>.</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre><code class="language-plaintext">&lt;?php
if ($gender == "мужчина") {
    print("Приветствую тебя, мой Господин!");
} else {
    print("Приветствую тебя, о Госпожа!");
}
</code></pre>
</td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Из&nbsp;примера видно, что условная конструкция состоит из&nbsp;трёх частей:</p>
                    <ul>
                        <li>условие <code>if</code>&nbsp;— выражение, которое возвращает истинный или ложный результат;</li>
                        <li>блок <code>if</code>&nbsp;— строки кода, которые будут выполнены, если условие вернуло истину;</li>
                        <li>блок <code>else</code>&nbsp;— строки кода, которые будут выполнены, если условие вернуло ложь.</li>
                    </ul>
                    <p>Обратите внимание, что каждый блок обрамляется и&nbsp;ограничивается фигурными скобками.</p>
                    <h3>Выражения</h3>
                    <p>Выражение в&nbsp;языке программирования&nbsp;— это минимальный блок кода, имеющий значение (результат). Звучит несколько сложно, но&nbsp;на&nbsp;практике почти каждая строка сценария является выражением. Вот несколько примеров выражений:</p>
                    <ul>
                        <li><code>$amount = 2 + 2;</code></li>
                        <li><code>2 &gt; 3</code></li>
                        <li><code>$gender == "мужчина"</code></li>
                    </ul>
                    <p>Важно усвоить одно главное свойство выражений&nbsp;— они всегда имеют результат. Также различают два типа выражений: логические и&nbsp;арифметические. Результатом выполнения логического выражения всегда будет истина или ложь.</p>
                    <p>Например, результатом выражения&nbsp;<code>2 &gt; 3</code>&nbsp;будет «ложь», потому что два, очевидно, меньше трёх.</p>
                    <p>Другим видом выражений является арифметическое выражение. Результатом выражения&nbsp;<code>$amount = 2 + 2</code>&nbsp;будет&nbsp;4.</p>
                    <p>В&nbsp;каких случаях может понадобиться знать результат выражения?</p>
                    <p>Выражения особенно полезны в&nbsp;условиях, то&nbsp;есть когда мы&nbsp;хотим выполнить или не&nbsp;выполнять какое-либо действие, в&nbsp;зависимости от&nbsp;результата выражения. Их&nbsp;также можно объединять между собой таким образом, что несколько отдельных выражений в&nbsp;итоге вычисляются как одно.</p>
                    <p>Предположим, что на&nbsp;нашем сайте мы&nbsp;хотим показать определённую картинку только посетителям мужского пола и&nbsp;старше 18&nbsp;лет. Ранее, в&nbsp;коде сценария, мы&nbsp;уже получили и&nbsp;сохранили год рождения и&nbsp;пол посетителя в&nbsp;переменные&nbsp;<code>$age</code>&nbsp;и&nbsp;<code>$gender</code>.</p>
                    <p>Напишем выражение и&nbsp;условие для реализации такого поведения:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre><code class="language-plaintext">&lt;?php
if ($gender == "мужчина" and $age &gt; 17) {
    print("&lt;img src='/xxx.jpg'&gt;");
}
</code></pre>
</td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Обратите внимание на&nbsp;ключевое слово&nbsp;<i>and</i>&nbsp;— это оператор, который объединяет два отдельных выражения в&nbsp;одно новое. Это новое выражение будет иметь значение «истина», только если оба отдельных выражений будут истинны.</p>
                    <p>Иными словами, наше условие будет выполняться только для посетителей мужского пола и&nbsp;возрастом старше восемнадцати. То&nbsp;есть несовершеннолетние мальчики, равно как и&nbsp;несовершеннолетние девочки никакой картинки не&nbsp;увидят.</p>
                    <h2>Понятие алгоритма</h2>
                    <p>Многие из&nbsp;нас что-то слышали про алгоритмы на&nbsp;уроках информатики в&nbsp;школе. К&nbsp;сожалению, далеко не&nbsp;все школьные знания остаются с&nbsp;нами после её&nbsp;окончания. Тем не&nbsp;менее понимание, что такое алгоритмы, и&nbsp;умение их&nbsp;строить&nbsp;— это очень важные навыки, без которых не&nbsp;получится решать даже относительно простые задачи.</p>
                    <p>Если говорить простыми словами, то&nbsp;алгоритм&nbsp;— это просто очень подробный план работы. Мы&nbsp;все в&nbsp;течение жизни что-нибудь планируем: отпуск, какое-нибудь мероприятие, своё самостоятельное обучение и&nbsp;тому подобное. От&nbsp;простого списка шагов алгоритм отличает существование условий и&nbsp;повторяющихся действий. Если вы&nbsp;в&nbsp;состоянии создать хороший, подробный алгоритм для реализации, скажем, какой-нибудь возможности на&nbsp;сайте, то&nbsp;можно считать, что половина дела уже сделана!</p>
                    <p>Разберём для примера один алгоритм средней сложности. На&nbsp;сайт нужно добавить форму обратной связи. Пользователь может заполнить эту форму, указать там свои контактные данные и&nbsp;написать сообщение. Информация из&nbsp;заполненной формы отправляется на&nbsp;электронную почту владельцу сайта. Вот как будет выглядеть алгоритм для этой задачи:</p>
                    <ol>
                        <li>Показать форму.</li>
                        <li>Проверить, что форма отправлена.</li>
                        <li>Составить список полей формы, обязательных для заполнения.</li>
                        <li>Для каждого поля из&nbsp;списка проверить, что оно заполнено.</li>
                        <li>Если поле не&nbsp;заполнено, показать ошибку и&nbsp;не&nbsp;отправлять форму.</li>
                        <li>Если все поля заполнены, сформировать сообщение электронной почты.</li>
                        <li>Отправить сообщение на&nbsp;адрес администратора сайта.</li>
                    </ol>
                    <h3>Конфигурация PHP</h3>
                    <p>Большинство программ всегда имеют отдельное окно настроек, где можно указать все основные параметры этого приложения. В&nbsp;PHP тоже есть свои настройки, только меняются они не&nbsp;через интерфейс, а&nbsp;путём редактирования специального файла&nbsp;— <code>php.ini</code>. В&nbsp;файле <code>php.ini</code> задаются все настройки работы&nbsp;PHP. Из&nbsp;того, что нас будет интересовать в&nbsp;первую очередь&nbsp;— это режим управления ошибками, подключение дополнительных возможностей, настройки сессий и&nbsp;кук.</p>
                    <p>В&nbsp;разных&nbsp;ОС&nbsp;этот файл находится по&nbsp;разным путям. Проще всего пользователям сборки OpenServer&nbsp;— там <code>php.ini</code> можно открыть из&nbsp;главного меню.</p>

</tr></td>
</table>
<br></br>
<br></br>
<br></br>

<div align="center">
<a href="basic-concepts.php">Предыдущий раздел</a>| <a href="index.html">На главную</a> | <a href="language-constructs.php">Следующий раздел</a>
</div>
<br></br>


</body>