<?php

namespace App;

class myappenv
{
    const version_stable = '2.3';
    const version = '3';
    const StylePreName = 'shafatel_';
    const PictuerLoader = '/assets/images/shafatel_loader.gif';
    const httpsforce = true;
    const MainCats = ['WorkCat' => 10, 'L1' => 1, 'L2' => 2];
    /**
     * 1: one Step Authentication
     * 2: two Step Autentication
     * 3: Auth with SMS Only
     * 4: Authentication with sms on mobile number (if multi user register with same mobile number ask them to target login acount)
     */
    const AuthType = 4;
    const Captcha = 'google'; // local or google
    const RECAPTCHA_SITE_KEY = '6LfSMdcdAAAAACnEswUOG6OJbC3udSZZ0ZCAYBhb';
    const RECAPTCHA_SECRET_KEY = '6LfSMdcdAAAAANJmLkgQ8ZpAYqdwpWSCZZYx927t';
    const CaptchaLen = 5;
    const SiteAddress = 'https://sepehrmall.com';
    const SiteAddress1 = 'sepehrmall.com';
    const minpass = '1000';
    const maxpass = '9999';
    const TaxPercent = 9;
    const discountlimit = false;  //force to based price smaller than price
    const ComplexPass = false;
    const PassLen = 8;
    const MainPage = 'dashboard';
    const Apptype = 'owner';
    const AppModel = 'HCIS';
    const ShafatelUser = 'Shafatel';
    const ToPayCredit = '90';
    const casheirCredittype = 36;
    const shafatelunmanagedcustomers = 1000;
    const shafatelmanagedcustomers_done = 1001;
    const ShafatelKey = '8Cqedfsw89tf872UfyuQ';
    const ServiceToOffer_workcat = 4;
    const ServiceToOffer_L1 = 1;
    const ServiceToOffer_L2 = 1;
    const CatsToOffer_workcat = 4;
    const CatsToOffer_L1 = 1;
    const CatsToOffer_L2 = 2;
    const DefaultVoipUser_Name = 'مراجع';
    const DefaultSMSUser_Name = 'مراجع';
    const DefaultVoipUser_Family = 'تلفنی';
    const DefaultSMSUser_Family = 'پیامکی';
    const CoustomerType = 'Owner'; // Coustomer  Partner  Owner
    const iban = '';
    const tashim = '';
    const shafatel_payment_id = 14;
    const Shafatel_expireation_durtion = ' + 2 days';
    const Shafatel_expireation_durtion_day = 2;
    const CachCredit = 1;
    const UnaccessCredit = 2;
    const CommissionAdd = false;
    const User_active_status = 101;
    const role_SuperAdmin = '100';
    const role_ShopOwner = '91';
    const role_ShopAdmin = '81'; // مدیر فروش
    const role_HR = '95';
    const role_trader = '50';
    const role_Accounting = '90';
    const role_admin = '80';
    const role_callcenter = '65';
    const role_superviser = '70';
    const role_customer = '40';
    const role_worker = '20';
    const role_Bank = '127';
    const Default_customer_Status = '101';
    const Default_Other_Role_Status = '1';
    const StackholdersLimitID = '10000';
    const BaseServiceTypeID = '10000';
    const ShiftBeforeNow = false;
    const StackHolder = "daramad";
    const InsuranceHolder = "insurance";
    const TaxHolder = "taxer";
    const SystemOwner = 'dgkar';
    const Partner = 'haftsaz';
    const ForbidnUser = [myappenv::StackHolder, myappenv::SystemOwner, myappenv::Partner];
    const CenterPhone = "02141484000";
    const CenterPhoneShow = "۲۱-۴۱۴۸۴۰۰۰";
    const CenterAddress = "";
    const CenterEmail = "info@sepehramall.com";
    const CenterEndSmsTxt = "فروشگاه اینترنتی سپهر مال";
    const CenterName = "سپهر مال|شکلات بیسکوییت آدامس شامپو خارجی";
    const DefultPageTitr = "سپهر مال|شکلات بیسکوییت آدامس شامپو خارجی";
    const CenterFootertext = "س";
    const Branch = '1';
    const Shafatel_Branch = '1';
    const SMSCenter = 'sms.ir';
    const SMSusername = '';
    const SMSLine = '';
    const SMSapiKey = "4F89F0A2-CAC4-45BA-AFE4-FD309AAC2A6C"; // main
    const LoginUserAvatarPic = "/assets/images/avtar/useravatar.png";
    const Sitelogo = "https://sepehrmall.com/storage/photos/icons/0001139_logoSepehrMall.png";
    const brandlink = "https://sepehrmall.com";
    const FavIcon = "/storage/photos/icons/logo final.png";
    const MainIcon = "/storage/photos/icons/logo final.png";
    const ShafatelIcon = "https://sepehrmall.com/storage/photos/icons/logo%20final.png";
    const login_background_image = "/assets/images/loginpic.jpeg";
    const cardIndexWorkCat = 3;
    const ConsultIndex = 2;
    const cardIndexL1 = 5;
    const cardIndexL2 = 1;
    const NewsItemIndexType = 1;
    const PostIndexWorkCat = 10001;
    const NewsIndexL1 = 10001;
    const NewsIndexL2 = 10001;
    const FamilyWorkCat = 10003;
    const FamilyIndexL1 = 1;
    const FamilyIndexL2 = 2;
    const FamilySandicaIndexL2 = 2;
    const NewsCatL1 = 10002;
    const NewsCatL2 = 10002;
    const MenuIndexWorkCat = 10002;
    // menu order L1Work ; Menu type L2Work 1 : Direct address  - 2 : dropdown - 3 : Megamenu
    const Themes = [['pwa', "تم موبایل"], ['news', "تم خبر"], ['wollmart', "مارکت پلیس"]];
    const SiteTheme = 'Theme5';
    const ShopTheme = 'Theme5';
    const DashboardTheme = 'Theme1';
    const PWDTheme = 'main';
    const Notification = [['1', "موفق"], ['2', "توضیح"], ['3', "هشدار"], ['4', "خطر"]];
    const Credite_EditTransaction = 92;
    const Credite_LimitCredite = 100;
    const DocumentTypes = ["پزشکی در منزل", "پزشکی در بیمارستان"];
    const LimitCreditNumber = 100;
    const CommisionCreditNumber = 900;
    const NormalCreditNumber = 1;
    const TicketState = [['0', "Waiting for replay"], ['1', "Ansewerd"], ['100', "Closed"]];
    const TicketPeriority = [['0', "Normal"], ['1', "Important"], ['2', "Very important"]];
    const TicketPoint = [['1', "Very bad"], ['2', "Bad"], ['3', "Good"], ['4', "Very Good"], ['5', "Excellent"]];
    const PostStatus = [['0', "در انتظار انتشار"], ['1', "منتشر شده"], ['2', "لغو انتشار"], ['3', "در انتظار ویرایش"], ['4', "در انتظار تایید سر دبیر"], ['100', "حذف از سیستم"]];
    const KarMozds = [['1', "مبلغ ثابت"], ['2', "درصد از ورودی"], ['3', "درصد از سود"]];
    const SmartInvoiceStatus = [['1', "ارسال پیامک فقط به مشتری"], ['2', "ارسال پیامک به مشتری و مجری"], ['3', "ارسال پیامک به مجری"], ['4', "بدون ارسال پیامک"]];
    const MainTableClass = 'display table table-striped table-bordered dataTable';
    const CustomerOrderBranch = 10000;
    const OrderAddressType = 'name';
    const wordpress_site = false;
    const Lic = [
        'send_custom_sms' => true,  // for send sms by type user
        'wpa' => true, // Application has integrated mobile wpa application
        'news' => true,
        'HCIS' => false,
        'HCIS_Workflow' => false,
        'PersonelCard' => false,
        'Service' => false,
        'device' => false,
        'hozorgheyab' => false,
        'MultiBranch' => false,
        'moshavereh' => false,
        'SmartInvoice' => true,
        'CustomerUpload' => false,
        'SMSReciver' => false,
        'Statistics' => false,
        'Ticketing' => true,
        'woocommerce' => true,
        'notification' => true,
        'Labs' => false,
        'sitemap' => true,
        'TavanPardakht' => false,
        'crawler' => false,
	'deal' => false,
        'offline' => false,
        'crypto' => false,
        'userlic' => false,
        'affiliate'=>false,
        'hiring'=>false,
        'Voip' => false,
        'statistic' => true,
        'desk'=>false, // crm license
        'marketplace' => false
    ];
    const ReciveSmsKey = 'ySS37i9sR849745';
    const VOIPWithList = ['2.144.245.47', '46.100.55.68'];
    const Calltype_ConnectToBranch = 300;
    const provider_branch_type = 2;
    const EditTransactionsCode = 92;
    const DefaultCallType = 10;
    /**
     * Image Refrence for uploads
     */
    const PicRefrence = [
        ['id' => 1, 'Name' => 'عکس اصلی'],
        ['id' => 2, 'Name' => 'عکس آیکونی'],
        ['id' => 2, 'Name' => 'عکس روی محصول']
    ];
    const pwa_heder = 'assets/images/header_shafatel.png';
    const pwa_Line = 'assets/images/line_shafatel.png';
    const MainOwner = 'spm';
    const description = 'سپهرمال پلتفرم زنجیره تامین کالا و خدمات سلامت';
    const menueworkcat = 1;
    //site elements
    const welcometext = "به سامانه جامع زنجیره تامین سلامت سپهرمال خوش آمدید!";
    const CurrencyName = 'ریال';
    const CurrencyRate = 1;
    const SiteHeaderLogo = 'assets/images/favicon/Shafatel_header_logo.png';
    const SiteFooterLogo = 'assets/images/favicon/Shafatel_footer_logo.png';
    const ProductCateguryMain = ['WorkCat' => 10, 'L1ID' => 1, 'L2ID' => 1];
    const Product‌BrandsMain = ['WorkCat' => 10, 'L1ID' => 1, 'L2ID' => 1];
    const PreProductTag = '';
    const Namad = "<a referrerpolicy='origin' target='_blank' href='https://trustseal.enamad.ir/?id=165551&Code=cfiJIMiNkgcF4gxAlllc'><img referrerpolicy='origin' src='https://trustseal.enamad.ir/logo.aspx?id=165551&Code=cfiJIMiNkgcF4gxAlllc' alt='' style='cursor:pointer' code='cfiJIMiNkgcF4gxAlllc'></a>
";
    const MenuType = '1layer';
   //const Bank = 'sep';
    const Bank = 'PEC';
    const ipg_info = [
        'ipg' => 'pol',
        'fa_name' => 'کیف پول خرد',
        'WalletNumber' => 'IRR-1-9000733-2',
        'img' => 'https://novin.hospital/storage/photos/09123936105/poolkhord.png',
        'api_secret' => "TcT8G4hvGL9aeeVSWgVIOtyj88IRuDhLwei6BRI3DDCyo0o9gnNosbx9Egu8oBIM",
        'APIKEY' => '5SOH0dWHw1eoExhKVnq8xPJkK3luafvKmt4x7MxpOOIsRHA6SPTrilgOmE1DphTH'
    ];
    const TopenShopID = '99fda452-1eff-46d0-b41e-3b927bf636e4';
    const TopenToken = 'jwt eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiZDQ0MDNiYTctY2Y2Yi00NGMwLWJlM2MtNTRhNzUwODhmMGUxIiwidXNlcm5hbWUiOiIwOTEyMzM0NTU4MCIsImVtYWlsIjoic2FsZXNAc2VwZWhybWFsbC5jb20iLCJleHAiOjI1NzI4NTQ1ODMsIm9yaWdfaWF0IjoxNzA4ODU0NTgzfQ.A9W86FlwP2KUrzhiYzpF9uYORzGKCMho18hD0YGIXc4';
    const googlealaliticscr = '';
    const call_whatsapp = true;
    const call_whatsapp_address = "https://api.whatsapp.com/send?phone=989024256816";
    const PEPPrivate = '<RSAKeyValue><Modulus>5YIEX4w/FMpfCTMLQOsslKugAgeaRp3fhhHzDwTLK3FYKIR/3ZWjLEmVP7zhziK7YFkKn9llUukK0JSQGfNCFKzxzIWwlRwn9eUq3hjtsZw8bQiiZLaLDTJ/BU5zqj5o0G32DX8aBToIShs1od7Wj3hodvz4TVh4Cizk+JAijWk=</Modulus><Exponent>AQAB</Exponent><P>6c1F2viBGhSnjSdLiUrDrEIm5Cv7+2HXGyK8XG9/hIjksVwjEs2Jqst+BRwtIZbMdFbMmgnYvtdpzeeqOFmu8w==</P><Q>+0xgSpuLNC3oBENFWBeuCryuILB0qKPJhxEkxL8e6zbmQjSito3GHiDqV+ik2YMqWnZkiSJFKClaD9jHbANBMw==</Q><DP>Fx4E2jHYEgwYxQwtm9WYo1+nGMiAkcqKylQU687afPBMLH0/uow4IHseasLuc3PFo3sxn8l5dOU3wPQ3EHtNoQ==</DP><DQ>OCHsVF4ALyyd6e3Y3H+VmcJhpt2jgVPsnSYAL459ao79ygYV3m82tN4nWnGV+RwqZsCRXmxwRDNQcb+7c+4aLw==</DQ><InverseQ>fiNuV8sXDh/skedZphkB1k7vQAG9Il8u63ckDgtSXi2qQbe+x0f0VHb91gsrO0RobzPUFXAyfCfrjVjHit91Mw==</InverseQ><D>gRF1VCaS8yY7+/hww7l+AL3j5kBQSpZONh+yCSgw+eVsJp0dK4gTk7xt6sJWWo69wZlRmEOx78aPBm4F/BIJfnZU4H/8jBL+h2ViKAqsjOpmkS7ODEy+LCeZmma7BcDa3PHQM1vKPE+31mQXH1J7pX78i3PImIW/BhNL/3RoVeE=</D></RSAKeyValue>';
    const PEPPublic = '';
    const PEPMerchantCode = '5000144';
    const PEPTerminalCode = '2248796';
    const InvoiceData = [
        'InvoiceName' => 'فروشگاه اینترنتی سپهر مال',
        'TaxCode' => '۱۱۱۱۱۱۱۱۱۱',
        'RegisterCode' => '۱۱۱۱۱۱۱۱۱۱',
        'Provinces' => 'تهران',
        'City' => 'تهران',
        'Phone' => '',
        'Address' => 'خیابان بهشتی',
        'PostalCode' => '۱۶۹۴۶۱۱۳۵۱۱'
    ];
    const copyright = 'کپی رایت © ۱۴۰۱ سپهرمال.';
    const googleadress = '';
    const Yektanet = '';
    const Weight = [
        'viwe' => 1,
        'buy' => 0,
    ];
}
