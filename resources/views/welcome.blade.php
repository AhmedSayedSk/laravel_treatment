@php
    $user = new \TCG\Voyager\Models\User();

    // how to filter doctors by json field
    $doctors = $user
        ->whereHas('role', function ($query) {
            $query->where('name', 'doctor');
        })
        ->get();

    // how to convert doctors to array
    // $doctors = $doctors->toArray();

    // how to filter doctors array by settings -> specialty_id field using for loop
    // $doctors = array_filter($doctors, function ($doctor) {
    //     return $doctor['settings']['specialty_id'] == "1";
    // });

    // dd($doctors);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>علاجي</title>
    <link rel="shortcut icon" href="29.jpeg" type="image/x-icon"/>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--custom css file link-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">


    <link rel="stylesheet" type="text/css" href="{{asset("styles.css")}}">
</head>
<body>
<!--header section starts-->
<header class="header" style="background:#e0e0e0; linear-gradient(to right, #4b6cb7, #182848);">
    <img src="29.jpeg" height="55px" alt=""> <!-- Logo -->
    <nav class="navbar">
        <button class="nav-button" onclick="window.location.href='#home'"><i class="fas fa-home"
                                                                             style="color: #FF4500;"></i> Home
        </button>
        <button class="nav-button" onclick="window.location.href='#about'"><i class="fas fa-info-circle"
                                                                              style="color: #FF69B4;"></i> About
        </button>
        <button class="nav-button" onclick="window.location.href='#offers'"><i class="fas fa-tags"
                                                                               style="color: #FFA500;"></i> Offers
        </button>
        <button class="nav-button" onclick="window.location.href='#doctors'"><i class="fas fa-user-md"
                                                                                style="color: #9400D3;"></i> Doctors
        </button>
        <button class="nav-button" onclick="window.location.href='#book'"><i class="fas fa-calendar-alt"
                                                                             style="color: #FF6347;"></i> Book
        </button>
        <button class="nav-button" onclick="window.location.href='#pharmacy'"><i class="fas fa-pills"
                                                                                 style="color: #1565c0"></i> pharmacy
        </button>
        <button class="nav-button" onclick="window.location.href='#review'"><i class="fas fa-star"
                                                                               style="color: #FFD700;"></i> Review
        </button>

        <a class="nav-button" href="/admin"><i class="fas fa-sign-in-alt" style="color: #00FFFF;"></i> Login</a>

    </nav>
    <div id="menu-btn" class="fas fa-4x fa-bars" style="color: #FFFFFF;"></div>
</header>

<!--header section ends-->

<!--home section starts-->

<section class="home" id="home">
    <div class="image">
        <img src="9.jpg" alt="">
    </div>
    <div class="content">
        <h3>Stay Safe, Stay Healthy</h3>
        <p>احرص علي صحتك تكن في امان </p>
    </div>
</section>

<!--home section ends-->

<!--icons section starts-->

<section class="row  py-5">

    <div class="col-md-3">
        <i class="fas fa-4x .fa-user-md"></i>
        <h2>50+</h2>
        <p>اكثر من طبيب متخصص</p>
    </div>

    <div class="col-md-3">
        <i class="fas fa-4x .fa-users"></i>
        <h2>1040+</h2>
        <p>اكثر من مريض</p>
    </div>

    <div class="col-md-3">
        <i class="fas fa-4x .fa-procedures"></i>
        <h2>15+</h2>
        <p>اكثر من مجال طبي</p>
    </div>
    <div class="col-md-3">
        <i class="fas fa-4x .fa-hospitals"></i>
        <h2>10+</h2>
        <p>اكثر من عيادات متاحه</p>
    </div>
</section>

<!--home section ends-->

<!--services section starts-->

