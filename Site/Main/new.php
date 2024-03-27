<style>
    /* ====== GOOGLE FONTS ======  */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    /* ====== VARIABLES CSS ======  */
    :root {
        --header-height: 3rem;

        /* ====== Font weight ======  */
        --font-medium: 500;
        --font-semi-bold: 600;
        --font-bold: 700;

        /* ====== Colores ======  */
        --dark-color: #141414;
        --dard-color-light: #8a8a8a;
        --dard-color-lighten: #f2f2f2;
        --white-color: #fff;

        /* ====== Font and typography ====== */
        --body-font: 'Poppins', sans-serif;
        --big-font-size: 1.25rem;
        /*20px*/
        --bigger-font-size: 1.5rem;
        /*24px*/
        --biggest-font-size: 2rem;
        /*32px*/
        --h2-font-size: 1.25rem;
        /*20px*/
        --normal-font-size: .938rem;
        /*15px*/
        --smaller-font-size: .813rem;
        /*13px*/

        /* ====== Margenes ====== */
        --mb-1: .5rem;
        /*8px*/
        --mb-2: 1rem;
        /*16px*/
        --mb-3: 1.25rem;
        /*20px*/
        --mb-4: 2rem;
        /*32px*/
        --mb-5: 2.5rem;
        /*40px*/
        --mb-6: 3rem;
        /*48px*/


    }

    .box_main {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .l-main {
        margin-top: 5rem;
    }

    .section-title {
        position: relative;
        font-size: var(--big-font-size);
        margin-bottom: var(--mb-4);
        text-align: center;
        letter-spacing: .1rem;
        /*1.6px*/
    }

    .section-title::after {
        content: "";
        position: absolute;
        width: 56px;
        height: .18rem;
        top: -1rem;
        left: 0;
        right: 0;
        margin: auto;
        background-color: var(--dark-color);
    }

    /* ====== LAYOUT ====== */
    .bd-grid {
        max-width: 1024px;
        display: grid;
        grid-template-columns: 100%;
        column-gap: 2rem;
        width: calc(100% - 2rem);
        margin-left: var(--mb-2);
        margin-right: var(--mb-2);
    }

    .l-header {
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: var(--z-fixed);
        background-color: var(--dard-color-lighten);
    }



    .active::before {
        content: "";
        position: absolute;
        bottom: -.5rem;
        left: 45%;
        width: 4px;
        height: 4px;
        background-color: var(--dark-color);
        border-radius: 50%;
    }


    .home__sneaker {
        position: relative;
        display: flex;
        justify-content: center;
        align-self: center;
    }

    .home__shape {
        width: 220px;
        height: 220px;
        background-color: var(--dark-color);
        border-radius: 50%;
    }

    .home__img {
        position: absolute;
        top: 1.5rem;
        max-width: initial;
        width: 275px;
        transform: var(--rotate-img);
    }

    .home__new {
        display: block;
        font-size: var(--smaller-font-size);
        font-weight: var(--font-semi-bold);
        margin-bottom: var(--mb-2);
    }

    .home__title {
        font-size: var(--bigger-font-size);
        margin-bottom: var(--mb-1);
    }

    .home__description {
        margin-bottom: var(--mb-6);
    }

    /* BUTTON */
    .button {
        display: inline-block;
        background-color: var(--dark-color);
        color: var(--white-color);
        padding: 1.125rem 2rem;
        /* 18px 32px*/
        font-weight: var(--font-medium);
        border-radius: .5rem;
        /*8px*/
        transition: .3s;
    }

    .button:hover {
        transform: translateY(-.25rem);
    }

    .button-light {
        display: inline-flex;
        color: var(--dark-color);
        font-weight: var(--font-bold);
        align-items: center;
    }

    .button-icon {
        font-size: 1.25rem;
        margin-left: var(--mb-1);
        transition: .3s;
    }

    .button-light:hover .button-icon {
        transform: translateX(.25rem);
    }

    /* ===== FEATURED ===== */
    .featured__container {
        row-gap: 2rem;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }

    .sneaker {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
        background-color: var(--dard-color-lighten);
        transition: .3s;
    }

    .sneaker__sale {
        position: absolute;
        left: .5rem;
        background-color: var(--dark-color);
        color: var(--white-color);
        padding: .25rem .5rem;
        border-radius: .25rem;
        font-size: var(--h2-font-size);
        transform: rotate(-90deg);
        letter-spacing: .1rem;
    }

    .sneaker__img {
        width: 200px;
        margin-top: var(--mb-3);
        margin-bottom: var(--mb-6);
        transform: var(--rotate-img);
        filter: drop-shadow(0 12px 8px rgba(0, 0, 0, 0.2));
    }

    .sneaker__name,
    .sneaker__preci {
        font-size: var(--h2-font-size);
        letter-spacing: .1rem;
        font-weight: var(--font-semi-bold);
    }

    .sneaker__name {
        margin-bottom: var(--mb-1);
    }

    .sneaker__preci {
        margin-bottom: var(--mb-4);
    }

    .sneaker:hover {
        transform: translateY(-.5rem);
    }

    .sneaker__pages {
        margin-top: var(--mb-6);
    }

    .sneaker__pag {
        padding: .5rem 1rem;
        border: 1px solid var(--dark-color);
    }

    .sneaker__pag:hover {
        background: var(--dark-color);
        color: white;
    }

    /* ===== COLLECTION ===== */
    .collection__container {
        row-gap: 2rem;
        justify-content: center;
    }

    .collection__card {
        position: relative;
        display: flex;
        height: 328px;
        background-color: var(--dard-color-lighten);
        padding: 2rem;
        border-radius: .5rem;
        transition: .3s;
    }

    .collection__data {
        align-items: center;
    }

    .collection__img {
        position: absolute;
        top: 0;
        right: 0;
        width: 230px;
    }

    .collection__name {
        font-size: var(--bigger-font-size);
        margin-bottom: .25rem;
    }

    .collection__description {
        margin-bottom: var(--mb-2);
    }

    .collection__card:hover {
        transform: translateY(-.5rem);
    }

    /* ===== WOMEN SNEAKERS ===== */
    .women__container {
        row-gap: 2rem;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));

    }

    /* ===== OFFER ===== */
    .offer__container {
        grid-template-columns: 55% 44%;
        column-gap: 0;
        justify-content: center;
        background-color: var(--dard-color-lighten);
        border-radius: .5rem;
    }

    .offer__data {
        padding: 4rem 0 4rem 1.5rem;
    }

    .offer__title {
        font-size: var(--biggest-font-size);
        margin-bottom: .25rem;
        color: #141414;
    }

    .offer__description {
        margin-bottom: var(--mb-3);
    }

    .offer__img {
        margin-bottom: var(--mb-3);
    }

    .offer__img {
        width: 153px;
    }

    /* ===== NEW COLLECTION ===== */
    .new__container {
        row-gap: 2rem;
    }

    .new__mens {
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: var(--dard-color-lighten);
        border-radius: .5rem;
        padding: 2rem;
    }

    .new__mens-img {
        width: 276px;
        margin-bottom: var(--mb-3);
    }

    .new__title {
        font-size: var(--bigger-font-size);
        margin-bottom: .25rem;
    }

    .new__preci {
        display: block;
        margin-bottom: var(--mb-3);
    }

    .new__sneaker {
        display: grid;
        gap: 1.5rem;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }

    .new__sneaker-card {
        position: relative;
        padding: 3.5rem 1.5rem;
        background-color: var(--dard-color-lighten);
        border-radius: .5rem;
        overflow: hidden;
        display: flex;
        justify-content: center;
    }

    .new__sneaker-img {
        width: 220px;
    }

    .new__sneaker-overlay {
        position: absolute;
        left: 0;
        bottom: -100%;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(138, 138, 138, .3);
        transition: .3s;
    }

    .new__sneaker-card:hover .new__sneaker-overlay {
        bottom: 0;
    }
