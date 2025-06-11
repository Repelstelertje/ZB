<?php
    error_reporting(-1);
		ini_set('display_errors', 1);
	define("TITLE", "De beste datingsite van België");

    include("includes/array_prov.php");
    include("includes/array_tips.php");
    include("includes/header.php");
?>
<div class="container">
    <!-- Jumbotron Header -->
    <div class="jumbotron my-4 text-center">
        <h1>Zoekertjes België | De beste datingsite van België</h1>
        <hr>
        <p>Op deze gratis datingsite staan alle contactadvertenties België. Kijk snel tussen de zoekertjes om in contact te komen met vrouwen voor gratis dating. Hier kan jij jezelf anoniem en gratis inschrijven met een zelfgekozen profielnaam. Ook blijft jouw e-mailadres altijd geheim voor andere leden. Voor wie echt helemaal anoniem wil blijven, bestaat de mogelijkheid om geen foto op het profiel te tonen.</p>
        <h2>Zoek hier vrouwen bij jou in buurt!</h2>
        <?php
        foreach ($navItems as $item) {
            echo "<a class=\"btn btn-primary prov-btn\" href=\"$item[slug]\">$item[title]</a>";
        }
        ?>
    </div>
    <div id="top-banner"></div>
    <div class="jumbotron jumbotron-sm text-center">
        <h2>Niewste leden!</h2>
    </div>
    <div class="row" v-cloak>
        <div class="col-lg-3 col-md-6 mb-4 portfolio-item" id="Slankie" v-for="profile in filtered_profiles">
            <div class="card h-100">
                <a :href="'profile.php?id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="profile.name + ' daten in Flevoland'"></a>
                <div class="card-body">
                <div class="card-top">
                    <h4 class="card-title">{{ profile.name }}</h4>  
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                    <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                    <li class="list-group-item">Stad: {{ profile.city }}</li>
                    <li class="list-group-item">Provincie: {{ profile.province }}</li>
                </ul>
            </div>
            <a :href="'profile.php?id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a>
        </div>
    </div>
    <script nonce="2726c7f26c">
        var api_url= "<?php echo $config['BANNER_ENDPOINT']; ?>";
    </script>
    <!-- Pagination -->
    <nav class="nav-pag" aria-label="Page navigation">
        <ul class="pagination flex-wrap justify-content-center">
                <li class="page-item"><a class="page-link" aria-label="Vorige" v-on:click="set_page_number(page-1)" > <span aria-hidden="true">&laquo;</span> <span class="sr-only">Vorige</span> </a>
            </li>
            <li v-for="page_number in max_page_number" class="page-item" v-bind:class="{ active: page_number == page }" >
                <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
            </li>  
            <li class="page-item">
                <a class="page-link" aria-label="Volgende" v-on:click="set_page_number(page+1)" > <span aria-hidden="true">&raquo;</span> <span class="sr-only">Volgende</span> </a>
            </li>
        </ul>
    </nav>
    </div><!-- /.row -->
    <div class="jumbotron">
        <h2 class="text-center">Date ervaringen</h2>
        <hr>
        <p><em>“Wij (Elisa en Wim) willen jullie echt heel erg bedanken!! Vlak voor de zomer hebben wij elkaar gevonden via jullie website zoekertjes België. We waren beiden op zoek naar gezelschap, eigenlijk niet eens per sé romantisch of een vaste relatie. We zijn beiden enigszins op leeftijd en het is dan niet altijd even makkelijk, om iemand te vinden met wie je een mooie vriendschapsband kunt aangaan. In ons geval was het echter allesbehalve moeilijk. We houden beiden van een spelletje en een gezellig praatje op z’n tijd en spreken wekelijks af om van elkaars gezelschap te genieten. We hebben beiden veel gereisd en dat is nu achter de rug, dus genoeg verhalen om elkaar mee te vermaken! Bedankt voor jullie leuke contacten en het feit dat het ons bij elkaar heeft gebracht! Dankzij zoekertjes België hebben wij een partner voor het leven gevonden.”</em><br />
        <span class="stelletje"> - Elisa en Wim</span></p>
        <hr>
        <p><em>“Mijn naam is Peter en ik ben een week of 4 geleden lid van jullie datingsite geworden. Ik was eerst een beetje sceptisch, je hoort immers zoveel verhalen over online dating. Na een paar dagen begon ik alles een beetje door te krijgen en kwam ik op het profiel van Maria. Onwijs leuke spontane dame, met een nog veel leukere lach. We raakten aan de praat en besloten na een aantal weken elkaar dan eindelijk te ontmoeten. Er was echt meteen een klik!! Ik kan me niet eens herinneren wanneer ik voor het laatst zoveel heb gelachen met een vrouw. Ze heeft een dochter en zoon, eigenlijk voelt het voor mij alsof ik eindelijk de vader ben aangezien Maria geen contact meer heeft met de vader van haar kinderen. Dus ik wilde jullie, zoekertjes België echt bedanken. Zonder jullie had ik haar misschien nooit ontmoet. Dankjewel!”</em><br />
        <span class="stelletje"> - Peter en Maria</span></p>
        <hr>
        <p><em>“Mijn naam is Jean. Ik ben ruim een jaar geleden begonnen met online dating, omdat het voor mij soms moeilijk is om mensen te ontmoeten vanwege mijn beperkingen. Ik ben namelijk vanaf mijn geboorte zeer slechthorend. Hoewel het voor mij niet altijd een hindernis is, blijkt het voor sommigen toch een behoorlijke opgave. Men moet immers gebarentaal kennen dan wel leren, voor velen is dit een lastige opgave en kiezen ze ervoor geen relatie aan te gaan. Via jullie website Zoekertjes België ben ik in contact gekomen met Juliette. Zij bleek een dochtertje te hebben, die op jonge leeftijd ook haar gehoor is verloren. Dit gaf meteen een gevoel van (h)erkenning. We zijn inmiddels al maanden samen, maar wilde via deze weg toch even een bedankje sturen aan zoekertjes België. Fantastisch dat mensen elkaar op deze manier kunnen bereiken! Chapeau!”</em><br />
        <span class="stelletje"> - Jean en Juliette</span></p>
    </div>
    <div id="footer-banner"></div>
    <div class="jumbotron text-center">
        <div class="">
            <a href="https://flirthonk.be" target="_blank" class="m-0" title="FlirtHonk.be - Ontdek Flirts & Contacten in België!">Flirthonk</a> - 
            <a href="https://localflirt.be" target="_blank" class="m-0" title="LocalFlirt.be - Jouw Perfecte Flirt Dichtbij Huis in België!">LocalFlirt</a> -
            <a href="https://65pluscontact.be" target="_blank" class="m-0" title="65PlusContact.be - 65+ Vriendschappen Vinden in België!">65Plus Contact</a> - 
            <a href="https://belgenchat.be" target="_blank" class="m-0" title="BelgenChat.be - Chatten met Landgenoten in België!">Belgen Chat</a> - 
            <a href="https://bechat.be" target="_blank" class="m-0" title="BeChat.be - Verbind met Belgen in Spannende Gesprekken">BEChat</a> - 
            <a href="https://anoniemecontacten.be" target="_blank" class="m-0" title="AnoniemeContacten.be - Discreet Verbinden met Belgen">Anonieme Contacten</a> - 
            <a href="https://casualflirten.be" target="_blank" class="m-0" title="CasualFlirten.be - Ontspannen flirten in heel België">Casual Flirten</a> - 
            <a href="https://geheimegesprekken.be" target="_blank" class="m-0" title="GeheimeGesprekken.be - Vertrouwelijke Chats in België">Geheime Gesprekken</a>
        </div>
        <hr>
        <div class="">
            <a href="https://buurtmilfs.be" target="_blank" class="m-0" title="BuurtMilfs.be - Vind Milfs in Jouw Buurt voor Contact!">BuurtMilfs</a> - 
            <a href="https://bd4xxx.be" target="_blank" class="m-0" title="BD4XXX.be - Ervaar Spanning en Sensualiteit in België!">BD4XXX</a> - 
            <a href="https://sletplaats.be" target="_blank" class="m-0" title="Sletplaats.be - Contacten en Volwassen Plezier in België!">Sletplaats</a> - 
            <a href="https://stout-contact.be" target="_blank" class="m-0" title="Stout-Contact.be - Stoute en Spannende Connecties in België!">Stout Contact</a> - 
            <a href="https://oudevrouwenchat.be" target="_blank" class="m-0" title="OudeVrouwenChat.be - Chat met Rijpe Dames in België">Oude Vrouwen Chat</a> - 
            <a href="https://rijpeomachat.be" target="_blank" class="m-0" title="RijpeOmaChat.be - Chat met Ervaren Dames in België">Rijpe Oma Chat</a> - 
            <a href="https://rijpemilfchat.be" target="_blank" class="m-0" title="RijpeMilfChat.be - Chat met Ervaren Milfs in België">Rijpe Milf Chat</a> - 
            <a href="https://rijpemilfmarkt.be" target="_blank" class="m-0" title="RijpeMilfMarkt.be - Markt voor Contact met Milfs in België">Rijpe Milf Markt</a> - 
            <a href="https://milfmarkt.be" target="_blank" class="m-0" title="MilfMarkt.be - Contactmarkt voor Geile Milfs in België">Milf Markt</a> - 
            <a href="https://hetebuurvrouwen.be" target="_blank" class="m-0" title="HeteBuurVrouwen.be - Chat met Hete Buurvrouwen in België">Hete Buurvrouwen</a> - 
            <a href="https://slettenchat.be" target="_blank" class="m-0" title="SlettenChat.be - Chatten met Geile Sletten in België">Sletten Chat</a> - 
            <a href="https://kinkycontacten.be" target="_blank" class="m-0" title="KinkyContacten.be - Ontdek Kinky Contacten in België">Kinky Contacten</a>    
        </div>  
        <hr>
        <div class="">
            <a href="https://transgrinder.be" target="_blank" class="m-0" title="TransGrinder.be - Trans Contacten Vinden in België!">Transgrinder</a> - 
            <a href="https://trannyzoekt.com" target="_blank" class="m-0" title="TrannyZoekt.com - Shemales Zoeken Contact in België!">Tranny Zoekt</a> - 
            <a href="https://shemalemarkt.com" target="_blank" class="m-0" title="ShemaleMarkt.com - Markt voor Shemale Contacten in België!">Shemale Markt</a> - 
            <a href="https://trannycontacten.com" target="_blank" class="m-0" title="Trannycontacten.com - Shemale Contacten Ontdekken in België!">Tranny Contacten</a>
        </div>
    </div>
</div><!-- container -->
<?php
  	include('includes/footer.php');
?>