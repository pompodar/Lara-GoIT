<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel GoIT</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Unbounded:wght@200..900&display=swap"
        rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.scss', 'resources/js/app.js'])
        @endif

        <!-- Slick with JQuery -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </head>
    <body>
        <main>
            <section class="reviews pb-[80px] relative 6xl:pb-[120px] overflow-hidden">
                <div class="container">
                    <!-- wrapper -->
                    <div class="md:flex md:justify-between">
                    <!-- left-side -->
                        <div class="md:w-[370px] xl:w-[740px] 6xl:w-[865px]">
                            <!-- title -->
                            <h2
                            class="font-unbounded text-[24px] uppercase tracking-[-0.08em] text-[#31343a] md:mb-[45px] md:text-[32px] md:tracking-[-0.06em] xl:mb-2 xl:text-[52px] xl:leading-[48px] xl:tracking-[-0.04em] 6xl:text-[60px] 6xl:leading-[65px] 6xl:tracking-[-0.03em]">
                            <span class="block pl-[100px] md:pl-[60px] xl:pl-[230px]">// що говорять</span> <span class="block tracking-[-0.09em] md:tracking-[-0.06em] xl:tracking-[-0.04em] 6xl:tracking-[-0.03em]"> студенти Neoversity</span>
                            </h2>

                            <!-- text -->
                            <div
                            class="flex h-[73px] flex-col justify-end border-l border-black font-montserrat text-[14px] uppercase leading-[14px] text-[#31343a] xl:h-[178px] xl:text-[16px] xl:leading-[16px] smOnly:mb-10 mdOnly:border-none">
                                <p
                                    class="pl-4 md:max-w-[275px] md:pl-0 xl:pl-8 6xl:max-w-[310px] 6xl:leading-[18px]">
                                    нас обирають айтівці, що вже працюють в топ компаніях та продовжують прагнути більшого
                                </p>
                            </div>
                        </div>

                        <!-- right-side -->
                        <!-- slider -->
                        <ul class="reviews-slider relative z-30 md:w-[290px] xl:mr-[105px] xl:w-[325px] 6xl:mr-[190px] 6xl:h-[766px] 6xl:w-[673px]">
                            <li
                            class="slide md:w-[290px] xl:w-[325px] 6xl:h-[766px] 6xl:w-[673px]">
                                <img
                                class="md:w-[290px] xl:w-[325px] 6xl:h-[766px] 6xl:w-[673px]"
                                src="./assets/images/review/slider.webp"
                                alt="pic" />
                            </li>

                            <li
                            class="slide md:w-[290px] xl:w-[325px] 6xl:h-[766px] 6xl:w-[673px]">
                                <img
                                class=""
                                src="./assets/images/review/slider.webp"
                                alt="pic" />
                            </li>
                        </ul>
                    </div>

                    <!-- bg -->
                    <picture class="absolute bottom-0 left-0 z-10 w-full 6xl:h-[193px]">
                        <source
                            media="(min-width: 1280px)"
                            type="image/webp"
                            srcset="
                            ./assets/images/review/bg-xl.webp    1x,
                            ./assets/images/review/bg-xl@2x.webp 2x
                            " />
                        <source
                            media="(min-width: 768px)"
                            type="image/webp"
                            srcset="
                            ./assets/images/review/bg-md.webp    1x,
                            ./assets/images/review/bg-md@2x.webp 2x
                            " />
                        <img
                        class="w-full"
                        src="./assets/images/review/bg.webp"
                        srcset="./assets/images/review/bg@2x.webp 2x"
                        alt=""
                        loading="lazy" />
                    </picture>
                </div>
            </section>

            <section class="tutors">
                <div class="container">
                    <div
                    class="mb-5 md:mb-[45px] xl:mb-[90px] 6xl:mb-[70px] 6xl:flex 6xl:items-center">
                        <h2
                            class="font-unbounded text-[24px] uppercase tracking-[-0.08em] text-[#31343a] md:text-[32px] md:tracking-[-0.06em] xl:text-[52px] xl:leading-[48px] xl:tracking-[-0.04em] 6xl:mr-[70px] 6xl:text-[60px] 6xl:leading-[65px] 6xl:tracking-[-0.03em]">
                            Зростайте в оточенні <span class="block pl-8 md:pl-[150px] xl:pl-[60px] 6xl:pl-[360px]"> успішних айтівців //</span>
                        </h2>

                        <!-- text -->
                        <div
                            class="mb-[60px] md:mb-[35px] md:flex md:justify-center xl:hidden 6xl:block">
                            <p
                            class="font-montserrat text-[14px] uppercase leading-[14px] text-[#31343a] md:w-[318px] xl:text-[16px] xl:leading-[16px] 6xl:w-[350px]">
                            Ретельно добираємо викладачів-практиків. Регулярно запрошуємо зіркових лекторів IT, інвесторів, CEO
                            </p>
                        </div>
                    </div>

                    <!-- slider -->
                    <ul
                    class="tutors-slider mb-[35px] gap-4 md:mb-[35px] md:flex 6xl:justify-between 6xl:gap-0">
                        <li
                            class="slide rounded-[10px] border border-black p-[30px] md:w-[50%] 6xl:w-[620px] mdOnly:last:hidden">
                            <div class="md:mb-5 md:flex 6xl:mb-[30px]">
                                <picture class="block md:mr-5 smOnly:mb-4">
                                    <img
                                    width="120"
                                    class="h-auto 6xl:w-[180px]"
                                    src="./assets/images/lectors/img-1.webp"
                                    srcset="./assets/images/lectors/img-1@2x.webp 2x"
                                    alt="pic"
                                    loading="lazy" />
                                </picture>

                                <div class="fmd:flex gap-1 md:flex-col 6xl:pt-[50px]">
                                    <h3
                                    class="mb-[2px] font-unbounded text-[24px] uppercase leading-none text-[#31343a] 6xl:mb-5">
                                    Сергій Борона
                                    </h3>
                                    <p class="text-[16px] text-[#aab3b9] smOnly:mb-20">Head of Security <span class="block text-black">Ciklum</span></p>
                                </div>
                            </div>

                            <img src="./assets/images/lectors/1.webp" alt="icon" />
                        </li>

                        <li
                            class="slide rounded-[10px] border border-black p-[30px] md:w-[50%] 6xl:w-[620px] mdOnly:last:hidden">
                            <div class="md:mb-5 md:flex 6xl:mb-[30px]">
                                <picture class="block md:mr-5 smOnly:mb-4">
                                    <img
                                    width="120"
                                    class="h-auto 6xl:w-[180px]"
                                    src="./assets/images/lectors/img-2.webp"
                                    srcset="./assets/images/lectors/img-2@2x.webp 2x"
                                    alt="pic"
                                    loading="lazy" />
                                </picture>

                                <div class="fmd:flex gap-1 md:flex-col 6xl:pt-[50px]">
                                    <h3
                                    class="mb-[2px] font-unbounded text-[24px] uppercase leading-none text-[#31343a] 6xl:mb-5">
                                    Володимир Голомб
                                    </h3>
                                    <p class="text-[16px] text-[#aab3b9] smOnly:mb-20">Lead Data Scientist, ML-Ops Engineer <span class="block text-black">RBC Group</span></p>
                                </div>
                            </div>

                            <img src="./assets/images/lectors/2.webp" alt="icon" />
                        </li>

                        <li
                            class="slide rounded-[10px] border border-black p-[30px] md:w-[50%] 6xl:w-[620px] mdOnly:last:hidden">
                            <div class="md:mb-5 md:flex 6xl:mb-[30px]">
                                <picture class="block md:mr-5 smOnly:mb-4">
                                    <img
                                    width="120"
                                    class="h-auto 6xl:w-[180px]"
                                    src="./assets/images/lectors/img-3.webp"
                                    srcset="./assets/images/lectors/img-3@2x.webp 2x"
                                    alt="pic"
                                    loading="lazy" />
                                </picture>

                                <div class="fmd:flex gap-1 md:flex-col 6xl:pt-[50px]">
                                    <h3
                                    class="mb-[2px] font-unbounded text-[24px] uppercase leading-none text-[#31343a] 6xl:mb-5">
                                    Антон Чорний
                                    </h3>
                                    <p class="text-[16px] text-[#aab3b9] smOnly:mb-20">CEO <span class="block text-black">GoIT Global</span></p>
                                </div>
                            </div>

                            <img src="./assets/images/lectors/3.webp" alt="icon" />
                        </li>

                        <li
                            class="slide rounded-[10px] border border-black p-[30px] md:w-[50%] 6xl:w-[620px] mdOnly:last:hidden">
                            <div class="md:mb-5 md:flex 6xl:mb-[30px]">
                                <picture class="block md:mr-5 smOnly:mb-4">
                                    <img
                                    width="120"
                                    class="h-auto 6xl:w-[180px]"
                                    src="./assets/images/lectors/img-3.webp"
                                    srcset="./assets/images/lectors/img-3@2x.webp 2x"
                                    alt="pic"
                                    loading="lazy" />
                                </picture>

                                <div class="fmd:flex gap-1 md:flex-col 6xl:pt-[50px]">
                                    <h3
                                    class="mb-[2px] font-unbounded text-[24px] uppercase leading-none text-[#31343a] 6xl:mb-5">
                                    Антон Чорний
                                    </h3>
                                    <p class="text-[16px] text-[#aab3b9] smOnly:mb-20">CEO <span class="block text-black">GoIT Global</span></p>
                                </div>
                            </div>

                            <img src="./assets/images/lectors/3.webp" alt="icon" />
                        </li>
                    </ul>

                    <!-- buttons -->
                    <div
                    class="slider-btn__wrappe mb-[70px] flex items-center justify-center gap-4 md:mb-[30px] md:justify-end xl:mb-[50px]">
                        <button type="button" class="slider-btn tutors-prev-but">
                            <img
                            width="14"
                            height="25"
                            src="./assets/images/lectors/arrow-left.webp"
                            alt="arrow" />
                        </button>

                        <button type="button" class="slider-btn tutors-next-but">
                            <img
                            width="14"
                            height="25"
                            src="./assets/images/lectors/arrow-right.webp"
                            alt="arrow" />
                        </button>
                    </div>

                    <!-- modal-button -->
                    <div class="flex justify-center mdOnly:justify-start">
                        <button
                            class="w-full bg-[#2400ff] px-10 py-6 font-montserrat text-[16px] font-semibold text-white md:h-[70px] md:w-[290px] xl:w-[312px] 6xl:h-[86px] 6xl:w-[356px]"
                            type="button">
                            / Більше про викладачів
                        </button>
                    </div>
                </div>
            </section>

            <section class="choice relative">
                <div class="container">
                    <!-- title -->
                    <h2
                    class="mb-[35px] font-unbounded text-[24px] uppercase tracking-[-0.08em] text-[#31343a] md:mb-[45px] md:text-[32px] md:tracking-[-0.06em] xl:mb-10 xl:text-[52px] xl:leading-[48px] xl:tracking-[-0.04em] 6xl:mb-10 6xl:mr-[70px] 6xl:text-[60px] 6xl:leading-[65px] 6xl:tracking-[-0.03em]">
                    <span class="block md:inline md:pl-[170px] xl:pl-[325px] 6xl:pl-[745px]">«Я хочу сама вирішувати,</span> <span class="block pl-[90px] md:pl-0 md:inline">де працювати,</span> <span class="block pr-[90px] md:pr-0 md:inline">а не обирати</span> <span class="block pl-[90px] md:pl-0">серед того, що лишилось»</span>
                    </h2>

                    <!-- text -->
                    <p
                    class="mb-[35px] font-montserrat text-[14px] uppercase leading-[14px] text-[#31343a] md:mb-[50px] md:ml-auto md:w-[476px] xl:w-[550px] xl:text-[16px] xl:leading-[16px] 6xl:mb-[100px] 6xl:mr-[220px] mdOnly:ml-[150px]">
                    Коли є розуміння, як все «під капотом», ти більш конкурентно спроможний. Саме для цього я вступила до магістратури. Ти сам вирішуєш, яку компанію та проєкт обрати, а не йдеш туди, куди візьмуть...
                    </p>

                    <!-- img -->
                    <picture class="mb-[35px] block xl:mb-[50px] 6xl:mb-[90px]">
                    <source
                        media="(min-width: 1920px)"
                        type="image/webp"
                        srcset="
                        ./assets/images/choice/6xl.webp    1x,
                        ./assets/images/choice/6xl@2x.webp 2x
                        " />
                    <source
                        media="(min-width: 1280px)"
                        type="image/webp"
                        srcset="
                        ./assets/images/choice/xl.webp    1x,
                        ./assets/images/choice/xl@2x.webp 2x
                        " />
                    <source
                        media="(min-width: 768px)"
                        type="image/webp"
                        srcset="
                        ./assets/images/choice/md.webp    1x,
                        ./assets/images/choice/md@2x.webp 2x
                        " />
                    <img
                        width="395"
                        height="165"
                        class="md:h-[126px] md:w-[707px] xl:h-[165px] xl:w-[1217px] 6xl:w-[1777px]"
                        src="./assets/images/choice/sm.webp"
                        srcset="./assets/images/choice/sm@2x.webp 2x"
                        alt="pic"
                        loading="lazy" />
                    </picture>

                    <!-- button -->
                    <div
                    class="md:flex md:justify-start xl:mr-[30%] xl:justify-end 6xl:mr-0 6xl:justify-center">
                    <button
                        class="h-[70px] w-full bg-[#2400ff] px-10 py-6 font-montserrat text-[16px] font-semibold text-white md:w-[290px] xl:w-[312px] 6xl:h-[86px] 6xl:w-[356px]"
                        type="button">
                        / Дивитись історію
                    </button>
                    </div>
                </div>
            </section>

            <section class="register">
                <div class="6xl:px-[70px] container px-[10px]">
                    <!-- block -->
                    <div
                    class="register-wrapper 6xl:py-[75px] 6xl:pl-[112px] 6xl:pr-[315px] relative rounded-[10px] border border-black bg-transparent px-[30px] py-[50px] md:flex md:justify-between md:px-[40px] xl:py-[65px] xl:pl-[65px] xl:pr-[195px]">
                    <!-- left-side -->
                    <div class="6xl:w-[700px] md:w-[345px] xl:w-[545px]">
                        <!-- title -->
                        <h2
                        class="6xl:text-[60px] 6xl:leading-[65px] 6xl:tracking-[-0.03em] font-unbounded text-[24px] font-normal uppercase tracking-[-0.08em] text-[#31343a] md:text-[32px] md:leading-[48px] md:tracking-[-0.06em] xl:text-[50px] xl:leading-[48px] xl:tracking-[-0.04em]">
                        Хочу вступити > <span class="block pl-8 text-[#b5bcc2]">| до Neoversity</span>
                        </h2>

                        <!-- text -->
                        <div
                        class="register-wrapper__text flex h-[130px] flex-col justify-end border-l border-black font-montserrat text-[14px] font-bold uppercase leading-[14px] text-[#31343a] xl:h-[192px] xl:text-[16px] xl:leading-[16px] smOnly:mb-10">
                            <p class="mb-3 pl-4 xl:mb-5 xl:pl-8">Який перший крок?</p>
                            <p class="max-w-[270px] pl-4 font-normal xl:max-w-[320px] xl:pl-8">
                                Залиште свої дані — отримайте особисту консультацію безкоштовно
                            </p>
                        </div>
                    </div>

                    <!-- right-side -->
                    <div class="6xl:w-[421px] md:w-[287px] xl:w-[312px]">
                        <!-- form -->
                        <form class="register-wrapper__form 6xl:gap-4 flex flex-col gap-[10px]">
                            <!-- fields -->
                            <label for="userName">
                                <input
                                class="register-input 6xl:h-[67px] h-[50px] w-full border border-black px-[26px] py-4 placeholder-[#aab3b9] placeholder:text-[12px] xl:placeholder:text-[16px] mdOnly:h-[41px]"
                                id="userName"
                                type="text"
                                name="userName"
                                placeholder="Ім'я" />
                            </label>

                            <label for="userPhone">
                                <input
                                class="register-input 6xl:h-[67px] h-[50px] w-full border border-black px-[26px] py-4 placeholder-[#aab3b9] placeholder:text-[12px] xl:placeholder:text-[16px] mdOnly:h-[41px]"
                                id="userPhone"
                                type="tel"
                                name="userPhone"
                                placeholder="Телефон" />
                            </label>

                            <label for="userEmail">
                                <input
                                class="register-input 6xl:h-[67px] h-[50px] w-full border border-black px-[26px] py-4 placeholder-[#aab3b9] placeholder:text-[12px] xl:placeholder:text-[16px] mdOnly:h-[41px]"
                                id="userEmail"
                                type="email"
                                name="userEmail"
                                placeholder="Email" />
                            </label>

                            <!-- text-checkbox -->
                            <p
                                class="font-unbounded text-[12px] font-medium tracking-[0.02em] text-black xl:text-[14px] xl:tracking-[0.02em] smOnly:mb-2">
                                Як вам зручніше спілкуватись?
                            </p>

                            <div class="flex items-center">
                                <input
                                id="checkbox1"
                                type="checkbox"
                                class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-500" />
                                <label
                                for="checkbox1"
                                class="ml-2 font-montserrat text-[12px] text-black xl:text-[14px]"
                                >зателефонуйте мені</label
                                >
                            </div>

                            <div class="flex items-center">
                                <input
                                id="checkbox2"
                                type="checkbox"
                                class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-500" />
                                <label
                                for="checkbox2"
                                class="ml-2 font-montserrat text-[12px] text-black xl:text-[14px]"
                                >напишіть в месенджер</label
                                >
                            </div>

                            <!-- button -->
                            <button
                                class="6xl:mb-[2px] relative z-30 mt-2 bg-[#2400ff] px-10 py-6 font-montserrat text-[16px] font-semibold text-white md:mb-[-15px] xl:mb-[-5px]"
                                type="submit">
                                / Відправити
                            </button>
                        </form>

                        <!-- img -->
                        <picture class="absolute bottom-0 left-0 z-10 w-full">
                            <source
                                media="(min-width: 1280px)"
                                type="image/webp"
                                srcset="
                                ./assets/images/register/register-bg-xl.webp    1x,
                                ./assets/images/register/register-bg-xl@2x.webp 2x
                                " />
                            <source
                                media="(min-width: 768px)"
                                type="image/webp"
                                srcset="
                                ./assets/images/register/register-bg-md.webp    1x,
                                ./assets/images/register/register-bg-md@2x.webp 2x
                                " />
                            <img
                            class="w-full"
                            src="./assets/images/register/register-bg.webp"
                            srcset="./assets/images/register/register-bg@2x.webp 2x"
                            alt=""
                            loading="lazy" />
                        </picture>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t">
            <div class="container">
                <div class="footer--top pt-10 md-[50px] pb-[29px] md:pb-[45px] flex flex-col md:flex-row md:gap-[69px] xl:gap-0">
                    <div class="footer--top--left flex flex-col">
                        <a href="/" class="inline-block w-[318px] md:w-[256px] xl:w-[254px] 6xl:w-[349px] h-[37.67px] mb-[43.33px] md:mb-[80.67px] xl:mr-[121px]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 318 38" fill="none">
                            <path d="M34.1304 0.262695V37.6737H27.0598L8.50603 14.9599V37.6737H0V0.262695H7.1238L25.6244 22.9765V0.262695H34.1304Z" fill="black"/>
                            <rect width="8.67435" height="37.2145" transform="matrix(-1 0 0 1 243.788 0.262695)" fill="black"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M107.899 0.263184H116.54V34.0955L125.691 0.28426L134.037 0.284261L124.01 37.3329H116.54V37.3342H107.899V0.263184Z" fill="black"/>
                            <path d="M65.8949 30.566V37.4772H36.4985V0.262695H65.1899V7.17396H45.2307V15.2548H62.8577V21.9535H45.2307V30.566H65.8949Z" fill="black"/>
                            <path d="M166.282 30.566V37.4772H135.922V0.262695H165.554V7.17396H144.94V15.2548H163.145V21.9535H144.94V30.566H166.282Z" fill="black"/>
                            <path d="M192.128 37.4772L184.888 27.1103H176.897V37.4772H168.208V0.262695H184.459C187.784 0.262695 190.662 0.812053 193.094 1.91077C195.561 3.00948 197.456 4.56895 198.779 6.58917C200.101 8.60938 200.763 11.0017 200.763 13.7663C200.763 16.5308 200.084 18.9231 198.725 20.9433C197.402 22.9281 195.507 24.4521 193.04 25.5154L201.46 37.4772H192.128ZM191.967 13.7663C191.967 11.6752 191.288 10.0802 189.929 8.98153C188.571 7.84737 186.586 7.28029 183.976 7.28029H176.897V20.2522H183.976C186.586 20.2522 188.571 19.6851 189.929 18.551C191.288 17.4168 191.967 15.8219 191.967 13.7663Z" fill="black"/>
                            <path d="M217.699 37.2145C214.858 37.2145 212.103 36.8376 209.433 36.0837C206.798 35.2955 204.676 34.2847 203.067 33.051L205.891 26.7801C207.431 27.9109 209.262 28.819 211.384 29.5043C213.506 30.1897 215.628 30.5324 217.75 30.5324C220.111 30.5324 221.857 30.1897 222.986 29.5043C224.116 28.7847 224.68 27.8424 224.68 26.6773C224.68 25.8206 224.338 25.1181 223.654 24.5698C223.003 23.9873 222.148 23.5247 221.087 23.182C220.06 22.8393 218.657 22.4624 216.877 22.0511C214.139 21.4001 211.897 20.749 210.152 20.0979C208.406 19.4468 206.901 18.4017 205.634 16.9624C204.402 15.5232 203.786 13.6042 203.786 11.2055C203.786 9.11516 204.351 7.23045 205.48 5.55134C206.61 3.83796 208.304 2.48439 210.563 1.49064C212.856 0.496879 215.645 0 218.931 0C221.224 0 223.465 0.27414 225.656 0.822419C227.846 1.3707 229.763 2.15885 231.406 3.18688L228.839 9.50924C225.519 7.62452 222.199 6.68217 218.879 6.68217C216.552 6.68217 214.824 7.05911 213.694 7.81299C212.599 8.56688 212.051 9.56064 212.051 10.7943C212.051 12.0279 212.685 12.9531 213.951 13.5699C215.251 14.1525 217.219 14.735 219.855 15.3176C222.593 15.9687 224.834 16.6197 226.58 17.2708C228.325 17.9219 229.814 18.9499 231.046 20.3549C232.313 21.7599 232.946 23.6617 232.946 26.0605C232.946 28.1165 232.364 30.0012 231.2 31.7146C230.071 33.3937 228.36 34.7301 226.066 35.7239C223.773 36.7177 220.984 37.2145 217.699 37.2145Z" fill="black"/>
                            <path d="M257.733 7.28029H245.699V0.262695H278.469V7.28029H266.435V37.4772H257.733V7.28029Z" fill="black"/>
                            <path d="M303.499 24.2927V37.4772H294.862V24.1863L280.413 0.262695H289.583L299.554 16.7966L309.524 0.262695H318.001L303.499 24.2927Z" fill="black"/>
                            <path d="M85.9513 37.4772C82.1569 37.4772 78.728 36.6719 75.6645 35.0614C72.636 33.4508 70.2514 31.2405 68.5108 28.4306C66.805 25.5864 65.9521 22.3995 65.9521 18.87C65.9521 15.3404 66.805 12.1707 68.5108 9.36072C70.2514 6.51652 72.636 4.28913 75.6645 2.67856C78.728 1.06798 82.1569 0.262695 85.9513 0.262695C89.7458 0.262695 93.1573 1.06798 96.1859 2.67856C99.2145 4.28913 101.599 6.51652 103.34 9.36072C105.08 12.1707 105.951 15.3404 105.951 18.87C105.951 22.3995 105.08 25.5864 103.34 28.4306C101.599 31.2405 99.2145 33.4508 96.1859 35.0614C93.1573 36.6719 89.7458 37.4772 85.9513 37.4772ZM85.9513 30.3838C88.1096 30.3838 90.0591 29.9041 91.7997 28.9446C93.5402 27.9509 94.8979 26.5802 95.8726 24.8325C96.8821 23.0849 97.3869 21.0973 97.3869 18.87C97.3869 16.6426 96.8821 14.6551 95.8726 12.9074C94.8979 11.1598 93.5402 9.8062 91.7997 8.84671C90.0591 7.85295 88.1096 7.35607 85.9513 7.35607C83.793 7.35607 81.8436 7.85295 80.103 8.84671C78.3624 9.8062 76.9874 11.1598 75.9779 12.9074C75.0031 14.6551 74.5158 16.6426 74.5158 18.87C74.5158 21.0973 75.0031 23.0849 75.9779 24.8325C76.9874 26.5802 78.3624 27.9509 80.103 28.9446C81.8436 29.9041 83.793 30.3838 85.9513 30.3838Z" fill="black"/>
                            </svg>
                        </a>

                        <p class="hidden md:inline-block xl:hidden text-1.5xsm xl:text-x1.5xbase 6xl:text-3sm tracking--tight mb-[12px] xl:mb-[45px]">
                            Neoversity в соцмережах
                        </p>

                        <div class="contacts-wrapper !hidden  md:!block xl:!hidden">                                                              <div class="grid gap-6 rounded-2xl">
                                <address class="not-italic">
                                    <ul class="info-list !flex-row">
                                        <li>
                                            <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://www.instagram.com/goitclub/" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst"
                                                    width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst"
                                                    width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst"
                                                    width="34.57" height="34.57" loading="lazy" /></noscript>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://t.me/junior_developer_ua" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg"
                                                    width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg"
                                                    width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg"
                                                    width="34.57" height="34.57" loading="lazy" /></noscript>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://www.facebook.com/goITclub" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb"                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb"
                                                    width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb"
                                                    width="34.57" height="34.57" loading="lazy" /></noscript>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://www.linkedin.com/company/goit-start-your-career-in-it/" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in"
                                                    width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in"
                                                    width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in"
                                                    width="34.57" height="34.57" loading="lazy" /></noscript>
                                            </a>
                                        </li>
                                    </ul>
                                </address>
                            </div>
                        </div>
                    </div>

                    <div class="hidden md:block xl:flex">
                        <div class="footer--menu xl:mr-[198px] 6xl:mr-[285px]">
                            <ul id="menu-nav-menu" class="menu mb-[47.61px]">
                                <li id="menu-item-8909" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8909"><a href="https://srv619736.hstgr.cloud/ua/courses/">[Програми]</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-29365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29365"><a href="https://srv619736.hstgr.cloud/ua/it-test/">// ІТ бакалавр</a></li>
                                        <li id="menu-item-29366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29366"><a href="https://srv619736.hstgr.cloud/ua/about-us/">// ІТ магістр</a></li>
                                    </ul>
                                </li>

                                <li id="menu-item-17402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17402"><a target="_blank" rel="noopener" href="https://neo.goit.global/">[Відгуки]</a></li>

                                <li id="menu-item-8907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8907"><a href="https://srv619736.hstgr.cloud/ua/reviews/">[Вартість]</a></li>

                                <li id="menu-item-28151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28151"><a target="_blank" rel="noopener" href="https://partnership.lp.goit.global/ua/">[Перший крок]</a></li>
                            </ul>
                        </div>

                        <div class="hidden xl:block mr-[156px] 6xl:mr-[358px]">
                            <p class="text-1.5xsm xl:text-x1.5xbase 6xl:text-3sm tracking--tight mb-[12px] xl:mb-3">
                                Neoversity в соцмережах
                            </p>

                            <div class="contacts-wrapper">                                                              <div class="grid gap-6 rounded-2xl">
                                    <address class="not-italic">
                                        <ul class="info-list !flex-row">
                                            <li>
                                                <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://www.instagram.com/goitclub/" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                    <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst"
                                                        width="34.57" height="34.57" loading="lazy" /></noscript>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://t.me/junior_developer_ua" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                    <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg"
                                                        width="34.57" height="34.57" loading="lazy" /></noscript>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://www.facebook.com/goITclub" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                    <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb"                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb"
                                                        width="34.57" height="34.57" loading="lazy" /></noscript>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://www.linkedin.com/company/goit-start-your-career-in-it/" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                    <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in"
                                                        width="34.57" height="34.57" loading="lazy" /></noscript>
                                                </a>
                                            </li>
                                        </ul>
                                    </address>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-8 xl:gap-0 xl:flex-col">
                            <div class="">
                                <div class="footer--contacts--phones flex flex-col mb-[16px] xl:mb-2">
                                    <a class="text-1.5xsm 6xl:text-3sm font-bold" href="tel:+380503247699">(050) 324 76 99</a>

                                    <a class="text-1.5xsm 6xl:text-3sm font-bold" href="tel:+380673098486">(067) 309 84 86</a>
                                </div>

                                <a class="inline-block text-1.5xsm 6xl:text-3sm mb-[16px]" href="mailto:info@goit.global">info@goit.global</a>
                            </div>

                            <p class="text-1.5xsm 6xl:text-3sm max-w-[88px]">
                                Київ, Україна Ю. Іллєнка 12
                            </p>
                        </div>
                    </div>

                    <div class="footer--top--bottom--left flex justify-between md:hidden">
                        <div class="footer--menu">
                            <ul id="menu-nav-menu" class="menu">
                                <li id="menu-item-8909" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8909"><a href="https://srv619736.hstgr.cloud/ua/courses/">[Програми]</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-29365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29365"><a href="https://srv619736.hstgr.cloud/ua/it-test/">// ІТ бакалавр</a></li>
                                        <li id="menu-item-29366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29366"><a href="https://srv619736.hstgr.cloud/ua/about-us/">// ІТ магістр</a></li>
                                    </ul>
                                </li>

                                <li id="menu-item-17402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17402"><a target="_blank" rel="noopener" href="https://neo.goit.global/">[Відгуки]</a></li>

                                <li id="menu-item-8907" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8907"><a href="https://srv619736.hstgr.cloud/ua/reviews/">[Вартість]</a></li>

                                <li id="menu-item-28151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28151"><a target="_blank" rel="noopener" href="https://partnership.lp.goit.global/ua/">[Перший крок]</a></li>
                            </ul>
                        </div>

                        <div class="footer--contacts flex flex-col">
                            <p class="font-sans max-w-[266px] md:max-w-[206px] text-1.5xsm xl:text-x1.5xbase tracking--tight mb-[12px] md:mb-[22px] xl:mb-[45px]">
                                Neoversity в соцмережах
                            </p>

                            <div class="contacts-wrapper md:hidden">                                                          <div class="grid gap-6 rounded-2xl">
                                    <address class="not-italic">
                                        <ul class="info-list !flex-row">
                                            <li>
                                                <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://www.instagram.com/goitclub/" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                    <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/inst.b24f26.svg" alt="логотип соціальної мережі inst"
                                                        width="34.57" height="34.57" loading="lazy" /></noscript>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://t.me/junior_developer_ua" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                    <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/tg.6c543c.svg" alt="логотип соціальної мережі tg"
                                                        width="34.57" height="34.57" loading="lazy" /></noscript>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://www.facebook.com/goITclub" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                    <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb"                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/fb.bf8cbc.svg" alt="логотип соціальної мережі fb"
                                                        width="34.57" height="34.57" loading="lazy" /></noscript>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="social-link block transition-transform duration-200 hover:scale-125 focus:scale-125 leading-10" href="https://www.linkedin.com/company/goit-start-your-career-in-it/" target="_blank" rel="noopener noreferrer nofollow" aria-label="посилання на соціальну мережу">
                                                    <img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in" width="34.57" height="34.57" loading="lazy" src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" class=" lazyloaded" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;"><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img data-src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in"
                                                        width="34.57" height="34.57" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" style="--smush-placeholder-width: 34px; --smush-placeholder-aspect-ratio: 34/34;" /><noscript><img src="https://srv619736.hstgr.cloud/wp-content/themes/neoversity/public/images/social/in.63bd10.svg" alt="логотип соціальної мережі in"
                                                        width="34.57" height="34.57" loading="lazy" /></noscript>
                                                </a>
                                            </li>
                                        </ul>
                                    </address>
                                </div>
                            </div>

                            <div class="footer--contacts--phones flex flex-col mb-[16px] md:hidden">
                                <a class="text-1.5xsm font-bold" href="tel:+380503247699">(050) 324 76 99</a>

                                <a class="text-1.5xsm font-bold" href="tel:+380673098486">(067) 309 84 86</a>
                            </div>

                            <a class="inline-block text-1.5xsm mb-[16px] md:hidden" href="mailto:info@goit.global">info@goit.global</a>

                            <p class="text-1.5xsm max-w-[80px] md:hidden">
                                Київ, Україна Ю. Іллєнка 12
                            </p>
                        </div>
                    </div>
                </div>

                <div class="footer--bottom flex flex-col md:flex-col-reverse md:justify-center xl:flex-row xl:justify-start xl:items-center gap-[25px] md:gap-[18px] xl:gap-[181px] 6xl:gap-[321px] pt-[29px] md:pt-[24px] xl:pt-[15px] pb-[90px] md:pb-[19px] xl:pb-[17px] border-t">
                    <a href="/" class="inline-block md:text-center xl:text-left max-w-[124px] md:max-w-full xl:max-w-[124px] 6xl:max-w-[149px] text-xsm 6xl:text-1.5xsm text-ternary">
                        IT-університет
                        Neoversity © 2023 – 2024
                    </a>

                    <div class="footer--bottom--links flex flex-col md:flex-row         md:justify-between gap-2 xl:gap-[59px] 6xl:gap-[131px]">
                        <a href="#" class="text-xsm 6xl:text-1.5xsm">
                            Умови користування послугами
                        </a>

                        <a href="#" class="text-xsm 6xl:text-1.5xsm">
                            Політика конфіденційності
                        </a>

                        <a href="#" class="text-xsm 6xl:text-1.5xsm">
                            Відмова від відповідальності
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
