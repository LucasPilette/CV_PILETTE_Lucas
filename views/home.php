<div class="container">
    <div class="aboutMe">
        <div class="skills">
            <h2 class="comps">Languages :</h2>
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
                recherche un stage dans une entreprise qui saura stimuler mon envie de <span
                    class="greenEffect">progresser</span>
                et d'être un meilleur développeur chaque jour.</p>
        </div>
    </div>
    <div class="stacks">
        <h2>Stacks techniques</h2>
        <div class="elemStacks">
            <?php
        foreach($logos as $logo){
            echo '<img class="imgStacks" src="'.$logo->source.'" alt="'.$logo->alt.'">';
        }
        ?>
        </div>
    </div>
    <div class="pdf1">
        <a href="/public/pdf/PILETTE Lucas.pdf" id="pdf" download="CV Pilette Lucas"> Télécharger mon CV en PDF</a>
    </div>
    <div class="portfolio" id="portfolio">
        <h2>Portfolio</h2>
    </div>
    <div class="contact" id="contact">
        <h2>Contact</h2>
        <h3>Un projet ? Une question ? N'hésitez pas à me <span class="greenEffect">contacter</span></h3>
        <form  method="post" class="contactForm">
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
                <textarea cols="30" rows="5" placeholder="Veuillez renseigner votre message..." name="content"></textarea>
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
            <a href="mailto:pilettelucas@gmail.com" target="_blank" class="logos">Mon mail</a>
        </div>
        <div>
            <img src="/public/src/github.svg" alt="Lien GitHub Lucas Pilette" class="mailLink">
            <a href="https://github.com/LucasPilette" target="_blank" class="logos">Mon github</a>
        </div>
    </div>
</div>