@extends('layout.app')
@section('title', 'История борьбы - Клуб "АТЛАНТ" Греко-римская борьба в Ростове-на-Дону')
@section('content')
    <header>
        @include('partials.header')
    </header>

    <main>
        <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
              <div class="flex flex-col justify-center">
                <div class="max-w-xl mb-6">
                  <h2 class="max-w-lg mb-6 text-3xl font-bold tracking-tight text-black sm:text-4xl sm:leading-none">
                    Греко-римская борьба
                  </h2>
                    <p class="text-regular text-black">
                        <strong>Греко-римская борьба</strong> (до второй пол. 1940-х гг. была известна в России как «<strong>французская борьба</strong>», после — «<strong>классическая борьба</strong>», «<strong>спортивная борьба греко-римского стиля</strong>») — европейский вид борьбы, в котором спортсмен посредством определённого арсенала технических действий (приёмов) пытается вывести соперника из равновесия и прижать лопатками к ковру. В греко-римской борьбе, в отличие от вольной, запрещены технические действия ногами (зацепы, подножки, подсечки) и захваты ног руками. Классическая борьба родилась в Древней Греции и получила развитие в Римской империи, а современный, возрождённый вид греко-римской борьбы сформировался во Франции в первой половине XIX века, отсюда и его название до середины XX века.
                    </p>
                    <br>
                    <p class="text-regular text-black">
                        Борьба вошла в программу современных олимпийских игр на первой олимпиаде в Афинах в 1896 году. На следующих олимпийских играх 1900 года соревнования по борьбе не проводились, но начиная с 1904 года борьба входила в программу каждых летних олимпийских игр. С 1898 года проводятся чемпионаты Европы, с 1904 года — чемпионаты мира. В Международной федерации борьбы — ФИЛА (FILA; основана в 1912 году) состоит свыше 120 стран (1997).
                    </p>
                    <br>
                    <p class="text-regular text-black">
                        Международной федерацией борьбы величайшим борцом греко-римского стиля XX века был признан российский спортсмен Александр Карелин, являющийся 3-кратным олимпийским чемпионом, 9-кратным чемпионом мира, 12-кратным чемпионом Европы и 13-кратным чемпионом СССР и России.
                    </p>
                  </p>
                </div>
              </div>
              <div>
                <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96 mb-5" src="/resources/img/history1.jpg" alt="" />
                <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="/resources/img/history2.jpg" alt="" />
              </div>
            </div>
        </section>
        
        <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <h2 class="max-w-lg mb-6 text-3xl font-bold tracking-tight text-black sm:text-4xl sm:leading-none">
                Правила
            </h2>
            <div class="flex flex-col lg:flex-row">
                <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                    <img src="/resources/img/history3.jpg" alt="">
                </div>
              <div class="lg:w-1/2">
                <p class="text-regular text-black">
                    Греко-римская борьба — это единоборство двух спортсменов с использованием различных приёмов, которые применяются не ниже пояса. Главная цель поединка — прижать противника спиной к ковру (туше). Борец может также одержать победу, выиграв 1 или 2 периода, если борец, набрав преимущество в 8 баллов, побеждает, то встреча заканчивается, когда счёт остается равным, а схватка закончена, победитель определяется по следующим критериям:
                </p>
                <br>
                <ol class="list-decimal ml-10">
                    <li>качество технических действий;</li>
                    <li>меньшее количество предупреждений;</li>
                    <li>по последнему техническому действию.</li>
                </ol>
                <br>
                <p class="text-regular text-black">
                    Встреча проводится в 2 периода по 3 минуты(2 минуты у кадетов и младше) с перерывом в 30 секунд. Борцы набирают определённое количество очков за каждый бросок, удержание или приём, который они выполняют в схватке. Рефери на ковре присуждает очки, но главный судья (или председатель ковра) должен согласиться с его решением перед тем, как эти очки будут засчитаны. Борцу также могут быть присвоены очки в случае, если его соперник допускает нарушения, такие как пассивность при ведении схватки (уклонение от борьбы). На схватку запрещено выходить со смазанным какими-либо веществами телом, что может привести к его «скользкости», ногти должны быть коротко острижены, при себе должен обязательно быть носовой платок. Вступление в дискуссию с судьёй запрещено и карается зачислением проигрыша. Также борцы не имеют права разговаривать друг с другом и покидать ковёр без разрешения судьи.
                </p>
            </div>
        </div>
    </section>

    <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
          <div class="flex flex-col justify-center">
            <div class="max-w-xl mb-6">
              <h2 class="max-w-lg mb-6 text-3xl font-bold tracking-tight text-black sm:text-4xl sm:leading-none">
                Техника ведения борьбы
              </h2>
                <p class="text-regular text-black">
                    Стойка в классической борьбе бывает высокой, средней, низкой и по отношению к сопернику — правосторонняя, левосторонняя, фронтальная. Вперёд выставляется, как правило, та нога борца, которая сильнее. Высокая и средняя стойка удобна для манёвренности и атаки, низкая — для защиты.
                </p>
                <br>
                <p class="text-regular text-black">
                    Хотя ноги и не «участвуют в схватке», их сила и быстрота играют огромную роль. При проведении большинства бросков с поднятием соперника ноги с согнутого в коленях положения переходят в выпрямленное положение, преодолевая вес атакуемого.
                </p>
                <br>
                <p class="text-regular text-black">
                    Передвижение должно быть быстрым, но устойчивым и происходит так: сначала вперёд ставится одна нога, а потом к ней подтягивается другая, скрещивать ноги не рекомендуется, так как это может привести к потере устойчивости.
                </p>
                <br>
                <p class="text-regular text-black">
                    Борцам греко-римского стиля, в отличие от борцов вольного стиля, запрещается использовать в приёмах зацепы и подножки, а также атаковать ноги соперника, также строго запрещены технические действия против суставов, болевые приёмы, захват шеи двумя руками (более 5 секунд). Борцы используют только верхнюю часть тела для проведения бросков руками, поднятия тела соперника, при этом принимая ближнюю дистанцию по отношению друг к другу. В таком стиле борьбы преимущество имеют борцы, которые могут подавлять соперника силой.
                </p>
                <br>
                <p class="text-regular text-black">
                    В классической борьбе схватка ведётся как в стойке, так и в партере (лёжа). При борьбе в стойке главной целью является вывести соперника из равновесия — перевести в партер. Для этого используются различные броски («вертушка», прогибом, разворотом) и сбивания, например, захватить противника «петлёй» (захват шеи и плеча) и силой прижать к ковру; «нырнуть» под руку сопернику, оказаться за спиной, захватить туловище двумя руками и бросить через себя с постановкой бросающего на мост (бросок прогибом). Особенностью выполнения бросков является то, что атакующий должен сопровождать в падении атакуемого — это приводит к высокой амплитуде бросков. При борьбе в партере необходимо перевернуть соперника таким образом, чтобы он оказался прижатым лопатками к ковру, и удержать его в таком положении несколько секунд. Для этого используются различные накаты, перекаты, откаты, а для перевода соперника из положения «на мосту» в положение «на лопатках» (туше) используется «дожим».
                </p>
                <br>
                <p class="text-regular text-black">
                    Захваты в классической борьбе, в отличие от дзюдо и самбо, применяются на теле, что требует приложения большей физической силы. Запрещено хватать за одежду, уши, нос, пальцы, половые органы. Применяются захваты за кисти, предплечья, плечи, шею и корпус.
                </p>
              </p>
            </div>
          </div>
          <div>
            <img class="object-cover h-56 rounded shadow-lg sm:h-80 mb-5" src="/resources/img/history4.jpg" alt="" />
            <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96 mb-5" src="/resources/img/history5.jpg" alt="" />
            <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96 mb-5" src="/resources/img/history6.jpg" alt="" />
          </div>
        </div>
    </section>

    <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <h2 class="max-w-lg mb-6 text-3xl font-bold tracking-tight text-black sm:text-4xl sm:leading-none">
            Экипировка
        </h2>
        <div class="flex flex-col lg:flex-row">
            <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                <img src="/resources/img/history7.jpg" alt="">
            </div>
          <div class="lg:w-1/2">
            <p class="text-regular text-black">
                В экипировку борца входят трико, носки, мягкие борцовские кеды («борцовки»), допускается платок. Последний использовался для вытирания крови и пота, но в настоящее время применяют современные тампоны, а платок остаётся своеобразной данью традиции. Для начинающих борцов можно использовать футболку и шорты. А вместо «борцовок» могут использоваться обычные кеды или чешки.
            </p>
        </div>
    </div>
