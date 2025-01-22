

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="styles.css" />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <title>Tiket Konser</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lora:wght@600;700&family=Poppins:wght@400;500;600;700&display=swap");

:root {
  --primary-color: #2f2f2f;
  --text-dark: #18181b;
  --text-light: #71717a;
  --white: #ffffff;
  --max-width: 1200px;
  --header-font: "poppins", serif;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__header {
  margin-bottom: 1rem;
  font-size: 2.5rem;
  font-weight: 700;
  font-family: var(--header-font);
  color: var(--text-dark);
}

.section__subheader {
  color: var(--text-light);
}

.btn {
  padding: 0.75rem 2rem;
  font-size: 1rem;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 5rem;
  cursor: pointer;
  transition: 0.3s;
}

.btn:hover {
  background-color: var(--text-dark);
}

img {
  display: flex;
  width: 100%;
}

a {
  text-decoration: none;
}

html,
body {
  scroll-behavior: smooth;
  overflow-x: hidden;
}

body {
  font-family: "Poppins", sans-serif;
}

header {
  background-color: #000000;
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

nav {
  max-width: var(--max-width);
  margin: auto;
  padding: 1rem 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;

}

.nav__logo {
  flex: 1;
}

.nav__logo a {
  font-size: 1.5rem;
  font-weight: 600;
  font-family: var(--header-font);
  color: var(--white);
}

.nav__links {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 2rem;
}

.link a {
  position: relative;
  padding: 10px 0;
  color: var(--white);
  transition: 0.3s;
}

.link a::after {
  position: absolute;
  content: "";
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  height: 2px;
  width: 0;
  background-color: var(--white);
  transition: 0.3s;
}

.link a:hover::after {
  width: 100%;
}

.nav__menu__btn {
  display: none;
  font-size: 1.5rem;
  color: var(--white);
}

.nav__actions {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 2rem;
}

.nav__actions span {
  font-size: 1.2rem;
  color: var(--white);
  cursor: pointer;
}

.header__container {
  position: relative;
  max-width: fit-content;
  text-align: center;
  color: var(--white);
  overflow: hidden; 
  background: rgba(0, 0, 0, 0.5); 
}

.background-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; /* Untuk memastikan video memenuhi container */
  z-index: -1; /* Mengatur video di belakang konten lainnya */
}


.header__container h1 {
  color: #ffffff;
  margin-top: 4rem;
  margin-bottom: 1rem;
  font-size: 4rem;
  font-weight: 600;
  font-family: var(--header-font);
}

.header__container p {
  max-width: 600px;
  margin-inline: auto;
  margin-bottom: 4rem;
  font-size: 1.2rem;
}

.header__container form {
  width: 100%;
  max-width: 350px;
  margin-inline: auto;
  margin-bottom: 4rem;
  padding-block: 0.25rem;
  padding-inline: 1.25rem 0.25rem;
  display: flex;
  align-items: center;
  backdrop-filter: blur(10px);
  border: 1px solid var(--white);
  border-radius: 5rem;
}

.header__container input {
  width: 100%;
  outline: none;
  border: none;
  font-size: 1rem;
  color: var(--white);
  background-color: transparent;
}

.header__container input::placeholder {
  color: var(--white);
}

.header__container button {
  padding: 11px 12px;
  font-size: 1.25rem;
  outline: none;
  border: none;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 100%;
  cursor: pointer;
}

.header__container a {
  display: inline-block;
  padding: 0 12px;
  font-size: 3rem;
  color: var(--white);
  backdrop-filter: blur(10px);
  border: 1px solid var(--white);
  border-radius: 100%;
}

.choose__container {
  position: relative;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem;
  align-items: center;
}

.choose__container .choose__bg {
  position: absolute;
  top: 1rem;
  left: 50%;
  transform: translateX(-3rem);
  max-width: 300px;
  opacity: 0.4;
  z-index: -1;
}

.choose__grid {
  margin-top: 2rem;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem 1rem;
}

.choose__card span {
  display: inline-block;
  margin-bottom: 0.5rem;
  padding: 5px 10px;
  font-size: 1.25rem;
  background-color: #cad8d8;
  border-radius: 100%;
}

.choose__card h4 {
  margin-bottom: 1rem;
  font-size: 1rem;
  font-weight: 600;
  font-family: var(--header-font);
  color: var(--text-dark);
}

.choose__card p {
  color: var(--text-light);
}

.choose__image img {
  max-width: 500px;
  margin: auto;
  border-radius: 10px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.offer__container {
  padding-block: 5rem;
  display: grid;
  grid-template-columns:
    minmax(0, 1fr)
    minmax(0, var(--max-width))
    minmax(0, 1fr);
  row-gap: 2rem;
}

.offer__grid__top {
  grid-column: 1/3;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2rem;
}

.offer__grid__bottom {
  grid-column: 2/4;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2rem;
}

.offer__container img {
  border-radius: 10px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.offer__content {
  padding-right: 1rem;
}

.offer__content .section__subheader {
  margin-bottom: 2rem;
}

.craft__container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2rem;
  align-items: center;
}

.craft__container .section__subheader {
  margin-bottom: 2rem;
}

.craft__image {
  position: relative;
  isolation: isolate;
}

.craft__image::before {
  position: absolute;
  content: "";
  bottom: 0;
  left: 0;
  width: 100%;
  height: 50%;
  background-color: #ebf1f1;
  border-radius: 15px;
  transition: 0.3s;
  z-index: -1;
}

.craft__image:hover::before {
  height: 80%;
}

.craft__image__content {
  padding-bottom: 2rem;
  text-align: center;
  transition: 0.3s;
}

.craft__image__content img {
  margin-bottom: 1rem;
  max-width: 250px;
  margin: auto;
}

.craft__image__content p {
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-dark);
}

.craft__image__content h4 {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.craft__image:hover .craft__image__content {
  transform: translateY(-2rem);
}

.craft__image a {
  position: absolute;
  left: 50%;
  bottom: 10px;
  transform: translate(-50%, 50%);
  padding: 0 7px;
  font-size: 1.75rem;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 100%;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
  opacity: 0;
  transition: 0.3s;
}

.craft__image:hover a {
  opacity: 1;
}

.modern__container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem;
}

.modern__image {
  position: relative;
  width: 100%;
  max-width: 600px;
  height: 100%;
  min-height: 470px;
  margin: auto;
}

.modern__image img {
  display: block;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi untuk efek membesar */
}

.modern__image img:hover {
  transform: scale(1.2); /* Membesarkan gambar */
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan untuk efek dramatis */
  z-index: 1; /* Pastikan gambar terdepan saat di-hover */
}

.modern__bg {
  position: absolute;
  max-width: 200px;
  right: 0;
  top: -4rem;
  opacity: 0.5;
}

.modern__img-1,
.modern__img-2,
.modern__img-3 {
  position: absolute;
  border-radius: 10px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.modern__img-1 {
  max-width: 375px;
}

.modern__img-2 {
  max-width: 175px;
  right: 0;
}

.modern__img-3 {
  max-width: 250px;
  right: 0;
  bottom: -2rem;
}

.modern__grid {
  margin-block: 2rem;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem;
}

.modern__card {
  display: flex;
  gap: 1rem;
}

.modern__card span {
  font-size: 0.8rem;
  font-weight: 800;
  color: var(--text-dark);
}

.modern__card p {
  color: var(--text-light);
}

.testimonial__container .section__header {
  text-align: center;
}

.swiper {
  margin-top: 2rem;
  padding-bottom: 2rem;
  width: 100%;
}

.testimonial__card {
  max-width: 900px;
  margin: auto;
  padding: 1rem;
  text-align: center;
}

.testimonial__card p {
  margin-bottom: 1rem;
  font-size: 1.1rem;
  color: var(--text-dark);
}

.testimonial__card img {
  max-width: 60px;
  margin-inline: auto;
  margin-bottom: 1rem;
  border-radius: 100%;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.testimonial__card h4 {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.testimonial__card h5 {
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-light);
}

.blog__grid {
  margin-top: 4rem;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
  
}

.blog__card {
  transition: transform 0.3s ease;
}

.blog__card:hover {
  transform: scale(1.05); 
}

.blog__card img {
  margin-bottom: 1rem;
  border-radius: 10px;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
  
}

.blog__card h4 {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.blog__card p {
  font-weight: 500;
  color: var(--text-dark);
}

.blog__card p span {
  font-weight: 400;
  font-style: italic;
  color: var(--text-light);
}

.footer {
  background-color: #000957;
}

.footer__container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 5rem;
  align-items: center;
  border-bottom: 1px solid var(--white);
}

.footer__content h4 {
  margin-bottom: 1rem;
  font-size: 2rem;
  font-weight: 600;
  line-height: 2.5rem;
  color: var(--white);
}

.footer__content p {
  color: var(--white);
}

.footer__form form {
  width: 100%;
  max-width: 600px;
  margin-inline: auto;
  padding: 5px;
  display: flex;
  align-items: center;
  gap: 1rem;
  background-color: var(--white);
  border-radius: 10px;
}

.footer__form input {
  width: 100%;
  padding: 0 1rem;
  outline: none;
  border: none;
  font-size: 1rem;
}

.footer__form button {
  padding: 1rem 1.5rem;
  outline: none;
  border: none;
  font-size: 1.2rem;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 5px;
}

.footer__bar {
  padding-block: 2rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2rem;
}

.footer__logo h4 a {
  font-size: 1.5rem;
  font-weight: 600;
  font-family: var(--header-font);
  color: var(--white);
}

.footer__logo p {
  margin-top: 5px;
  font-size: 0.8rem;
  color: var(--white);
}

.footer__nav {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 2rem;
}

.footer__link a {
  font-weight: 500;
  color: var(--white);
  white-space: nowrap;
}

@media (width < 1200px) {
  .offer__container {
    row-gap: 1rem;
  }


  .craft__container {
    gap: 1rem;
  }
}

@media (width < 900px) {
  .nav__actions {
    display: none;
  }

  .choose__container {
    grid-template-columns: repeat(1, 1fr);
  }

  .choose__container .choose__bg {
    left: 0;
    transform: translateX(0);
  }

  .choose__image {
    grid-area: 1/1/2/2;
  }


  .craft__container {
    grid-template-columns: repeat(2, 1fr);
  }

  .modern__container {
    grid-template-columns: repeat(1, 1fr);
    gap: 4rem;
  }

  .blog__grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
  }

  .footer__container {
    grid-template-columns: repeat(1, 1fr);
    text-align: center;
  }
}

@media (width < 600px) {
  nav {
    position: fixed;
    width: 100%;
    padding: 1rem;
    background-color: #000000;
    z-index: 99;
  }

  .nav__links {
    position: absolute;
    left: 0;
    top: 68px;
    padding: 2rem;
    width: 100%;
    flex-direction: column;
    transform: scaleY(0);
    transform-origin: top;
    transition: 0.5s;
    background-color: rgba(0, 0, 0, 0.9);
  }

  .nav__links .link a {
    opacity: 0;
  }

  .nav__links.open .link a {
    opacity: 1;
  }

  .nav__links.open {
    transform: scaleY(1);
  }

  .nav__menu__btn {
    display: block;
  }

  .header__container h1 {
    margin-top: 4rem;
    font-size: 3.5rem;
  }


  .blog__grid {
    grid-template-columns: repeat(1, 1fr);
    row-gap: 2rem;
  }

  .footer__bar {
    flex-direction: column;
  }
}



/* google-font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

/* variable-css */
:root{
    --header-height:3.5rem;

    /* coolor */

    --first-color:hsl(228, 66%,53%);
    --first-color-alt:hsl(228, 66%,47%);
    --first-color-light:hsl(228, 62%,59%);
    --first-color-lighten:hsl(228, 100%,97%);
    --second-color:hsl(25, 83%,53%);
    --title-color:hsl(228, 57%,28%);
    --text-color:hsl(228, 15%,50%);
    --text-color-light:hsl(228, 12%, 75%);
    --border-color:hsl(228, 99%,98%);
    --body-color:#fff;
    --container-color:#fff;

/* font-and-typografi */

    --body-font:'Poppins', sans-serif;
    --biggest-font-size:2.25rem;
    --h1-font-size:1.5rem;
    --h2-font-size:1.25ren;
    --h3-font-size:1rem;
    --normal-font-size: .938rem;
    --small-font-size: .813rem;
    --smaller-font-size: .75rem;

/* font-weight */
    --font-medium:500;
    --font-semi-bold:600;

    /* z-index */
    --z-tooltip:10;
    --z-fixed:100;
}

/* responive-typography */
    @media screen and (min-width: 1024px){
     :root{
    --biggest-font-size:4rem;
    --h1-font-size:2.25rem;
    --h2-font-size:1.5ren;
    --h3-font-size:1.23rem;
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
     }
    }

    /* base */
    *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    html{
        scroll-behavior: smooth;
    }

    body{
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        background-color: var(--body-color);
        color: var(--text-color);
        transition: .3s; /* for animation dark mode*/
    }

    h1,h2,h3{
        color: var(--title-color);
        font-weight: var(--font-semi-bold);
    }

    ul{
        list-style: none;
    }

    a{
        text-decoration: none;
    }

    img{
        max-width: 100%;
        height: auto;
    }

    input,
    button{
        font-family: var(--body-font);
        outline: none;
        border: none;
    }

 /* THEME */
    .change-theme{
        font-size: 1.25rem;
        color: #fff;
        cursor: pointer;
        transition: .3s;
    }

    .change-theme:hover{
        color: var(--first-color);
    }

/* variable-dark-themes */
body.dark-theme{
    --first-color:hsl(228, 66%,62%);
    --second-color:hsl(25, 57%, 54%);
    --title-color:hsl(228, 8%, 95%);
    --text-color:hsl(228, 8%, 70%);
    --border-color:hsl(228, 16%, 14%);
    --body-color: hsl(228, 12%, 8%);
    --container-color:hsl(228, 16%, 12%);
}

/*
 color change in some parts pff
the wesite, in the dark
*/
.dark-theme .home__search,
.dark-theme .swiper-button-next,
.dark-theme .swiper-button-prev{
    border: 3px solid var(--border-color);
}

.dark-theme .nav__menu,
.dark-theme .home__img,
.dark-theme .popular__card:hover,
.dark-theme .value__img,
.dark-theme .accordion-open,
.dark-theme .accordion-open .value__accordion-icon,
.dark-theme .accordion-open .value__accordion-arrow,
.dark-theme .contact__img,
.dark-theme .contact__card-box:hover,
.dark-theme .scrollup{
    box-shadow: none;
}

.dark-theme .value__orbe,
.dark-theme .value__accordion-icon,
.dark-theme .value__accordion-arrow,
.dark-theme .contact__orbe,
.dark-theme .contact__card i,
.dark-theme .contact__card-button,
.dark-theme .subscribe__container{
    background-color: var(--container-color);
}

    .dark-theme .subscribe__container{
        border:  6px solid var(--border-color);
    }

    .dark-theme .subscribe__description{
        color: var(--text-color);
    }

    .dark-theme::-webkit-scrollbar{
        background-color: hsl(228, 4%, 15%);
    }

    .dark-theme::-webkit-scrollbar-thumb{
        background-color: hsl(228, 4%, 25%);
    }

    .dark-theme::-webkit-scrollbar-thumb:hover{
        background-color: hsl(228, 4%, 35%);
    }

    /* reuseable-css-classes */
    .container{
        max-width: 1024px;
        margin-left: 1.5rem;
        margin-right: 1.5rem;
    }

    .grid{
        display: grid;
    }

    .section{
        padding: 4.5rem 0 2rem;
    }

    ;.section__title{
        font-size: var(--h2-font-size);
        margin-top: 1rem;
    }

    .section__title span{
        color: var(--second-color);
    }

    .section__subtitle{
        display: block;
        font-size: var(--smaller-font-size);
        color: var(--second-color);
    }

    main{
        overflow: hidden;
    }

    /* header&nav */
    .header{
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #080113;

        transition: .4s;
    }

    .nav{
        height: var(--header-height);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav__logo{
        color: #fff;
        display: inline-flex;
        align-items: center;
        column-gap: .25rem;
        font-weight: var(--font-medium);
        transition: .3s;
    }

    .nav__logo i{
        font-size: 1rem;
    }

    .nav__logo:hover{
        color: var(--first-color);
    }

    @media  screen and (max-width:1023px) {
        .nav__menu{
            position: fixed;
            bottom: 2rem;
            background-color: var(--container-color);
            box-shadow: 0 8px 24px hsla(228, 66%, 45%, .15);
            width: 90%;
            left: 0;
            right: 0;
            margin: 0 auto;
            padding: 1.30rem 3rem;
            border-radius: 1.25rem;
            transition: .4s;
        }

        .nav__list{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav__link{
            color: var(--text-color);
            display: flex;
            padding: .5rem;
            border-radius: 50%;
        }

        .nav__link i{
            font-size: 1.25rem;
        }

        .nav__link span{
            display: none;
        }
    }

/* change-background */
    .scroll-header{
         background-color: var(--body-color);
        box-shadow: 0 1px 4px hsla(228, 4%, 15%, .1);
    }

    .scroll-header .nav__logo{
        color: var(--first-color);

    }

    .scroll-header .change-theme{
        color: var(--title-color);
    }

    /* avtive link */
    .active-link{
        background: linear-gradient(101deg,
                    hsl(228, 66%, 53%),
                    hsl(228, 66%, 47%));
        color: #fff;
        box-shadow: 0 4px 8px hsla(228, 66%, 25%, .25);
    }

    /* home */
    .home{
        background: linear-gradient(170deg,
        hsl(0, 0%,22%)0%,
        hsl(0, 0%,6%)30%);
    padding-bottom: 0;
    }

    .home__container{
        padding-top: 4rem;
        row-gap: 3.5rem;
    }

    .home__title,
    .home__value-number{
        color: #ffffff;
    }

    .home__title{
        font-size: var(--biggest-font-size);
        line-height: 120%;
        margin-bottom: 1.25rem;
    }

    .home__description{
        color: var(--text-color-light);
        margin-bottom: 2rem;
    }

    .home__search{
        background-color: var(--body-color);
        padding: .35rem .35rem .35rem .75rem;
        display: flex;
        align-items: center;
        border-radius: .75rem;
        border: 3px solid var(--text-color-light);
        margin-bottom: 2rem;
    }

    .home__search i{
        font-size: 1.25rem;
        color: var(--first-color);
    }

    .home__search-input{
        width: 90%;
        background-color: var(--body-color);
        color: var(--text-color);
        margin: 0 .5rem;
    }

    .home__search-input::placeholder{
        color: var(--text-color-light);
    }

    .home__value{
        display: flex;
        column-gap: 2.5rem;
    }

    .home__value-number{
        font-size: var(--h1-font-size);
        font-weight: var(--font-medium);
    }

    .home__value-number span{
        color: var(--second-color);
    }

    .home__value-description{
        display: flex;
        color: var(--text-color-light);
        font-size: var(--smaller-font-size);
    }

    .home__images{
        position: relative;
        display: flex;
        justify-content: center;
    }

    .home__orbe{
        width: 265px;
        height: 284px;
        background: linear-gradient(180deg,
                  hsl(0, 0%, 16%)93%,
                hsl(0, 0%, 67%)100%);
        border-radius: 135px 135px 0 0;
    }

    .home__img{
        position: absolute;
        width: 250px;
        height: 300px;
        overflow: hidden;
        border-radius: 125px 125px 12px 12px;
        display: inline-flex;
        align-items: flex-end;
        bottom: -1.5rem;
        box-shadow: 0 16px 32px hsla(228, 66%, 25%, .25);
    }

    /* button */
    .button{
        display: inline-block;
        background: linear-gradient(101deg,
                    hsl(228, 66%, 53%),
                    hsl(228,66%, 47%));
        color: #fff;
        padding: 14px 28px;
        border-radius: .5rem;
        font-size: var(--normal-font-size);
        font-weight: var(--font-medium);
        box-shadow: 0 4px 8px hsla(228, 66%, 45%, .25);
        transition: .3s;
        cursor: pointer;
    }

    .button:hover{
        box-shadow: 0 4px 12px hsla(228, 66%, 45%, .25);
    }

    .nav__button{
        display: none;
    }

    /* logos */
    .logos__container{
        padding-top: 2rem;
        grid-template-columns: repeat(2, 1fr);
        gap: 3rem 2rem;
        justify-items: center;
    }

    .logos__img img{
        height: 60px;
        opacity: .3;
        transition: .3s;
    }

    .logos__img img:hover{
        opacity: .6;
    }

    /* popular */
    .popular__container{
        padding: 1rem 0 5rem;
    }

    .popular__card{
        width: 290px;
        background-color: var(--container-color);
        padding: .5rem .5rem 1.5rem;
        border-radius: 1rem;
        margin: 0 auto;
        transition: .4s;
    }

    .popular__img{
        border-radius: 1rem;
        margin-bottom: 1rem;
    }

    .popular__data{
        padding: 0 1rem 0 .5rem;
    }

    .popular__price{
        font-size: var(--h2-font-size);
        color: var(--text-color);
        margin-bottom: .25rem;
    }

    .popular__price span{
        color: var(--second-color);
    }

    .popular__title{
        font-size: var(--h3-font-size);
        margin-bottom: .75rem;
    }

    .popular__description{
        font-size: var(--small-font-size);
    }

    .popular__card:hover{
        box-shadow: 0 12px 16px hsla(228, 66%, 45%, .1);
    }

    /* swipper-class */
    .swiper-button-prev::after,
    .swiper-button-next::after{
        content: '';
    }

    .swiper-button-next,
    .swiper-button-prev{
        top: initial;
        bottom: 0;
        width: initial;
        height: initial;
        background-color: var(--container-color);
        border: 2px solid var(--text-color-light);
        padding: 6px;
        border-radius: .5rem;
        font-size: 1.5rem;
        color: var(--first-color);
    }

    .swiper-button-prev{
        left: calc(50% - 3rem);
    }

    .swiper-button-next{
        right: calc(50% - 3rem);
    }

    /* value */
    .value__container{
        row-gap: 3rem;
    }

    .value__images{
        position: relative;
        display: flex;
        justify-content: center;
    }

    .value__orbe{
        width: 266px;
        height: 316px;
        background-color: hsl(228, 24%, 97%);
        border-radius: 135px 135px 16px 16px;
    }

    .value__img{
        position: absolute;
        width: 250px;
        height: 300px;
        overflow: hidden;
        border-radius: 125px 125px 12px 12px;
        inset: 0;
        margin: auto;
        box-shadow: 0 16px 32px hsla(228, 66%, .25);
    }

    .value__description{
        font-size: var(--small-font-size);
        margin-bottom: 2rem;
    }

    .value__accordion{
        display: grid;
        row-gap: 1.5rem;
    }

    .value__accordion-item{
        background-color: var(--body-color);
        border: 2px solid var(--border-color);
        border-radius: .5rem;
        padding: 1rem .75rem;
    }

    .value__accordion-header{
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .value__accordion-icon{
        background-color: var(--first-color-lighten);
        padding: 5px;
        border-radius: .25rem;
        font-size: 18px;
        color: var(--first-color);
        margin-right: .75rem;
        transition: .3s;
    }

    .value__accordion-title{
        font-size: var(--small-font-size);
    }

    .value__accordion-arrow{
        display: inline-flex;
        background-color: var(--first-color-lighten);
        padding: .25rem;
        color: var(--first-color);
        border-radius: 2px;
        font-size: 10px;
        margin-left: auto;
        transition: .3s;
    }

    .value__accordion-arrow i{
        transition: .4s;
    }

    .value__accordion_description{
        font-size: var(--smaller-font-size);
        padding: 1.25rem 2.25rem 0 2.7rem;
    }

    .value__accordion-content{
        overflow: hidden;
        height: 0;
        transition: all .25s ease;
    }

    /* rotate icons and shadow */
    .accordion-open{
        box-shadow: 0 12px 32px hsla(228, 66%, 45%, .1);
    }

    .accordion-open .value__accordion-icon{
        box-shadow: 0 4px 4px hsla(228, 66%, 45%, .1);
    }

    .accordion-open .value__accordion-arrow{
        box-shadow: 0 2px 4px hsla(228, 66%, 45%, .1);
    }

    .accordion-open .value__accordion-arrow i{
        transform: rotate(-180deg);
    }

    /* contact */
    .contact__container{
        row-gap: 2rem;
    }

    .contact__images{
        position: relative;
        display: flex;
        justify-content: center;
    }

    .contact__orbe{
        width: 266px;
        height: 316px;
        background-color: hsl(228, 24%, 97%);
        border-radius: 135px 135px 16px 16px;
    }

    .contact__img{
        position: absolute;
        width: 250px;
        height: 300px;
        overflow: hidden;
        border-radius: 125px 125px 12px 12px;
        inset: 0;
        margin: auto;
        box-shadow: 0 16p 32px hsla(228, 66%, 25%, .25);
    }

    .contact__description{
        font-size: var(--small-font-size);
        margin-bottom: 2.5rem;
    }

    .contact__card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.25rem .75rem;
    }

    .contact__card-box{
        background-color: var(--body-color);
        border: 2px solid var(--border-color);
        padding: 1.25rem .75rem;
        border-radius: .5rem;
        transition: .3s;
    }

    .contact__card-info{
        display: flex;
        align-items: flex-start;
        column-gap: .75rem;
        margin-bottom: 1.25rem;
    }

    .contact__card i{
        padding: 6px;
        background-color: var(--first-color-lighten);
        border-radius: 6px;
        font-size: 1.25rem;
        color: var(--first-color);
    }

    .contact__card-title{
        font-size: var(--normal-font-size);
    }

    .contact__card-description{
        font-size: var(--smaller-font-size);
    }

    .contact__card-button{
        font-size: var(--smaller-font-size);
        padding: 14px 0;
        width: 100%;
        border-radius: .25rem;
        background: var(--first-color-lighten);
        color: var(--first-color);
        font-weight: var(--font-semi-bold);
        box-shadow: none;
    }

    .contact__card-button:hover{
        background-color: var(--first-color);
        color: #fff;
    }

    .contact__card-box:hover{
        box-shadow: 0 8px 24px hsla(228, 66%, 45%, .1);
    }

    /* suscribe */
    .subscribe{
        padding: 2.5rem 0;
    }

    .subscribe__container{
        background-color: var(--first-color);
        padding: 3rem 2rem;
        border-radius: 1.25rem;
        border: 6px solid var(--first-color-light);
        text-align: center;
    }

    .subscribe__title{
        font-size: var(--h2-font-size);
        color: #fff;
        margin-bottom: 1rem;
    }

    .subscribe__description{
        color: hsl(228, 90%, 92%);
        font-size: var(--small-font-size);
        margin-bottom: 2rem;
    }

    .subscribe__button{
        border: 2px solid #fff;
        background: var(--first-color-light);
        font-size: var(--small-font-size);
    }

    .subscribe__button:hover{
        background-color: var(--first-color);
    }

    /* footer */
    .footer__container{
        row-gap: 2.5rem;
    }

    .footer__logo{
        color: var(--first-color);
        font-size: var(--h3-font-size);
        font-weight: var(--font-semi-bold);
        display: inline-flex;
        align-items: center;
        column-gap: .25rem;
        margin-bottom: .75rem;
    }

    .footer__logo i{
        font-size: 1.25rem;
    }

    .footer__description,
    .footer__link{
        font-size: var(--small-font-size);
        font-weight: var(--font-medium);
    }

    .footer__content,
    .footer__links{
        display: grid;
    }

    .footer__content{
        grid-template-columns: repeat(2, max-content);
        gap: 2.5rem 4rem;
    }

    .footer__title{
        font-size: var(--h3-font-size);
        margin-bottom: 1rem;
    }

    .footer__links{
        row-gap: .5rem;
    }

    .footer__link{
        color: var(--text-color);
        transition: .3s;
    }

    .footer__link:hover{
        color: var(--title-color);
    }

    .footer__social{
        display: flex;
        column-gap: 1rem;
    }

    .footer__social-link{
        font-size: 1.25rem;
        color: var(--text-color);
        transition: .3s;
    }

    .footer__social-link:hover{
        color: var(--title-color);
    }

    .footer__info,
    .footer__privacy{
        display: flex;
    }

    .footer__info{
        padding-bottom: 6rem;
        margin-top: 5.5rem;
        flex-direction: column;
        text-align: center;
        row-gap: 1.5rem;
    }

    .footer__copy,
    .footer__privacy a{
        font-size: var(--smaller-font-size);
        font-weight: var(--font-medium);
        color: var(--text-color);
    }

    .footer__privacy{
        justify-content: center;
        column-gap: 1.25rem;
    }

    /* scrol-bar */
    ::-webkit-scrollbar{
        width: .6rem;
        border-radius: .5rem;
        background-color: hsl(228, 8%, 76%);
    }

    ::-webkit-scrollbar-thumb{
        background-color: hsl(228, 8%, 65%);
        border-radius: .5rem;
    }

    ::-webkit-scrollbar-thumb:hover{
        background-color: hsl(228, 8%, 54%);
    }

    /* scroll-up */
    .scrollup{
        position: fixed;
        right: 1rem;
        bottom: -30%;
        background-color: var(--container-color);
        box-shadow: 0 8px 12px hsla(228, 66%, 45%, .1 );
        display: inline-flex;
        padding: .35rem;
        border-radius: .25rem;
        color: var(--title-color);
        font-size: 1.25rem;
        z-index: var(--z-tooltip);
        transition: .3s;
    }

    .scrollup:hover{
        transform: translate(-.25rem);
        color: var(--first-color);
    }

    /* show-scroll-up */
    .show-scroll{
        bottom: 8rem;
    }
    /* breakpoints */
    /* for small devices */
    @media screen and (max-width: 350px) {
    .container{
        margin-left: 1rem;
        margin-right: 1rem;
    }

    .section{
        padding: 3.5rem 0 1rem;
    }

    .home{
        padding-bottom: 0;
    }

    .contact__card{
        grid-template-columns: repeat(1, 180px);
        justify-content: center;
    }
}

@media screen and (max-width: 320px) {
    .nav__menu{
        padding: 1.3rem 1.5rem;
    }

    .home__value{
        column-gap: 1rem;
    }
    .home__img{
        width: 220px;
        height: 280px;
    }
    .home__orbe{
        width: 240px;
        height: 264px;
    }

    .logos__container{
        gap: 2rem 1rem;
    }

    .popular__card{
        width: 230px;
        padding: .5rem .5rem .75rem;
    }

    .value__img,
    .contact__img{
        width: 220px;
        height: 260px;
    }
    .value__orbe,
    .contact__orbe{
        width: 236px;
        height: 280px;
    }

    .subscribe__container{
        padding:  2rem 1rem;
    }

    .footer__content{
        gap: 2.5rem;
    }
}

/* for medium divices */
@media screen and (min-width: 576px){
    .nav__menu{
        width: 342px;
    }

    .home__search{
        width: 412px;
    }

    .contact__card{
        grid-template-columns: repeat(2, 192px);
        justify-content: center;
    }

    .footer__content{
        grid-template-columns: repeat(3, max-content);
    }
}

@media screen and (min-width: 767px){
    .home__container{
        grid-template-columns: repeat(2, 1fr);
        padding-top: 2rem;
    }
    .home__orbe{
        align-self: flex-end;
    }
    .home__data{
        padding-bottom: 2rem;
    }

    .logos__container{
        grid-template-columns: repeat(4, max-content);
        justify-content: center;
    }

    .value__container,
    .contact__container{
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
    }

    .contact__images{
        order: 1;
    }
    .contact__card{
        justify-content: initial;
    }

    .subscribe__container{
        padding: 3rem 13rem;
    }

        .footer__container{
            grid-template-columns: repeat(2, max-content);
            justify-content: space-between;
        }
}

/* for large devices */
@media screen and (min-width: 1023px) {
.section{
    padding: 7.5rem 0 1rem;
}
.section__title{
    font-size: 2.25rem;
}
.section__subtitle{
    font-size: var(--normal-font-size);
}
.nav{
    height: calc(var(--header-height) + 1.5rem);


}
.nav__menu{
    width: initial;
    margin-left: auto;
}
.nav__list{
    display: flex;
    column-gap: 3rem;
}
.nav__link{
    color: var(--text-color-light);
}
.nav__link i{
    display: none;
}
.nav__button{
    display: inline-block;
}

.active-link{
    background: none;
    box-shadow: none;
    color: var(--first-color);
    font-weight: var(--font-medium);
}

.change-theme{
    margin: 0 3rem;
    color: var(--text-color-light);
}

.scroll-header .nav__link,
.scroll-header .change-theme{
    color: var(--text-color);
}
.scroll-header .active-link{
    color: var(--first-color);
}

.home{
    padding-bottom: 0;
}
.home__container{
    padding-top: 5rem;
    column-gap: 2rem;
}
.home__data{
    padding-bottom: 4rem;
}
.home__title{
    margin-bottom: 2rem;
}
.home__description,
.home__search{
    margin-bottom: 3rem;
}
.home__value{
    column-gap: 3.5rem;
}
.home__orbe{
    width: 504px;
    height: 611px;
    border-radius: 256px 256px 0 0;
}
.home__img{
    width: 472px;
    height: 634px;
    border-radius: 236px 236px 12px 12px;
    bottom: -2.5rem;
}

.logos__img{
    height: 100px;
}

.popular__container{
    padding-top: 3rem;
}
.popular__card{
    width: 320px;
    padding: .75rem .75rem 2rem;
}
.popular__data{
    padding: 0 .25rem 0 .75rem;
}

.value__container,
.contact__container{
    align-items: flex-start;
    column-gap: 5rem;
}
.value__orbe,
.contact__orbe{
    width: 501px;
    height: 641px;
    border-radius: 258px 258px 16px 16px;
}
.value__img,
.contact__img{
    width: 461px;
    height: 601px;
    border-radius: 238px 238px 12px 12px;
}
.value__img img,
.contact__img img{
    max-width: initial;
    width: 490px;
}
.value__description,
.contact__description{
    font-size: var(--normal-font-size);
    margin-bottom: 2.5rem;
}

.value__accordion-title{
font-size: var(--normal-font-size);
}
.value__accordion-item{
    padding: 1.25rem 1.25rem 1.25rem 1rem;
}
.value__accordion_description{
    padding-bottom: 1rem;
    font-size: var(--small-font-size);
}

.contact__card{
    grid-template-columns: repeat(2, 200px);
}
.contact__card-box{
    padding: 28px 1.5rem 1.6rem;
}

.subscribe__container{
    padding: 4rem 10rem 4.5rem;
    border-radius: 2rem;
    border: 12px solid var(--first-color-light);
}
.subscribe__title{
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
}
.subscribe__description{
    font-size: var(--normal-font-size);
    padding: 0 8rem;
}
.subscribe__button{
    font-size: var(--normal-font-size);
}

.footer__content{
    grid-template-columns: repeat(4, max-content);
}
.footer__title{
    margin-bottom: 1.5rem;
}
.footer__link{
    row-gap: 1rem;
}
.footer__info{
    flex-direction: row;
    justify-content: space-between;
    padding-bottom: 2rem;
}
.show-scroll{
    bottom: 3rem;
    right: 3rem;
}
}

@media screen and (min-width: 1040) {
    .container{
        margin-left: auto;
        margin-right: auto;
    }
}


        header {

        }

        header h1 {
            font-size: 1.8rem;
        }

        header nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        header nav a:hover {
            color: #f4d03f;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .hero button {
            padding: 15px 30px;
            font-size: 1rem;
            color: #141e30;
            background-color: #f4d03f;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
        }

        .hero button:hover {
            background-color: #f1c40f;
        }

        .events {
            padding: 50px 20px;
            text-align: center;
        }

        .events h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .events .event {
            display: inline-block;
            width: 300px;
            margin: 20px;
            background-color: #fff;
            color: #141e30;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .events .event img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .events .event .info {
            padding: 15px;
        }

        .events .event .info h4 {
            margin: 0 0 10px;
            font-size: 1.2rem;
        }

        .events .event .info p {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .events .event .info button {
            padding: 10px 20px;
            font-size: 0.9rem;
            color: #fff;
            background-color: #141e30;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .events .event .info button:hover {
            background-color: #243b55;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }

        .trail {
  position: absolute;
  width: 10px;
  height: 10px;
  background: rgba(72, 0, 149, 0.7); 
  border-radius: 50%;
  pointer-events: none;
  animation: fade 0.8s ease-out forwards;
}

@keyframes fade {
  0% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(3);
  }
}


    </style>
</head>
<body>

<header class="header" id="header">
      <nav class="nav">
      <img src="assets/removebg.png" alt="" style="width: 50px; height: auto;"/>
          <a href="#" class="nav__logo" style="font-family: 'Poppins', sans-serif;  font-weight: 600;  font-size: 24px; ">
              Vibestic <i class="bx bxs-home-alt-2"></i>
          </a>

          <!-- Themechange button -->
          <i class="bx bx-moon change-theme" id="theme-button"></i>

          @if (Route::has('login'))

                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Dashboard</a>
                            @else

                            <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Log in
                                </a>
                                |
                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Register
                                    </a>
                                @endif
                            @endauth

                    @endif
      </nav>
  </header>

    <div class="section__container header__container" id="home">
    <video autoplay muted loop playsinline class="background-video">
    <source src="assets/bgvideo.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>
      <h1>Mulai petualangan musik di sini dengan  cepat</h1>
      <p>
        Temukan konser musik yang kamu sukai dengan mudah melalui platform kami gengz.
        Kami menawarkan akses cepat dan aman untuk berbagai konser dari artis ternama di seluruh dunia.
      </p>
      <form action="/">
        <input type="text" placeholder="Search furniture" />
        <button><i class="ri-search-line"></i></button>
      </form>
      <a href="#choose"><i class="ri-arrow-down-double-line"></i></a>
    </div>

    <section class="section__container choose__container" id="choose">
      <img class="choose__bg" src="assets/3.png" alt="bg" />
      <div class="choose__content">
        <h2 class="section__header">Vibestix</h2>
        <p class="section__subheader">
          Dapatkan tiket untuk konser favoritmu dengan mudah melalui platform kami gengz.
          Kami menawarkan akses cepat dan aman untuk berbagai konser dari artis ternama di seluruh dunia.
        </p>
        <div class="choose__grid">
          <div class="choose__card">
            <span><i class="ri-truck-line"></i></span>
            <h4>Pemesanan Tiket yang Cepat dan Aman</h4>
            <p>
              Menyediakan proses pemesanan tiket yang user friendly, memudahkan user memesan tiket
            </p>
          </div>
          <div class="choose__card">
            <span><i class="ri-shopping-bag-3-line"></i></span>
            <h4>Tampilan Acara Interaktif Dan Seru</h4>
            <p>
              Menampilkan Banyak Line Up Artis dan Band Kelas Lokal dan Internasional
            </p>
          </div>
          <div class="choose__card">
            <span><i class="ri-customer-service-2-line"></i></span>
            <h4>24/7 Support</h4>
            <p>
              Rasakan ketenangan pikiran dengan mengetahui bahwa tim kami
              yang berdedikasi tersedia sepanjang waktu
            </p>
          </div>
          <div class="choose__card">
            <span><i class="ri-loop-right-line"></i></span>
            <h4>konser terpercaya
            </h4>
            <p>
                menyediakan banyak konser terpercaya yang siap untuk anda nikmati disela Waktu anda
            </p>
          </div>
        </div>
      </div>
      <div class="choose__image">
        <img src="assets/1.jpg" alt="choose" />
      </div>
    </section>

    <section class="offer__container" id="offer">
      <div class="offer__grid__top">
        <img src="assets/konser7.jpg" alt="offer" />
        <img src="assets/konser5.jpg" alt="offer" />
        <img src="assets/konser6.jpg" alt="offer" />

        <div class="offer__content">
          <h2 class="section__header">Jelajahi Konser</h2>
          <p class="section__subheader">
            Eksplor tiket konsermu sekarang hanya di vibestix

          </p>
          <button class="btn">jelajahi sekarang</button>
        </div>
      </div>
      <div class="offer__grid__bottom">
        <img src="assets/konser1.jpg" alt="offer" />
        <img src="assets/konser3.jpg" alt="offer" />
        <img src="assets/konser2.jpg" alt="offer" />
        <img src="assets/konser4.jpg" alt="offer" />
      </div>
    </section>



    <section class="section__container modern__container" id="modern">
      <div class="modern__image">
        <img src="assets/bernadya.jpg" alt="modern" class="modern__img-1" />
        <img src="assets/penonton.jpg" alt="modern" class="modern__img-2" />
        <img src="assets/slipknot.jpg" alt="modern" class="modern__img-3" />
      </div>
      <div class="modern__content">
        <h2 class="section__header">
            Kami Membantu Anda Menikmati Pengalaman Musik Live Terbaik

        </h2>
        <p class="section__subheader">
            Hadirkan Momen Tak Terlupakan dengan Vibestix – Aplikasi Pembelian Tiket Konser Terbaik Anda.
            Jadikan impian Anda menonton konser dan festival musik favorit menjadi kenyataan bersama kami.

        </p>
        <div class="modern__grid">
          <div class="modern__card">
            <span><i class="ri-checkbox-blank-circle-line"></i></span>
            <p>
                Temukan Konser Idaman Anda
                Kami menyediakan tiket untuk berbagai konser dan festival musik terkini, dari artis lokal hingga internasional.

            </p>
          </div>
          <div class="modern__card">
            <span><i class="ri-checkbox-blank-circle-line"></i></span>
            <p>
                Pengalaman Pemesanan yang Mudah dan Cepat
                Akses fitur pencarian yang disesuaikan dengan genre atau artis favorit Anda, sehingga Anda tidak akan melewatkan konser impian.

            </p>
          </div>
          <div class="modern__card">
            <span><i class="ri-checkbox-blank-circle-line"></i></span>
            <p>
                Selalu Terdepan dengan Informasi Terbaru
                Dapatkan pemberitahuan tentang jadwal konser terbaru, penawaran eksklusif, dan tiket early bird untuk menikmati pengalaman terbaik.

            </p>
          </div>
          <div class="modern__card">
            <span><i class="ri-checkbox-blank-circle-line"></i></span>
            <p>
                Lebih dari Sekadar Tiket
                Nikmati kemudahan mulai dari pembelian tiket hingga berbagai keuntungan eksklusif, seperti tiket reguler dan akses VIP.

            </p>
          </div>
        </div>
        <button class="btn">Jelajahi</button>
      </div>
    </section>

    <section class="section__container testimonial__container" id="testimonial">
      <h2 class="section__header">Testimonials</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="testimonial__card">
              <p>
                Luar biasa! Dengan Vibestix, saya tidak pernah ketinggalan konser favorit saya. Proses pembelian tiketnya sangat mudah, dan saya langsung mendapatkan notifikasi ketika ada acara baru. Aplikasi ini benar-benar mengubah cara saya menikmati musik live."
                - Andi Pratama, Pecinta Musik dan Festival Enthusiast

              </p>
              <img src="assets/profile-pic-1.jpg" alt="testimonial" />
              <h4>Sam William</h4>
              <h5>CEO, Co-Founder</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial__card">
              <p>
                I hired them to revamp our office space, and the results
                exceeded my expectations. Their innovative design concepts
                breathed new life into our workplace, making it both functional
                and stylish. The team's attention to detail and commitment to
                quality are truly commendable.
              </p>
              <img src="assets/profile-pic-2.jpg" alt="testimonial" />
              <h4>Michelle Anna</h4>
              <h5>Office Renovator</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial__card">
              <p>
                I had a vision of a minimalist-inspired home, and they brought
                it to life flawlessly. Their designers understood my aesthetic
                and incorporated sleek, clean lines, and a neutral color palette
                to create a serene oasis. I'm in love with my modern,
                clutter-free space!
              </p>
              <img src="assets/profile-pic-3.jpg" alt="testimonial" />
              <h4>John D'souza</h4>
              <h5>Banker</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial__card">
              <p>
                What sets them apart is their professionalism and efficiency.
                They made the entire design process hassle-free, from the
                initial consultation to the final installation. Their team
                handled everything, leaving me with a beautifully designed
                modern interior
              </p>
              <img src="assets/profile-pic-4.jpg" alt="testimonial" />
              <h4>David Laid</h4>
              <h5>Businessman</h5>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="section__container blog_container" id="blog">
      <h2 class="section__header">Recent Blog</h2>
      <div class="blog__grid">
        <div class="blog__card">
          <img src="assets/noah.jpg" alt="blog" />
          <h4>The Evolution of NOAH</h4>
          <p>Since 2000, NOAH, formerly known as Peterpan, has been a legendary force in the Indonesian pop-rock scene.</p>
        </div>
        <div class="blog__card">
          <img src="assets/armada.jpg" alt="blog" />
          <h4>The Journey of Armada</h4>
          <p>
          Since 2007, Armada has been a prominent name in the Indonesian pop-rock music scene.
          </p>
        </div>
        <div class="blog__card">
          <img src="assets/feast.jpg" alt="blog" />
          <h4>The Rise of .Feast</h4>
          <p>Since their formation in 2012, .Feast has emerged as a bold and dynamic force in the Indonesian music scene.</p>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__content">
          <h4>YANG SEMANGAT DONG YANG SEMANGAT DONG</h4>
          <p>
            Mini ku kerjakan gacoan ku budhalkan. Angzayy
          </p>
        </div>
        <div class="footer__form">
          <form action="/">
            <input type="text" placeholder="Enter your email" />
            <button>Subscribe</button>
          </form>
        </div>
      </div>
      <div class="section__container footer__bar">
        <div class="footer__logo">
          <h4><a href="#">TimMini</a></h4>
          <p>Copyright © 2023 Web Design Mastery. All rights reserved.</p>
        </div>
        <ul class="footer__nav">
          <li class="footer__link"><a href="#">About</a></li>
          <li class="footer__link"><a href="#">Partnership</a></li>
          <li class="footer__link"><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  <script>
  document.addEventListener('mousemove', (e) => {
    const trail = document.createElement('div');
    trail.className = 'trail';
    trail.style.left = `${e.pageX}px`;
    trail.style.top = `${e.pageY}px`;
    document.body.appendChild(trail);

    // Menghapus elemen setelah animasi selesai
    setTimeout(() => {
      trail.remove();
    }, 500); // Sesuaikan durasi sesuai dengan animasi fade
  });
</script>

</html>
