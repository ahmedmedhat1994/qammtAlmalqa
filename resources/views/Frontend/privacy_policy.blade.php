@extends('Frontend.layouts.master')
@section('title')
    سياسة الخصوصيّة
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
                        <li class="menu-item"><a href="https://drive.google.com/file/d/1PfoxzYozJVzXnOM5JY_usGJgZYnuSHgI/view?usp=sharing" class="menu-link nav-link" target="_blank">سابقة الاعمال</a></li>


                    </ul>
                    <ul class="menu-btns">
                        <li>
                            <a href="https://1.envato.market/e0y3g" target="_blank" class="btn btn-secondary btn-lg">اطلب خدمة</a>
                        </li>
                    </ul>
                </nav><!-- .nk-nav-menu -->
            </div><!-- .header-warp-->
        </div><!-- .container-->

    </div><!-- .header-main-->
    <div class="container">
        <h3 class="fw-bold text-white">سياسة الخصوصيّة</h3>
    <nav class="mt-3">
        <ul class="breadcrumb breadcrumb-arrow">
            <li class="breadcrumb-item fs-16px text-white"><a class="text-white" href="{{route('index')}}">الصّفحة الرّئيسيّة</a></li>
            <li class="breadcrumb-item active fs-16px  text-white">سياسة الخصوصيّة</li>
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
                        <img src="{{asset('Frontend/img/secure.png')}}" width="400" />
                        </div><!-- .service -->
                    </div><!-- .col -->
                    <div class="col-sm-8 col-12 h-100">
                        <div>
                            <h3>1. من نحن</h3>
                            <span class="fw-bold" >تلتزم قمّة المَلقا بأعلى معايير المستهلك لحماية مستخدميها و من تقدم لهم خدماتها.</span>
                            <p style="padding-top: 30px;">
                                قامت قمّة المَلقا بإنشاء سياسة الخصوصية واضعة إياك في عين الاعتبار, و من الضروري أن يكون لديك فهم شامل لأساليب جمع المعلومات و استخدامها آخذاً في عين الاعتبار أنك المتحكم الأول و الأخير في معلوماتك الشخصية المقدمة إلى قمّة المَلقا. بعد قراءة سياسة الخصوصية ستلاحظ أنه باستخدام صفحة قمّة المَلقا على الويب:
                                أنت توافق على أنه إذا قمت بالإفصاح عن معلوماتك الشخصية لنا، فقد نقوم بإنشاء سجل قاعدة بيانات عنك
                                إذا قمت بالتسجيل على موقعنا الإلكتروني، أو قمت بتنزيل أي مواد أو إجراء أي معاملة أخرى، فإنك توافق على قيامنا بجمع المعلومات اللازمة لتزويدك بالخدمة التي طلبتها، وتوافق على أنه يجوز الكشف عن هذه المعلومات لشركاء الخدمة (الذين قد يكونوا أطراف ثالثة) لتلك الأغراض
                                أنت توافق على استخدام ملفات تعريف الارتباط على متصفحك (ما لم تقم بإزالتها)
                                أنت توافق على أنه يمكننا الاتصال بك لتزويدك بمعلومات حول المنتجات والخدمات التي قد تهمك (ما لم تكن قد ذكرت أنك لا ترغب في تلقي هذه الاتصالات)
                                يفيد استخدامك المستمر لموقع "قمّة المَلقا" على الويب بموافقتك على أي تغييرات مستقبلية في سياسة خصوصية "قمّة المَلقا"

                            </p>
                        </div><!-- .service -->
                        <div class="mt-3">
                            <h3>2. ما المعلومات التي يتم جمعها وكيف نستخدمها؟</h3>
                            <span class="fw-bold" >تقوم "قمّة المَلقا" بجمع المعلومات منك في عدة نقاط مختلفة على الموقع:</span>
                            <p style="padding-top: 30px;">
                                قامت قمّة المَلقا بإنشاء سياسة الخصوصية واضعة إياك في عين الاعتبار, و من الضروري أن يكون لديك فهم شامل لأساليب جمع المعلومات و استخدامها آخذاً في عين الاعتبار أنك المتحكم الأول و الأخير في معلوماتك الشخصية المقدمة إلى قمّة المَلقا. بعد قراءة سياسة الخصوصية ستلاحظ أنه باستخدام صفحة قمّة المَلقا على أ. طلب خدمة

                                ما المعلومات التي يتم جمعها؟
                                عند طلب خدمة من قمّة المَلقا, سيطلب منك ترك بريدك الالكتروني, بالإضافة لرقم هاتفك و اسمك الكامل, مصحوبين بالمدينة التي تقيم فيها (إن كنت تستخدم النموذج الكامل).
                                يتم أخذ عنوان بروتوكول الانترنت الخاص بك (عنوان بروتوكول الإنترنت الخاص بك هو الرقم الخاص بجهاز الحاسوب الذي تستخدمه، والذي يسمح للأجهزة الأخرى الموصولة بشبكة الإنترنت بتحديد وجهة البيانات الصادرة عنها، وجمع بعض المعلومات مثل نوعية المتصفح ومحرك البحث، ولكن من دون التعرف على هويتك الشخصية).
                                يتم منحك أيضًا خيار التسجيل للحصول على تحديثات دورية و/أو رسائل إخبارية من "قمّة المَلقا" لإعلامك بآخر الأخبار والصفقات.
                            </p>
                            <span class="fw-bold" >لمَ نجمع هذه المعلومات؟</span>
                            <span class="d-block" >                                نجمع المعلومات المذكورة أعلاه للأغراض التالية:</span>
                            <p style="padding-top: 30px;">
                                لتحديد هويتك عند استخدام موقعنا من أجل التمتع بتجربة شخصية ومخصصة.
                                لتقديم مخطط شاشة افتراضي لك بناءً على البلد الذي تحدده
                                كإجراء أمني، لإرسال بريد إلكتروني إليك لتأكيد تسجيل حسابك
                                للسماح لنا بمعالجة واستكمال خدماتك
                                لإتاحة تجربة سلسة عند إجراء عمليات الطلب المستقبلية.
                                لإرسال تأكيدات عبر البريد الإلكتروني لاتخاذ إجراءات بشأن "قمّة المَلقا".
                                لتأكيد هويتك و توثيقها.
                                بالنسبة لوكلاء خدمة العملاء لدينا، للتواصل معك عند الضرورة.
                                لإرسال تحديثاتنا الدورية و/أو رسائلنا الإخبارية إليك اختياريًا، إذا قمت بالتسجيل للحصول عليها.
                                لإرسال معلومات إليك حول المنتجات و الخدمات التي قد تهمك.
                            </p>
                            <span class="d-block" >ب. التواصل مع العميل</span>
                            <p style="padding-top: 30px;">
                                ما المعلومات التي يتم جمعها؟
                                يمكنك اختيار تقديم ملحوظات إلى "قمّة المَلقا"، على سبيل المثال من خلال البريد الإلكتروني أو الرسائل. وقد يتم الاحتفاظ بالتعليقات الواردة في ملحوظات، بالإضافة إلى معلومات التواصل الخاصة بك مثل بريدك الإلكتروني، إذا تم تقديمها إلى "قمّة المَلقا"، في سجلات.
                            </p>
                            <span class="d-block" >لمَ نجمع هذه المعلومات؟</span>
                            <p style="padding-top: 30px;">
                                تعد الملحوظات التي تختار تقديمها ذات قيمة لمساعدة "قمّة المَلقا" في إجراء تحسينات على خدمتنا المقدمة لك. من أجل متابعة الملحوظات التي اخترت تقديمها، قد تقوم "قمّة المَلقا" بمراسلتك باستخدام معلومات التواصل التي قدمتها.
                                لإرسال معلومات إليك حول المنتجات والخدمات التي قد تهمك
                            </p>
                            <span class="d-block" >ج. ملفات تعريف الارتباط</span>

                            <h3>ما المعلومات التي يتم جمعها؟</h3>
                            <span class="fw-bold" >
                                عند زيارة موقع "قمّة المَلقا", يتم تخزين ملف تعريف الارتباط على جهاز الكمبيوتر لديك (يعد ملف تعريف الارتباط ملفًا نصيًا صغيرًا ومشفّرًا يحتوي على بعض المعلومات حول تفضيلاتك ويسمح بتتبع استخدامك), ويعد استخدام ملفات تعريف الارتباط الآن معيارًا صناعيًا، وستجدها مستخدمة في معظم مواقع الويب الرئيسية. على الرغم من ذلك، يمكنك دائمًا اختيار تعطيل تخزين ملفات تعريف الارتباط على جهاز الكمبيوتر لديك عن طريق تغيير إعدادات المتصفح. فيما قد يؤدي تعطيل ملفات تعريف الارتباط إلى الحصول على تجربة محدودة لوظائفنا وخدماتنا وفي بعض الحالات قد يعني أننا غير قادرين على تزويدك بالخدمات أو أجزاء من الخدمات التي طلبتها. وقد يتم استخدام ملفات تعريف الارتباط أيضًا من قِبَل بعض شركاء الأعمال لدينا الذين تم دمج محتواهم في موقعنا أو ارتبط به. ومع ذلك، ليس لدينا صلاحية وصول إلى ملفات تعريف الارتباط هذه أو التحكم فيها.
                            </span>
                            <p style="padding-top: 30px;">
                                لمَ نجمع هذه المعلومات؟
                                تُسهل ملفات تعريف الارتباط، عند تخزينها على جهاز الكمبيوتر لديك، ما يلي:
                                تتيح لنا ملفات تعريف الارتباط حفظ كلمات المرور والتفضيلات نيابة عنك حتى لا تضطر إلى إعادة إدخالها في المرة التالية التي تزورنا فيها. وهذا يعني أنك ستتمكن من الحصول على تجربة أكثر راحة.
                                ستتمكن "قمّة المَلقا" من إجراء تحسينات على الموقع بناءً على إحصاءات الاستخدام المجمعة التي تم جمعها من ملفات تعريف الارتباط. فيما تكون إحصاءات الاستخدام المجمعة هذه مجهولة المصدر لأطراف ثالثة، ويمكن أيضًا استخدامها من قبل شركات الإعلان من أطراف ثالثة ذات صلة بـ "قمّة المَلقا" لمراقبة فعالية الإعلانات.
                                3. معلوماتك تحت سيطرتك الشخصية
                            </p>
                            <span class="fw-bold" >
