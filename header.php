<style>

    body.no-scroll {
        overflow: hidden;
    }

    header .logo img {
        transition: .3s all;
    }

    header .logo img:hover {
        transform: scale(0.9);
    }

    header .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.5rem;
    }

    .links {
        display: flex;
    }

    .links li {
        margin: 0 1rem;
    }

    .btn-hamburguesa {
        display: none;
    }

    .btn-hamburguesa i {
        color: var(--light-one);
        font-size: 2rem;
        cursor: pointer;
    }

    @media (max-width: 850px) {
        .btn-hamburguesa {
            display: block;
            z-index: 51;
        }

        .links {
            position: fixed;
            top: 0;
            right: -100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: #000000e1;
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            transition: .3s all;
            z-index: 50;
        }

        .links li {
            margin: 2rem 0;
        }

        .links.abrir {
            right: 0;
        }
    }
</style>

<!-- Enlaces generales -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="short icon" href="svg/logo.svg">
<link rel="stylesheet" href="css/style.css">

<header>
    <nav class="container">
        <a href="index.php" class="logo">
            <img src="svg/logo.svg" alt="logotipo">
        </a>
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="sobre-mi.php">Sobre mí</a></li>
            <li><a href="portafolio.php">Portafolio</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li>
                <a href="https://www.facebook.com/"><i class="ri-facebook-fill"></i></a>
                <a href="https://twitter.com/"><i class="ri-twitter-x-fill"></i></a>
                <a href="https://www.instagram.com/"><i class="ri-instagram-fill"></i></a>
            </li>
        </ul>
        <button class="btn-hamburguesa">
            <i class="menu-icon"></i>
        </button>
    </nav>
</header>

<script>
    const hamburguer_menu = document.querySelector(".btn-hamburguesa");
    const navbar = document.querySelector(".links");
    const links = document.querySelectorAll(".links a");
    const icono_menu = document.querySelector(".menu-icon");
    icono_menu.classList.add("ri-menu-fill");

    function cerrarMenu() {
        navbar.classList.remove("abrir");
        icono_menu.classList.remove("ri-close-fill");
        icono_menu.classList.add("ri-menu-fill");
        document.body.classList.remove("no-scroll");
    }

    hamburguer_menu.addEventListener("click", () => {
        if(!navbar.classList.contains("abrir")) {
            navbar.classList.add("abrir");
            icono_menu.classList.remove("ri-menu-fill");
            icono_menu.classList.add("ri-close-fill");
            document.body.classList.add("no-scroll");
        } else {
            cerrarMenu();
        }
    })
</script>