<section class="services" id="services">

    <h1 class="heading">Our<span> Services</span></h1>

    <div class="row">

        <div class="col-md-4 my-3 border border-black py-3">
            <center><i style="color:aqua;" class="fas fa-4x fa-notes-medical"></i>
                <h3 class="my-3">خصومات علي المتابعه</h3></center>
            <center><p>عرض خاص للمستخدمين الجدد! استفد من خصم 10% على أول موعد طبي لديك.

                    هل تبحث عن طريقة للحفاظ على صحتك بتكلفة معقولة؟ إليك الحل! احصل على خصم فوري بنسبة 10% على أول موعد
                    طبي لديك عند تسجيلك كمستخدم جديد على موقعنا. اكتشف مجموعة واسعة من الخدمات الطبية المتاحة واحجز
                    موعدك الآن!</p></center>

        </div>

        <div class="col-md-4 my-3 border border-black py-3">
            <center><i style="color:aqua;" class="fas fa-4x fa-ambulance"></i>
                <h3 class="my-3">الاسعافات</h3></center>
            <center><p>الإسعافات الأولية رعايتك الأولية في حالات الطوارئ

                    في حالات الطوارئ، يعتبر الاستجابة السريعة والفعالة أمرًا حيويًا. في موقعنا، نقدم لك معلومات وإرشادات
                    حول الإسعافات الأولية لمساعدتك على التصرف بسرعة وفعالية في حالات الطوارئ الطبية</p></center>
        </div>

        <div class="col-md-4 my-3 border border-black py-3">
            <center><i style="color:aqua;" class="fas fa-4x fa-user-md"></i>
                <h3 class="my-3">الاطباء المتخصصون</h3></center>
            <center><p>اطباء موثوقون معتمدون

                    يتم اختيار أطباؤنا المتخصصين بعناية فائقة وفقًا لمعايير صارمة للجودة والخبرة. يتمتع كل طبيب في
                    فريقنا بسجل حافل من النجاح والتميز في مجاله، مما يجعلك واثقًا من الحصول على الرعاية الصحية التي
                    تستحقها</p></center>
        </div>

        <div class="col-md-4 my-3 border border-black py-3">
            <center><i style="color:aqua;" class="fas fa-4x fa-pills"></i>
                <h3 class="my-3">الادويه</h3></center>
            <center><p>الأدوية شريكك في الشفاء

                    في موقعنا، نهتم بتقديم معلومات دقيقة ومفيدة حول الأدوية لمساعدتك على فهم كيفية استخدامها بشكل آمن
                    وفعال وتحقيق أفضل نتائج علاجية وطلب الادويه من خلال موقعنا</p></center>
        </div>

        <div class="col-md-4 my-3 border border-black py-3">
            <center><i style="color:aqua;" class="fas fa-4x fa-procedures"></i>
                <h3 class="my-3">العيادات</h3></center>
            <center><p>العيادات الطبيه نحن نلتزم بتقديم خدمات طبية عالية الجودة، مع استخدام أحدث التقنيات والمعدات
                    الطبية، وفريق طبي متخصص ومؤهل تأهيلا عاليا</p></center>
        </div>

        <div class="col-md-4 my-3 border border-black py-3">
            <center><i style="color:aqua;" class="fas fa-4x fa-heart"></i>
                <h3 class="my-3">العنايه الصحيه</h3></center>
            <center><p>العناية الصحية رعايتنا لصحتك

                    نحن نؤمن بأن العناية الصحية هي أساس حياة سعيدة ومستقرة. في موقعنا، نسعى لتوفير الرعاية الصحية
                    الشاملة والمتميزة التي تلبي احتياجاتك وتحسن جودة حياتك</p></center>
        </div>
    </div>
</section>
<!--services section ends-->

<!--about section starts -->
<section class="about" id="about">
    <h1 class="heading">About Us</h1>

    <div class="row">
        <div class="col-md-6">
            <img class="w-90" src="10.jpeg" alt="">
        </div>
        <div class="col-md-6">
            <div class="about-content">
                <center>
                    <h2>نحن نحرص على حياتك الصحية</h2>
                </center>
                <div style="text-align: center;">
                    <h3>
                        <p>
                            <br>مرحبًا بكم في "علاجي"، موقعكم الموثوق به للخدمات الطبية عبر الإنترنت.
                            <br>نحن هنا لنقدم لكم أفضل الخدمات الطبية عبر الإنترنت، من استشارات طبية إلى توفير الأدوية
                            والعلاجات اللازمة للحفاظ على صحتكم.
                            <br>رسالتنا
                            <br>تتمثل رسالتنا في "علاجي" في توفير رعاية صحية عالية الجودة وسهولة الوصول إليها لكل فرد في
                            المجتمع. نسعى جاهدين لتقديم الخدمات الطبية بشكل موثوق ومهني، مع التركيز على تلبية احتياجات
                            كل مريض بعناية فائقة.
                            <br>لماذا "علاجي"؟
                            <span id="moreText" style="display:none;">
                        <br>الجودة والموثوقية: نحن نقدم خدمات طبية عالية الجودة وموثوقة، مدعومة بفريق طبي مؤهل وخبرة في مجالات متعددة.
                        <br>الراحة والسهولة: "علاجي" يوفر لك الراحة والسهولة في الحصول على الخدمات الطبية من أي مكان وفي أي وقت، دون الحاجة للانتظار في طوابير العيادات أو زيارة الصيدليات.
                        <br>تواصل مع الأطباء المتخصصين: يمكنك التواصل مباشرة مع أطبائنا المتخصصين والحصول على استشاراتهم وتوجيهاتهم دون عناء.
                          <br>توفير مجموعة متنوعة من الخدمات: نقدم مجموعة شاملة من الخدمات الطبية لتلبية احتياجات العديد من الفئات العمرية والحالات الصحية المختلفة.
                        </span>
                        </p>
                    </h3>
                    <button onclick="showMore()" id="readMoreButton">اقرأ المزيد</button>

                </div>
            </div>


        </div>
