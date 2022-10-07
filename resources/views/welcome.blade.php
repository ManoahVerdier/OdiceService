<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Odice Service +</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png')}}">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="Paradox – Premium SaaS landing page kit" content="Production-ready landing page template for SaaS and startups">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ui8">
    <meta name="twitter:title" content="Paradox – Premium SaaS landing page kit">
    <meta name="twitter:description" content="Production-ready landing page template for SaaS and startups">
    <meta name="twitter:creator" content="@ui8">
    <meta name="twitter:image" content="https://ui8-paradox-html.herokuapp.com/img/twitter-card.jpg')}}">
    <meta property="og:title" content="Paradox – Premium SaaS landing page kit">
    <meta property="og:type" content="Article">
    <meta property="og:url" content="https://ui8.net/ui8/products/paradox">
    <meta property="og:image" content="https://ui8-paradox-html.herokuapp.com/img/fb-og-image.jpg')}}">
    <meta property="og:description" content="Production-ready landing page template for SaaS and startups">
    <meta property="og:site_name" content="Paradox – Premium SaaS landing page kit">
    <meta property="fb:admins" content="132951670226590">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
      var viewportmeta = document.querySelector('meta[name="viewport"]');
      if (viewportmeta) {
        if (screen.width < 375) {
          var newScale = screen.width / 375;
          viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
        } else {
          viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
        }
      }
    </script>
    <link rel="stylesheet" href="https://www.odice.info/wp-content/cache/min/1/wp-content/themes/theme-wordpress/css/front.min.css?ver=1659614130">
    @vite([
      'resources/css/app.min.css',
      'resources/sass/app.scss', 
      'resources/js/app.js'
    ])
  </head>
  <body>
    <style>
      @media only screen and (max-width: 767px){
        .main__wrap{
          padding-top:100px;
        }
      }
    </style>
    <!-- page-->
    <div class="page" id="page">
      <!-- header-->
      
      @include('header')
      <!-- container-->
      <div class="page__container">
        <!-- main-->
        <div class="section main">
          <div class="main__container container">
            <div class="main__wrap">
              <h1 data-aos="fade-right" data-aos-duration="200" class="main__title hero">Odice <br>Service +</h1>
              <div data-aos="fade-right" data-aos-duration="500" class="main__info h4M">Votre contrat personnalisé avec réparation illimité.</div>
              <div data-aos="fade-right" data-aos-duration="800" class="main__btns"><a class="button main__button" href="#details">Je m'abonne</a><a class="button-gray main__button" href="#univers"> En savoir plus</a></div>
            </div>
            <div class="generation__list w-100">
              <div class="generation__item main_item" data-aos="fade-right" data-aos-duration="1000">
                <div class="main_icon">
                  <img src="{{ Vite::asset('resources/img/tools.png')}}" alt="">
                </div>
                <div class="main_text">
                  3 formules selon <br>vos besoins
                </div>
              </div>
              <div class="generation__item main_item" data-aos="fade-up" data-aos-duration="1000">
                <div class="main_icon">
                  <img src="{{ Vite::asset('resources/img/callout.png')}}" alt="">
                </div>
                <div class="main_text">
                  Pour vos produits achetés <br>chez Odice ou ailleurs
                </div>
              </div>
              <div class="generation__item main_item" data-aos="fade-left" data-aos-duration="1000">
                <div class="main_icon">
                  <img src="{{ Vite::asset('resources/img/rocket.png')}}" alt="">
                </div>
                <div class="main_text">
                  Engagement 12 mois. <br>Au-delà, résiliable sans frais
                </div>
              </div>
            </div>
            <div class="main__preview">
              <img data-aos="zoom-in" data-aos-duration="1000" src="{{ Vite::asset('resources/img/mainpng.png')}}" alt="" class="mainImg">
              <div class="main__circle"></div>
              <div class="main__balls">
                <div class="main__ball"><img class="js-parallax" data-scale="2.3" data-orientation="down" src="{{ Vite::asset('resources/img/ball-blue-pf-svg.svg')}}" alt=""></div>
                <div class="main__ball"><img class="js-parallax" data-scale="3.3" data-orientation="down" src="{{ Vite::asset('resources/img/ball-blue-dark-pf-svg.svg')}}" alt=""></div>
                <div class="main__ball"><img class="js-parallax" data-scale="2.2" data-orientation="down" src="{{ Vite::asset('resources/img/ball-grey-svg.svg')}}" alt=""></div>
                <div class="main__ball"><img class="js-parallax" data-scale="3.5" data-orientation="down" src="{{ Vite::asset('resources/img/ball-red-pf-svg.svg')}}" alt=""></div>
              </div>
            </div>
          </div>
        </div>
        <!-- website-->
        <div class="section-border generation" id="univers">
          <div class="generation__container container ">
            <div class="w-100 d-inline-block">
              <h2 class="website__title h2">3 univers au choix</h2>
              <div class="website__info h5M">La garantie Odice Service + couvre jusqu'à 3 univers produits au choix : l'univers Chaud, Froid Laverie et Prêt à brancher.</div>
            </div>
            <div class="generation__list w-100">
              <div class="generation__item" data-aos="fadeInDown" data-aos-duration="800">
                <div class="generation__preview" style="background-image: url('{{ Vite::asset('resources/img/univers1.png')}}');background-position:center;background-size:cover">
                  <div class="generation__image"><img src="{{ Vite::asset('resources/img/generation-pic-1.png')}}" alt=""></div>
                </div>
                <h5 class="generation__subtitle h5">Chaud</h5>
                <div class="generation__content">Four, plaque, feux,...</div>
              </div>
              <div class="generation__item" data-aos="fadeInDown" data-aos-duration="800" data-aos-delay="200">
                <div class="generation__preview" style="background-image: url('{{ Vite::asset('resources/img/univers2.jfif')}}');background-position:center;background-size:cover">
                  <div class="generation__image"><img src="{{ Vite::asset('resources/img/generation-pic-2.png')}}" alt=""></div>
                </div>
                <h5 class="generation__subtitle h5">Froid laverie</h5>
                <div class="generation__content">Lave vaisselle, armoire,...</div>
              </div>
              <div class="generation__item" data-aos="fadeInDown" data-aos-duration="800" data-aos-delay="400">
                <div class="generation__preview" style="background-image: url('{{ Vite::asset('resources/img/univers3.png')}}');background-position:center;background-size:cover">
                  <div class="generation__image"><img src="{{ Vite::asset('resources/img/generation-pic-3.png')}}" alt=""></div>
                </div>
                <h5 class="generation__subtitle h5">Prêt à brancher</h5>
                <div class="generation__content">Robot, cutter</div>
              </div>
            </div>
          </div>
        </div>
        <div class="section discover" id="pourquoi">
          <div class="discover__container container">
            <h2 class="discover__title h2">Pourquoi choisir Odice Service + ?</h2>
            <div class="discover__group">
              <div data-aos="fade-up" data-aos-duration="800" class="discover__item">
                <div class="discover__col">
                  <h4>Réparation sans Odice Service +</h4>
                  <div class="discover__list" style="background-image:url('{{ Vite::asset('resources/img/FrameBlue.png')}}')">
                    
                    <div class="discover__box">
                      Pour une intervention
                      <br>
                      <br>
                      
                        Déplacement et diagnostic : 70€<br>
                        + Main d’oeuvre : 78€<br>
                        + Pièces détachées : 300€ en moyenne<br>
                        = 448€ en moyenne / Equipement<br>
                        <br>
                    </div>
                  </div>
                </div>
                <div class="discover__col">
                  <h4>Réparation avec Odice Service +</h4>
                  <div class="discover__list" style="background-image:url('{{ Vite::asset('resources/img/FrameDarkBlue.png')}}')">
                    
                    <div class="discover__box">
                      <p>Un abonnement tout compris</p>
                      <p>à partir de 79,99€ TTC/mois</p>
                      <p>soit : 958,88€ TTC/an</p>
                      <ul>
                        <li>Valable sur tous les appareils couverts par votre formule, peu importe le nombre de pannes</li>
                        <li>Déplacement, diagnostic, main-d'œuvre et pièces détachées : inclus </li>
                        <li>Expertise de nos techniciens SAV</li>
                        <br>
                      </ul>
                      <img src="{{ Vite::asset('resources/img/icon.png')}}"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section discover" id="discover">
          <div class="discover__container container">
            <h2 class="discover__title h2">Un abonnement Odice Service +, tout compris !</h2>
            <div class="discover__group">
              <div data-aos="fade-up" data-aos-duration="800" class="discover__item">
                <div class="discover__col">
                  <div class="discover__list">
                    <div class="discover__box">
                      <div class="discover__details">
                        <div class="discover__category h6">Réparation en illimité</div>
                        <div class="discover__content">Diagnostic, pièces et main-d’œuvre inclus</div>
                      </div>
                      <div class="discover__icon" style="background-color: #C4B5EE;"><img src="{{ Vite::asset('resources/img/robot.svg')}}" alt=""></div>
                    </div>
                    <div class="discover__box">
                      <div class="discover__details">
                        <div class="discover__category h6">Entretien de vos équipements</div>
                        <div class="discover__content">Visite de nos techniciens</div>
                      </div>
                      <div class="discover__icon" style="background-color: #B6DFEC;"><img src="{{ Vite::asset('resources/img/framer.svg')}}" alt=""></div>
                    </div>
                    <div class="discover__box">
                      <div class="discover__details">
                        <div class="discover__category h6">Assistance prioritaire</div>
                        <div class="discover__content">Intervention à domicile prioritaire pour vos appareils volumineux</div>
                      </div>
                      <div class="discover__icon" style="background-color: #CCE7BE;"><img src="{{ Vite::asset('resources/img/framer.svg')}}" alt=""></div>
                    </div>
                  </div>
                </div>
                <div class="discover__col">
                  <div class="discover__list">
                    <div class="discover__box">
                      <div class="discover__details">
                        <div class="discover__category h6">Livraison gratuite</div>
                        <div class="discover__content">Avec installation</div>
                      </div>
                      <div class="discover__icon" style="background-color: #C4B5EE;"><img src="{{ Vite::asset('resources/img/toggle-off.svg')}}" alt=""></div>
                    </div>
                    <div class="discover__box">
                      <div class="discover__details">
                        <div class="discover__category h6">Intervention dans la journée</div>
                        <div class="discover__content">Remplacement de matériel de prêt si il n’est pas réparable</div>
                      </div>
                      <div class="discover__icon" style="background-color: #B6DFEC;"><img src="{{ Vite::asset('resources/img/mouse.svg')}}" alt=""></div>
                    </div>
                    <div class="discover__box">
                      <div class="discover__details">
                        <div class="discover__category h6">Remises exclusives</div>
                        <div class="discover__content">Offres réservées toute l’année</div>
                      </div>
                      <div class="discover__icon" style="background-color: #CCE7BE;"><img src="{{ Vite::asset('resources/img/lightning.svg')}}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- details-->
        <div class="section details" id="details">
          <div class="details__container container">
            <h2 class="details__title h2">Construisez votre univers</h2>
            <!-- tabs-->
            <div class="tabs js-tabs">
              <div class="tabs__nav">
                <button class="tabs__button js-tabs-link active">Chaud</button>
                <button class="tabs__button js-tabs-link">Froid laverie</button>
                <button class="tabs__button js-tabs-link">Prêt à brancher</button>
              </div>
              <select class="select select_small js-tabs-select">
                <option>Chaud</option>
                <option>Froid laverie</option>
                <option>Prêt à brancher</option>
              </select>
              <div class="tabs__container">
                <div class="tabs__item js-tabs-item">
                  <div class="inputWrap">
                    <input type="text" name="searchChaud" class="searchChaud form-control" placeholder="Filtrer..."/>
                  </div>
                  <div class="details__row">
                    <table class="table table-striped table-borderless table-hover">
                      @foreach($chaud as $id=>$nom)
                        <tr class="trChaud">
                          <td>{{ $nom }}</td>
                          <td><input class="form-control nbApp chaud" form="sendAdhesion" name="nbApp[chaud][{{ $id }}]" type="number" min=0 step=1 value="0" label="{{ $nom }}"/></td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
                <div class="tabs__item js-tabs-item">
                  <div class="inputWrap">
                    <input type="text" name="searchFroid" class="searchFroid form-control" placeholder="Filtrer..."/>
                  </div>
                  <div class="details__row">
                    <table class="table table-striped table-borderless table-hover">
                      @foreach($froid as $id=>$nom)
                        <tr class="trFroid">
                          <td>{{ $nom }}</td>
                          <td><input class="form-control nbApp froid" form="sendAdhesion" type="number" min=0 step=1 name="nbApp[froid][{{ $id }}]" value="0" label="{{ $nom }}"/></td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
                <div class="tabs__item js-tabs-item">
                  <div class="inputWrap">
                    <input type="text" name="searchAutres" class="searchAutres form-control" placeholder="Filtrer..."/>
                  </div>
                  <div class="details__row">
                    <table class="table table-striped table-borderless table-hover">
                      @foreach($autres as $id=>$nom)
                        <tr class="trAutres">
                          <td>{{ $nom }}</td>
                          <td><input class="form-control nbApp autre" form="sendAdhesion" type="number" min=0 step=1 name="nbApp[autres][{{ $id }}]" value="0" label="{{ $nom }}"/></td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- pricing-->
        <div class="section pricing" id="pricing">
          <div class="pricing__inner">
            <div class="pricing__container container">
              <div class="pricing__top">
                <div class="pricing__title h1">3 formules</div>
                <div class="pricing__info h5M">Adaptées à vos besoins.</div>
                
              </div>
              <div class="pricing__plans">
                <div class="univers1 pricing__plan">
                  <div class="pricing__head">
                    <div class="pricing__line">
                      <div class="pricing__subtitle h3">Silver</div>
                    </div>
                    <div class="pricing__counter">1 univers au choix</div>
                    <div class="pricing__price h3"><span class="amount">99.99€</span> <span class="pricing__duration"><span class="pricing__separator"></span> mois</span></div>
                    <div class="pricing__details h6">Soit 99.99€ par mois et par appareil</div>
                  </div>
                  <div class="pricing__body">
                    <div class="pricing__options">
                      <div class="pricing__option">
                        <svg class="icon icon-check-circle">
                          <use xlink:href="#icon-check-circle"></use>
                        </svg>
                        <div class="pricing__text"><span class="nbApp">0</span> équipements sélectionnés</div>
                      </div>
                      
                    </div><a class="button-gray pricing__button" href="#subscribePart">Je m'abonne</a>
                  </div>
                </div>
                <div class="univers2 pricing__plan">
                  <div class="pricing__head">
                    <div class="pricing__line">
                      <div class="pricing__subtitle h3">Gold</div>
                    </div>
                    <div class="pricing__counter">2 univers au choix</div>
                    <div class="pricing__price h3"><span class="amount">89.99€</span> <span class="pricing__duration"><span class="pricing__separator"></span> mois</span></div>
                    <div class="pricing__details h6">Soit 89.99€ par mois et par appareil</div>
                  </div>
                  <div class="pricing__body">
                    <div class="pricing__options">
                      <div class="pricing__option">
                        <svg class="icon icon-check-circle">
                          <use xlink:href="#icon-check-circle"></use>
                        </svg>
                        <div class="pricing__text"><span class="nbApp">0</span> équipements sélectionnés</div>
                      </div>
                    </div><a class="button-gray pricing__button" href="#subscribePart">Je m'abonne</a>
                  </div>
                </div>
                <div class="univers3 pricing__plan pricing__plan_premium">
                  <div class="pricing__head">
                    <div class="pricing__line">
                      <div class="pricing__subtitle h3">Platinium</div>
                      <div class="pricing__recommended">Recommandé</div>
                    </div>
                    <div class="pricing__counter">3 univers au choix</div>
                    <div class="pricing__price h3"><span class="amount">79.99€</span> <span class="pricing__duration"><span class="pricing__separator"></span> mois</span></div>
                    <div class="pricing__details h6" style="display:none">Soit 79.99€ par mois et par appareil</div>
                  </div>
                  <div class="pricing__body">
                    <div class="pricing__options">
                      <div class="pricing__option">
                        <svg class="icon icon-check-circle">
                          <use xlink:href="#icon-check-circle"></use>
                        </svg>
                        <div class="pricing__text"><span class="nbApp">0</span> équipements sélectionnés</div>
                      </div>
                    </div><a class="button pricing__button" href="#subscribePart">Je m'abonne</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="pricing__background">
              <div class="pricing__image"><img class="js-parallax" data-scale="2.1" data-orientation="down" src="{{ Vite::asset('resources/img/join/image-3.png')}}" alt=""></div>
              <div class="pricing__image"><img class="js-parallax" data-scale="2.6" data-orientation="down" src="{{ Vite::asset('resources/img/join/image-4.png')}}" alt=""></div>
            </div>
            <div class="pricing__balls">
              <div class="pricing__ball"><img class="js-parallax" data-scale="3.3" data-orientation="down" src="{{ Vite::asset('resources/img/ball-blue-pf-svg.svg')}}" alt=""></div>
              <div class="pricing__ball"><img class="js-parallax" data-scale="2.8" data-orientation="down" src="{{ Vite::asset('resources/img/ball-grey-svg.svg')}}" alt=""></div>
              <div class="pricing__ball"><img class="js-parallax" data-scale="4.4" data-orientation="down" src="{{ Vite::asset('resources/img/ball-red-pf-svg.svg')}}" alt=""></div>
            </div>
          </div>
        </div>
        <!-- subscription-->
        <div class="section subscription" id="subscribePart">
          <div class="subscription__container container">
            <div class="subscription__wrapper">
              <div class="subscription__head">
                <div class="subscription__title h1">Je m'abonne à Odice Service +</div>
                <div class="subscription__info h4M">Pour profiter des avantages, riend de plus simple, vous remplissez ce formulaire et on revient vers vous</div>
              </div>
              <form class="subscription__form" id="sendAdhesion" method="POST">
                @csrf
                <input type="hidden" name="nbAppTot" value="" id="nbAppTot">
                <input type="hidden" name="nbChaud" value="" id="nbChaud">
                <input type="hidden" name="nbFroid" value="" id="nbFroid">
                <input type="hidden" name="nbAutres" value="" id="nbAutres">
                <input type="hidden" name="nbUnivers" value="" id="nbUnivers">
                <input type="hidden" name="formule" value="" id="formule">
                <input type="hidden" name="prix" value="" id="prix">
                <div class="subscription__fieldset">
                  <div class="field field_icon field_light">
                    <div class="field__wrap">
                      <input class="field__input" type="text" name="last_name" placeholder="Votre nom" required>
                      <svg class="icon icon-profile">
                        <use xlink:href="#icon-profile"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="field field_icon field_light">
                    <div class="field__wrap">
                      <input class="field__input" type="text" name="first_name" placeholder="Votre prénom" required>
                      <svg class="icon icon-profile">
                        <use xlink:href="#icon-profile"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="field field_icon field_light">
                    <div class="field__wrap">
                      <input class="field__input" type="phone" name="phone" placeholder="Votre téléphone" required>
                      <svg class="icon icon-profile">
                        <use xlink:href="#icon-chat"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="field field_icon field_light">
                    <div class="field__wrap">
                      <input class="field__input" type="email" name="email" placeholder="Votre Email" required>
                      <svg class="icon icon-mail">
                        <use xlink:href="#icon-mail"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <button class="button-black button-wide subscription__button" type="submit">Adhérer en ligne</button>
              </form>
              <div class="subscription__circles"></div>
              <div class="subscription__balls">
                <div class="subscription__ball" data-aos="fadeIn"><img class="js-parallax" data-scale="2.1" data-orientation="down" src="{{ Vite::asset('resources/img/ball-blue-pf-svg.svg')}}" alt=""></div>
                <div class="subscription__ball" data-aos="fadeIn"><img class="js-parallax" data-scale="2.3" data-orientation="down" src="{{ Vite::asset('resources/img/ball-red-pf-svg.svg')}}" alt=""></div>
                <div class="subscription__ball" data-aos="fadeIn"><img class="js-parallax" data-scale="2.3" data-orientation="down" src="{{ Vite::asset('resources/img/ball-grey-svg.svg')}}" alt=""></div>
                <div class="subscription__ball" data-aos="fadeIn"><img class="js-parallax" data-scale="2.3" data-orientation="down" src="{{ Vite::asset('resources/img/ball-blue-dark-pf-svg.svg')}}" alt=""></div>
              </div>
            </div>
          </div>
        </div>
        <div class="generation" id="exemple">
          <div class="generation__container container ">
            <div class="w-100 d-inline-block">
              <h3 class="website__title h3">Un exemple pour illustrer les avantages à adhérer à Odice Service +</h3>
            </div>
            <div class="generation__list w-100">
              <div class="generation__item" data-aos="fadeInDown" data-aos-duration="800">
                <div class="generation__preview" >
                  <div class="generation__image"><img src="{{ Vite::asset('resources/img/exemple-1.png')}}" alt=""></div>
                </div>
                <div class="generation__content">6 mois après Monsieur Dubreuil est en panne de son four mixte</div>
              </div>
              <div class="generation__item" data-aos="fadeInDown" data-aos-duration="800" data-aos-delay="200">
                <div class="generation__preview">
                  <div class="generation__image"><img src="{{ Vite::asset('resources/img/exemple-2.png')}}" alt=""></div>
                </div>
                <div class="generation__content">Le technicien intervient dans la journée</div>
              </div>
              <div class="generation__item" data-aos="fadeInDown" data-aos-duration="800" data-aos-delay="400">
                <div class="generation__preview" >
                  <div class="generation__image"><img src="{{ Vite::asset('resources/img/exemple-3.png')}}" alt=""></div>
                </div>
                <div class="generation__content">Si la réparation ne s est pas effectué il bénéficie d un remplacement de matériel de prêt gratuitement en attendant la réparation définitive</div>
              </div>
            </div>
          </div>
        </div>
        <!-- faq-->
      <div class="section faq hidden">
        <div class="faq__container container">
          <div class="faq__top">
            <div class="faq__title h2">Questions fréquentes</div>
          </div>
          <div class="faq__list">
            <div class="faq__item js-accordeon-item">
              <div class="faq__head js-accordeon-head">
                <div class="faq__subtitle h6">Can I cancel my site plan at any time?</div>
                <div class="faq__plus">
                  <svg class="icon icon-plus-circle">
                    <use xlink:href="#icon-plus-circle"></use>
                  </svg>
                </div>
              </div>
              <div class="faq__body js-accordeon-body">
                <p>Vel ratione officia repellat fuga voluptatem. Quis expedita et consequatur. Perferendis dolor autem. Qui est rem dolor quo. Similique nam qui eveniet et totam nostrum. Delectus quia molestias eos itaque. Sequi omnis repudiandae. Ex inventore sequi quis non quidem. Ut quam repellat minima in eos est repudiandae.</p>
                <p>Optio reprehenderit et amet accusamus nemo tenetur et voluptas. Sed illum cum dolorem iusto incidunt quos facilis. Natus fuga qui iste ipsa accusantium voluptatibus.</p>
              </div>
            </div>
            <div class="faq__item js-accordeon-item">
              <div class="faq__head js-accordeon-head">
                <div class="faq__subtitle h6">Can I try Paradox before paying?</div>
                <div class="faq__plus">
                  <svg class="icon icon-plus-circle">
                    <use xlink:href="#icon-plus-circle"></use>
                  </svg>
                </div>
              </div>
              <div class="faq__body js-accordeon-body">
                <p>Vel ratione officia repellat fuga voluptatem. Quis expedita et consequatur. Perferendis dolor autem. Qui est rem dolor quo. Similique nam qui eveniet et totam nostrum. Delectus quia molestias eos itaque. Sequi omnis repudiandae. Ex inventore sequi quis non quidem. Ut quam repellat minima in eos est repudiandae.</p>
                <p>Optio reprehenderit et amet accusamus nemo tenetur et voluptas. Sed illum cum dolorem iusto incidunt quos facilis. Natus fuga qui iste ipsa accusantium voluptatibus.</p>
              </div>
            </div>
            <div class="faq__item js-accordeon-item">
              <div class="faq__head js-accordeon-head">
                <div class="faq__subtitle h6">Can I cancel my site plan at any time?</div>
                <div class="faq__plus">
                  <svg class="icon icon-plus-circle">
                    <use xlink:href="#icon-plus-circle"></use>
                  </svg>
                </div>
              </div>
              <div class="faq__body js-accordeon-body">
                <p>Vel ratione officia repellat fuga voluptatem. Quis expedita et consequatur. Perferendis dolor autem. Qui est rem dolor quo. Similique nam qui eveniet et totam nostrum. Delectus quia molestias eos itaque. Sequi omnis repudiandae. Ex inventore sequi quis non quidem. Ut quam repellat minima in eos est repudiandae.</p>
                <p>Optio reprehenderit et amet accusamus nemo tenetur et voluptas. Sed illum cum dolorem iusto incidunt quos facilis. Natus fuga qui iste ipsa accusantium voluptatibus.</p>
              </div>
            </div>
            <div class="faq__item js-accordeon-item">
              <div class="faq__head js-accordeon-head">
                <div class="faq__subtitle h6">Can I cancel my site plan at any time?</div>
                <div class="faq__plus">
                  <svg class="icon icon-plus-circle">
                    <use xlink:href="#icon-plus-circle"></use>
                  </svg>
                </div>
              </div>
              <div class="faq__body js-accordeon-body">
                <p>Vel ratione officia repellat fuga voluptatem. Quis expedita et consequatur. Perferendis dolor autem. Qui est rem dolor quo. Similique nam qui eveniet et totam nostrum. Delectus quia molestias eos itaque. Sequi omnis repudiandae. Ex inventore sequi quis non quidem. Ut quam repellat minima in eos est repudiandae.</p>
                <p>Optio reprehenderit et amet accusamus nemo tenetur et voluptas. Sed illum cum dolorem iusto incidunt quos facilis. Natus fuga qui iste ipsa accusantium voluptatibus.</p>
              </div>
            </div>
            <div class="faq__item js-accordeon-item">
              <div class="faq__head js-accordeon-head">
                <div class="faq__subtitle h6">Can I cancel my site plan at any time?</div>
                <div class="faq__plus">
                  <svg class="icon icon-plus-circle">
                    <use xlink:href="#icon-plus-circle"></use>
                  </svg>
                </div>
              </div>
              <div class="faq__body js-accordeon-body">
                <p>Vel ratione officia repellat fuga voluptatem. Quis expedita et consequatur. Perferendis dolor autem. Qui est rem dolor quo. Similique nam qui eveniet et totam nostrum. Delectus quia molestias eos itaque. Sequi omnis repudiandae. Ex inventore sequi quis non quidem. Ut quam repellat minima in eos est repudiandae.</p>
                <p>Optio reprehenderit et amet accusamus nemo tenetur et voluptas. Sed illum cum dolorem iusto incidunt quos facilis. Natus fuga qui iste ipsa accusantium voluptatibus.</p>
              </div>
            </div>
            <div class="faq__item js-accordeon-item">
              <div class="faq__head js-accordeon-head">
                <div class="faq__subtitle h6">Can I cancel my site plan at any time?</div>
                <div class="faq__plus">
                  <svg class="icon icon-plus-circle">
                    <use xlink:href="#icon-plus-circle"></use>
                  </svg>
                </div>
              </div>
              <div class="faq__body js-accordeon-body">
                <p>Vel ratione officia repellat fuga voluptatem. Quis expedita et consequatur. Perferendis dolor autem. Qui est rem dolor quo. Similique nam qui eveniet et totam nostrum. Delectus quia molestias eos itaque. Sequi omnis repudiandae. Ex inventore sequi quis non quidem. Ut quam repellat minima in eos est repudiandae.</p>
                <p>Optio reprehenderit et amet accusamus nemo tenetur et voluptas. Sed illum cum dolorem iusto incidunt quos facilis. Natus fuga qui iste ipsa accusantium voluptatibus.</p>
              </div>
            </div>
            <div class="faq__item js-accordeon-item">
              <div class="faq__head js-accordeon-head">
                <div class="faq__subtitle h6">Can I cancel my site plan at any time?</div>
                <div class="faq__plus">
                  <svg class="icon icon-plus-circle">
                    <use xlink:href="#icon-plus-circle"></use>
                  </svg>
                </div>
              </div>
              <div class="faq__body js-accordeon-body">
                <p>Vel ratione officia repellat fuga voluptatem. Quis expedita et consequatur. Perferendis dolor autem. Qui est rem dolor quo. Similique nam qui eveniet et totam nostrum. Delectus quia molestias eos itaque. Sequi omnis repudiandae. Ex inventore sequi quis non quidem. Ut quam repellat minima in eos est repudiandae.</p>
                <p>Optio reprehenderit et amet accusamus nemo tenetur et voluptas. Sed illum cum dolorem iusto incidunt quos facilis. Natus fuga qui iste ipsa accusantium voluptatibus.</p>
              </div>
            </div>
            <div class="faq__item js-accordeon-item">
              <div class="faq__head js-accordeon-head">
                <div class="faq__subtitle h6">Can I cancel my site plan at any time?</div>
                <div class="faq__plus">
                  <svg class="icon icon-plus-circle">
                    <use xlink:href="#icon-plus-circle"></use>
                  </svg>
                </div>
              </div>
              <div class="faq__body js-accordeon-body">
                <p>Vel ratione officia repellat fuga voluptatem. Quis expedita et consequatur. Perferendis dolor autem. Qui est rem dolor quo. Similique nam qui eveniet et totam nostrum. Delectus quia molestias eos itaque. Sequi omnis repudiandae. Ex inventore sequi quis non quidem. Ut quam repellat minima in eos est repudiandae.</p>
                <p>Optio reprehenderit et amet accusamus nemo tenetur et voluptas. Sed illum cum dolorem iusto incidunt quos facilis. Natus fuga qui iste ipsa accusantium voluptatibus.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      
        


      <footer class="site-footer" role="contentinfo" style="position:inherit !important">
        <div class="site-footer__inner l-wrapper">

            <div class="group-infos">
                                    Siège : Za la Tranche 04180 Villeneuve<br>
