<?php get_header(); ?>

<main class="site-main">
  <!-- Ваш контент можно вставить сюда -->
  <section class="hero">
        <div class="hero-overlay">
          <div class="container hero-content">
            <div class="hero-text">
              <h1>Автосервис<br />в Вашем городе</h1>
              <p>
                Мы — онлайн-университет, который обучает веб-дизайну с
                гарантированным трудоустройством
              </p>
            </div>
            <form class="hero-form">
              <h3>Запишитесь на бесплатный осмотр подвески прямо сейчас</h3>
              <input type="text" placeholder="Ваше имя" required />
              <input type="tel" placeholder="Контактный телефон" required />
              <input type="text" placeholder="Марка автомобиля" />
              <button type="submit">Оставить заявку</button>
              <small>Акция действует до 10.01.2023</small>
            </form>
          </div>
        </div>
      </section>

      <section class="about">
        <div class="about__container">
          <div class="about__text">
            <h4 class="about__subtitle">О компании</h4>
            <h1 class="about__title">Честный ремонт<br />автомобилей</h1>
            <p class="about__description">
              Диагностика, техобслуживание, шиномонтаж, кузовной и малярный
              ремонт любой сложности.
            </p>
            <p class="about__description">
              Быстро, насколько это возможно. Профессионально и аккуратно. Без
              обмана и непредвиденных трат. С максимальным вниманием к вашей
              проблеме.
            </p>
            <a href="#" class="about__btn">Подробнее</a>
          </div>
          <div class="about__images">
            <div class="about__circle about__circle--top">
              <img src="<?php echo get_template_directory_uri(); ?>./assets/img/about_1.png" alt="ремонт автомобиля" />
            </div>
            <div class="about__circle about__circle--bottom">
              <img src="<?php echo get_template_directory_uri(); ?>./assets/img/about_2.png" alt="инструменты" />
            </div>
          </div>
        </div>
      </section>
      <section class="repair">
        <div class="repair__overlay">
          <div class="repair__container">
            <h2 class="repair__title">Ремонтируем всё</h2>
            <p class="repair__subtitle">
              Наши возможности и габариты позволяют ремонтировать даже
              броневики.
            </p>

            <div class="repair__grid">
              <div class="repair__item">
                <div class="repair__icon">
                  <i class="fa-solid fa-check"></i>
                </div>
                <h3 class="repair__label">Ремзона</h3>
                <p class="repair__desc">Площадь ремзоны 1000 м²</p>
              </div>

              <div class="repair__item">
                <div class="repair__icon">📁</div>
                <h3 class="repair__label">Склад</h3>
                <p class="repair__desc">Собственный склад запчастей</p>
              </div>

              <div class="repair__item">
                <div class="repair__icon">📄</div>
                <h3 class="repair__label">10 постов</h3>
                <p class="repair__desc">10 ремонтных постов</p>
              </div>

              <div class="repair__item">
                <div class="repair__icon">%</div>
                <h3 class="repair__label">Развал-схождение</h3>
                <p class="repair__desc">
                  4-х стоечный подъемник для развал-схождения и подъема крупных
                  авто
                </p>
              </div>

              <div class="repair__item">
                <div class="repair__icon">%</div>
                <h3 class="repair__label">4 цеха</h3>
                <p class="repair__desc">
                  слесарный, кузовной, малярный и арматурный
                </p>
              </div>

              <div class="repair__item">
                <div class="repair__icon">%</div>
                <h3 class="repair__label">Специалисты</h3>
                <p class="repair__desc">
                  18 специалистов с профильной высокой квалификацией
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="quote">
        <div class="quote_block container">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/img/quote.png" alt="цитата" />
          <blockquote>
            Наш сертифицированный автосервис предоставляет гарантию на 1 год.
          </blockquote>
          <p>— Иван Иванов, директор</p>
        </div>
      </section>
      <section class="frame">
        <div class="frame-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/img/car.png" alt="frame image" />
        </div>
      </section>
      <section class="certificate">
        <div class="container">
          <div class="certificate_block">
            <div class="certificate_text">
              <h2>Наши Сертификаты</h2>
              <p>
                Мы предоставляем высококачественный сервис и вы можете
                ознакомиться с нашими сертификатами, которые подтверждают наши
                гарантии и специфику выполняемых работ.
              </p>
            </div>
            <div class="certificate_img">
              <img src="<?php echo get_template_directory_uri(); ?>./assets/img/Light.png" alt="сертификат 1" />
              <img src="<?php echo get_template_directory_uri(); ?>./assets/img/Light-1.png" alt="сертификат 2" />
              <img src="<?php echo get_template_directory_uri(); ?>./assets/img/Light-2.png" alt="сертификат 3" />
            </div>
          </div>
        </div>
      </section>
      <section class="team">
        <h4 class="team__subtitle">Команда</h4>
        <h2 class="team__title">Кто мы?</h2>
        <p class="team__desc">
          Наша команда собрана исключительно из профессионалов<br />
          своего дела, которые работают на ваше благо
        </p>

        <div class="team__list">
          <div class="team__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>./assets/img/team_1.png"
              alt="Имя Фамилия"
              class="team__avatar"
            />
            <h3 class="team__name">Имя Фамилия</h3>
            <p class="team__role">Кузовной ремонт</p>
          </div>
          <div class="team__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>./assets/img/team_2.png"
              alt="Имя Фамилия"
              class="team__avatar"
            />
            <h3 class="team__name">Имя Фамилия</h3>
            <p class="team__role">Ремонт двигателей</p>
          </div>
          <div class="team__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>./assets/img/team_3.png"
              alt="Имя Фамилия"
              class="team__avatar"
            />
            <h3 class="team__name">Имя Фамилия</h3>
            <p class="team__role">Ремонт подвески</p>
          </div>
          <div class="team__item">
            <img
              src="<?php echo get_template_directory_uri(); ?>./assets/img/team_4.png"
              alt="Имя Фамилия"
              class="team__avatar"
            />
            <h3 class="team__name">Имя Фамилия</h3>
            <p class="team__role">Администратор</p>
          </div>
        </div>
      </section>
      <section class="contact-block">
        <h2>Проблема с автомобилем? Мы поможем!</h2>
        <form class="contact-form">
          <input type="tel" placeholder="+7 (000) 000-0000" required />
          <button type="submit">Связаться с нами</button>
        </form>
        <p class="contact-note">
          Оставляя заявку, вы соглашаетесь на
          <a href="#">обработку персональных данных</a>
          и с <a href="#">условиями бронирования счёта</a>
        </p>
      </section>

</main>

<?php get_footer(); ?>
