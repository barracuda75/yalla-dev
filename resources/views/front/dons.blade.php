@extends ('layouts.home')

@section ('content')
    <main class="dons-main clearfix">
        <section class="presentation">
            <img src="img-layout/donez.jpg" alt="background image">
            <div class="title">
                <h2>Votre don</h2>
            </div>
        </section>
        <section class="dons-section project-donations">
            <div class="title-pres">
                <img src="img-layout/peope.png" alt="qui sommes nous ?">
                <h3>LA MISE EN OEUVRE DES PROJETS DE YALLA!</h3>
            </div>
            <p>Indemniser des professeurs et animateurs, du loyer des locaux de l’école, des fournitures scolaires et celles destinées aux activités socio-éducatives.
            </p>
            <br>

            <div class="title-pres">
                <h3>LES FRAIS ADMINISTRATIFS</h3>
            </div>
            <p>98% des fonds sont dédiés à la mise en oeuvre des projets sur le terrain et 2% pour les dépenses administrative.
            </p>
        </section>
        <section class="dons-section support-means">
            <div class="title-pres">
                <img src="img-layout/teamwork.svg" alt="notre vision">
                <h3>POUR NOUS SOUTENIR</h3>
            </div>
            <p>Il suffit de faire un virement automatique de votre compte en banque sur celui de Yalla! en indiquant en objet : “Parrainage Yalla!”.
                <br>Vous pouvez à tout moment faire un don par :
            </p>
            <ul>
                <li>Chèque bancaire à l’ordre de « Yalla! Pour les Enfants », adressé à Yalla! 13, rue René Villermé 75011 Paris
                </li>
                <li>Virement bancaire</li>
                <li>Don en ligne
                    <br> Sur le site de notre partenaire Women’s WorldWide Web.
                </li>
            </ul>
            <button class="btn-donate">NOUS SOUTENIR</button>
            <button class="btn-donate">ADHERER</button>
        </section>
        <section class="dons-section banque-account">
            <div class="title-pres">
                <img src="img-layout/banque.png" alt="notre équipe">
                <h3>Coordonnées bancaires de Yalla! Pour les Enfants
                </h3>
            </div>
            <p>CREDIT COOPERATIF
                <br> <span>RIB : </span>42559 00005 41020040979 04
                <br> <span>IBAN :</span> FR76 4255 9000 0541 0200 4097 904
                <br> <span>BIC :</span> CCOPFRPPXXX</p>
        </section>

        <section class="dons-section taxe-deductions">
            <div class="title-pres">
                <img src="img-layout/impots.png" alt="notre équipe">
                <h3>IMPOTS SUR LE REVENU
                </h3>
            </div>
            <p> <span>Défiscalisation : </span>
                <br>66 % du montant de votre don peuvent être déduits de votre impôt sur le revenu (dans la limite de 20 % de votre revenu net imposable). L’excédent net éventuel peut être reporté sur les 5 années suivantes. Vous devez effectuer votre don à Amnesty International France au plus tard le 31 décembre 2017 pour bénéficier de votre réduction d’impôt lors de votre prochaine déclaration.
            </p>
            <br>
            <button class="btn-donate">NOUS SOUTENIR</button>
            <button class="btn-donate">ADHERER</button>
        </section>
    </main>
@endsection