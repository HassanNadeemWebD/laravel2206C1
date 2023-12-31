<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $pageTitle }}</title>
</head>
<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #f093fb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }
</style>

<body>
    {{-- <pre>
    @php
        print_r($errors->toArray());
    @endphp
</pre> --}}
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">{{ $pageTitle }}</h3>
                            <form action="{{ url('/') }}{{$route}}" method="POST">
                                {{-- Cross Site Request Forgery --}}
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" name="fname" id="firstName"
                                                class="form-control form-control-lg"
                                                @if ($pageTitle == 'Update Info') value="{{ $student['firstName'] }}"
                                                
                                                @else
                                                value="{{ old('fname') }}" @endif />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>
                                        @error('fname')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" name="lname" id="lastName"
                                                class="form-control form-control-lg"    @if ($pageTitle == 'Update Info')
                                                 value="{{ $student['lastName'] }}"
                                                
                                                @else
                                                value="{{ old('lname') }}" @endif />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>
                                        @error('lname')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" name="dob" class="form-control form-control-lg"
                                                id="birthdayDate"    @if ($pageTitle == 'Update Info') value="{{ $student['dob'] }}"
                                                
                                                @else
                                                value="{{ old('dob') }}" @endif/>
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                        </div>
                                        @error('dob')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="femaleGender" value="female"   @if ($pageTitle == 'Update Info') 
                                                @if($student['gender'] == 'female' )

                                                {{'checked'}}
                                                @endif
                                               @endif  />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="maleGender" value="male"    @if ($pageTitle == 'Update Info') 
                                                @if($student['gender'] == 'male' )

                                                {{'checked'}}
                                                @endif
                                               @endif />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                            @error('gender')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>




                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" name="email" id="emailAddress"
                                                class="form-control form-control-lg"    @if ($pageTitle == 'Update Info')
                                                 value="{{ $student['email'] }}"
                                                
                                                @else
                                                value="{{ old('fname') }}" @endif />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="tel" name="contact" id="phoneNumber"
                                                class="form-control  form-control-lg"    @if ($pageTitle == 'Update Info') value="{{ $student['contact'] }}"
                                                
                                                @else
                                                value="{{ old('fname') }}" @endif />
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">

                                        <select class="select form-control-lg">
                                            <option value="1" disabled>Choose option</option>
                                            <option value="2">Subject 1</option>
                                            <option value="3">Subject 2</option>
                                            <option value="4">Subject 3</option>
                                        </select>
                                        <label class="form-label select-label">Choose option</label>

                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
