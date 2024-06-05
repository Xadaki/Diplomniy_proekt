<!DOCTYPE html>
<html>
<head>
<title>Базовые конструкции языка</title>
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
                    <h1 class="post-info__title" style="text-align:center;">Массивы в PHP</h1>
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
                    <p>Массив&nbsp;— это ещё один тип данных, вроде числа или строки. Главное отличие массива от&nbsp;остальных типов данных заключается в&nbsp;его способности хранить в&nbsp;переменной больше одного значения. В&nbsp;предыдущих примерах имя переменной всегда ассоциировалось только с&nbsp;одним значением:</p>
                    <ul>
                        <li><code>$name = "Иннокентий"</code></li>
                        <li><code>$age = 42</code></li>
                    </ul>
                    <p>А&nbsp;если мы&nbsp;хотим узнать не&nbsp;только пол, имя и&nbsp;возраст пользователя, но&nbsp;и, допустим, любимые сериалы? Очень непросто назвать один самый любимый сериал, а&nbsp;вот вспомнить несколько&nbsp;— намного легче. Сохранение в&nbsp;переменную-массив нескольких значений выглядит так:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="css language-css"><code class="language-css hljs" data-highlighted="yes">&nbsp;$fav_shows = ["game of thrones", "american horror story", "walking dead"];
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>В&nbsp;этом примере мы&nbsp;сохранили в&nbsp;переменной&nbsp;<code>$fav_shows</code>&nbsp;сразу три значения. Но&nbsp;сохранить эти данные&nbsp;— это только половина дела. Как с&nbsp;ними потом работать? Уже знакомый вам способ вывода переменной на&nbsp;экран не&nbsp;будет работать с&nbsp;массивами:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="php language-php"><code class="language-php hljs" data-highlighted="yes">&lt;?php
print("Мои любимые сериалы: " . $fav_shows);
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Так увидеть список любимых сериалов не&nbsp;получится. Дело в&nbsp;том, что массив&nbsp;— это не&nbsp;обычная переменная. Массив хранит не&nbsp;простые типы, вроде текста или чисел (их&nbsp;ещё называют «скалярными типами»), а&nbsp;более сложную структуру данных, поэтому здесь нужен особый подход.</p>
                    <p>Внутри массива у&nbsp;каждого значения есть адрес, по&nbsp;которому к&nbsp;нему можно обратиться. Такой адрес называется индексом. Индекс&nbsp;— это просто порядковый номер значения внутри массива. Индексация начинается с&nbsp;нуля, так что первый элемент получает индекс&nbsp;— <code>0</code>, второй&nbsp;— <code>1</code>, и&nbsp;так далее.</p>
                    <p>Чтобы получить определенный элемент массива, необходимо знать его индекс (ключ). Напечатаем названия всех сериалов из&nbsp;массива через запятую:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="php language-php"><code class="language-php hljs" data-highlighted="yes">&lt;?php
print("Мои любимые сериалы: " . $fav_shows[0] . ", " . $fav_shows[1] . ", " . $fav_shows[2]);?&gt;
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Теперь можно дать определение массива: <i>Массив&nbsp;— это совокупность множества элементов вида «ключ: значение».</i></p>
                    <p>Массивы позволяют перезаписывать существующие значения и&nbsp;добавлять новые. Добавить новое значение в&nbsp;массив можно так:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="php language-php"><code class="language-php hljs" data-highlighted="yes">$fav_shows[] = "the big bang theory";
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Новый элемент автоматически получит индекс равный максимальному индексу из&nbsp;существующих + 1. «Теория большого взрыва» сохранится в&nbsp;массиве под индексом <code>3</code>.</p>
                    <p>Если нам перестал нравиться один из&nbsp;сериалов, так как новый сезон оказался очень плох или появился новый фаворит, значения в&nbsp;массиве можно заменить. Чтобы вычеркнуть старое значение и&nbsp;заменить его новым, нужно присвоить новое значение любому из&nbsp;существующих в&nbsp;массиве индексов:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="php language-php"><code class="language-php hljs" data-highlighted="yes">$fav_shows[4] = "fargo";
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Для полного удаления (без замены на&nbsp;другое) значения по&nbsp;его индексу существует функция&nbsp;<code>unset</code>:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="php language-php"><code class="language-php hljs" data-highlighted="yes">unset($fav_shows[4]);
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <h2 style="text-align:center;"><strong>Ассоциативные массивы</strong></h2>
                    <p>В&nbsp;предыдущем разделе мы&nbsp;познакомились с&nbsp;так называемыми простыми массивами. Но&nbsp;в&nbsp;PHP существует и&nbsp;чуть более сложный тип массивов&nbsp;— ассоциативные. Ассоциативные массивы отличаются от&nbsp;простых тем, что вместо индексов у&nbsp;них ключи. Если индекс всегда является целым, порядковым числом, то&nbsp;ключ может быть любой произвольной строкой.</p>
                    <p>Мы&nbsp;уже знаем многое о&nbsp;нашем пользователе: его имя, возраст, любимый цвет и&nbsp;сериалы. Есть только одно неудобство: все эти данные сейчас находятся в&nbsp;разных переменных. Было&nbsp;бы удобно хранить все эти данные в&nbsp;одном месте, и&nbsp;именно в&nbsp;таких ситуациях помогают ассоциативные массивы.</p>
                    <p>Запись всей информации о&nbsp;пользователе с&nbsp;помощью ассоциативного массива:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="php language-php"><code class="language-php hljs" data-highlighted="yes">&lt;?php