</section>

<!--about section  ends -->
<!-- Separator above section -->

<section class="offers" id="offers">
    <div class="container">
        <center>
            <h1 class="heading"><span>OFFERS</span></h1>

            <div class="row">
                <div class="col-md-3">
                    <img src="28.jpeg" class="rounded" style="max-height: 100px;" alt="">
                    <h4>تنظيف اسنان</h4>
                    <del>200 EGP</del>
                    <span>120 EGP</span>

                </div>
                <div class="col-md-3">
                    <img src="27.jpeg" class="rounded" style="max-height: 100px;" alt="">
                    <h4>تنظيف بشره</h4>
                    <del>200 EGP</del>
                    <span>120 EGP</span>

                </div>
                <div class="col-md-3">
                    <img src="26.jpeg" class="rounded" style="max-height: 100px;" alt="">
                    <h4>تركيب التقويم المعدني</h4>
                    <del>200 EGP</del>
                    <span>120 EGP</span>

                </div>
                <div class="col-md-3">
                    <img src="25.jpeg" class="rounded" style="max-height: 100px;" alt="">
                    <h4>تقشير الوجه</h4>
                    <del>200 EGP</del>
                    <span>120 EGP</span>
        </center>
    </div>
    </div>
    </div>
</section>

<!-- Separator below section -->

<!--doctors section starts-->

<section class="doctors row text-center" id="doctors">

    <h1 class="heading">our <span>doctors</span></h1>


    <div class="col-md-4 my-4">
        <div class="w-100 mx-1">
            <img class="w-100" src="15.jpg" alt="">
        </div>
        <h3 class="my-2">Aya Omar</h3>
        <span>دكتورة اسنان</span>
        <div class="share my-2">
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-facebook-f"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-twitter"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-instagram"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-linkedin"></i></a>
        </div>
    </div>


    <div class="col-md-4 my-4">

        <div class="w-100 mx-1">
            <img class="w-100" src="16.jpg" alt="">
        </div>
        <h3 class="my-2">Mohamed Sayed</h3>
        <span>دكتور اطفال</span>
        <div class="share my-2">
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-facebook-f"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-twitter"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-instagram"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-linkedin"></i></a>
        </div>
    </div>

    <div class="col-md-4 my-4">

        <div class="w-100 mx-1">
            <img class="w-100" src="17.jpg" alt="">
        </div>
        <h3 class="my-2">Alaa Ahmed</h3>
        <span>دكتور رمد</span>
        <div class="share my-2">
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-facebook-f"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-twitter"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-instagram"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-linkedin"></i></a>
        </div>
    </div>


    <div class="col-md-4 my-4">

        <div class="w-100 mx-1">
            <img class="w-100" src="18.jpeg" alt="">
        </div>
        <h3 class="my-2">amira khaled</h3>
        <span>دكتورة جلديه</span>
        <div class="share my-2">
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-facebook-f"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-twitter"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-instagram"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-linkedin"></i></a>
        </div>
    </div>


    <div class="col-md-4 my-4">

        <div class="w-100 mx-1">
            <img class="w-100" src="19.jpeg" alt="">
        </div>
        <h3 class="my-2">Adel Nasser</h3>
        <span>دكتور عظام</span>
        <div class="share my-2">
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-facebook-f"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-twitter"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-instagram"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-linkedin"></i></a>
        </div>
    </div>


    <div class="col-md-4 my-4">

        <div class="w-100 mx-1">
            <img class="w-100" src="22.jpeg" alt="">
        </div>
        <h3 class="my-2">Osama Mahmoud</h3>
        <span>دكتور مخ و اعصاب</span>
        <div class="share my-2">
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-facebook-f"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-twitter"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-instagram"></i></a>
            <a class="mx-1" herf="#"><i class="fab fa-2x fa-linkedin"></i></a>
        </div>
    </div>
