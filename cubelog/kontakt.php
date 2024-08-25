<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CUBE LOG</title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php
    include "link.php";
    ?>
</head>

<body>

<div class="page-wrapper">
    <?php
    include "header.php";
    ?>
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Kontakt</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/cubelog/index">Startseite</a></li>
                    <li>Kontakt</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->

    <!--Contact Details Start-->
    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">Send us email</span>
                        <h2>Nachrıcht an ihr Cubelog Team!</h2>
                    </div>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_name" class="form-control" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_email" class="form-control required email" type="email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_unternehmen" class="form-control required" type="text" placeholder="Unternehmen">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_phone" class="form-control" type="text" placeholder="Telefon">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="form_nachricht" class="form-control required" rows="7" placeholder="Nachricht"></textarea>
                        </div>
                        <div class="mb-3">
                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Senden</span></button>
                            <button type="reset" class="theme-btn btn-style-one"><span class="btn-title">Reset</span></button>
                        </div>
                    </form>
                    <!-- Contact Form Validation-->
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">

                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Telefonisch rund um die Uhr erreichbar</h6>
                                    <a href="tel:+069 348764200"><span>Phone:</span>+069 348764200</a><br>
                                    <a href="tel:+069 348764209"><span>Fax:</span>+069 348764209</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Email</h6>
                                    <a href="mailto:info@cubelog.de">info@cubelog.de</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>Address</h6>
                                    <span>Cargo City Süd 537<br>60549 Frankfurt am Main</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Details End-->

    <section class="about-section pb-50">
        <div class="auto-container">
            <div class="row">
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div>
                        <div class="sec-title">
                            <span class="sub-title">REGISTEREINTRAG</span>
                        </div>
                        <div class="text">Eintragung im Handelsregister.
                            Registergericht: Amtsgericht Darmstadt
                            Registernummer: HRB 90240
                            UMSATZSTEUER-ID
                            Umsatzsteuer-Identifikationsnummer gemäß §27 a Umsatzsteuergesetz:
                            DE 283597383</div>
                        <div class="sec-title">
                            <span class="sub-title">AUFSICHTSBEHÖRDE</span>
                        </div>
                        <div class="text">Gerichtsstand ist Frankfurt am Main
                            Es gelten unsere AGB's ausschließlich auf Basis der Allgemeinen Deutschen
                            Spediteurbedingungen (ADSp) - jeweils neuste Fassung. Wir verweisen insbesondere auf die vom
                            Gesetz abweichenden Haftungsbeschränkungen von Ziffer 23 und 24 ADSp, die bis maximal €
                            5000,- gedeckt sind. Eine höhere Haftungssumme können wir Ihnen gerne zu Vorzugskonditionen
                            durch unseren Versicherer anbieten. Im Übrigen gelten die Passagebedingungen der IATA in ihrer
                            vollen Form gemäß Warschauer Abkommen, ff.<br>Den vollständigen Text der ADSp übersenden wir Ihnen gerne auf Anfrage.</div>
                        <div class="sec-title">
                            <span class="sub-title">STORNOBEDINGUNGEN</span>
                        </div>
                        <div class="text">Bitte beachten Sie, dass bei bestätigten Aufträgen Kosten entstehen.
                            Diese richten sich in der Höhe nach den Tarifbedingungen unserer Partner und Leistungsträger.
                            Im Einzelfall können hier bis zu 100 % zum Tragen kommen.</div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div>
                        <div class="sec-title">
                            <span class="sub-title">HAFTUNG FÜR INHALTE</span>
                        </div>
                        <div class="text">Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den
                            allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch
                            nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach
                            Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
                            Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den
                            allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab
                            dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von
                            entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</div>
                        <div class="sec-title">
                            <span class="sub-title">HAFTUNG FÜR LINKS</span>
                        </div>
                        <div class="text">Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss
                            haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die
                            Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten
                            verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche
                            Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht
                            erkennbar.<br>Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete
                            Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von
                            Rechtsverletzungen werden wir derartige Links umgehend entfernen.</div>
                        <div class="sec-title">
                            <span class="sub-title">URHEBERRECHT</span>
                        </div>
                        <div class="text">Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem
                            deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der
                            Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung
                            des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den
                            privaten, nicht kommerziellen Gebrauch gestattet.<br>Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte
                            Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie
                            trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen
                            entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige
                            Inhalte umgehend entfernen.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <!-- Google Map HTML Codes -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d10252.535317698774!2d8.554083952444772!3d50.02758807667033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCargo%20City%20S%C3%BCd%2C%20Geb%C3%A4ude%20537F%2C%2060549%20Frankfurt%20am%20Main%20I%20Flughafen!5e0!3m2!1str!2str!4v1670415919981!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </div>
    </section>
</div>
<?php
include "footer.php";
include "script.php";
?>
</body>
</html>