</style>
<div class="container box_main">
    <main>

        <!-- ===== FEATURED ===== -->
        <section class="featured section l-main" id="featured">
            <h2 class="section-title">FEATURED</h2>

            <div class="featured__container bd-grid">
                <article class="sneaker">
                    <div class="sneaker__sale">Sale</div>
                    <img src="../../Content/Images/New/sale11.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Jordan</span>
                    <span class="sneaker__preci">$149.99</span>
                    <a href="#" class="button-light">12.09.2024 <i class='bx bx-right-arrow-alt button-icon'></i></a>
                </article>

                <article class="sneaker">
                    <div class="sneaker__sale">Sale</div>
                    <img src="../../Content/Images/New/sale5.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Free RN</span>
                    <span class="sneaker__preci">$149.99</span>
                    <a href="#" class="button-light">22.03.2024<i class='bx bx-right-arrow-alt button-icon'></i></a>
                </article>

                <article class="sneaker">
                    <div class="sneaker__sale">Sale</div>
                    <img src="../../Content/Images/New/men.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Free RN</span>
                    <span class="sneaker__preci">$149.99</span>
                    <a href="#" class="button-light">16.01.2025 <i class='bx bx-right-arrow-alt button-icon'></i></a>
                </article>
            </div>
        </section>


        <!-- ===== WOMEN SNEAKERS ===== -->
        <section class="women section l-main" id="women">
            <h2 class="section-title">NEW</h2>

            <div class="women__container bd-grid">
                <article class="sneaker">
                    <img src="../../Content/Images/New/sale7.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Free RN</span>
                    <span class="sneaker__preci">$149.99</span>
                    <a href="#" class="button-light">04.04.2024 <i class='bx bx-right-arrow-alt button-icon'></i></a>
                </article>

                <article class="sneaker">
                    <img src="../../Content/Images/New/sale10.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Free TN</span>
                    <span class="sneaker__preci">$149.99</span>
                    <a href="#" class="button-light">04.04.2024 <i class='bx bx-right-arrow-alt button-icon'></i></a>
                </article>

                <article class="sneaker">
                    <img src="../../Content/Images/New/sale11.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike GS Pink</span>
                    <span class="sneaker__preci">$149.99</span>
                    <a href="#" class="button-light">04.04.2024 <i class='bx bx-right-arrow-alt button-icon'></i></a>
                </article>

                <article class="sneaker">
                    <img src="../../Content/Images/New/sale8.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Get 5</span>
                    <span class="sneaker__preci">$149.99</span>
                    <a href="#" class="button-light">04.04.2024 <i class='bx bx-right-arrow-alt button-icon'></i></a>
                </article>
            </div>
        </section>

        <!-- ===== OFFER ===== -->
        <section class="offer section l-main">
            <div class="offer__container bd-grid">
                <div class="offer__data">
                    <h3 class="offer__title">50% OFF</h3>
                    <p class="offer__description">In Adidas Superstar sneakers</p>
                    <a href="../Main/index.php?men" class="button">Shop Now</a>
                </div>

                <img src="../../Content/Images/New/sale6.jpg" alt="" class="offer__img">
            </div>
        </section>

        <!-- ===== NEW COLLECTION ===== -->
        <section class="new section l-main" id="new">
            <h2 class="section-title">FOR BASKETBALL</h2>

            <div class="new__container bd-grid">

                <div class="new__sneaker">
                    <div class="new__sneaker-card">
                        <img src="../../Content/Images/New/sale1.jpg" alt="" class="new__sneaker-img">
                        <div class="new__sneaker-overlay">
                            <a href="#" class="button">04.04.2024</a>
                        </div>
                    </div>

                    <div class="new__sneaker-card">
                        <img src="../../Content/Images/New/sale4.jpg" alt="" class="new__sneaker-img">
                        <div class="new__sneaker-overlay">
                            <a href="#" class="button">04.04.2024</a>
                        </div>
                    </div>

                    <div class="new__sneaker-card">
                        <img src="../../Content/Images/New/sale12.jpg" alt="" class="new__sneaker-img">
                        <div class="new__sneaker-overlay">
                            <a href="#" class="button">04.04.2024</a>
                        </div>
                    </div>

                    <div class="new__sneaker-card">
                        <img src="../../Content/Images/New/sale12.jpg" alt="" class="new__sneaker-img">
                        <div class="new__sneaker-overlay">
                            <a href="#" class="button">04.04.2024</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>