</section>


<!--doctors section ends-->

<!--booking section starts-->
<section class="book py-4 row" id="book">
    <h1 class="heading"><span>احجز</span>الان</h1>

    {{-- Show error message returned from $request->validate --}}
    @if ($errors->any() && old('save_doctor_book'))
        <div class="alert alert-danger validation-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route("save-doctor-book")}}" method="post" class="row">
        @csrf
        <input type="hidden" name="save_doctor_book" value="1">
        <div class="form-group col-6">
            <label for="name">name</label>
            <input type="text" placeholder="your name" value="{{ old('name') }}" class="form-control" name="name">
        </div>
        <div class="form-group col-6">
            <label for="name">phone</label>
            <input type="text" placeholder="your number" value="{{ old('phone') }}" class="form-control" name="phone">
        </div>
        <div class="form-group col-6">
            <label for="name">email</label>
            <input type="email" placeholder="your email" value="{{ old('email') }}" class="form-control" name="email">
        </div>
        <div class="form-group col-6">
            <label for="name">booking_date</label>
            <input type="date" class="form-control" value="{{ old('booking_date') }}" name="booking_date">
        </div>
        <div class="form-group col-6">
            <label for="doctor_id">doctor</label>
            <select class="form-control" id="doctor_id" value="{{ old('doctor_id') }}" name="doctor_id" disabled>
                <option value="">اختر الطبيب</option>
                @foreach($doctors as $sp)
                    <option value="{{ $sp->id }}" data-specialty_id="{{ $sp->settings['specialty_id'] }}">{{ $sp->name }}</option>
                @endforeach
                <!-- Add more specialties here -->
            </select>
            <span class="select-specialty-first" style="color: rgb(225, 82, 82)">الرجاء اختيار التخصص اولا</span>
        </div>
        <div class="form-group col-6 ">
            <label for="specialty_id">التخصص</label>
            <select class="form-control" id="specialty_id" value="{{ old('specialty_id') }}" name="specialty_id">
                <option value="">اختر التخصص</option>
                @foreach(\App\Models\Specialty::all() as $sp)
                    <option value="{{$sp->id}}">{{$sp->name}}</option>
                @endforeach
                <!-- Add more specialties here -->
            </select>
        </div>
        <div class="col-3 mt-4">
            <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
    </form>
</section>

<!--clinic-->
<section class="pharmacy py-4" id="pharmacy">
    <h1 class="heading"><span>Your </span>drug</h1>

    @if ($errors->any() && old('save_drug_book'))
        <div class="alert alert-danger validation-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route("save-drug-book")}}" method="post" class="row">
        @csrf
        <center><h3>احجزالان</h3></center>
        <center>
            <input type="hidden" name="save_drug_book" value="1">
            <div class="form-group col-md-3 mb-3">
                <label for="doctor_id">Your name</label>
                <input type="text" placeholder="Name" value="{{ old('patient_name') }}" class="form-control" name="patient_name">
            </div>
            <div class="form-group col-md-3 mb-3">
                <label for="doctor_id">Your Mobile number</label>
                <input type="text" placeholder="Mobile number" value="{{ old('patient_mobile') }}" class="form-control" name="patient_mobile">
            </div>
            <div class="form-group col-md-3 mb-3">
                <label for="doctor_id">Your Email address</label>
                <input type="email" placeholder="Email address" value="{{ old('patient_email') }}" class="form-control" name="patient_email">
            </div>
            <div class="form-group col-md-3 mb-3">
                <label for="doctor_id">اختر الدواء</label>
                <textarea rows="4" class="form-control" id="drug" value="{{ old('drug') }}" name="drug"></textarea>
                {{-- <select class="form-control" id="drug_id" value="{{ old('drug_id') }}" name="drug_id">
                    <option value="">اختر الدواء</option>
                    @foreach(\App\Models\Drug::all() as $drug)
                        <option value="{{$drug->id}}">{{$drug->name}}</option>
                    @endforeach
                </select> --}}
            </div>
            <div class="form-group col-mb-3 mb-3">
                <button type="submit" class="btn btn-primary">اطلب الآن الدواء</button>
            </div>
        </center>
    </form>
