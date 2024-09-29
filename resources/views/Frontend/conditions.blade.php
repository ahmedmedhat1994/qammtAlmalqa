@extends('Frontend.layouts.master')
@section('title')
    شروط الاستخدام
@endsection

@section('style')
<style>
    .Services_is {
        transition: transform 0.2s; /* Smooth transition */
        round-clip: 40px;
        color: #193933 !important;

    }
    .Services_is:hover  {
        background-color: #193933;
        color: #fff !important;
        transition: background-color .3s ease-in;
        border-radius: 8px;
        cursor: pointer;
    }
    .styled-icon-6x {
        height: 90px;
        width: 90px;
    }
    .accordion-head {
        border-color: #f5f6fa;
        background: #f5f6fa;
        color: slategray;
    }

    .accordion-head:hover {
        background-color: #9B791F; /* Change to your desired hover color */
        color: white; /* Change text color on hover */
    }
    .accordion-head.active {
        background-color: #9B791F; /* Change to your desired hover color */
        color: white; /* Change text color on hover */
    }
    /*.accordion-item .accordion-head.collapsed {*/
    /*    background-color: #f8f9fa; !* Background color for collapsed state *!*/
    /*}*/

    .accordion-item .accordion-head:not(.collapsed) {
        background-color: #9B791F; /* Change to your desired hover color */
        color: white; /* Text color when active */
    }
    #news-slider{
        margin-top: 10px;
    }
    .post-slide{
        background: #fff;
        margin: 20px 15px 20px;
        border-radius: 15px;
        padding-top: 1px;
        box-shadow: 0px 14px 22px -9px #bbcbd8;
    }
    .post-slide .post-img{
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin: -12px 15px 8px 15px;
        margin-left: -10px;
    }
    .post-slide .post-img img{
        width: 100%;
        height: auto;
        transform: scale(1,1);
        transition:transform 0.2s linear;
    }
    .post-slide:hover .post-img img{
        transform: scale(1.1,1.1);
    }
    .post-slide .over-layer{
        width:100%;
        height:100%;
        position: absolute;
        top:0;
        left:0;
        opacity:0;
        background: linear-gradient(-45deg, rgba(6,190,244,0.75) 0%, rgba(45,112,253,0.6) 100%);
        transition:all 0.50s linear;
    }
    .post-slide:hover .over-layer{
        opacity:1;
        text-decoration:none;
    }
    .post-slide .over-layer i{
        position: relative;
        top:45%;
        text-align:center;
        display: block;
        color:#fff;
        font-size:25px;
    }
    .post-slide .post-content{
        background:#fff;
        padding: 2px 20px 40px;
        border-radius: 15px;
    }
    .post-slide .post-title a{
        font-size:15px;
        font-weight:bold;
        color:#333;
        display: inline-block;
        text-transform:uppercase;
        transition: all 0.3s ease 0s;
    }
    .post-slide .post-title a:hover{
        text-decoration: none;
        color:#3498db;
    }
    .post-slide .post-description{
        line-height:24px;
        color:#808080;
        margin-bottom:25px;
    }
    .post-slide .post-date{
        color:#a9a9a9;
        font-size: 14px;
    }
    .post-slide .post-date i{
        font-size:20px;
        margin-right:8px;
        color: #CFDACE;
    }
    .post-slide .read-more{
        padding: 7px 20px;
        float: right;
        font-size: 12px;
        background: #2196F3;
        color: #ffffff;
        box-shadow: 0px 10px 20px -10px #1376c5;
        border-radius: 25px;
        text-transform: uppercase;
    }
    .post-slide .read-more:hover{
        background: #3498db;
        text-decoration:none;
        color:#fff;
    }
    .owl-controls .owl-buttons{
        text-align:center;
        margin-top:20px;
    }
    .owl-controls .owl-buttons .owl-prev{
        background: #fff;
        position: absolute;
        top:-13%;
        left:15px;
        padding: 0 18px 0 15px;
        border-radius: 50px;
        box-shadow: 3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }
    .owl-controls .owl-buttons .owl-next{
        background: #fff;
        position: absolute;
        top:-13%;
        right: 15px;
        padding: 0 15px 0 18px;
        border-radius: 50px;
        box-shadow: -3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }
    .owl-controls .owl-buttons .owl-prev:after,
    .owl-controls .owl-buttons .owl-next:after{
        content:"\f104";
        font-family: FontAwesome;
        color: #333;
        font-size:30px;
    }
    .owl-controls .owl-buttons .owl-next:after{
        content:"\f105";
    }
    @media only screen and (max-width:1280px) {
        .post-slide .post-content{
            padding: 0px 15px 25px 15px;
        }
    }