أ. سياسة الاشتراك وإلغاء الاشتراك
                            </span>
                            <p style="padding-top: 30px;">
                                لديك دائمًا خيار الاشتراك في المشاركة في عروض منتجات وخدمات "قمّة المَلقا". على سبيل المثال، سيتم منحك خيار الاشتراك في نشرة "قمّة المَلقا" الإخبارية من خلال النقر فوق مربع الاختيار. بينما يتمل "قمّة المَلقا" في استفادتك من عروض منتجاتنا وخدماتنا، في أي وقت، لديك دائمًا خيار إلغاء الاشتراك في المنتجات والخدمات التي اشتركت فيها. فيما نوفر لك القدرة على إلغاء الاشتراك في تلقي معلومات منتجاتنا وخدماتنا عند مرحلة جمع المعلومات، أو عن طريق الوصول إلى معلومات حسابك وتغييرها، فيرجى إتاحة بعض الوقت لمعالجة هذا الطلب.

                            </p>
                            <span class="fw-bold" >
ب. الوصول إلى معلوماتك والاحتفاظ بالمعلومات
                            </span>
                            <p style="padding-top: 30px;">
                                على الرغم من أننا سنتخذ خطوات معقولة للحفاظ على دقة معلوماتك واكتمالها وتحديثها، فإننا نطلب منك الإبقاء على معلوماتك محدَّثة قدر الإمكان حتى نتمكن من الاستمرار في تحسين خدمتنا لك.


                                سنمنع وصولك إلى هذه المعلومات فقط في ظروف محدودة للغاية حيث يسمح القانون بذلك، مثل:
                                حيثما قد يكون من الخطر حصولك عليها
                                حيثما قد يضر تحقيقًا جاريًا
                                عندما يتعلق الأمر بإجراءات محكمة وقد يخضع لعملية كشف
                                حيثما قد يتعلق بعملية صنع القرار الحساسة تجاريًا
                                حيثما يتم تضمين المعلومات الشخصية لأفراد آخرين في السجل نفسه

                                قد تحتفظ "قمّة المَلقا" (ولكنها غير ملزمة بذلك) بمعلوماتك لمدة 7 سنوات من تاريخ آخر مرة قمت فيها بإدخالها.


                            </p>
                            <span class="fw-bold" >
