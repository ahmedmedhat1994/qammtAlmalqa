<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "مؤسسة قمة الملقا لخدمات الاعمال", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'شركةٌ تأسّست عام 2020 في مجال خدمات الأعمال والدّعم المباشر للشركات والمؤسسات وتقدّم توجيهاتٍ وحلولاً متكاملةً وسريعةً.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['دراسة الجدوى,دراسة جدوى مشروع,تحليل جدوى اقتصادية,دراسة جدوى اقتصادية جاهزة,نموذج دراسة جدوى,دراسات جدوى متكاملة,استشارات دراسات جدوى,أدوات دراسة الجدوى,وسيط عقاري,شركات الوساطة العقارية,خدمات الوساطة العقارية,تسويق عقاري,استشارات عقارية,عقارات للبيع,تأجير عقارات,استشارات إدارية,استشارات قانونية,استشارات مالية,استشارات تسويقية,استشارات استراتيجية,استشارات تطوير الأعمال,خدمات التسويق الإلكتروني,تسويق عبر الإنترنت,استراتيجيات التسويق الرقمي,تحسين محركات البحث (SEO),إدارة الحملات الإعلانية,تسويق عبر السوشيال ميديا,تسويق المحتوى,تصميم شعار,تصميم هوية بصرية,تصميم العلامة التجارية,خدمات تصميم الجرافيك,تصميم مواد تسويقية,تصميم بطاقات أعمال,تصميم منشورات سوشيال ميديا,تصميم إعلانات سوشيال ميديا,خدمات إدارة حسابات سوشيال ميديا,محتوى بصري للسوشيال ميديا,تصوير احترافي للمنتجات,تصوير منتجات للتجارة الإلكترونية,استوديو تصوير منتجات,خدمات تصوير منتجات,تصوير فيديو للبودكاست,خدمات تصوير البودكاست,استوديو تصوير البودكاست,تسجيل صوتي احترافي,خدمات التعليق الصوتي,استوديو تسجيل التعليق الصوتي,تصميم تطبيقات موبايل,تطوير تطبيقات أندرويد وiOS,خدمات تصميم واجهات المستخدم,تصميم تجربة المستخدم (UX),إنشاء متاجر إلكترونية,تصميم متجر إلكتروني,حلول التجارة الإلكترونية,تحسين تجربة المستخدم للمتاجر,خدمات كتابة الأبحاث,خدمات المساعدة الجامعية,كتابة رسائل الماجستير والدكتوراه,استشارات أكاديمية.'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'مؤسسة قمة الملقا لخدمات الاعمال', // set false to total remove
            'description' => 'شركةٌ تأسّست عام 2020 في مجال خدمات الأعمال والدّعم المباشر للشركات والمؤسسات وتقدّم توجيهاتٍ وحلولاً متكاملةً وسريعةً.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => null,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card' => 'summary_large_image', // نوع البطاقة
            'site' => '@qalmalqa', // اسم المستخدم
            'title' => 'مؤسسة قمة الملقا لخدمات الاعمال',
            'description' => 'شركةٌ تأسّست عام 2020 في مجال خدمات الأعمال والدّعم المباشر للشركات والمؤسسات وتقدّم توجيهاتٍ وحلولاً متكاملةً وسريعة',
            'image' => false,
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'مؤسسة قمة الملقا لخدمات الاعمال', // set false to total remove
            'description' => 'شركةٌ تأسّست عام 2020 في مجال خدمات الأعمال والدّعم المباشر للشركات والمؤسسات وتقدّم توجيهاتٍ وحلولاً متكاملةً وسريعة', // set false to total remove
            'url'         => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