Tel : 04 92 79 30 53<br>
Email: contact@odice.cc<br>
Web : www.odice.info<br>

                <div class="socials">
                                                <a href="https://www.facebook.com/Odice-901010816774645" class="icon-facebook-2" target="_blank" rel="noreferrer noopener"></a>
                                                                                                                        <a href="https://www.linkedin.com/company/groupeodice" class="icon-linkedin-squared" target="_blank" rel="noreferrer noopener"></a>
                                                                </div>
            </div>

            <nav class="site-footer__navigation" role="navigation">
                <span class="site-footer__title">Odice</span>
                <ul class="footer-nav "><li class="footer-nav__item  footer-nav__item--8"><a href="https://www.odice.info/odice-notre-groupe/" class="footer-nav__link">Le groupe</a></li>
<li class="footer-nav__item  footer-nav__item--49"><a href="https://www.odice.info/nos-metiers/" class="footer-nav__link">Nos métiers</a></li>
<li class="footer-nav__item  footer-nav__item--70"><a href="https://www.odice.info/actualites/" class="footer-nav__link">Actualités</a></li>
<li class="footer-nav__item  footer-nav__item--169"><a href="https://www.odice.info/recrutement/" class="footer-nav__link">Recrutement</a></li>
<li class="footer-nav__item  footer-nav__item--1020"><a href="https://www.odice.info/nos-qualifications/" class="footer-nav__link">Nos Qualifications</a></li>
<li class="footer-nav__item  footer-nav__item--12"><a href="https://www.odice.info/contact/" class="footer-nav__link">Contact</a></li>
<li class="footer-nav__item  footer-nav__item--21"><a href="https://www.odice.info/mentions-legales/" class="footer-nav__link">Mentions légales</a></li>
</ul>                </nav>

            
        </div>
    </footer>
      
    </div>
    <!-- scripts-->

    <!-- svg sprite-->
    <div style="display: none"><svg width="0" height="0">
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-arrow-down">
<path d="M12 8.16a.75.75 0 0 1 .743.648l.007.102v4.373l1.191-1.185a.75.75 0 0 1 1.131.979l-.073.084-2.47 2.46a.75.75 0 0 1-.186.135l-.048.023-.052.02-.057.017-.054.012-.044.007-.074.005c-.014 0-.028 0-.042 0l-.058-.004-.053-.008-.063-.015-.046-.014-.054-.021-.048-.023c-.043-.023-.084-.05-.123-.082l-.056-.05-2.47-2.46a.75.75 0 0 1 .974-1.135l.084.072 1.191 1.186V8.91a.75.75 0 0 1 .75-.75z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-arrow-right">
<path d="M13.243 17.793a1 1 0 0 0 1.414 1.414l5.793-5.793a2 2 0 0 0 0-2.828l-5.793-5.793a1 1 0 0 0-1.414 1.414L18.036 11H3.95a1 1 0 1 0 0 2h14.086l-4.793 4.793z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-check-circle">
<path d="M2 12a10 10 0 1 1 20 0 10 10 0 1 1-20 0zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4h0z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-chevron-down">
<path d="M4.793 8.543a1 1 0 0 1 1.414 0L12 14.336l5.793-5.793a1 1 0 0 1 1.414 1.414l-5.793 5.793a2 2 0 0 1-2.828 0L4.793 9.957a1 1 0 0 1 0-1.414z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-close">
<path d="M6.451 5.31l.084.073L12 10.93l5.466-5.546a.75.75 0 0 1 1.141.968l-.072.085L13.053 12l5.481 5.564a.75.75 0 0 1-.985 1.126l-.084-.073L12 13.069l-5.466 5.547a.75.75 0 0 1-1.141-.968l.072-.085L10.946 12l-5.48-5.564a.75.75 0 0 1 .985-1.126z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-chat">
<path d="M18.816 3.436a4 4 0 0 1 1.748 1.748c.394.774.432 1.765.436 3.606v2.421c-.004 1.841-.041 2.831-.436 3.606a4 4 0 0 1-1.748 1.748c-.774.394-1.765.432-3.606.436h-4.851c-.501 0-.752 0-.987.058a2 2 0 0 0-.589.25c-.205.129-.379.31-.727.67l-.929.963c-1.29 1.337-1.935 2.006-2.491 2.056a1.5 1.5 0 0 1-1.272-.514c-.346-.401-.364-1.26-.365-2.938V9.4c0-2.24 0-3.36.436-4.216a4 4 0 0 1 1.748-1.748c.815-.415 1.87-.435 3.903-.436H14.6c2.24 0 3.36 0 4.216.436zM11 11H8a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2zm5-4H8a1 1 0 1 0 0 2h0 8a1 1 0 1 0 0-2h0z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-external-link">
<path d="M9.808 5.251a.75.75 0 1 1 .076 1.498l-.684.048-.423.046c-2.733.35-3.758 1.52-3.979 4.616l-.027.479-.009.251-.01.524-.001.273.02 1.023.026.469c.229 3.341 1.386 4.497 4.728 4.726l.469.026.497.015.526.005.555-.005.522-.017c3.546-.157 4.793-1.183 5.105-4.078l.038-.426.015-.223a.75.75 0 1 1 1.497.088c-.243 4.126-1.958 5.832-6.292 6.117l-.556.028-.886.016a22.92 22.92 0 0 1-1.14-.027l-.53-.034c-4.05-.324-5.711-1.985-6.035-6.033l-.034-.53-.027-1.14.007-.583.02-.556c.232-4.615 1.992-6.365 6.531-6.596zM20 3.25h.017l.06.004L20 3.25c.047 0 .093.004.137.013l.034.007.068.019.03.011.056.024.044.023.051.032.031.022c.057.043.107.094.15.15l-.071-.082c.037.037.069.077.097.119l.037.063.013.027a.75.75 0 0 1 .034.085l.006.019c.011.037.02.076.025.116L20.75 4v6a.75.75 0 0 1-1.493.102L19.25 10V5.81l-5.72 5.72a.75.75 0 0 1-1.133-.977l.073-.084 5.718-5.72H14a.75.75 0 0 1-.743-.648L13.25 4a.75.75 0 0 1 .648-.743L14 3.25h6z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-facebook">
<path d="M22 12c0 4.996-3.664 9.137-8.452 9.881a.48.48 0 0 1-.548-.482V14h2a1 1 0 1 0 0-2h-2v-2a1 1 0 0 1 1-1h1a1 1 0 1 0 0-2h-1a3 3 0 0 0-3 3v2h-1a1 1 0 1 0 0 2h1v7.398a.48.48 0 0 1-.548.482C5.664 21.137 2 16.996 2 12 2 6.477 6.477 2 12 2s10 4.477 10 10z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-home">
<path d="M11.319 7.165a1.5 1.5 0 0 1 1.363 0h0l5.5 2.805A1.5 1.5 0 0 1 19 11.306h0V18a3 3 0 0 1-3 3h0-.861A1.14 1.14 0 0 1 14 19.86h0V17a2 2 0 1 0-4 0h0v2.86A1.14 1.14 0 0 1 8.86 21h0H8a3 3 0 0 1-3-3h0v-6.694a1.5 1.5 0 0 1 .819-1.336h0zm.234-4.059a1 1 0 0 1 .894 0h0l8 4a1 1 0 1 1-.894 1.789h0L12 5.118 4.447 8.894a1 1 0 1 1-.894-1.789h0z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-instagram">
<path d="M17 3a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h10zm-5 5a4 4 0 1 0 0 8 4 4 0 1 0 0-8zm0 2a2 2 0 1 1 0 4 2 2 0 1 1 0-4zm5.5-4.5a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-linkedin">
<path d="M19.362 3.327a3 3 0 0 1 1.311 1.311c.308.604.326 1.384.327 2.874V16.2c0 1.68 0 2.52-.327 3.162a3 3 0 0 1-1.311 1.311c-.604.308-1.384.326-2.874.327H7.8c-1.68 0-2.52 0-3.162-.327a3 3 0 0 1-1.311-1.311c-.289-.566-.322-1.287-.326-2.603V7.241c.004-1.316.038-2.037.326-2.603a3 3 0 0 1 1.311-1.311c.566-.289 1.287-.322 2.603-.326h9.518c1.316.004 2.037.038 2.603.326zM8 11a1 1 0 0 0-1 1h0v4a1 1 0 1 0 2 0h0v-4a1 1 0 0 0-1-1zm6 0a2.99 2.99 0 0 0-1.293.292C12.526 11.112 12.276 11 12 11a1 1 0 0 0-1 1h0v4a1 1 0 1 0 2 0h0v-2a1 1 0 1 1 2 0h0v2a1 1 0 1 0 2 0h0v-2a3 3 0 0 0-3-3zM8 7a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-mail">
<path d="M17.759 4.001c1.316.004 2.037.038 2.603.326a3 3 0 0 1 1.311 1.311c.327.642.327 1.482.327 3.162v6.688c-.001 1.49-.019 2.27-.327 2.874a3 3 0 0 1-1.311 1.311C19.72 20 18.88 20 17.199 20H6.512c-1.49-.001-2.27-.019-2.874-.327a3 3 0 0 1-1.311-1.311c-.289-.566-.322-1.287-.326-2.603V8.241c.004-1.316.038-2.037.326-2.603a3 3 0 0 1 1.311-1.311c.566-.289 1.287-.322 2.603-.326zm-1.325 4.175l-3.869 2.654a1 1 0 0 1-1.131 0L7.565 8.176a1 1 0 1 0-1.131 1.649l3.869 2.654a3 3 0 0 0 3.394 0l3.869-2.654a1 1 0 1 0-1.131-1.649z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-pinterest">
<path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12a10 10 0 0 0 5.606 8.985.48.48 0 0 0 .669-.312l1.44-5.186.006-.021 1.315-4.734a1 1 0 0 1 1.927.535l-1.052 3.788c1.251.265 2.128.038 2.716-.35.743-.491 1.22-1.37 1.34-2.414s-.136-2.142-.721-2.954C14.683 8.556 13.793 8 12.5 8c-1.921 0-3.064.831-3.622 1.854-.581 1.064-.599 2.467.017 3.699a1 1 0 1 1-1.789.894c-.884-1.768-.903-3.866.017-5.551C8.064 7.169 9.921 6 12.5 6c1.957 0 3.442.882 4.369 2.17.905 1.258 1.255 2.864 1.085 4.35s-.878 2.966-2.224 3.855c-1.149.759-2.629 1.002-4.355.611l-1.195 4.303a.48.48 0 0 0 .387.61c.468.067.947.102 1.433.102z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-pencil">
<path d="M6.285 13.295l.069.058 4.303 4.303a.5.5 0 0 1 .058.638l-.058.069-.153.153a3 3 0 0 1-.94.636l-.214.082-5.022 1.709c-.752.256-1.472-.421-1.298-1.168l.029-.102 1.716-5.015a3 3 0 0 1 .562-.983l.155-.168.154-.154a.5.5 0 0 1 .638-.058zm6.48-6.519l.069.058 4.303 4.303a.5.5 0 0 1 .059.636l-.057.069-4.276 4.311a.5.5 0 0 1-.639.059l-.069-.058-4.303-4.303a.5.5 0 0 1-.059-.636l.057-.069 4.276-4.311a.5.5 0 0 1 .639-.059zm2.354-2.895a3 3 0 0 1 4.243 0h0l.768.767a3 3 0 0 1 0 4.243h0l-.765.765a.5.5 0 0 1-.707 0h0l-4.303-4.303a.5.5 0 0 1 0-.707h0z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-play">
<path d="M17.92 10.94L7.69 5.7c-.55-.28-1.19-.26-1.72.06a1.73 1.73 0 0 0-.84 1.5v10.49a1.73 1.73 0 0 0 .84 1.5 1.77 1.77 0 0 0 .91.26c.27 0 .55-.06.8-.19l10.23-5.24a1.74 1.74 0 0 0 .95-1.56c0-.66-.35-1.28-.94-1.58z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-plus-circle">
<path d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12zm11-4a1 1 0 1 0-2 0v3H8a1 1 0 1 0 0 2h3v3a1 1 0 1 0 2 0v-3h3a1 1 0 1 0 0-2h-3V8z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-product-hunt">
<path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm-1-10v-2h2a1 1 0 1 1 0 2h-2zm2 2h-2v2a1 1 0 1 1-2 0v-3-3.706C9 8.579 9.579 8 10.294 8H13a3 3 0 1 1 0 6z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-profile">
<path d="M9 14a5 5 0 0 0-5 5 3 3 0 0 0 3 3h10a3 3 0 0 0 3-3 5 5 0 0 0-5-5H9zm3-12a5 5 0 1 0 0 10 5 5 0 1 0 0-10z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-size">
<path d="M19.362 3.327a3 3 0 0 1 1.311 1.311c.308.604.326 1.384.327 2.874V16.2c0 1.68 0 2.52-.327 3.162a3 3 0 0 1-1.311 1.311c-.604.308-1.384.326-2.874.327H7.8c-1.68 0-2.52 0-3.162-.327a3 3 0 0 1-1.311-1.311c-.289-.566-.322-1.287-.326-2.603V7.241c.004-1.316.038-2.037.326-2.603a3 3 0 0 1 1.311-1.311c.566-.289 1.287-.322 2.603-.326h9.518c1.316.004 2.037.038 2.603.326zm-4.069 1.966l-2 2a1 1 0 0 0 1.414 1.414L15 8.415V11a6 6 0 0 1-6 6H6a1 1 0 1 0 0 2h3a8 8 0 0 0 8-8V8.415l.293.293a1 1 0 0 0 1.414-1.414l-2-2a1 1 0 0 0-1.414 0z"></path>
</symbol>
<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="icon-twitter">
<path d="M20 8.002l1.875-2.025a.48.48 0 0 0-.415-.802l-2.349.311C18.378 4.579 17.256 4 16 4a4 4 0 0 0-4 4 3.99 3.99 0 0 0 .288 1.492c-2.996-.07-6.205-.663-7.827-3.877-.201-.398-.776-.421-.904.006C2.383 9.541 4.449 14.635 9 16c-1.135 1.11-4.054 1.411-6.442 1.193-.465-.042-.756.487-.397.785C4.163 19.636 6.941 20 9.5 20c6.499 0 10.999-5.499 10.5-11.998z"></path>
</symbol>
</svg>


    </div>
    
  </body>
</html>