</style>
    <style>
        #home {
            position: relative;
            background-color: #193933 !important; /* Black overlay with 50% opacity */
        }
        .header {
            min-height: 40vh;
        }
    </style>
@endsection
@section('header')
    <div class="header-main header-main-s1 is-sticky is-transparent on-dark ">
        <div class="container header-container  border-bottom pb-1">
            <div class="header-wrap">
                <div class="header-logo">
                    <a href="{{route('index')}}.html" class="logo-link">
                        <img class="logo-light logo-img" src="{{asset('Frontend/img/logo.png')}}" srcset="{{asset('Frontend/img/logo.png')}}" alt="logo">
                        <img class="logo-dark logo-img" src="{{asset('Frontend/img/logo.png')}}" srcset="{{asset('Frontend/img/logo.png')}}" alt="logo-dark">
                    </a>
                </div>
                <div class="header-toggle">
                    <button class="menu-toggler" data-target="mainNav">
                        <em class="menu-on icon ni ni-menu"></em>
                        <em class="menu-off icon ni ni-cross"></em>
                    </button>
                </div><!-- .header-nav-toggle -->
                <nav class="header-menu" data-content="mainNav">
                    <ul class="menu-list ms-lg-auto">
                        <li class="menu-item"><a href="{{route('index')}}" class="menu-link nav-link">الصفحة الرئيسية</a></li>

                        <li class="menu-item"><a href="{{route('about')}}" class="menu-link" >من نحن</a></li>
                        <li class="menu-item"><a href="{{route('privacy_policy')}}" class="menu-link">سياسة الخصوصية</a></li>
                        <li class="menu-item"><a href="{{route('conditions')}}" class="menu-link">الشروط والاحكام</a></li>
                        <li class="menu-item"><a href="{{route('contact')}}" class="menu-link nav-link">تواصل معنا</a></li>

                    </ul>
                    <ul class="menu-btns">
                        <li>
                            <a href="https://wa.me/966538269156" target="_blank" class="btn btn-secondary btn-lg">اطلب خدمة</a>
                        </li>
                    </ul>
                </nav><!-- .nk-nav-menu -->
            </div><!-- .header-warp-->
        </div><!-- .container-->

    </div><!-- .header-main-->
    <div class="container">
        <h3 class="fw-bold text-white">شروط الاستخدام</h3>
    <nav class="mt-3">
        <ul class="breadcrumb breadcrumb-arrow">
            <li class="breadcrumb-item fs-16px text-white"><a class="text-white" href="{{route('index')}}">الصّفحة الرّئيسيّة</a></li>
            <li class="breadcrumb-item active fs-16px  text-white">شروط الاستخدام</li>
        </ul>
    </nav>
    </div>
