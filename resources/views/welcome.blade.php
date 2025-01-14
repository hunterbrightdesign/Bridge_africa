@extends('layouts.app')

@section('content')
<div class="containt" style="margin: auto;  width: 80%;"><br>
    <div class="alert alert-custom alert-white alert-shadow gutter-b bghom2" role="alert">
        <div class="alert-icon">
            <span class="svg-icon svg-icon-primary svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
                        <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
                    </g>
                </svg><!--end::Svg Icon-->
            </span>
	    </div>
        <div class="alert-text font-weight-bold newfont">
            Une équipe de voyants expérimentés et ayant des dons naturels vous accompagne au quotidien à travers une consultation tenue secrète et sécurisée. Au-delà de Leurs puissances divinatoires ils font usage de la cartomancie et de l'astrologie
        </div>
    </div>
    <div class="row">
        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::Card-->
            <div class="card gutter-b card-stretch bghom2">
                <!--begin::Body-->
                <div class="card-body pt-4">
                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                            <div class="symbol symbol-lg-75 d-none">
                                <img alt="Pic" src="assets/media/users/voyante-1.avif">
                            </div>
                            <div class="symbol symbol-lg-75 symbol-primary">
                                 <img class="symbol-label font-size-h3 font-weight-boldest" style="border-radius: 50%;" alt="Pic" src="assets/media/users/voyante-1.avif">
                            </div>
                        </div>
                        <!--end::Pic-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="font-weight-bold amour"> Amour</a>
                            <span class="text-muted font-weight-bold name-style">ISABELLE</span>
                        </div>
                    </div>
                    <!--end::User-->

                    <!--begin::Desc-->
                    <p class="mb-7 newfont">
                        Je possède un don divin de voyance depuis ma naissance mais au fil du temps je l'ai développé afin d'apporter la stabilité sur le plan sentimental. Je suis connectée à la flamme d'amour, je vous aide à connaitre et même retrouver votre âme sœur. L'amour surpasse tout.
                    </p>
                    <div class="d-flex justify-content-between align-items-cente my-1">
                        <span class="text-dark-75 font-weight-bolder mr-2">Avis(90)</span>
                        <a href="" class="text-muted text-hover-primary" style="color:#8950FC !important;">
                            <i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i>
                             <i class="la la-star-half-alt text-warning mr-5" ></i> 4.75</a>
                    </div>
                    <!--end::Desc-->

                    <form action="message/ISABELLE" method="GET">

                        <!-- <input type="hidden" name="name_voyant" value="ISABELLE"> -->
                        <button class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4 hello"  data-toggle="modal" data-target="#kt_chat_modal">COMMENCEZ GRATUITEMENT ICI</button>
                    </form>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::Card-->
            <div class="card gutter-b card-stretch bghom2">
                <!--begin::Body-->
                <div class="card-body pt-4">

                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                            <div class="symbol symbol-lg-75 d-none">
                                <img alt="Pic" src="assets/media/users/default.jpg">
                            </div>
                            <div class="symbol symbol-lg-75 symbol-primary">
                                <img class="symbol-label font-size-h3 font-weight-boldest" style="border-radius: 50%;" alt="Pic" src="assets/media/users/voyante-3.avif">
                            </div>
                        </div>
                        <!--end::Pic-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a  class="font-weight-bold travail">Travail</a>
                            <span class="text-muted font-weight-bold name-style" >SUZANNE</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::User-->

                    <!--begin::Desc-->
                    <p class="mb-7 newfont">
                        Par le pouvoir de la communication télépathique, je guide plusieurs personnes à retrouver la voie du travail. Ce don est inné et j'exerce depuis 30 ans avec succès.

                    </p>
                    <div class="d-flex justify-content-between align-items-cente my-1">
                        <span class="text-dark-75 font-weight-bolder mr-2">Avis(112)</span>
                        <a href="" class="text-muted text-hover-primary" style="color:#8950FC !important;">
                            <i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i>
                              4</a>
                    </div>
                    <!--end::Desc-->
                        <form action="message/SUZANNE" method="GET">

                            <!-- <input type="hidden" name="name_voyant" value="SUZANNE"> -->
                            <button class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4 hello-1" data-toggle="modal" data-target="#kt_chat_modal">COMMENCEZ GRATUITEMENT ICI</button>
                        </form>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::Card-->
            <div class="card gutter-b card-stretch bghom2">
                <!--begin::Body-->
                <div class="card-body pt-4">

                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                            <div class="symbol symbol-lg-75 d-none">
                                <img alt="Pic" src="assets/media/users/300_10.jpg">
                            </div>
                            <div class="symbol symbol-lg-75 symbol-primary">
                                <img class="symbol-label font-size-h3 font-weight-boldest" style="border-radius: 50%;" alt="Pic" src="assets/media/users/voyant-2.avif">
                            </div>
                        </div>
                        <!--end::Pic-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="font-weight-bold argent"> Argent</a>
                            <span class="text-muted font-weight-bold name-style">JACQUEMIN</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::User-->

                    <!--begin::Desc-->
                    <p class="mb-7 newfont">
                        Je suis connectée aux énergies et je fais usage des supports pour lire votre avenir financier et vous aider à retrouver votre plan initial de vie. L'argent est ma spécialité et pour cela je vous aide à l'attirer et à le capter comme un aimant.

                    </p>
                    <div class="d-flex justify-content-between align-items-cente my-1">
                        <span class="text-dark-75 font-weight-bolder mr-2">Avis(20)</span>
                        <a href="" class="text-muted text-hover-primary" style="color:#8950FC !important;">
                            <i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i>
                             <i class="la la-star-half-alt text-warning mr-5"></i> 3.75</a>
                    </div>
                    <!--end::Desc-->
                            <form action="message/JACQUEMIN" method="GET">

                                <!-- <input type="hidden" name="name_voyant" value="JACQUEMIN"> -->
                                <button class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4 hello-2" data-toggle="modal" data-target="#kt_chat_modal">COMMENCEZ GRATUITEMENT ICI</button>
                            </form>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::Card-->
            <div class="card gutter-b card-stretch bghom2">
                <!--begin::Body-->
                <div class="card-body pt-4">

                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-7">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                            <div class="symbol symbol-lg-75 d-none">
                                <img alt="Pic" src="assets/media/users/300_10.jpg">
                            </div>
                            <div class="symbol symbol-lg-75 symbol-primary" style="border-radius: 50%;">
                                <img class="symbol-label font-size-h3 font-weight-boldest" style="border-radius: 50%;" alt="Pic" src="assets/media/users/voyante-4.avif">
                            </div>
                        </div>
                        <!--end::Pic-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <a href="#" class="font-weight-bold famille"> Famille</a>
                            <span class="text-muted font-weight-bold name-style"  >SABINE</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::User-->

                    <!--begin::Desc-->
                    <p class="mb-7 newfont">
                        Doté d'un pouvoir surnaturel, je traite tout Problème de famille par la méthode de la Clairvoyance et je vous aide à retrouver la stabilité dans votre foyer.

                    </p>
                    <div class="d-flex justify-content-between align-items-cente my-1">
                        <span class="text-dark-75 font-weight-bolder mr-2">Avis(09)</span>
                        <a href="" class="text-muted text-hover-primary" style="color:#8950FC !important;">
                            <i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i><i class="la la-star text-warning mr-5"></i>
                             <i class="la la-star-half-alt text-warning mr-5"></i> 3.75</a>
                    </div>
                    <!--end::Desc-->
                        <form action="message/SABINE" method="GET">

                            <!-- <input type="hidden" name="name_voyant" value="SABINE"> -->
                            <button class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4 hello-3" data-toggle="modal" data-target="#kt_chat_modal">COMMENCEZ GRATUITEMENT ICI</button>
                        </form>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
    </div>
</div>
@if (isset( Auth::user()->pub) )
    @if (Auth::user()->pub == null )
        <div class="anime">
            <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                <div class="alert-text"> <strong>ABTENEZ 7 CREDITS GRATUITS</strong><hr>vous aviez reçu 7 crédit bonus pour votre incription</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        </div>
    @else
    @endif
@else
<div class="anime">
    <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
        <div class="alert-icon"><i class="flaticon-warning"></i></div>
        <div class="alert-text"> <strong>ABTENEZ 7 CREDITS GRATUITS</strong><hr>obonnez vous maintenant et obtenez 7 crédits supplémentaire sur votre compte </div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
            </button>
        </div>
    </div>
</div>
@endif
@endsection
