<?php
    $page = 'job';
?>

<style>


    .separator{
        margin-bottom: 20%;
    }

    .box{
        box-shadow: 5px 5px 5px 5px rgba(154,160,185,.05), 5px 15px 40px rgba(166,173,201,.2);
    }
   
    .contact {
        padding: 4%;
        height: 400px;
    }

    .col-md-3 {
       background-image: linear-gradient(250deg, #ed4e4e 0%, #be1d2c 100%);
        padding: 4%;
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
    }

    .contact-info {
        margin-top: 10%;
    }

    .contact-info img {
        margin-bottom: 15%;
    }

    .contact-info h2 {
        margin-bottom: 10%;
    }

    .col-md-9 {
        background: #fff;
        padding: 3%;
        border-top-right-radius: 0.5rem;
        border-bottom-right-radius: 0.5rem;
    }

    .bgc{
        color: #fff;
    }

    .contact-form label {
        font-weight: 600;
    }

    .contact-form button {
        background: #25274d;
        color: #fff;
        font-weight: 600;
        width: 25%;
    }

    .contact-form button:focus {
        box-shadow: none;
    }
</style>

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Carrières</h1>
        <ul>
            <li title="Nos services">
                <a class="active" href="index.php">Accueil</a>
            </li>
            <li>Carrières</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->




<!-- About Section Start -->
 <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
      <div class="container">

          <div class="row align-items-center">
              <div class="col-lg-6 md-mb-30">
                  <div class="rs-animation-shape">
                      <div class="images">
                          <img src="<?= PIC.'job.png' ?>" alt="" style="border-radius: 10px" width="100%" >
                      </div>
                      <div class="middle-image2">
                          <img class="dance3" src="assets/images/about/effect-1.png" alt="" class="shadow-lg">
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 pl-60 md-pl-15">
                  <div class="contact-wrap">
                      <div class="sec-title mb-30">
                          <div class="sub-text style-bg shadow">SOUMETTEZ VOTRE CV</div>
                          <h2 class="title pb-38">
                              Pourquoi nous rejoindre ?
                          </h2>
                          <div class="desc pb-35">
                              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, eius? Adipisci
                              sapiente odio consectetur alias porro distinctio aut tenetur cum necessitatibus inventore
                              officiis reprehenderit, consequuntur a laborum voluptate architecto ipsa?
                          </div>
                      </div>
                  </div>
              </div>

          </div>

          <div class="space"></div>

<div class="separator">

    <div class="container contact">
        <div class="row box">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                    <h2 class="bgc">POSTULEZ</h2>
                    <h4 class="bgc">We would love to hear from you !</h4>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="fname">Nom & Prénoms:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fname" placeholder="Esmel FORNIER"
                                name="fname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="esmelfornier@devman-goshen.com" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="lname">Emploi souhaité:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lname" placeholder="Comptable"
                                name="lname">
                        </div>
                    </div>
                    <div class="form-group mb-5">
                        <label class="control-label col-sm-2" for="lname">Uploadez votre CV:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="lname" placeholder="Enter Last Name"
                                name="lname">
                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <div class="col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-default">Envoyer mon CV</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

      </div>
  </div>