<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.2/build/css/intlTelInput.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <style>

        html {
            font-family: 'Gilroy-Bold ☞', serif;
        }

        @font-face {
            font-family: 'Gilroy-Bold ☞';
            font-style: normal;
            font-weight: normal;
            src: local('Gilroy-Bold ☞'), url('./fonts/Gilroy-Bold.woff') format('woff');
        }


        @font-face {
            font-family: 'Gilroy-Heavy ☞';
            font-style: normal;
            font-weight: normal;
            src: local('Gilroy-Heavy ☞'), url('./fonts/Gilroy-Heavy.woff') format('woff');
        }


        @font-face {
            font-family: 'Gilroy-Light ☞';
            font-style: normal;
            font-weight: normal;
            src: local('Gilroy-Light ☞'), url('./fonts/Gilroy-Light.woff') format('woff');
        }


        @font-face {
            font-family: 'Gilroy-Medium ☞';
            font-style: normal;
            font-weight: normal;
            src: local('Gilroy-Medium ☞'), url('./fonts/Gilroy-Medium.woff') format('woff');
        }


        @font-face {
            font-family: 'Gilroy-Regular ☞';
            font-style: normal;
            font-weight: normal;
            src: local('Gilroy-Regular ☞'), url('./fonts/Gilroy-Regular.woff') format('woff');
        }

        .hero {
            background-image: url("./images/hero-background.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
        }

        .form-wrapper {
            background-color: rgba(255, 255, 255, .7);
            backdrop-filter: blur(2px);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .form-wrapper h1 {
            color: #423E93;
            font-size: 27px;
            font-weight: 600;
            text-align: center;
        }

        .form-wrapper .submit-btn {
            background-color: #423E93;
            color: #fff;
            font-size: 18px;
            border-radius: 2px!important;
        }

        .form-wrapper .submit-btn:hover {
            background-color: #29258b;
            color: #fff;
        }

        .iti.iti--allow-dropdown {
            width: 100%!important;
        }

    </style>

</head>
<body>
<section class="hero vh-100 position-relative">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-md-10 ms-auto col-lg-4">
                <form id="registrationForm" class="p-4 p-md-5 border rounded-3 form-wrapper" action="{{ route('api.contact.store') }}" method="POST">
                    @csrf
                    <h1 class="mb-4">İstanbul’da Özel Gayrimenkul Organizasyonuna Katılmak için Kayıt Yapın!</h1>
                    <input type="text" name="first_name" class="form-control form-control-sm" placeholder="First Name*" required>
                    <input type="text" name="last_name" class="form-control form-control-sm" placeholder="Last Name*" required>
                    <select name="country" class="form-select form-select-sm" aria-label="Country" required>
                        <option selected disabled>Country Of Residence*</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    <input type="tel" id="phone" name="phone" class="form-control form-control-sm w-100" placeholder="Phone*" required>
                    <input type="date" name="date" class="form-control form-control-sm" placeholder="Date*" required>
                    <select name="budgets" class="form-select form-select-sm" aria-label="Budgets" required>
                        <option selected disabled>Budget*</option>
                        <option value="100000-200000">100.000 - 200.000</option>
                        <option value="200000-300000">200.000 - 300.000</option>
                        <option value="300000-400000">300.000 - 400.000</option>
                        <option value="400000-500000">400.000 - 500.000</option>
                        <option value="500000-600000">500.000 - 600.000</option>
                        <option value="600000">600.000+</option>
                    </select>
                    <select name="numberOfBedrooms" class="form-select form-select-sm" aria-label="NumberOfBedrooms" required>
                        <option selected disabled>Number Of Bedrooms*</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6+</option>
                    </select>
                    <button class="w-100 btn btn-lg submit-btn text-uppercase fw-semibold" type="submit">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.2/build/js/intlTelInput.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@22.0.2/build/js/utils.js",
        initialCountry: "tr",
    });
</script>
<script>
    $(document).ready(function() {
        $('#registrationForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Kayıt Başarılı!',
                        text: 'Etkinliğimize başarıyla kaydoldunuz.',
                        confirmButtonText: 'Tamam'
                    });

                    $('#registrationForm').trigger('reset');
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Hata!',
                        text: 'Bir hata oluştu! Lütfen tekrar deneyin.',
                        confirmButtonText: 'Tamam'
                    });

                    $('#registrationForm').trigger('reset');
                }
            });
        });
    });
</script>
</body>
</html>