</section>


<!--Clinic section ends-->

<!--review section starts-->

<section class="review" id="review">

    <h1 class="heading">client's <span>review</span></h1>

    <div class="container-fluid mt-5 mb-5">

        <div class="row g-2">
            <div class="col-md-4">
                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="11.jpg" width="100">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Ayman Ali</h5>

                        <p>خدمة رائعة استفدت كثيرًا من الاستشارات الطبية عبر الإنترنت. كانت الأطباء متعاونين ومهنيين
                            للغاية. شكرًا لفريق علاجي.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>
            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="12.jpg" width="100">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Adam Mohamed</h5>

                        <p>استخدمت موقع علاجي للحصول على استشارة طبية، وكانت التجربة مقبولة. كان الاستجابة متوسطة ولكنها
                            لم تكن سريعة كما كنت أتمنى.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="14.jpg" width="110">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Sara Saad</h5>

                        <p>تجربة ممتاز استلمت العلاج اللازم بسرعة وسهولة، وكانت الأدوية ذات جودة عالية. أنا ممتن للخدمة
                            المتميزة التي قدمها موقع علاجي.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>

            </div>


        </div>

    </div>
</section>


<!--review section ends-->


<!--footer section starts-->

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <center><i class="fas fa-gem me-3"></i>علاجي
                    </h6>
                    <p>
                        تتميز خدمات "علاجي" بالموثوقية والراحة، حيث يمكن للمرضى الحصول على العناية الطبية التي يحتاجون
                        إليها يتمتع الأطباء المتخصصون الذين يعملون على المنصة بالخبرة والكفاءة في مختلف المجالات الطبية،
                        ويقدمون استشارات مهنية ودقيقة للمرضى.
                        </center> </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h5 class="text-uppercase fw-bold mb-4">تواصل معنا </h5>
                    <p><i class="fas fa-home me-3"></i>Obor City</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        ALagy@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i>01020460495 </p>
                    <p><i class="fas fa-phone me-3"></i> 01555082424</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 علاجي
    </div>
    <!-- Copyright -->
</footer>

<script type="text/javascript">
    toastr.options.timeOut = 30000; // How long the toast will display without user interaction
    toastr.options.progressBar = true;

    @if(session()->has("success"))
        toastr.success("{{session()->get("success")}}");
    @endif

    function showMore() {
        var moreText = document.getElementById("moreText");
        var buttonText = document.getElementById("readMoreButton");

        if (moreText.style.display === "none") {
            moreText.style.display = "inline";
            buttonText.innerHTML = "أقل";
        } else {
            moreText.style.display = "none";
            buttonText.innerHTML = "اقرأ المزيد";
        }
    }

    // disable doctor_id select if specialty_id is not selected
    document.getElementById('specialty_id').addEventListener('change', function (e) {
        let selected_specialty_id = this.value

        if (selected_specialty_id === '') {
            document.getElementById('doctor_id').setAttribute('disabled', 'disabled');
            document.querySelector('.select-specialty-first').style.display = 'block';
        } else {
            document.getElementById('doctor_id').removeAttribute('disabled');
            document.querySelector('.select-specialty-first').style.display = 'none';

            // filter doctors by specialty
            var doctors = document.querySelectorAll('#doctor_id option');
            var foundDoctors = false;
            doctors.forEach(function (doctor) {
                if (doctor.getAttribute('data-specialty_id') == selected_specialty_id) {
                    document.querySelector('#doctor_id option[value=""]').innerHTML = 'اختر الطبيب';
                    doctor.style.display = 'block';
                    foundDoctors = true;
                } else {
                    doctor.style.display = 'none';
                }
            });

            if(!foundDoctors) {
                document.querySelector('#doctor_id option[value=""]').innerHTML = 'لا يوجد اطباء لهذا التخصص، برجاء المحاولة فى وقت لاحق';
                document.querySelector('#doctor_id').setAttribute('disabled', 'disabled');
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        if (document.querySelector('.validation-error')) {
            window.scrollTo(0, document.querySelector('.validation-error').offsetTop - 150);
        }
    });

</script>

<!-- Footer-->
</body>
</html>
