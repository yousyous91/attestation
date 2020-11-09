<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#ffffff">
        <meta name="title" content="Générateur d'attestation de déplacement dérogatoire - COVID-19">
        <meta name="description" content="Ce service officiel génère une version numérique de la déclaration de déplacement covid-19 à présenter aux forces de sécurité lors d’un contrôle.">
        <meta name="keywords" content="covid19, covid-19, attestation, déclaration, déplacement, officielle, gouvernement">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="French">
        <meta property="og:title" content="Générateur d'attestation de déplacement dérogatoire  - COVID-19">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:description" content="Ce service officiel génère une version numérique de la déclaration de déplacement covid-19 à présenter aux forces de sécurité lors d’un contrôle.">
        <link rel="canonical" href="https://deplacement-covid.fr/">
        <meta property="og:url" content="https://deplacement-covid.fr/">
        <meta property="og:site_name" content="Générateur d'attestation de déplacement dérogatoire  - COVID-19">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.aaba99a7.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.bd6b9d71.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.a0a61c08.png">
        <link rel="manifest" href="/favicons/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.a198a050.svg" color="#21bf73">

        <title>Attestation de déplacement dérogatoire</title>
    <link rel="stylesheet" href="css/index.css">
    </head>
  <body>
    
        <header role="banner" class="wrapper">

            <div>
                <h1 class="flex flex-wrap">
                    <span class="covid-title">
                        COVID-19
                    </span>
                    <span class="covid-subtitle">
                        Attestation de déplacement dérogatoire
                    </span>
                </h1>
                <p class="text-desc">
                    En application du décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l'épidémie de Covid19 dans le cadre de l'état d'urgence sanitaire
                </p>
            </div>
        </header>
        <main role="main">

            <div class="wrapper">
                <form method="post" id="form-profile" accept-charset="UTF-8" action="gen.php">
                    <h2 class="titre-2">Remplissez en ligne votre déclaration numérique :</h2>
                    <p class="msg-info">Tous les champs sont obligatoires.</p>
                    <div class="form-group">
                        <label for="field-firstname" id="field-firstname-label">Prénom</label>
                        <div class="input-group align-items-center">
                            <input autocomplete="given-name" autofocus="" class="form-control" id="field-firstname" name="firstname" placeholder="Camille" required="" type="text" /><span class="validity"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-lastname" id="field-lastname-label">Nom</label>
                        <div class="input-group align-items-center"><input autocomplete="family-name" class="form-control" id="field-lastname" name="lastname" placeholder="Dupont" required="" type="text" /><span class="validity"></span></div>
                    </div>
                    <div class="form-group">
                        <label for="field-birthday" id="field-birthday-label">Date de naissance</label>
                        <div class="input-group align-items-center">
                            <input
                                maxlength="10"
                                pattern="^([0][1-9]|[1-2][0-9]|30|31)/([0][1-9]|10|11|12)/(19[0-9][0-9]|20[0-1][0-9]|2020)"
                                autocomplete="birthday"
                                class="form-control"
                                id="field-birthday"
                                name="birthday"
                                placeholder="01/01/1970"
                                required=""
                                type="date"
                            />
                            <span class="validity"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-placeofbirth" id="field-placeofbirth-label">Lieu de naissance</label>
                        <div class="input-group align-items-center"><input autocomplete="off" class="form-control" id="field-placeofbirth" name="placeofbirth" placeholder="Paris" required="" type="text" /><span class="validity"></span></div>
                    </div>
                    <div class="form-group">
                        <label for="field-address" id="field-address-label">Adresse</label>
                        <div class="input-group align-items-center">
                            <input autocomplete="adress-line1" class="form-control" id="field-address" name="address" placeholder="999 avenue de France" required="" type="text" /><span class="validity"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-city" id="field-city-label">Ville</label>
                        <div class="input-group align-items-center"><input autocomplete="address-level2" class="form-control" id="field-city" name="city" placeholder="Paris" required="" type="text" /><span class="validity"></span></div>
                    </div>
                    <div class="form-group">
                        <label for="field-zipcode" id="field-zipcode-label">Code Postal</label>
                        <div class="input-group align-items-center">
                            <input
                                inputmode="numeric"
                                minlength="4"
                                maxlength="5"
                                min="1000"
                                max="99999"
                                pattern="[0-9]{5}"
                                autocomplete="postal-code"
                                class="form-control"
                                id="field-zipcode"
                                name="zipcode"
                                placeholder="75001"
                                required=""
                                type="number"
                            />
                            <span class="validity"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-datesortie" id="field-datesortie-label">Date de sortie</label>
                        <div class="input-group align-items-center">
                            <input
                                pattern="^([0][1-9]|[1-2][0-9]|30|31)/([0][1-9]|10|11|12)/(19[0-9][0-9]|20[0-1][0-9]|2020)"
                                autocomplete=""
                                class="form-control"
                                id="field-datesortie"
                                name="datesortie"
                                placeholder=""
                                required=""
                                type="date"
                            />
                            <span class="validity"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-heuresortie" id="field-heuresortie-label">Heure de sortie</label>
                        <div class="input-group align-items-center"><input autocomplete="" class="form-control" id="field-heuresortie" name="heuresortie" placeholder="" required="" type="time" /><span class="validity"></span></div>
                    </div>
                    <fieldset id="reason-fieldset" class="fieldset">
                        <legend class="legend titre-3">Choisissez un motif de déplacement</legend>
                        <p class="msg-alert hidden">Veuillez choisir un motif</p>
                        <p>
                            certifie que mon déplacement est lié au motif suivant (cocher la case) autorisé par le décret n°2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l'épidémie de Covid19 dans
                            le cadre de l'état d'urgence sanitaire <a class="footnote" href="#footnote1">[1]</a>&nbsp;:
                        </p>
                        <div class="form-checkbox align-items-center">
                            <input class="form-check-input" type="checkbox" id="checkbox-travail" name="field-reason" value="travail" />
                            <label for="checkbox-travail" class="form-checkbox-label">
                                Déplacements entre le domicile et le lieu d’exercice de l’activité professionnelle ou un établissement d’enseignement ou de formation, déplacements professionnels ne pouvant être différés
                                <a class="footnote" href="#footnote2">[2]</a> , déplacements pour un concours ou un examen.
                            </label>
                        </div>
                        <div class="form-checkbox align-items-center">
                            <input class="form-check-input" type="checkbox" id="checkbox-achats" name="field-reason" value="achats" />
                            <label for="checkbox-achats" class="form-checkbox-label">
                                Déplacements pour effectuer des achats de fournitures nécessaires à l'activité professionnelle, des achats de première nécessité <a class="footnote" href="#footnote3">[3]</a> dans des établissements dont les
                                activités demeurent autorisées, le retrait de commande et les livraisons à domicile ;
                            </label>
                        </div>
                        <div class="form-checkbox align-items-center">
                            <input class="form-check-input" type="checkbox" id="checkbox-sante" name="field-reason" value="sante" />
                            <label for="checkbox-sante" class="form-checkbox-label">Consultations, examens et soins ne pouvant être assurés à distance et l’achat de médicaments ;</label>
                        </div>
                        <div class="form-checkbox align-items-center">
                            <input class="form-check-input" type="checkbox" id="checkbox-famille" name="field-reason" value="famille" />
                            <label for="checkbox-famille" class="form-checkbox-label"> Déplacements pour motif familial impérieux, pour l'assistance aux personnes vulnérables et précaires ou la garde d'enfants ;</label>
                        </div>
                        <div class="form-checkbox align-items-center">
                            <input class="form-check-input" type="checkbox" id="checkbox-handicap" name="field-reason" value="handicap" />
                            <label for="checkbox-handicap" class="form-checkbox-label">Déplacement des personnes en situation de handicap et leur accompagnant ;</label>
                        </div>
                        <div class="form-checkbox align-items-center">
                            <input class="form-check-input" type="checkbox" id="checkbox-sport_animaux" name="field-reason" value="sport_animaux" />
                            <label for="checkbox-sport_animaux" class="form-checkbox-label">
                                Déplacements brefs, dans la limite d'une heure quotidienne et dans un rayon maximal d'un kilomètre autour du domicile, liés soit à l'activité physique individuelle des personnes, à l'exclusion de toute pratique
                                sportive collective et de toute proximité avec d'autres personnes, soit à la promenade avec les seules personnes regroupées dans un même domicile, soit aux besoins des animaux de compagnie ;
                            </label>
                        </div>
                        <div class="form-checkbox align-items-center">
                            <input class="form-check-input" type="checkbox" id="checkbox-convocation" name="field-reason" value="convocation" />
                            <label for="checkbox-convocation" class="form-checkbox-label"> Convocation judiciaire ou administrative et pour se rendre dans un service public ;</label>
                        </div>
                        <div class="form-checkbox align-items-center">
                            <input class="form-check-input" type="checkbox" id="checkbox-missions" name="field-reason" value="missions" />
                            <label for="checkbox-missions" class="form-checkbox-label"> Participation à des missions d'intérêt général sur demande de l'autorité administrative ;</label>
                        </div>
                        <div class="form-checkbox align-items-center">
                            <input class="form-check-input" type="checkbox" id="checkbox-enfants" name="field-reason" value="enfants" />
                            <label for="checkbox-enfants" class="form-checkbox-label">Déplacement pour chercher les enfants à l’école et à l’occasion de leurs activités périscolaires ;</label>
                        </div>
                    </fieldset>
                    <p><input type="submit" id="generate-btn" class="btn btn-primary btn-attestation" value="Générer mon attestation" /></p>
                </form>
            </div>

            <div id="footnotes">
                <p id="footnote1">
                    [1] Les personnes souhaitant bénéficier de l'une de ces exceptions doivent se munir s'il y a lieu, lors de leurs déplacements hors de leur domicile, d'un document leur permettant de justifier que le déplacement considéré
                    entre dans le champ de l'une de ces exceptions.
                </p>
                <p id="footnote2">
                    [2] A utiliser par les travailleurs non salariés, lorsqu'ils ne peuvent disposer d'un justificatif de déplacement établi par leur employeur.
                </p>
                <p id="footnote3">
                    [3] Y compris les acquisitions à titre gratuit (distribution de denrées alimentaires...) et les déplacements liés à la perception de prestations sociales et au retrait d'espèces.
                </p>
            </div>
            <p class="github">Le code source de ce service est consultable sur <a href="https://github.com/yousyous91/attestation" class="github-link">GitHub</a>.</p>
        </main>
        <footer role="contentinfo" class="main-footer">
            <p class="label-mi">
                Développé par Youcef - yousyous91 <br />
                Inspiré du site officiel, consultable en cliquant <a href="https://media.interieur.gouv.fr/deplacement-covid-19/">--> ici <--</a> <br />
                <strong>Ce site ne stock aucune données personnelles, ni sur votre machine, ni sur le serveur. Aucun cookie n'est enregistré sur votre machine, et la connexion avec le serveur est sécurisée</strong>
            </p>
            <div class="footer-links">
                <a href="https://www.gouvernement.fr/info-coronavirus" title="Information du gouvernement sur le Covid-19 - nouvelle page" target="_blank" class="footer-line footer-link">Informations du gouvernement sur le Covid-19</a>
                <div class="footer-line">Plus d’infos au <a class="num-08" href="tel:0800130000" title="Numéro vert - appel gratuit depuis un poste fixe en France">0 800 130 000</a></div>
                <p class="footer-line" id="version">2020 - Confinement épisode 2</p>
            </div>
        </footer>
    </body>
</html>