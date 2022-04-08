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
                    recherche un stage dans une entreprise qui saura stimuler mon envie de <span class="greenEffect">progresser</span>
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

</div>