ج. الأمان
                            </span>
                            <p style="padding-top: 30px;">
                                تبذل قمّة المَلقا أقصى جهدها لحماية المعلومات التي يقدمها المستخدم وفق أفضل الممارسات، وتعمل على تشفير المعلومات والبيانات الحساسة التي يتعين الحفاظ على سريتها توافقًا مع المتطلبات النظامية. سيسعى "قمّة المَلقا" إلى اتخاذ جميع الخطوات المعقولة للحفاظ على أمان أي معلومات نحتفظ بها عنك. إذ يتم تخزين معلوماتك على خوادم آمنة محمية في منشآت خاضعة للرقابة. لسوء الحظ، على الرغم من خصائص التكنولوجيا والأمان المذكورة أعلاه، لا يمكن ضمان أن يكون نقل البيانات عبر الإنترنت آمنًا بنسبة 100٪، لذلك لا يمكننا تقديم ضمان مطلق بأن المعلومات التي تقدمها لنا ستكون آمنة في جميع الأوقات، ولا يمكننا كذلك تحمل المسؤولية عن أي حدث ينشأ عن الوصول غير المصرح به إلى معلوماتك الشخصية. ولن يتحمل "قمّة المَلقا" المسؤولية عن الأحداث الناشئة عن حصول أطراف ثالثة على وصول غير مصرح به إلى معلوماتك الشخصية. يرجى ملاحظة أيضًا أن "قمّة المَلقا" قد يستخدم مرافق خارجية لمعالجة معلوماتها أو نسخها احتياطيًا. نتيجة لذلك، قد ننقل معلوماتك الشخصية ونخزنها في منشآتنا الخارجية. على الرغم من ذلك، فإن هذا لا يغير أيًا من التزاماتنا لحماية خصوصيتك.

                            </p>
                            <h3>التغييرات على سياسة خصوصية "قمّة المَلقا"</h3>
                            <span class="fw-bold" >
قد تقوم "قمّة المَلقا" بالتعديل على سياسة الخصوصية هذه من وقت لآخر. إذا أجرينا أي تغييرات جوهرية بأي طريقة من الطرق التي نستخدم بها معلوماتك الشخصية، فسنخطرك عن طريق نشر إعلان بارز على صفحات الويب الخاصة بنا أو عن طريق البريد الإلكتروني وسيكون لديك خيار الموافقة على ما إذا كنا سنستخدم المعلومات بهذه الطريقة المختلفة أم لا.
                            </span>
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