</section>

<section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20" style="overflow-x:auto;">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <h2 class="max-w-lg mb-6 text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        Весовые категории
        </h2>
        <table class="table-auto">
        <thead>
            <tr class="bg-red-500 text-white border-2 border-black">
            <th>Существовавшие пределы веса (кг)</th>
            <th>Название на русском языке</th>
            <th>Название на английском языке</th>
            <th>Буквальный перевод</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black" class="border-2 border-black">до 47,6 — 48</td>
                <td class="border-2 border-black">Первый наилегчайший</td>
                <td class="border-2 border-black">Light-Flyweight</td>
                <td class="border-2 border-black">Лёгкий вес мухи</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 52 — 52,1</td>
                <td class="border-2 border-black">Наилегчайший</td>
                <td class="border-2 border-black">Flyweight</td>
                <td class="border-2 border-black">Вес мухи</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 54 — 58</td>
                <td class="border-2 border-black">Легчайший</td>
                <td class="border-2 border-black">Bantamweight</td>
                <td class="border-2 border-black">Вес петуха</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 55 — 63</td>
                <td class="border-2 border-black">Полулёгкий</td>
                <td class="border-2 border-black">Featherweight</td>
                <td class="border-2 border-black">Вес пера</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 63 — 70</td>
                <td class="border-2 border-black">Лёгкий</td>
                <td class="border-2 border-black">Lightweight</td>
                <td class="border-2 border-black">Лёгкий вес</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 66 — 78</td>
                <td class="border-2 border-black">Полусредний</td>
                <td class="border-2 border-black">Welterweight</td>
                <td class="border-2 border-black">Полусредний вес</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 75</td>
                <td class="border-2 border-black">Первый средний</td>
                <td class="border-2 border-black">Middleweight «A»</td>
                <td class="border-2 border-black">Средний вес «A»</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 82,5</td>
                <td class="border-2 border-black">Второй средний</td>
                <td class="border-2 border-black">Middleweight «B»</td>
                <td class="border-2 border-black">Средний вес «B»</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 74 — 87</td>
                <td class="border-2 border-black">Средний</td>
                <td class="border-2 border-black">Middleweight</td>
                <td class="border-2 border-black">Средний вес</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 82,5 — 97</td>
                <td class="border-2 border-black">Полутяжёлый</td>
                <td class="border-2 border-black">Light-Heavyweight</td>
                <td class="border-2 border-black">Лёгкий тяжёлый вес</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 100 — свыше 71,6</td>
                <td class="border-2 border-black">Тяжёлый</td>
                <td class="border-2 border-black">Heavyweight</td>
                <td class="border-2 border-black">Тяжёлый вес</td>
            </tr>
            <tr class="bg-gray-200 border-2 border-black">
                <td class="border-2 border-black">до 130 — свыше 100</td>
                <td class="border-2 border-black">Сверхтяжёлый</td>
                <td class="border-2 border-black">Super-Heavyweight</td>
                <td class="border-2 border-black">Сверхтяжёлый вес</td>
            </tr>
        </tbody>
        </table>
    </div>
</section>
    </main>

    <footer>
        @include('partials.footer')
    </footer>
@endsection