<?php

declare(strict_types=1);

namespace EasyTranslate\Connector\Model\Locale;

class SourceMapper extends AbstractMapper
{
    protected const INTERNAL_TO_EXTERNAL
        = [
            'af_ZA'  => 'af',
            'ar_DZ'  => 'ar',
            'ar_EG'  => 'ar',
            'ar_KW'  => 'ar',
            'ar_MA'  => 'ar',
            'ar_SA'  => 'ar',
            'az_AZ'  => 'az',
            'be_BY'  => 'be',
            'bg_BG'  => 'bg',
            'bn_BD'  => 'bn',
            'bs_BA'  => 'bs',
            'ca_ES'  => 'ca',
            'cs_CZ'  => 'cs',
            'cy_GB'  => 'cy',
            'da_DK'  => 'da',
            'de_AT'  => 'de',
            'de_CH'  => 'de',
            'de_DE'  => 'de',
            'el_GR'  => 'el',
            'en_AU'  => 'en',
            'en_CA'  => 'en',
            'en_GB'  => 'en',
            'en_IE'  => 'en',
            'en_NZ'  => 'en',
            'en_US'  => 'en',
            'es_AR'  => 'es',
            'es_CL'  => 'es',
            'es_CO'  => 'es',
            'es_CR'  => 'es',
            'es_ES'  => 'es',
            'es_MX'  => 'es',
            'es_PA'  => 'es',
            'es_PE'  => 'es',
            'es_VE'  => 'es',
            'et_EE'  => 'et',
            'fa_IR'  => 'fa_IR',
            'fi_FI'  => 'fi',
            'fil_PH' => 'fil',
            'fr_CA'  => 'fr',
            'fr_FR'  => 'fr',
            'gl_ES'  => 'gl',
            'gu_IN'  => 'gu',
            'he_IL'  => 'he',
            'hi_IN'  => 'hi',
            'hr_HR'  => 'hr',
            'hu_HU'  => 'hu',
            'id_ID'  => 'id',
            'is_IS'  => 'is',
            'it_CH'  => 'it',
            'it_IT'  => 'it',
            'ja_JP'  => 'ja',
            'ka_GE'  => 'ka',
            'km_KH'  => 'km',
            'ko_KR'  => 'ko',
            'lo_LA'  => 'lo',
            'lt_LT'  => 'lt',
            'lv_LV'  => 'lv',
            'mk_MK'  => 'mk',
            'mn_MN'  => 'mn_MN',
            'ms_MY'  => 'ms',
            'nb_NO'  => 'nb_NO',
            'nl_NL'  => 'nl_NL',
            'nn_NO'  => 'nn_NO',
            'pl_PL'  => 'pl',
            'pt_BR'  => 'pt',
            'pt_PT'  => 'pt',
            'ro_RO'  => 'ro',
            'ru_RU'  => 'ru',
            'sk_SK'  => 'sk',
            'sl_SI'  => 'sl',
            'sq_AL'  => 'sq',
            'sr_RS'  => 'sr',
            'sv_SE'  => 'sv',
            'sw_KE'  => 'sw',
            'th_TH'  => 'th',
            'tr_TR'  => 'tr',
            'uk_UA'  => 'uk',
            'vi_VN'  => 'vi',
            'zh_CN'  => 'zh_CN',
            'zh_HK'  => 'zh_HK',
        ];
}
