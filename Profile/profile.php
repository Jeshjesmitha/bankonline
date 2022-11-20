<?php

include"function.php";




?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
</head>

<body>



    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">Edogaru</span><span
                        class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">User Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"
                                placeholder="first name" value=""></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text"
                                class="form-control" value="" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Account Number</label><input type="text"
                                class="form-control" placeholder="Enter accoumt number" value=""></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text"
                                class="form-control" placeholder="Enter email id" value=""></div>
                        <div class="col-md-12"><label class="labels">Gender</label><input type="gender"
                                class="form-control" placeholder="" value=""></div>
                        <div class="col-md-12"><label class="labels">IFSC Code</label><input type="text"
                                class="form-control" placeholder="Enter IFSC code" value=""></div>
                        <div class="col-md-12"><label class="labels">Current Balance</label><input type="text"
                                class="form-control" placeholder="enter address line 2" value=""></div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3 btn btn-danger">Edit</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Money
                            tarnsaction</span><span class="border px-3 p-1 add-experience"><i
                                class="fa fa-plus"></i></span></div><br>
                    <div class="col-md-12"><label class="labels">Receiver Name</label><input type="text"
                            class="form-control" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Acount Number</label><input type="text"
                            class="form-control"  value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Amount</label><input type="text"
                            class="form-control"  value=""></div>
                            <div class="row mt-3">
                                <div class="col-md-3 btn btn-primary">Send</div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>