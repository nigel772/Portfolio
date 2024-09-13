<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />
    <link rel="icon" href="../assets/images/Icon.webp" type="image/x-icon">
    <link
            rel="shortcut icon"
            href="../assets/images/favicons.png"
            type="image/png"
    />
    <link
            rel="preload"
            href="../assets/fonts/Mona-Sans.woff2"
            as="font"
            type="font/woff2"
            crossorigin
    />

    <link rel="stylesheet" href="../assets/css/style.css"/>
    <script src="../assets/js/script.js" defer></script>

    <title>Nigel Becholtz</title>
</head>

<body>

<script>
    const theme = localStorage.getItem("theme") || "light";
    document.body.classList.add(theme);
</script>

<header class="header">

    <div class="menu-btn-container">
        <div class="container">
            <button type="button"  class="menu-btn">menu</button>
        </div>
    </div>

    <nav class="nav hidden">
        <ol class="nav-items">
            <li class="nav-item"><a href="#">Home</a></li>
            <li class="nav-item"><a href="#work">My Work</a></li>
            <li class="nav-item"><a href="#skills">My Skills</a></li>
            <li class="nav-item">
                <a href="#contact" data-focused="last-focused">Contact</a>
            </li>
        </ol>
    </nav>

    <div class="container">
        <div class="header-textbox">
            <h1 class="h1">
                <span>Hi, I'm Nigel Becholtz</span>
                <span>Student Software Development</span>
            </h1>

            <p class="header-text">
                a passionate software developer with a love for coding and problem-solving.
                I enjoy working on various projects and constantly learning new technologies.
            </p>

            <div class="header-btns">
                <a href="#contact" class="btn btn-cta">Hire me</a>
                <a href="#work" class="btn btn-secondary">See my work</a>
            </div>
        </div>
    </div>
</header>

<main>

    <section class="work">
        <div class="container">
            <h2 class="h2" id="work">Selected Work</h2>
            <div class="work-boxes">
                <div class="work-box">
                    <div class="work-textbox">
                        <h3 class="h3">test</h3>
                        <p class="work-text">
                            test    </p>
                        <ol class="work-technologies">
                            <li>test</li>
                            <li>test</li>
                            <li>test  </li>
                        </ol>
                        <div class="work-links">
                            <a href="#" target="_blank" rel="noopener" class="link"
                            >Explore this project</a
                            >
                            <a
                                    href="https://github.com/nigel772"
                                    target="_blank"
                                    rel="noopener"
                                    title="Source code"
                            >
                                <img
                                        src="../assets/images/social-links/github.svg"
                                        alt="GitHub"
                                        loading="lazy"
                                />
                            </a>
                        </div>
                    </div>

                    <picture class="work-img">
                        <img
                                loading="lazy"
                                src="../assets/images/work/test.png"
                                alt="agency elevation"
                        />
                    </picture>
                </div>
                <div class="work-box">
                    <div class="work-textbox">
                        <h3 class="h3">test</h3>
                        <p class="work-text">
                            test    </p>
                        <ol class="work-technologies">
                            <li>test</li>
                            <li>test</li>
                            <li>test  </li>
                        </ol>
                        <div class="work-links">
                            <a href="#" target="_blank" rel="noopener" class="link"
                            >Explore this project</a
                            >

                            <a
                                    href="https://github.com/nigel772"
                                    target="_blank"
                                    rel="noopener"
                                    title="Source code"
                            >
                                <img
                                        src="../assets/images/social-links/github.svg"
                                        alt="GitHub"
                                        loading="lazy"
                                />
                            </a>
                        </div>
                    </div>
                    <picture class="work-img">
                        <img
                                loading="lazy"
                                src="../assets/images/work/test.png"
                                alt="portfolio template"
                        />
                    </picture>
                </div>
                <div class="work-box">
                    <div class="work-textbox">
                        <h3 class="h3">test</h3>
                        <p class="work-text">
                            test    </p>
                        <ol class="work-technologies">
                            <li>test</li>
                            <li>test</li>
                            <li>test  </li>
                        </ol>
                        <div class="work-links">
                            <a href="#" target="_blank" rel="noopener" class="link"
                            >Explore this project</a
                            >

                            <a
                                    href="https://github.com/nigel772"
                                    target="_blank"
                                    rel="noopener"
                                    title="Source code"
                            >
                                <img
                                        src="../assets/images/social-links/github.svg"
                                        alt="GitHub"
                                        loading="lazy"
                                />
                            </a>
                        </div>
                    </div>
                    <picture class="work-img">
                        <img
                                loading="lazy"
                                src="../assets/images/work/test.png"
                                alt="contribute dev"
                        />
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="skills">
        <div class="container">
            <h2 class="h2" id="skills">My Toolkit</h2>
            <div class="skills-imgs">
                <img src="../assets/images/skills/git.webp" alt="Git" class="skills-img" loading="lazy" title="Git">
                <img src="../assets/images/skills/html.webp" alt="CSS" class="skills-img" loading="lazy" title="CSS">
                <img src="../assets/images/skills/js.webp" alt="JavaScript" class="skills-img" loading="lazy" title="JavaScript">
                <img src="../assets/images/skills/php.png" alt="PHP" class="skills-img" loading="lazy" title="PHP">
                <img src="../assets/images/skills/html5.png" alt="HTML" class="skills-img" loading="lazy" title="HTML">
                <img src="../assets/images/skills/figma.png" alt="Figma" class="skills-img" loading="lazy" title="Figma">
                <img src="../assets/images/skills/Bootstrap.png" alt="Bootstrap" class="skills-img" loading="lazy" title="Bootstrap">


                </figure>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <h2 class="h2" id="contact">Send Message</h2>
            <div class="contact-content">
                <div class="contact-textbox">
                    <strong href="#" class="hire-alert">
                        <span class="indicator"></span>
                        Available for hire
                    </strong>
                    <p class="contact-text">
                        I am a dedicated software developer with a strong focus on back-end development.
                        My journey in programming began early, and I have since worked on various projects that demonstrate my skills and passion for technology.
                    </p>
                    <p class="contact-text">
                        I am always eager to take on new challenges and learn new technologies to stay ahead in the field.
                    </p>

                </div>
                <form action="../Home/index.php" method="post" class="contact-form">
                    <div class="form-field">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" required />
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required inputmode="email" />
                    </div>
                    <div class="form-field">
                        <label for="message">How can I help you?</label>
                        <textarea name="message" id="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-cta">Send</button>
                </form>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <nav>
                <ol class="footer-links">
                    <li class="footer-link">
                        <a title="GitHub" href="https://github.com/nigel772" target="_blank" rel="noopener"
                        ><img
                                    loading="lazy"
                                    src="../assets/images/social-links/github.svg"
                                    alt="GitHub"
                            /></a>
                    </li>


                    </li>
                    <li class="footer-link">
                        <a title="Linkedin" href="https://www.linkedin.com/in/nigel-becholtz" target="_blank" rel="noopener"
                        ><img
                                    loading="lazy"
                                    src="../assets/images/social-links/linkedin.svg"
                                    alt="Linkedin"
                            /></a>
                    </li>

                </ol>
            </nav>
            <p class="footer-text">
                &copy; <span>2024</span> - Created By <a target="_blank" rel="noopener" href="https://github.com/nigel772">Nigel Becholtz.</a>
            </p>
            <label class="theme-switch" for="theme-switch">
                <span>Dark Theme</span>
                <input type="checkbox" id="theme-switch" role="switch"/>
            </label>
        </div>
    </div>
</footer>
</body>
</html>