@extends('cms.base.app')

@section('custom-css')
    <style>
        .form {
            width: 80%;
            display: block;
            margin: 20px auto;
        }

        .section-main {
            min-height: 100vh;

        }

        body {
            background-color: #f8fafc;
            font-family: "Poppins", sans-serif;
        }

        .btn-masuk {
            transition: 0.2s;
            color: white;
            background-color: rgba(1, 4, 136, 0.9)
        }

        .btn-masuk:hover {
            transition: 0.2s;
            color: white;
            background-color: rgb(2 5 106 / 90%);
        }

        .spinner {
            display: flex;
            align-items: center;
            gap: 1em;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/aspiration.css') }}">
    <link rel="stylesheet" href="{{ asset('css/validation.css') }}">
@endsection

@section('content')
    <div class="section-main">
        <div class="d-block w-100 mb-5" style="height: 80px; background-color: rgb(1, 4, 136)"></div>
        <div class="container h-100 m-auto p-3 aspiration-container"
            style="background-color: white; box-shadow: 0px 3.76545px 3.76545px rgba(0, 0, 0, 0.25); border-radius:25px">
            <h1 class="text-center">Aspiration Form</h1>
            @if (session('status'))
                <div style="color:red; font-size:0.8em; margin:auto; text-align:center;">
                    {{ session('status') }}
                </div>
            @endif
            <div class="mb-3">
                <label for="Resi" class="form-label">Your Resi</label>
                <input type="text" class="form-control" id="Resi" value="{{ $Resi }}" name="Resi"
                    disabled>
                <input type="hidden" class="form-control" id="User_id" name="User_id" value="{{ $User_id }}">
            </div>

            <div class="mb-3">
                <label for="CategorySelect" class="form-label">Category</label>
                <select id="CategorySelect" class="form-select" name="Kategori">
                    <option value="Akademik">Academic</option>
                    <option value="Non-Akademik">Non-Academic</option>
                    <option value="Fasilitas">Facility</option>
                    <option value="Kegiatan">Activity</option>
                </select>
                <div class="mx-2">
                    <small id="description">Academic Aspirations are aspirations that cover all activities related to
                        teaching and learning activities.</small>
                </div>

            </div>
            <div class="mb-3">
                <label for="IsiAspirasi" class="form-label">Your Aspiration</label>
                <textarea class="form-control" id="IsiAspirasi" name="Isi" rows="3"></textarea>
            </div>
            <button type="submit" onclick="submitAspiration()" class="btn btn-masuk">Submit</button>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/aspiration.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{ asset('js/validation/aspiration.js') }}"></script>
    <script defer>
        async function submitAspiration() {
            const data = {
                Resi: document.querySelector("#Resi").value,
                User_id: document.querySelector("#User_id").value,
                Kategori: document.querySelector("#CategorySelect").value,
                Isi: document.querySelector("#IsiAspirasi").value
            }
            
            const submitButtons = document.querySelectorAll(".btn-masuk");
            const aspirationContainer = document.querySelector(".aspiration-container");
            [...submitButtons].forEach((submitButton) => {
                submitButton.style.display = "none";
            })

            aspirationContainer.innerHTML += `
            <div class="spinner">
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              Your aspiration is being processed
            </div>
            `;

            try {
                const response = await fetch('http://localhost:8000/api/aspiration', {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        "Accept": "application/json"
                    },
                    body: JSON.stringify(data)
                }).then(response => response.json());

                //aspiration success
                if (response.message === "Email has been successfully sent to your account") {
                    alert(response.message);
                    window.location.href = "/";
                } else {
                    //aspiration failed
                    let errors = response.errors;
                    let errorList = [];

                    for (let field in errors) {
                        if (errors.hasOwnProperty(field)) {
                            errorList.push(errors[field].join(" & "));
                        }
                    }

                    errorList = errorList.join("<br/>");

                    let spinners = document.querySelectorAll(".spinner");
                    [...spinners].forEach(element => {
                        element.style.display = "none";
                    });

                    aspirationContainer.innerHTML += `
                      <button type="submit" onclick="submitAspiration()" class="btn btn-masuk">Submit</button>
                    `;
                    alert(errorList);
                }
            } catch (exception) {
                console.log("Error : ", exception);
            }
        }
    </script>
@endsection