$user = ['age' =&gt; 42, 'name' =&gt; 'Иннокентий', 'fav_shows' =&gt; ["game of thrones", "american horror story", "walking dead"] ];
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <p>Обратите внимание: массив может содержать другой массив в&nbsp;качестве одного из&nbsp;значений. В&nbsp;нашем примере мы&nbsp;поместили простой массив внутри ассоциативного под ключом <code>fav_shows</code>.</p>
                    <p>Вывод информации из&nbsp;ассоциативных массивов аналогичен простым массивам. Показ всей информации о&nbsp;пользователе из&nbsp;переменной&nbsp;<code>$user</code>:</p>
                    <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="php language-php"><code class="language-php hljs" data-highlighted="yes">&lt;?php
print("Имя: " . $user['name'] . " Возраст: " . $user['age'] . "
Любимые сериалы: "  . $user['fav_shows'][0] . ", " . $user['fav_shows'][1] . ", " . $user['fav_shows'][2]);
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                    <div class="blog-section blog-section--post-info blog-section--fullwidth">
                        <div class="blog-section__wrap">
                            <div class="blog-section__content">
                                <div class="blog-section__wrap-inner">
                                    <div class="post-info post-info--fullwidth">
                                        <h1 class="post-info__title" style="text-align:center;">Циклы в PHP</h1>
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
                                        <p>Цикл&nbsp;— это конструкция языка, которая выполняет блок кода больше одного раза.</p>
                                        <p>Мы&nbsp;привыкли, что сценарии выполняются линейно: сверху вниз, строчка за&nbsp;строчкой. Но&nbsp;что делать, если надо повторить какую-нибудь инструкцию несколько&nbsp;раз? Например, как вывести на&nbsp;экран натуральные числа от&nbsp;1 до&nbsp;9?</p>
                                        <p>Есть очевидный способ:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
print(1);
print(2);
print(3);
// и так далее...

</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>Но&nbsp;он&nbsp;заставляет писать много кода. И&nbsp;что если требуется вывести последовательность из&nbsp;миллиона чисел? Ещё бывают ситуации, когда заранее неизвестно сколько раз нужно выполнить определённую инструкцию.</p>
                                        <p>Использование циклов значительно упрощает и&nbsp;укорачивает&nbsp;код. Циклы незаменимы в&nbsp;ситуациях, когда заранее неизвестно сколько раз должен выполниться блок кода. Такое число зависит от&nbsp;множества условий и&nbsp;вычисляется в&nbsp;момент выполнения сценария.</p>
                                        <p>Так выглядит цикл в&nbsp;PHP:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
while (&lt;условие цикла&gt;) {
&lt;тело цикла&gt;
}
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <h2 style="text-align:center;">Использование выражений в&nbsp;циклах</h2>
                                        <p>В&nbsp;прошлой главе вы&nbsp;познакомились с&nbsp;понятием выражения и&nbsp;его истинностью.</p>
                                        <p>Выражение часто используется в&nbsp;циклах, оно помещается на&nbsp;место <code>&lt;условие цикла=""&gt;</code> и&nbsp;определяет, будет&nbsp;ли исполнен блок кода&nbsp;— <code>&lt;тело цикла=""&gt;.</code></p>
                                        <p>Если выражение из&nbsp;условия цикла возвращает истину, то&nbsp;выполнение сразу перейдёт к&nbsp;блоку «тело цикла». Если&nbsp;же оно вернёт ложь, то&nbsp;тело цикла не&nbsp;будет исполнено. Сценарий продолжит выполняться, как обычно, со&nbsp;следующей строки после цикла.</p>
                                        <p>Название «циклы» отражает суть их&nbsp;действия&nbsp;— они «зацикливают» линейное исполнение на&nbsp;своём блоке кода и&nbsp;не&nbsp;дают сценарию выполняться дальше, пока условие цикла будет истинным.</p>
                                        <div class="post-highlighted-text">
                                            <p>&nbsp; &nbsp; &nbsp;Последовательность исполнения кода при использовании циклов:</p>
                                            <ol>
                                                <li>Обычное исполнение кода, строчка за&nbsp;строчкой, пока не&nbsp;встретился цикл.</li>
                                                <li>Встретился цикл: выполняем условие цикла.</li>
                                                <li>Если условие вернуло ложь: выходим из&nbsp;цикла, выполняем строчку после цикла и&nbsp;продолжаем линейное исполнение.</li>
                                                <li>Если условие вернуло истину: выполняем всё тело цикла.</li>
                                                <li>Повторяем пункт 2.</li>
                                            </ol>
                                        </div>
                                        <p>Каждая последовательность из&nbsp;шагов 2&nbsp;— 4, то&nbsp;есть очередное выполнение кода в&nbsp;теле цикла&nbsp;— называется&nbsp;<i>итерацией</i>.</p>
                                        <p>Количество итераций должно быть конечным, бесконечное выполнение одного блока кода не&nbsp;входит в&nbsp;наши планы.</p>
                                        <p>А&nbsp;значит, необходимо заранее предусмотреть ситуацию, когда истинное условие станет ложным.</p>
                                        <p>Теперь вернёмся к&nbsp;задаче по&nbsp;выводу на&nbsp;экран всех натуральных чисел:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
$last_num = 1;

while ($last_num &lt; 10) {
    print($last_num);
    $last_num = $last_num + 1;
}
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>Этот цикл в&nbsp;своём теле содержит две инструкции. Первая выводит на&nbsp;экран цифру из&nbsp;переменной. Вторая инструкция увеличивает значение переменной на&nbsp;единицу. Сколько раз будет исполнен такой цикл?</p>
                                        <p>Циклы выполняются, пока их&nbsp;условие остаётся истинным, а&nbsp;в&nbsp;нашем условии значение переменной должно быть меньше десяти. Так как начальное значение переменной&nbsp;— единица, то&nbsp;несложно посчитать, что цикл выполнится ровно девять&nbsp;раз. На&nbsp;десятый раз значение переменной&nbsp;<code>$last_num</code>&nbsp;станет равно десяти и&nbsp;условие&nbsp;<code>$last_num &lt; 10</code>&nbsp;перестанет быть истинным.</p>
                                        <h1 style="text-align:center;"><strong>Циклы и&nbsp;массивы</strong></h1>
                                        <p>Чаще всего циклы используются для работы с&nbsp;массивами&nbsp;— для перечисления всех элементов массива и&nbsp;выполнения какого-нибудь действия с&nbsp;каждым из&nbsp;этих элементов. Умение использовать циклы и&nbsp;массивы совместно позволяет выполнять множество интересных и&nbsp;разнообразных задач!</p>
                                        <p>Мы&nbsp;уже научились работать с&nbsp;массивами. Например, мы&nbsp;можем показать все значения массива, обратившись к&nbsp;каждому из&nbsp;элементов по&nbsp;его индексу. Но&nbsp;это утомительно: обращаться к&nbsp;каждому из&nbsp;элементов массива по&nbsp;очереди, когда мы&nbsp;хотим показать все его значения.</p>
                                        <p>С&nbsp;помощью циклов показывают содержимое любого массива, и&nbsp;это требует всего несколько строк кода!</p>
                                        <p>Перепишем пример с&nbsp;выводом списка любимых сериалов, задействовав цикл:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
$fav_shows = ["game of thrones", "american horror storry", "walking dead"];
$cur_index = 0;

while ($cur_index &lt; 3) {
    print($fav_shows[$cur_index] . ", ");
    $cur_index = $cur_index + 1;
}

</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>В&nbsp;этом примере цикл выводит элемент по&nbsp;индексу. Индекс теперь находится в&nbsp;переменной&nbsp;<code>$cur_index</code>&nbsp;и&nbsp;начальное значение у&nbsp;него ноль. Значение переменной увеличивается на&nbsp;единицу с&nbsp;каждой итерацией цикла, пока не&nbsp;достигнет трёх. В&nbsp;этот момент условие&nbsp;<code>$cur_index &lt; 3</code>&nbsp;перестанет быть истинным и&nbsp;цикл остановится, перебрав весь массив.</p>
                                        <h2 style="text-align:center;">foreach&nbsp;— специальный цикл для массивов</h2>
                                        <p>Циклы в&nbsp;PHP могут быть разных типов. Выше мы&nbsp;познакомились с&nbsp;циклом типа&nbsp;<code>while</code>. Его главная особенность&nbsp;— необходимо указывать выражение в&nbsp;его условии. Но&nbsp;<code>while</code>&nbsp;не&nbsp;единственный вид циклов в&nbsp;PHP. Есть ещё как минимум два других.</p>
                                        <p>Массивы и&nbsp;циклы так часто используются вместе, что разработчики языка даже добавили вид цикла специально для перебора массивов. Цикл называется&nbsp;<code>foreach</code>. Зачем понадобилось придумывать этот&nbsp;цикл?</p>
                                        <p>Дело в&nbsp;том, что&nbsp;<code>while</code>&nbsp;слишком универсален. А&nbsp;платой за&nbsp;эту универсальность всегда будет более сложный и&nbsp;объёмный&nbsp;код. Приходится придумывать условие, следить, чтобы оно не&nbsp;было бесконечным. А&nbsp;в&nbsp;теле цикла обязательно надо не&nbsp;забыть увеличивать переменную-счётчик. И&nbsp;всё это нужно для простого перебора элементов массива. Неужели нельзя сделать проще?</p>
                                        <p>&nbsp; &nbsp; &nbsp; &nbsp;<code>foreach</code>&nbsp;решает все эти проблемы. Его возможности:</p>
                                        <ul>
                                            <li><strong>не&nbsp;требуется писать условие</strong>;</li>
                                            <li>позволяет получать ключи массива;</li>
                                            <li>сам присваивает очередной элемент массива переменной.</li>
                                        </ul>
                                        <p>Цикл&nbsp;<code>foreach</code>&nbsp;незаменим, когда дело доходит до&nbsp;итерации по&nbsp;ассоциативным массивам. Например: у&nbsp;нас есть данные пользователя, которые хранятся в&nbsp;ассоциативном массиве. На&nbsp;сайте понадобилось сделать страницу с&nbsp;информацией об&nbsp;этом юзере. Задача в&nbsp;том, чтобы показать на&nbsp;странице все данные, которые известны об&nbsp;этом человеке. Выглядеть это должно так:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">Имя: Евгений
Возраст: 27
Род занятий: Программист
</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>Оригинальный массив, который надо показать в&nbsp;таком виде:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">$user = [
    'Имя' =&gt; 'Евгений',
    'Возраст' =&gt; '27',
    'Род занятий' =&gt; 'Программист'
];

