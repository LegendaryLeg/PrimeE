<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script defer src="/src/scripts/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css"
        integrity="sha512-3PN6gfRNZEX4YFyz+sIyTF6pGlQiryJu9NlGhu9LrLMQ7eDjNgudQoFDK3WSNAayeIKc6B8WXXpo4a7HqxjKwg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Prime Empire</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav-left">
                <a class="nav-logo" href="index.html">PRIME EMPIRE</a>
                <ul class="nav-list">
                    <li><a href="#">О НАС</a></li>
                    <li><a href="store.html">МАГАЗИН</a></li>
                    <li><a href="#">ТРЕНД</a></li>
                    <li><a href="#">КОНТАКТЫ</a></li>
                    <li><a href="admin.html">АДМИН</a></li>
                </ul>
            </div>
            <a href="login.html">
                <img id="loginBtn" class="login-btn" src="/src/images/user-regular.svg" alt="">
            </a>
        </nav>
    </header>

    <section class="main-section">
        <div class="container">
            <div class="main">
                <div class="main-slogan">Start Your Day with a Smile and a Cup of Exquisite Tea</div>
                <button class="main-btn">BUY NOW</button>
            </div>
            <div class="collection-showcase">
                <div id="collectionGallery" class="gallery">
                    <div data-item class="item">
                        <div class="item-title">BLACK TEAS</div>
                        <button class="item-btn">VIEW ALL</button>
                        <img class="item-img" src="/src/images/blackTea.jpg" alt="">
                    </div>
                    <div data-item class="item">
                        <div class="item-title">GREEN TEAS</div>
                        <button class="item-btn">VIEW ALL</button>
                        <img class="item-img" src="/src/images/greenTea.jpg" alt="">
                    </div>
                    <div data-item class="item">
                        <div class="item-title">COLD BREW TEAS</div>
                        <button class="item-btn">VIEW ALL</button>
                        <img class="item-img" src="/src/images/coldBrewTea.jpg" alt="">
                    </div>
                    <div data-item class="item">
                        <div class="item-title">FRUIT TEAS</div>
                        <button class="item-btn">VIEW ALL</button>
                        <img class="item-img" src="/src/images/fruitTea.jpg" alt="">
                    </div>
                    <div data-item class="item">
                        <div class="item-title">NATURAL BENEFITS</div>
                        <button class="item-btn">VIEW ALL</button>
                        <img class="item-img" src="/src/images/naturalBenefitsTea.jpg" alt="">
                    </div>
                    <div data-item class="item">
                        <div class="item-title">FRUIT & HERBAL INFUSIONS</div>
                        <button class="item-btn">VIEW ALL</button>
                        <img class="item-img" src="/src/images/HerbalInfusionTea.jpg" alt="">
                    </div>
                    <div data-item class="item">
                        <div class="item-title">KEY BEYOND THE LEAF RANGE</div>
                        <button class="item-btn">VIEW ALL</button>
                        <img class="item-img" src="/src/images/kewTea.jpg" alt="">
                    </div>
                </div>

                <div class="collection">
                    <div class="collection-title">Популярно сейчас</div>
                    <div class="collection-desc">From our classic black blends and much-loved bestsellers, to balanced
                        infusions and delicious cold brews, there is a cup of Ahmad Tea to suit everyone, any time of
                        the day. Explore our ranges.</div>
                    <button class="collection-btn">VIEW ALL</button>
                </div>
            </div>
        </div>
    </section>

    <section class="product-section">
        <div class="container">
            <div class="product-grid">
                <div class="black-tea">
                    <div class="product-item">
                        <img class="product-item-img" src="/src/images/blackTea.jpg" alt="">
                        <div class="product-info">
                            <h1>BLACK TEA</h1>
                            <p class="product-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
                                aspernatur
                                pariatur, commodi nam
                                labore aliquid veniam fugit modi laborum ullam cupiditate facere amet quisquam quis
                                aperiam
                                ipsum quibusdam itaque voluptate.</p>
                            <button class="collection-btn">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="green-tea">
                    <div class="product-item">
                        <img class="product-item-img" src="/src/images/greenTea.jpg" alt="">
                        <div class="product-info">
                            <h1>GREEN TEA</h1>
                            <p class="product-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, non
                                praesentium dignissimos
                                saepe ad omnis earum fuga id rem harum quae aut vero dolor possimus cumque amet
                                similique
                                nobis ex.</p>
                            <button class="collection-btn">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-section">
        <div class="about">
            <div class="about-title">О НАС</div>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        Наша история началась много лет назад, когда основатель компании, Алексей Иванов, совершил
                        своё
                        первое путешествие в сердце Азии. Вдохновленный красотой природы и богатством чайных
                        традиций,
                        он
                        решил привезти этот удивительный опыт домой. В каждом уголке Китая, Индии и Японии он искал
                        уникальные сорта чая, которые могли бы подарить людям кусочек той гармонии и свежести,
                        которую
                        он
                        сам почувствовал.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="contacts-section">
            <div class="container">
                <div class="contacts">
                    <div class="contacts-title">Наши контакты</div>
                    <div class="contacts-content">
                        <img class="contacts-img" src="/src/images/adress.png" alt="">
                        <ul class="contacts-list">
                            <li><span>Городской:</span> 12013514000</li>
                            <li><span>Сотовый:</span> 447458196925</li>
                            <li><span>Email:</span> primebusiness@gmail.com</li>
                            <li><span>Адрес:</span> Г. Алматы, Алмалинский район, Улица Ауэзова 1а, офис 1 этаж 2. <a
                                    target="_blank"
                                    href="https://2gis.kz/almaty/firm/70000001036720417?m=76.901452%2C43.257444%2F17.81%2Fr%2F5.12 ">2ГИС
                                    Адрес</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer">
        <div class="footer-logo">LOGO</div>
        <div>
            <ul class="footer-socials">
                <li><img class="footer-icon" src="/src/images/instaIcon.svg" alt=""></li>
                <li><img class="footer-icon" src="/src/images/facebookIcon.svg" alt=""></li>
                <li><img class="footer-icon" src="/src/images/whatsappIcon.svg" alt=""></li>
                <li><img class="footer-icon" src="/src/images/telegramIcon.svg" alt=""></li>
            </ul>
            <ul class="footer-sponsors">
                <li class="sponsor">LOGO</li>
                <li class="sponsor">LOGO</li>
                <li class="sponsor">LOGO</li>
                <li class="sponsor">LOGO</li>
            </ul>
        </div>
        <button class="footer-btn">SHOP NOW</button>
    </footer>
