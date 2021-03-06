@extends ('layouts.home')

@section ('content')
    <main class="mission-main">
        <section class="mission">
            <img src="img-layout/mission.png" alt="background image">
            <div class="title">
                <h2>nous contacter</h2>
            </div>
        </section>
        <section class="action element-mission">
            <div class="title-mission">
                <img src="img-layout/action.png" alt="nos actions">
                <h3 class="article-title">nos actions</h3>
            </div>
            <div class="school-action all-actions">
                <img src="img-layout/school.png" alt="centre éducatif">
                <p>Création de centres d’éducation informelle de qualité à destination d’enfants syriens réfugiés.</p>
            </div>
            <div class="fight-action all-actions">
                <img src="img-layout/power.png" alt="lutter pour les syriens au Liban">
                <p>Plaidoyer auprès des autorités libanaises locales et gouvernementales pour l’intégration des enfants syriens au sein du système scolaire libanais, après remise à niveau par Yalla !</p>
            </div>
            <div class="sport-action all-actions">
                <img src="img-layout/sport.png" alt="activités sportives pour les enfants">
                <p>Organisation d’activités sportives et artistiques à destination d’enfants libanais et syriens dans le cadre du dialogue intercommunautaire porté par Yalla!</p>
            </div>
            <button>nous soutenir</button>
        </section>
        <section class="strategy element-mission">
            <div class="title-mission">
                <img src="img-layout/strategy.png" alt="notre strategie">
                <h3 class="article-title">notre stratégie</h3>
            </div>
            <div class="target-strategy part-strategy">
                <div class="title-strategy">
                    <h4>Des objectifs cohérents</h4>
                    <h5>Nous apportons une réponse adaptée</h5>
                </div>
                <p>En intégrant la communauté d’accueil à tous les stades du projet pour garantir l’adéquation entre leur besoins et les objectifs de la mission.</p>
            </div>
            <div class="united-strategy part-strategy">
                <div class="title-strategy">
                    <h4>Une solidarité de proximité</h4>
                    <h5>Nous créons du lien</h5>
                </div>
                <p>En vous montrant concrètement l’impact de votre don, quel que soit son montant.</p>
            </div>
            <div class="action-strategy part-strategy">
                <div class="title-strategy ">
                    <h4>Une action globale</h4>
                    <h5>Nous apportons une réponse adaptée</h5>
                </div>
                <p>En se coordonnant avec les actions menées par les agences humanitaires des nations unies. Ensemble nous sommes plus fort.</p>
            </div>
        </section>
        <section class="goal element-mission clearfix">
            <div class="title-mission">
                <img src="img-layout/objective.png" alt="nos objectifs">
                <h3 class="article-title">nos objectifs</h3>
            </div>
            <div class="help-goal part-goal">
                <img src="img-layout/help.png" alt="nous soutenir">
                <h3>soutenir</h3>
                <h4>Aider à avancer</h4>
                <p>Permettre le développement de l’enfant dans un environnement sécurisé et adapté afin qu’il retrouve confiance en lui et panse ses blessures liées à l’exil et au conflit.</p>
            </div>
            <div class="study-goal part-goal">
                <img src="img-layout/books.png" alt="Instruire">
                <h3>instruire</h3>
                <h4>Garantir le droit à l’éducation de l’enfant</h4>
                <p>L’intégrer au système scolaire classique, c’est lui permettre d’obtenir un diplôme et lui donner les meilleurs chances possible dans la vie.</p>
                <p>Nous aidons l’enfant à se remettre à niveau et à se réhabituer au rythme scolaire. Il se réalise en tant qu’individu et s’intègre à la société dans laquelle il évolue.</p>
            </div>
            <div class="fight-goal part-goal">
                <img src="img-layout/flag.png" alt="construire la paix">
                <h3>construire la paix</h3>
                <h4>Apprendre à vivre ensemble</h4>
                <p>Des bénévoles syriens et des libanais de toutes confessions, ethnies et origines socio-économiques travaillent ensemble autour d’un projet fédérateur et apprennent à se connaître dans un environnement positif, où priment l’égalité et le respect mutuel.</p>
                <p>Des enfants syriens et libanais de toutes origines se découvrent autour d’activités ludiques. Les relations entre les diverses communautés sont pacifiées.</p>
            </div>
            <button>nous soutenir</button>
        </section>
    </main>
@endsection