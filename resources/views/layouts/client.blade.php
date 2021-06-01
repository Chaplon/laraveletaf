<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @extends("layouts.app")
    @section('titre')
        Clients
    @endsection
    @section('client')


    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
        Ajouter un nouveau client
    </button>


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Nouveau client</h5>
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



    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="heading-section">Tableau des clients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 table-wrapper-scroll-y my-custom-scrollbar">
                    <div class="table-wrap">
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th>Identifiant</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>CIN</th>
                            <th>GSM</th>
                            <th>Adresse</th>
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
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @endsection
</body>
</html>

