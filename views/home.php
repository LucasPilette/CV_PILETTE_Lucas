<div class="container">
    <div class="aboutMe">
        <div class="skills">
            <h2  class="hover-underline-animation comps" id="alternate">Languages</h2>
            <ul>
                <li class="listItem">
                    <h3>HTML5</h3><span class="bar"><span class="html "></span></span>
                </li class="listItem">
                <li class="listItem">
                    <h3>CSS</h3><span class="bar"><span class="CSS "></span></span>
                </li>
                <li class="listItem">
                    <h3>Javascript</h3><span class="bar"><span class="Javascript "></span></span>
                </li>
                <li class="listItem">
                    <h3>PHP</h3><span class="bar"><span class="PHP "></span></span>
                </li>
            </ul>
        </div>
        <div class="textBio">
            <p class="bio text_long">Je m'appelle Lucas Pilette et je suis une formation <span
                    class="greenEffect">"Développeur Web et Web Mobile"</span> à Amiens. Grâce à des études
                scientifiques puis artistiques, je sais allier <span class="pinkEffect">créativité</span> et <span
                    class="pinkEffect">rigueur</span> afin de rendre fonctionnel et unique chaque projet. Je
                recherche une alternance dans une entreprise qui saura stimuler mon envie de <span
                    class="greenEffect">progresser</span>
                et d'être un meilleur développeur chaque jour. <br> <br>
                Une version PDF de mon <span class="greenEffect">CV</span>  avec mon parcours et mes expériences professionnelles 
                est disponible au téléchargement <span class="pinkEffect"> ci-dessous</span>.</p>
        </div>
    </div>
    <div class="pdf1">
        <a href="/public/pdf/CV PILETTE Lucas.pdf" id="pdf" download="CV Pilette Lucas"
            class="hover-underline-animation">
            Télécharger mon CV en PDF</a>
    </div>
    <div class="stacks">
        <h2 class="hover-underline-animation" id="alternate">Stacks techniques</h2>
        <div class="elemStacks">
            <div class="slider">
                <div class="slide-track">
                    <?php foreach($logos as $logo) : ?>
                    <div class="slide">
                        <img class="imgStacks" src="<?=$logo->source?>" alt="<?=$logo->alt?>">
                        <p class="imgDesc"> <?=$logo->desc?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio" id="portfolio">
        <div class="portfolioTitle">
            <h2 class="hover-underline-animation" id="alternate">Portfolio</h2>
        </div>
        <div class="portfolioDiv">
            <div class="elemPortfolio">
                <div class="row">
                    <div class="column">
                        <div class="ItemCard">
                            <a class="ItemCard_link cover" href="https://hopital.<?=$_SERVER['HTTP_HOST']?>" target="_blank"></a>
                            <figure class="ItemCard_elem">
                                <img src="/public/src/hospital.png" alt="">
                                <span class="shadow cover"></span>
                            </figure>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ItemCard">
                            <a class="ItemCard_link cover" href="https://vikingbattle.<?=$_SERVER['HTTP_HOST']?>" target="_blank"></a>
                            <figure class="ItemCard_elem">
                                <img src="/public/src/battle.png" alt="">
                                <span class="shadow cover"></span>
                            </figure>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ItemCard">
                            <a class="ItemCard_link cover" href="https://asgardpath.<?=$_SERVER['HTTP_HOST']?>" target="_blank"></a>
                            <figure class="ItemCard_elem">
                                <img src="/public/src/asgard.png" alt="">
                                <span class="shadow cover"></span>
                            </figure>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ItemCard">
                            <a class="ItemCard_link cover" href="" target="_blank"></a>
                            <figure class="ItemCard_elem">
                                <img src="/public/src/rss.png" alt="">
                                <span class="shadow cover"></span>
                            </figure>
                        </div>
                    </div>
                    <!-- 7 more items... -->
                </div>
            </div>
            <div class="elemPortfolioMobile">
                <div class="imgPortfolioMobile">
                    <h3>Projet Hôpital</h3>
                    <a href="https://hopital.<?=$_SERVER['HTTP_HOST']?>" target="_blank">
                        <img src="/public/src/hospital.png" alt="">
                    </a>
                </div>
                <div class="imgPortfolioMobile">
                    <h3>Projet Viking Battle</h3>
                    <a href="https://vikingbattle.<?=$_SERVER['HTTP_HOST']?>" target="_blank">
                    <img src="/public/src/battle.png" alt="">
                    </a>    
                </div>
                <div class="imgPortfolioMobile">
                    <h3>Projet perso Asgard Path</h3>
                    <a href="https://asgardpath.<?=$_SERVER['HTTP_HOST']?>" target="_blank">
                        <img src="/public/src/asgard.png" alt="">
                    </a>
                </div>
                <div class="imgPortfolioMobile">
                    <h3>Projet flux RSS</h3>
                    <a href="" target="_blank">
                    <img src="/public/src/rss.png" alt="">
                    </a>
                </div>
            </div>
            <div class="textPortfolio">
                <p>
                    Voici quelques exemples de mes réalisations.
                    Le reste de mon travail se trouve sur mon <span class="pinkEffect">GitHub</span>.
                </p>
            </div>
        </div>

    </div>
    <div class="contact" id="contact">
        <h2 class="hover-underline-animation" id="alternate" >Contact</h2>
        <h3>Un projet ? Une question ? N'hésitez pas à me <span class="greenEffect">contacter</span></h3>
        <form method="post" class="contactForm">
            <div>
                <label for="mailAdress">Adresse Mail</label>
                <input type="email" placeholder="exemple@email.com" name="mailAdress">
                <span class="pinkEffect"><?= $errors['email'] ?? '' ?></span>
                <span class="contactMail">Je vous recontacterai via cet adresse mail</span>
            </div>
            <div class="names">
                <div class="lastname">
                    <label for="lastname">Nom</label>
                    <input type="text" placeholder="Nom" name="lastname">
                    <span class="pinkEffect"><?= $errors['lastname'] ?? '' ?></span>
                </div>


                <div class="firstname">
                    <label for="firstname">Prénom</label>
                    <input type="text" placeholder="Prénom" name="firstname">
                    <span class="pinkEffect"><?= $errors['firstname'] ?? '' ?></span>
                </div>

            </div>
            <div>
                <label for="content">Votre message</label>
                <textarea cols="30" rows="5" placeholder="Veuillez renseigner votre message..."
                    name="content"></textarea>
                <span class="pinkEffect"><?= $errors['content'] ?? '' ?></span>
            </div>
            <div class="submitButton">
                <input type="submit" value="Envoyer" id="button">
            </div>
            <span class="greenEffect state"><?= $state ?? '' ?></span>
        </form>
    </div>
    <div class="links">
        <div>
            <img src="/public/src/envelope-fill.svg" alt="Mail Lucas Pilette" class="mailLink">
            <a href="mailto:pilettelucas@gmail.com" target="_blank" class="logos hover-underline-animation">Mon mail</a>
        </div>
        <div>
            <img src="/public/src/github.svg" alt="Lien GitHub Lucas Pilette" class="mailLink">
            <a href="https://github.com/LucasPilette" target="_blank" class="logos hover-underline-animation">Mon
                github</a>
        </div>
    </div>
</div>