</body>

</html>



<!-- <div class="testimonials">
    <div class="testimonials-title">ОТЗЫВЫ</div>
    <div id="testimonialsShowcase" class="testimonials-showcase">
        <div data-item class="testimonials-item">
            <div class="testimonials-comment">
                Чай, который вы предлагаете, просто великолепен! Вкус, аромат, качество – всё на высшем
                уровне. Рекомендую всем своим друзьям и близким!
            </div>
        </div>
        <div data-item class="testimonials-item">
            <div class="testimonials-comment">
                Никогда не думал, что чай может быть настолько разнообразным и вкусным. Ваша коллекция
                            поражает своим богатством и качеством. Прекрасное место для чайных гурманов!
                        </div>
                    </div>
                    <div data-item class="testimonials-item">
                        <div class="testimonials-comment">
                            Каждый утро начинается с чашки ароматного и нежного чая, который заряжает меня энергией на
                            весь день. Великолепный выбор и отличное обслуживание!
                        </div>
                    </div>
                    <div data-item class="testimonials-item">
                        <div class="testimonials-comment">
                            Заказывала чай для всей семьи, и мы все в восторге! Каждый нашёл свой любимый сорт. Отличное
                            качество и быстрая доставка. Спасибо!
                        </div>
                    </div>
                    <div data-item class="testimonials-item">
                        <div class="testimonials-comment">
                            Чай, который вы предлагаете, просто великолепен! Вкус, аромат, качество – всё на высшем
                            уровне. Рекомендую всем своим друзьям и близким!
                        </div>
                    </div>
                    <div data-item class="testimonials-item">
                        <div class="testimonials-comment">
                            Никогда не думал, что чай может быть настолько разнообразным и вкусным. Ваша коллекция
                            поражает своим богатством и качеством. Прекрасное место для чайных гурманов!
                        </div>
                    </div>
                    <div data-item class="testimonials-item">
                        <div class="testimonials-comment">
                            Каждый утро начинается с чашки ароматного и нежного чая, который заряжает меня энергией на
                            весь день. Великолепный выбор и отличное обслуживание!
                        </div>
                    </div>
                    <div data-item class="testimonials-item">
                        <div class="testimonials-comment">
                            Заказывала чай для всей семьи, и мы все в восторге! Каждый нашёл свой любимый сорт. Отличное
                            качество и быстрая доставка. Спасибо!
                        </div>
                    </div>
                </div>
            </div> -->