@extends('template')
@section('head')
<title>Contacts | Blog</title>
@endsection
@section('contenu')

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="template/formContact/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/formContact/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/formContact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/formContact/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/formContact/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/formContact/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/formContact/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/formContact/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/formContact/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/formContact/css/util.css">
	<link rel="stylesheet" type="text/css" href="template/formContact/css/main.css">
<!--===============================================================================================-->

<div style="  background: #f2f2f2;">
    <br/><br/><br/>
    <h1 style="text-align:center; font-weight:bold;">C O N T A C T</h1><br/>
    <br/>
</div>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
            <span class="contact100-form-title">
                Envoyez nous un Message
            </span>

            <label class="label-input100" for="first-name">Veillez saisir votre nom et vos prenoms *</label>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                <input id="first-name" class="input100" type="text" name="first-name" placeholder="Prénoms">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                <input class="input100" type="text" name="last-name" placeholder="Nom">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="email">Saisissez votre email *</label>
            <div class="wrap-input100 validate-input" data-validate = "Veillez saisir un email valid">
                <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="phone">Entrer votre numero</label>
            <div class="wrap-input100">
                <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="message">Message *</label>
            <div class="wrap-input100 validate-input" data-validate = "Message requis">
                <textarea id="message" class="input100" name="message" placeholder="Ecrire votre message message"></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    Envoyer
                </button>
            </div>
        </form>

        <div class="contact100-more flex-col-c-m bg-gray">
            <div class="flex-w size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-map-marker"></span>
                </div>

                <div class="flex-col size2">
                    <span class="txt1 p-b-20">
							Addresse:
                    </span>
                    <span class="txt3">
                        Abidjan Cocody II plateaux, Boite Postale: 28 BP 536 ABIDJAN 28
                    </span>
                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-phone-handset"></span>
                </div>

                <div class="flex-col size2">
                    <span class="txt1 p-b-20">
                    Téléphone:
                    </span>

                    <span class="txt3">
                     (+225) 22515147 / 42222200
                    </span>
                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-envelope"></span>
                </div>

                <div class="flex-col size2">
                    <span class="txt1 p-b-20">
                        Email:
                    </span>

                    <span class="txt3">
                        contact@example.com
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="template/formContact/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="template/formContact/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="template/formContact/vendor/bootstrap/js/popper.js"></script>
<script src="template/formContact/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="template/formContact/vendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="template/formContact/vendor/daterangepicker/moment.min.js"></script>
<script src="template/formContact/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="template/formContact/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="template/formContact/js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>


@endsection