@endsection
@section('content')
    <section class="section section-service pb-2" id="service" style="padding-top: 100px;">

    </section><!-- .section -->
    <section class="section section-service pb-0" id="feature">
        <div class="container">
            <div class="section-content">
                <div class="row g-gs my-5">
                    <div class="col-sm-4 col-12 h-100">
                        <div class="">
                        <img src="{{asset('Frontend/img/sec.png')}}" width="400" />
                        </div><!-- .service -->
                    </div><!-- .col -->
                    <div class="col-sm-8 col-12 h-100">
                        <div class="mt-5">
                            <h5>1. شروط الاستخدام</h5>
                            <span class="fw-bold" >يقر المستخدم لمنصة قمّة المَلقا بالامتناع عما يلي:</span>
                            <p style="padding-top: 30px;">
                                توفير أو تحميل ملفات تحتوي على برمجيات، أو مواد، أو بيانات، أو معلومات أخرى ليست مملوكة لك أو لا تملك ترخيصًا بشأنها.
                                استخدام هذه المنصة بأي طريقة لإرسال أي بريد إلكتروني تجاري أو غير مرغوب فيه، أو أي إساءة استخدام من هذا النوع.
                                رفع أو تحميل ملفات على هذه المنصة تحتوي على فيروسات، أو بيانات تالفة، أو أي برمجيات خبيثة، أو القيام بكل ما من شأنه التأثير على سلامة المعلومات في المنصة أو موثوقيتها أو استمرار توفرها.
                                نشر، أو إعلان، أو توزيع، أو تعميم مواد، أو معلومات تحتوي تشويهًا للسمعة، أو انتهاكًا للقوانين، أو مواد إباحية، أو بذيئة، أو مخالفة للآداب العامة، أو أي مواد، أو معلومات غير قانونية.
                                استخدام أي وسيلة، أو برنامج، أو إجراء لاعتراض، أو محاولة اعتراض التشغيل الصحيح.
                                القيام بأي إجراء يفرض حملًا غير معقول أو كبير بصورة غير مناسبة على البنية التحتية للمنصة.
                                كل ما يعد مخالفة لأنظمة المملكة العربية السعودية وعلى وجه الخصوص نظام مكافحة الجرائم المعلوماتية، ونظام حماية البيانات الشخصية، ونظام التعاملات الإلكترونية.

                            </p>
                        </div><!-- .service -->
                        <div class="mt-5">
                            <h5>2. استخدام الروابط</h5>
                            <span class="fw-bold" >يمنع إنشاء أو نقل أو نسخ أي روابط إلكترونية تتعلق بالبوابة، أو نشر هذه الروابط في مواقع أخرى، باستثناء نشر الروابط الفعلية للمنصة في المواقع التي لا تتعارض أهدافها وتوجهاتها مع أهداف وتوجهات وسياسات قمّة المَلقا.</span>
                            <p style="padding-top: 30px;">
                                يمنع إنشاء أو نقل أو نسخ أي روابط إلكترونية تتعلق بموقع قمّة المَلقا، أو نشر هذه الروابط في مواقع أخرى، باستثناء نشر الروابط الفعلية للمنصة في المواقع التي لا تتعارض أهدافها وتوجهاتها مع أهداف وتوجهات وسياسات قمّة المَلقا.
                                تحتفظ قمّة المَلقا بالحق في فرض أي شروط عند السماح بإنشاء أي رابط إلكتروني للمنصة أو أي من محتوياتها.
                                لا تعتبر قمّة المَلقا مشاركًا أو مرتبطًا بأي حال من الأحوال بأي علامات، أو شعارات، أو رموز تجارية، أو خدمية، أو أي وسائل أخرى مستخدمة أو تظهر على مواقع الويب المتضمنة لروابط تقود إلى موقع قمّة المَلقا أو أي من محتوياته مالم تكن معتمدة لدى الإدارة المختصة لديها.
                                تحتفظ قمّة المَلقا بكامل حقوقه في إيقاف وإعاقة أي ارتباط بأي شكل من الأشكال من أي موقع غير مصرح به أو يحتوي على مواضيع غير ملائمة، أو فاضحة، أو متعدية، أو بذيئة، أو إباحية، أو غير لائقة، أو غير قانونية، أو أسماء، أو مواد، أو معلومات تخالف أي نظام أو تنتهك أي حقوق عامة أو خاصة.
                                لا تتحمل قمّة المَلقا أي مسؤولية عن المحتويات المتوفرة في أي موقع آخر يتم الوصول منه إلى موقع قمّة المَلقا.
                                تطلب الإدارة المختصة لدى قمّة المَلقا الموافقة على أي ارتباط إلكتروني يرتبط بالمنصة أو محتوياتها، وقد تتطلب إجراءات تقديم معلومات وتفاصيل إضافية قبل الموافقة.
                                يجب أن يكون الرابط الإلكتروني للمنصة أو محتوياتها واضحًا وصحيحًا، ولا يجوز تضليل الزوار بشأن مصدر الرابط أو محتواه.
                                يجب أن يتم احترام جميع حقوق الملكية الفكرية المتعلقة بموقع قمّة المَلقا ومحتوياته، وعدم التلاعب بأي جوانب تقنية أو محتوى يخرق هذه الحقوق.
                                يحق لقمّة المَلقا تعديل هذه الشروط والأحكام في أي وقت دون إشعار مسبق. يُنصح بمراجعة هذه الصفحة بشكل دوري للتعرف على أي تحديثات.
                                باستخدامك لأي رابط إلكتروني لموقع قمّة المَلقا، فإنك توافق على جميع شروط وأحكام هذا البند وتلتزم بها.

                            </p>
                        </div><!-- .service -->
                        <div class="mt-5">
                            <h5>3. الحماية من الفيروسات</h5>
{{--                            <span class="fw-bold" >يمنع إنشاء أو نقل أو نسخ أي روابط إلكترونية تتعلق بالبوابة، أو نشر هذه الروابط في مواقع أخرى، باستثناء نشر الروابط الفعلية للمنصة في المواقع التي لا تتعارض أهدافها وتوجهاتها مع أهداف وتوجهات وسياسات قمّة المَلقا.</span>--}}
                            <p style="padding-top: 30px;">
                                نسعى جاهدين في موقع قمّة المَلقا لفحص واختبار كل محتوى الموقع خلال عمليات الإنتاج. نلفت انتباه المستخدمين إلى ضرورة تشغيل برامج مضادات الفيروسات للتأكد من سلامة المواد التي يتم تنزيلها من الإنترنت. وتجدر الملاحظة أننا لسنا مسؤولين عن أية خسائر أو تلف في البيانات أو الأجهزة التي قد تحدث أثناء استخدام الموقع.
                                نطلب من المستخدمين الإبلاغ عن أي ممارسات خاطئة أو ثغرات أمنية تشتبهون في وجودها وقد تؤثر على أمان الموقع. يمكنكم الإبلاغ عبر البريد الإلكتروني: info@qalmalqa.com يجب الالتزام بهذا الإجراء وإلا قد تترتب مسائلة قانونية. يرجى اتخاذ الاحتياطات اللازمة لحماية معداتك وبياناتك من الفيروسات والبرمجيات الخبيثة أثناء تصفح الموقع أو تنزيل المحتوى منه

                            </p>
                        </div><!-- .service -->
                        <div class="mt-5">
                            <h5>4. المطالبات</h5>
{{--                            <span class="fw-bold" >يمنع إنشاء أو نقل أو نسخ أي روابط إلكترونية تتعلق بالبوابة، أو نشر هذه الروابط في مواقع أخرى، باستثناء نشر الروابط الفعلية للمنصة في المواقع التي لا تتعارض أهدافها وتوجهاتها مع أهداف وتوجهات وسياسات قمّة المَلقا.</span>--}}
                            <p style="padding-top: 30px;">
                                تقدم منصة قمّة المَلقا خدماتها، بالإضافة إلى المعلومات والمواد والوظائف المتاحة من خلالها، "كما هي" و"كما متاحة" دون أي تأكيدات أو وعود أو ضمانات من أي نوع. لا يمكن لقمّة المَلقا أن تكفل أو تتحمل المسؤولية عن أي انقطاعات أو أخطاء أو تجاوزات قد تنشأ نتيجة استخدام هذه المنصة أو محتوياتها أو أي موقع مرتبط بها، سواء كان ذلك بعلمها أو بدون علمها. أي اتصالات أو معلومات يرسلها المستخدمون عبر هذه المنصة لن يكون لهم حق الملكية فيها أو حق ضمان سريتها. وأي استخدام أو تفاعل تفاعلي مع هذه الخدمة لا يهدف إلى ضمان أي حقوق أو تراخيص أو امتيازات للمستخدم من أي نوع.
                            </p>
                        </div><!-- .service -->
                        <div class="mt-5">
                            <h5>5. المسؤولية</h5>
{{--                            <span class="fw-bold" >يمنع إنشاء أو نقل أو نسخ أي روابط إلكترونية تتعلق بالبوابة، أو نشر هذه الروابط في مواقع أخرى، باستثناء نشر الروابط الفعلية للمنصة في المواقع التي لا تتعارض أهدافها وتوجهاتها مع أهداف وتوجهات وسياسات قمّة المَلقا.</span>--}}
                            <p style="padding-top: 30px;">
                                تُقدم منصة قمّة المَلقا خدماتها ومعلوماتها عبر الإنترنت بهدف تسهيل الإجراءات اليدوية المتعلقة بالدوائر والجهات الحكومية المختلفة. يتعين على المستخدم أن يكون واعيًا بأن الاتصال عبر شبكة الإنترنت قد يتعرض للتدخل أو الاعتراض من قِبَل أطراف غير مخولة، وأن المعلومات المتاحة عبر المنصة لا تستبدل المعلومات المتاحة من خلال الجهات الرسمية. إضافة انه يجب على المستخدم أن يدرك أن الطلبات والإجراءات الإدارية يمكن تقديمها مباشرة أمام الجهات المختصة، وعليه يظل اللجوء إلى المنصة مسؤولية المستخدم. لا تتحمل منصة قمّة المَلقا أية مسؤولية عن أي خسائر أو أضرار من أي نوع قد تكون نتيجة للاعتماد على أية معلومات أو بيانات أو آراء تقدمها المنصة. المستخدم يقر ويوافق على أن وسيلته الحصرية لمعالجة أية خسائر أو أضرار قد تحدث نتيجة استخدامه للمنصة هي الامتناع عن استخدامها أو دخولها أو الاستمرار في ذلك.
                            </p>
                        </div><!-- .service -->
                        <div class="mt-5">
                            <h5>6. التعويض</h5>
{{--                            <span class="fw-bold" >يمنع إنشاء أو نقل أو نسخ أي روابط إلكترونية تتعلق بالبوابة، أو نشر هذه الروابط في مواقع أخرى، باستثناء نشر الروابط الفعلية للمنصة في المواقع التي لا تتعارض أهدافها وتوجهاتها مع أهداف وتوجهات وسياسات قمّة المَلقا.</span>--}}
                            <p style="padding-top: 30px;">
                                يقر المستخدم بإبراء وعدم اتخاذ أي إجراء ضد قمّة المَلقا أو أي من إداراتها وموظفيها والمسؤولين عن إدارة منصتها وصيانتها وتحديثها، ويعفيهم من جميع الالتزامات والمسؤوليات والتعويضات الناشئة أو التي قد تنشأ عن استخدام المنصة أو بسببها.
                            </p>
                        </div><!-- .service -->
                        <div class="mt-5">
                            <h5>7. حقوق الملكية</h5>
{{--                            <span class="fw-bold" >يمنع إنشاء أو نقل أو نسخ أي روابط إلكترونية تتعلق بالبوابة، أو نشر هذه الروابط في مواقع أخرى، باستثناء نشر الروابط الفعلية للمنصة في المواقع التي لا تتعارض أهدافها وتوجهاتها مع أهداف وتوجهات وسياسات قمّة المَلقا.</span>--}}
                            <p style="padding-top: 30px;">
                                تعد جميع محتويات المنصة من خدمات ومعلومات ملكًا لقمّة المَلقا، وهي محمية بالكامل طبقا للأنظمة والاتفاقيات السعودية لحقوق النشر والعلامات التجارية وحقوق الملكية المختلفة. المواد المتوفرة في هذه الخدمة بما في ذلك الرسوم التصويرية للمعلومات والبرمجيات (المحتويات) محمية بموجب حقوق النشر والعلامات التجارية، وأشكال حقوق الملكية الأخرى ولا يجوز استنساخها أو استغلالها بأي طريقة كانت، دون موافقة خطية مسبقة من إدارة المنصة. وما لم ينص على خلاف ذلك، لا يجوز بيع، أو ترخيص، أو تأجير، أو تعديل، أو نسخ، أو استنساخ، أو إعادة طبع، أو تحميل، أو إعلان، أو نقل، أو توزيع، أو العرض بصورة علنية، أو تحرير، أو إنشاء أعمال مشتقة من أي مواد أو محتويات من هذه البوابة للجمهور أو لأغراض تجارية، دون الحصول على الموافقة الخطية المسبقة من قبل إدارة قمّة المَلقا الإنجاز لخدمات الأعمال.
                            </p>
                        </div><!-- .service -->
                        <div class="mt-5">
                            <h5>8. المرجعية القضائية</h5>
{{--                            <span class="fw-bold" >يمنع إنشاء أو نقل أو نسخ أي روابط إلكترونية تتعلق بالبوابة، أو نشر هذه الروابط في مواقع أخرى، باستثناء نشر الروابط الفعلية للمنصة في المواقع التي لا تتعارض أهدافها وتوجهاتها مع أهداف وتوجهات وسياسات قمّة المَلقا.</span>--}}
                            <p style="padding-top: 30px;">
                                يخضع المستخدم لأنظمة المملكة العربية السعودية، ومحاكمها هي المختصة بنظر الدعاوى الناشئة عن هذه السياسة، وعلى وجه الخصوص يخضع المستخدم لأحكام نظام مكافحة الجرائم المعلوماتية ونظام حماية البيانات الشخصية في حال ارتكابه أحد المخالفات المنصوص عليها في النظام، كما يخضع المستخدم للمساءلة القانونية في حال إساءة استخدامه للمنصة.
                            </p>
                        </div><!-- .service -->
                        <div class="mt-5">
                            <h5>9. المرجعية القضائية</h5>
{{--                            <span class="fw-bold" >يمنع إنشاء أو نقل أو نسخ أي روابط إلكترونية تتعلق بالبوابة، أو نشر هذه الروابط في مواقع أخرى، باستثناء نشر الروابط الفعلية للمنصة في المواقع التي لا تتعارض أهدافها وتوجهاتها مع أهداف وتوجهات وسياسات قمّة المَلقا.</span>--}}
                            <p style="padding-top: 30px;">
                                جميع المواد والمعلومات المقدمة عبر المنصة هي توعية وغير هادفة للربح.
                                اللغة العربية هي اللغة الرئيسية للاستفادة من المواد المنشورة على المنصة، وترجمتها تُقدم كخدمة إضافية. لا يعتمد التفسير على الترجمة في حالة حدوث خلافات حول محتوى المنصة.
                                اللوائح والأنظمة المعروضة على المنصة، سواء لقمّة المَلقا أو لجهات أخرى، قد تخضع للترجمة و التوضيح، ولكن النص العربي يظل المرجع الأساسي.
                                تحتوي المنصة على وسائل مشاركة إلكترونية مثل المنتديات ومنصة الاستفسارات، ويجب الامتثال للمعايير والقيود المعمول بها في استخدام هذه الوسائل.
                                المنصة تمتلك الحق في حذف التعليقات أو المشاركات التي تعتبر غير مناسبة.
                                للاستفسارات حول الشروط والأحكام، يمكن التواصل مع إدارة المنصة عبر نموذج الاتصال في الصفحة الرئيسية.
                            </p>
                        </div><!-- .service -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div>
        </div><!-- .container -->
    </section>