</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>Код сценария, который обойдёт массив и&nbsp;покажет всё его содержимое, займёт всего четыре&nbsp;строчки:</p>
                                        <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">foreach ($user as $key =&gt; $value) {
    print($key . ': ');
    print($value . '&lt;br&gt;');
}

</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                        <p>На&nbsp;каждой итерации цикла внутри его тела будут определяться переменные&nbsp;<code>$key</code>&nbsp;и&nbsp;<code>$value</code>. В&nbsp;первую будет попадать очередной ключ массива, а&nbsp;во&nbsp;вторую&nbsp;— очередное значение по&nbsp;этому ключу.</p>
                                        <div class="blog-section blog-section--post-info blog-section--fullwidth">
                                            <div class="blog-section__wrap">
                                                <div class="blog-section__content">
                                                    <div class="blog-section__wrap-inner">
                                                        <div class="post-info post-info--fullwidth">
                                                            <h1 class="post-info__title" style="text-align:center;">Функции в PHP</h1>
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
                                                            <p>Функция&nbsp;— это блок кода, который может быть именован и&nbsp;вызван повторно. Иногда функцию ещё называют&nbsp;<i>подпрограммой</i>.</p>
                                                            <p>Обычной переменной присваивают число, строку или массив, а&nbsp;затем получают его обратно, обратившись к&nbsp;значению по&nbsp;имени переменной. Функции устроены похожим образом. Это тоже переменная, только вместо строки или числа в&nbsp;функции хранится блок кода, который вызывается при использовании этой «переменной».</p>
                                                            <p>Функция&nbsp;— очень мощный инструмент повторного использования кода. Создав свою функцию и&nbsp;записав туда необходимый код, вы&nbsp;сможете вызывать и&nbsp;использовать его столько раз, сколько необходимо. В&nbsp;противном случае пришлось&nbsp;бы копировать и&nbsp;вставлять фрагмент кода каждый раз, когда он&nbsp;понадобится.</p>
                                                            <p>Чтобы упростить себе работу, оформите в&nbsp;виде функции часть кода, используемую в&nbsp;сценарии несколько&nbsp;раз. Затем, вместо копирования и&nbsp;вставки этой части, нужно будет только вызывать функцию, как если&nbsp;бы мы&nbsp;обращались к&nbsp;переменной.</p>
                                                            <h3 style="text-align:center;">Типы функций</h3>
                                                            <p>Разделяют два типа функций&nbsp;—&nbsp;<strong>встроенные</strong>&nbsp;и&nbsp;<strong>пользовательские</strong>.</p>
                                                            <p><strong>Встроенные</strong>&nbsp;функции&nbsp;— функции, которые за&nbsp;нас уже написали создатели языка программирования, можем просто брать их&nbsp;и&nbsp;использовать. В&nbsp;PHP существуют тысячи готовых функций на&nbsp;все случаи жизни!</p>
                                                            <p>Одна из&nbsp;хорошо знакомых функций&nbsp;— функция, которая выводит переданный ей&nbsp;текст на&nbsp;экран&nbsp;—&nbsp;<code>print()</code>.</p>
                                                            <p><strong>Пользовательские функции</strong>&nbsp;программист создаёт самостоятельно. Эти функции используются только внутри одного проекта или сценария.</p>
                                                            <h2 style="text-align:center;">Анатомия функций</h2>
                                                            <p>Работа с&nbsp;функциями состоит из&nbsp;объявления и&nbsp;использования.</p>
                                                            <p>Перед тем как использовать новую функцию, следует её&nbsp;объявить:</p>
                                                            <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
