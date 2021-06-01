<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style5.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
    @extends("layouts.app")
    @section('titre')
        Processus
    @endsection

    @section('processus')
        <li class="nav-item">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">
                        Ajouter une nouvelle affaire
                    </button>


                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Nouvelle affaire</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>


                                <div class="modal-body">

                                    <form role="form" action="" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-Nom">Nom</label>
                                            <input type="text" name="form-Nom" placeholder="Nom..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-first-name">Prénom</label>
                                            <input type="text" name="form-Prénom" placeholder="Prénom..." class="form-first-name form-control" id="form-first-name">
                                        </div>

                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-CIN">CIN</label>
                                            <input type="text" name="form-CIN" placeholder="CIN..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-gsm">GSM</label>
                                            <input type="text" name="form-gsm" placeholder="GSM..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-Adresse">Adresse</label>
                                            <textarea name="form-Adresse" placeholder="Adresse..." class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-dark">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>




    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header text-center">
                <h3>Menu</h3>
            </div>
            <ul class="list-unstyled components text-center">
                <li class="nav-item">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">
                        Ajouter une nouvelle affaire
                    </button>


                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Nouvelle affaire</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>


                                <div class="modal-body">

                                    <form role="form" action="" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-Nom">Nom</label>
                                            <input type="text" name="form-Nom" placeholder="Nom..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-first-name">Prénom</label>
                                            <input type="text" name="form-Prénom" placeholder="Prénom..." class="form-first-name form-control" id="form-first-name">
                                        </div>

                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-CIN">CIN</label>
                                            <input type="text" name="form-CIN" placeholder="CIN..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-gsm">GSM</label>
                                            <input type="text" name="form-gsm" placeholder="GSM..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-Adresse">Adresse</label>
                                            <textarea name="form-Adresse" placeholder="Adresse..." class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-dark">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <br>
                <li class="nav-item">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">
                        Modifier affaire
                    </button>
                </li>
                <br>
                <li class="nav-item">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">
                        Supprimer affaire
                    </button>
                </li>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center ">
                            <h2 class="heading-section">Tableau des affaires</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="table-wrap ">
                                <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th>Identifiant personnel</th>
                                    <th>Identifiant client</th>
                                    <th>Identifiant affaire</th>
                                    <th>Type de processus</th>
                                    <th>Date de déclenchement</th>
                                    <th>Etat d'avancement</th>
                                    <th>Fichiers</th>
                                    <th>Localisation sur carte</th>
                                    <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="alert" role="alert">
                                    <th scope="row">001</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>markotto@email.com</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                            </a>
                                    </td>
                                    </tr>
                                    <tr class="alert" role="alert">
                                    <th scope="row">002</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacobthornton@email.com</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="alert" role="alert">
                                    <th scope="row">003</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>larrybird@email.com</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="alert" role="alert">
                                    <th scope="row">004</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>johndoe@email.com</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="alert" role="alert">
                                    <th scope="row">005</th>
                                        <td>Gary</td>
                                        <td>Bird</td>
                                        <td>garybird@email.com</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="alert" role="alert">
                                    <th scope="row">005</th>
                                        <td>Gary</td>
                                        <td>Bird</td>
                                        <td>garybird@email.com</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="alert" role="alert">
                                    <th scope="row">005</th>
                                        <td>Gary</td>
                                        <td>Bird</td>
                                        <td>garybird@email.com</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

        <scrip src="{{asset('js/jquery.min.js')}}"></scrip>
        <scrip src="{{asset('js/popper.js')}}"></scrip>
        <scrip src="{{asset('js/bootstrap.min.js')}}"></scrip>
        <scrip src="{{asset('js/main.js')}}"></scrip>
        @endsection

</body>
</html>