@endsection

@section('script')
<script>

    $(document).ready(function() {
        // $("#news-slider").owlCarousel({
        //
        //     items : 3,
        //     itemsDesktop:[1199,3],
        //     itemsDesktopSmall:[980,2],
        //     itemsMobile : [600,1],
        //     navigation:true,
        //     navigationText:["",""],
        //     pagination:true,
        //     autoPlay:true,
        // });
        $("#reviews_owl").owlCarousel({
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            items: 3,
            loop: true,
            center: false,
            rewind: false,
            mouseDrag: true,
            touchDrag: true,
            pullDrag: true,
            freeDrag: false,
            margin: 20,
            stagePadding: 0,
            merge: false,
            mergeFit: true,
            autoWidth: false,
            startPosition: 0,
            rtl: false,
            smartSpeed: 250,
            fluidSpeed: false,
            dragEndSpeed: false,
            responsive: {
                0: {
                    items: 1
                    // nav: true
                },
                480: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 2,
                    // nav: true,
                    loop: false
                },
                992: {
                    items: 2,
                    // nav: true,
                    loop: false
                }
            },
            responsiveRefreshRate: 200,
            responsiveBaseElement: window,
            fallbackEasing: "swing",
            info: false,
            nestedItemSelector: false,
            itemElement: "div",
            stageElement: "div",
            refreshClass: "owl-refresh",
            loadedClass: "owl-loaded",
            loadingClass: "owl-loading",
            rtlClass: "owl-rtl",
            responsiveClass: "owl-responsive",
            dragClass: "owl-drag",
            itemClass: "owl-item",
            stageClass: "owl-stage",
            stageOuterClass: "owl-stage-outer",
            grabClass: "owl-grab",
            autoHeight: false,
            lazyLoad: false
        });
        $("#clint_owl").owlCarousel({
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            items: 8,
            loop: true,
            center: false,
            rewind: false,
            mouseDrag: true,
            touchDrag: true,
            pullDrag: true,
            freeDrag: false,
            margin: 20,
            stagePadding: 0,
            merge: false,
            mergeFit: true,
            autoWidth: false,
            startPosition: 0,
            rtl: false,
            smartSpeed: 250,
            fluidSpeed: false,
            dragEndSpeed: false,
            responsive: {
                0: {
                    items: 2
                    // nav: true
                },
                480: {
                    items: 4,
                    nav: false
                },
                768: {
                    items: 5,
                    // nav: true,
                    loop: false
                },
                992: {
                    items: 5,
                    // nav: true,
                    loop: false
                }
            },
            responsiveRefreshRate: 200,
            responsiveBaseElement: window,
            fallbackEasing: "swing",
            info: false,
            nestedItemSelector: false,
            itemElement: "div",
            stageElement: "div",
            refreshClass: "owl-refresh",
            loadedClass: "owl-loaded",
            loadingClass: "owl-loading",
            rtlClass: "owl-rtl",
            responsiveClass: "owl-responsive",
            dragClass: "owl-drag",
            itemClass: "owl-item",
            stageClass: "owl-stage",
            stageOuterClass: "owl-stage-outer",
            grabClass: "owl-grab",
            autoHeight: false,
            lazyLoad: false
        });

        var owl = $("#news-slider");
        owl.owlCarousel({
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            items: 3,
            loop: true,
            center: false,
            rewind: false,
            mouseDrag: true,
            touchDrag: true,
            pullDrag: true,
            freeDrag: false,
            margin: 0,
            stagePadding: 0,
            merge: false,
            mergeFit: true,
            autoWidth: false,
            startPosition: 0,
            rtl: false,
            smartSpeed: 250,
            fluidSpeed: false,
            dragEndSpeed: false,
            responsive: {
                0: {
                    items: 1
                    // nav: true
                },
                480: {
                    items: 2,
                    nav: false
                },
                768: {
                    items: 3,
                    // nav: true,
                    loop: false
                },
                992: {
                    items: 3,
                    // nav: true,
                    loop: false
                }
            },
            responsiveRefreshRate: 200,
            responsiveBaseElement: window,
            fallbackEasing: "swing",
            info: false,
            nestedItemSelector: false,
            itemElement: "div",
            stageElement: "div",
            refreshClass: "owl-refresh",
            loadedClass: "owl-loaded",
            loadingClass: "owl-loading",
            rtlClass: "owl-rtl",
            responsiveClass: "owl-responsive",
            dragClass: "owl-drag",
            itemClass: "owl-item",
            stageClass: "owl-stage",
            stageOuterClass: "owl-stage-outer",
            grabClass: "owl-grab",
            autoHeight: false,
            lazyLoad: false
        });
    });
</script>
{{--    <script>--}}
{{--        const img = document.getElementById('hoverImage');--}}
{{--        const card = document.getElementById('Services_is');--}}

{{--        card.addEventListener('mouseenter', function() {--}}
{{--            img.src = '{{asset('Frontend/img/investment_hover.svg')}}'; // Change to hover image--}}
{{--        });--}}

{{--        card.addEventListener('mouseleave', function() {--}}
{{--            img.src = '{{asset('Frontend/img/investment.svg')}}'; // Change back to original image--}}
{{--        });--}}
{{--    </script>--}}

@endsection