function &lt;имя функции&gt;(&lt;аргумент функции&gt;) {
    &lt;тело функции&gt;
    return &lt;результат выполнения функции&gt;;
}</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                                            <p>Пояснить все составные части функции проще всего на&nbsp;примере.</p>
                                                            <p>Допустим, на&nbsp;своём сайте мы&nbsp;хотим показывать, является&nbsp;ли выбранный пользователем год високосным. Для этого напишем функцию, в&nbsp;которую передаётся&nbsp;год. В&nbsp;результате работы функции мы&nbsp;хотим получить значение «истина», если год високосный, и&nbsp;«ложь»&nbsp;— если нет.</p>
                                                            <p>Определение такой функции:</p>
                                                            <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
function is_leap_year($year) {
    if ($year % 4 != 0) {
        return false;
    }
    elseif ($year % 100 == 0) {
        if ($year % 400 == 0) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return true;
    }
}</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                                            <p>Пример использования функции:</p>
                                                            <table style="background-color:hsl( 54, 100%, 94% );border:0px solid hsl(0, 0%, 100%);">
        <tbody>
            <tr>
                <td>
                    <pre> class="text language-text"><code class="language-plaintext hljs" data-highlighted="yes">&lt;?php
$year = 2034;

if (!is_leap_year($year)) {
    print("2034 год - простой");
}
else {
    print ("2034 год - високосный");
}</code></pre>
                </td>
            </tr>
        </tbody>
    </table>
</figure>
                                                            <h2 style="text-align:center;">Аргументы функции и&nbsp;область видимости</h2>
                                                            <p>Наша функция умеет вычислять, является&nbsp;ли переданный год високосным.</p>
                                                            <p>Так как функция&nbsp;— это программа в&nbsp;программе, то&nbsp;внутри неё не&nbsp;будут доступны переменные, которые определялись за&nbsp;её&nbsp;пределами. Чтобы передать внутрь функции информацию извне, нужно использовать аргументы функции.</p>
                                                            <p><i>Аргументы функции</i>&nbsp;— это переменные, которые функция может получить из&nbsp;внешнего кода. В&nbsp;примере с&nbsp;<code>is_leap_year</code>&nbsp;такая переменная была только одна&nbsp;—&nbsp;<code>$year</code>.</p>
                                                            <p>Верно и&nbsp;обратное&nbsp;— переменные, определённые внутри функции, не&nbsp;будут доступны извне. Такие переменные называются локальными, потому что они локальны по&nbsp;отношению к&nbsp;функции.</p>
                                                            <p>В&nbsp;отличие от&nbsp;аргументов, которых может быть несколько, вернуть во&nbsp;внешний код функция может только одно значение&nbsp;— с&nbsp;помощью инструкции return (возврат). Возвращаемое значение называют результатом работы функции.</p>
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
                    <div id="page-end">&nbsp;</div>
                </div>
                <p>&nbsp;</p>
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
<a href="syntax.php">Предыдущий раздел</a>| <a href="index.html">На главную</a> | <a href="http-protocol.php">Следующий раздел</a>
</div>
<br></br>

</body>