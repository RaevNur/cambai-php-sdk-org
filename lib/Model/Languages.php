<?php
/**
 * Languages
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Camb.ai
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

namespace Camb\Ai\Model;

/**
 * Languages Class Doc Comment
 *
 * @category Class
 * @package  Camb.ai
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Languages
{
    /**
     * Possible values of this enum
     */
    public const EN_US = 1;
    public const AF_ZA = 2;
    public const AM_ET = 3;
    public const AR_AE = 4;
    public const AR_BH = 5;
    public const AR_DZ = 6;
    public const AR_EG = 7;
    public const AR_IQ = 8;
    public const AR_JO = 9;
    public const AR_KW = 10;
    public const AR_LB = 11;
    public const AR_LY = 12;
    public const AR_MA = 13;
    public const AR_OM = 14;
    public const AR_QA = 15;
    public const AR_SA = 16;
    public const AR_SY = 17;
    public const AR_TN = 18;
    public const AR_YE = 19;
    public const AZ_AZ = 20;
    public const BG_BG = 21;
    public const BN_BD = 22;
    public const BN_IN = 23;
    public const BS_BA = 24;
    public const CA_ES = 25;
    public const CS_CZ = 26;
    public const CY_GB = 27;
    public const DA_DK = 28;
    public const DE_AT = 29;
    public const DE_CH = 30;
    public const DE_DE = 31;
    public const EL_GR = 32;
    public const EN_AU = 33;
    public const EN_CA = 34;
    public const EN_GB = 35;
    public const EN_HK = 36;
    public const EN_IE = 37;
    public const EN_IN = 38;
    public const EN_KE = 39;
    public const EN_NG = 40;
    public const EN_NZ = 41;
    public const EN_PH = 42;
    public const EN_SG = 43;
    public const EN_TZ = 44;
    public const EN_ZA = 45;
    public const ES_AR = 46;
    public const ES_BO = 47;
    public const ES_CL = 48;
    public const ES_CO = 49;
    public const ES_CR = 50;
    public const ES_CU = 51;
    public const ES_DO = 52;
    public const ES_EC = 53;
    public const ES_ES = 54;
    public const ES_GQ = 55;
    public const ES_GT = 56;
    public const ES_HN = 57;
    public const ES_MX = 58;
    public const ES_NI = 59;
    public const ES_PA = 60;
    public const ES_PE = 61;
    public const ES_PR = 62;
    public const ES_PY = 63;
    public const ES_SV = 64;
    public const ES_US = 65;
    public const ES_UY = 66;
    public const ES_VE = 67;
    public const ET_EE = 68;
    public const EU_ES = 69;
    public const FA_IR = 70;
    public const FI_FI = 71;
    public const FIL_PH = 72;
    public const FR_BE = 73;
    public const FR_CA = 74;
    public const FR_CH = 75;
    public const FR_FR = 76;
    public const GA_IE = 77;
    public const GL_ES = 78;
    public const GU_IN = 79;
    public const HE_IL = 80;
    public const HI_IN = 81;
    public const HR_HR = 82;
    public const HU_HU = 83;
    public const HY_AM = 84;
    public const ID_ID = 85;
    public const IS_IS = 86;
    public const IT_IT = 87;
    public const JA_JP = 88;
    public const JV_ID = 89;
    public const KA_GE = 90;
    public const KK_KZ = 91;
    public const KM_KH = 92;
    public const KN_IN = 93;
    public const KO_KR = 94;
    public const LO_LA = 95;
    public const LT_LT = 96;
    public const LV_LV = 97;
    public const MK_MK = 98;
    public const ML_IN = 99;
    public const MN_MN = 100;
    public const MR_IN = 101;
    public const MS_MY = 102;
    public const MT_MT = 103;
    public const MY_MM = 104;
    public const NB_NO = 105;
    public const NE_NP = 106;
    public const NL_BE = 107;
    public const NL_NL = 108;
    public const PL_PL = 109;
    public const PS_AF = 110;
    public const PT_BR = 111;
    public const PT_PT = 112;
    public const RO_RO = 113;
    public const RU_RU = 114;
    public const SI_LK = 115;
    public const SK_SK = 116;
    public const SL_SI = 117;
    public const SO_SO = 118;
    public const SQ_AL = 119;
    public const SR_RS = 120;
    public const SU_ID = 121;
    public const SV_SE = 122;
    public const SW_KE = 123;
    public const SW_TZ = 124;
    public const TA_IN = 125;
    public const TA_LK = 126;
    public const TA_MY = 127;
    public const TA_SG = 128;
    public const TE_IN = 129;
    public const TH_TH = 130;
    public const TR_TR = 131;
    public const UK_UA = 132;
    public const UR_IN = 133;
    public const UR_PK = 134;
    public const UZ_UZ = 135;
    public const VI_VN = 136;
    public const ZH_CN = 139;
    public const ZH_CN_HENAN = 140;
    public const ZH_CN_LIAONING = 141;
    public const ZH_CN_SHAANXI = 142;
    public const ZH_CN_SHANDONG = 143;
    public const ZH_CN_SICHUAN = 144;
    public const ZH_HK = 145;
    public const ZH_TW = 146;
    public const ZU_ZA = 147;
    public const PA_IN = 148;
    public const SA_IN = 149;
    public const AR_XA = 150;
    public const TL_PH = 151;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EN_US,
            self::AF_ZA,
            self::AM_ET,
            self::AR_AE,
            self::AR_BH,
            self::AR_DZ,
            self::AR_EG,
            self::AR_IQ,
            self::AR_JO,
            self::AR_KW,
            self::AR_LB,
            self::AR_LY,
            self::AR_MA,
            self::AR_OM,
            self::AR_QA,
            self::AR_SA,
            self::AR_SY,
            self::AR_TN,
            self::AR_YE,
            self::AZ_AZ,
            self::BG_BG,
            self::BN_BD,
            self::BN_IN,
            self::BS_BA,
            self::CA_ES,
            self::CS_CZ,
            self::CY_GB,
            self::DA_DK,
            self::DE_AT,
            self::DE_CH,
            self::DE_DE,
            self::EL_GR,
            self::EN_AU,
            self::EN_CA,
            self::EN_GB,
            self::EN_HK,
            self::EN_IE,
            self::EN_IN,
            self::EN_KE,
            self::EN_NG,
            self::EN_NZ,
            self::EN_PH,
            self::EN_SG,
            self::EN_TZ,
            self::EN_ZA,
            self::ES_AR,
            self::ES_BO,
            self::ES_CL,
            self::ES_CO,
            self::ES_CR,
            self::ES_CU,
            self::ES_DO,
            self::ES_EC,
            self::ES_ES,
            self::ES_GQ,
            self::ES_GT,
            self::ES_HN,
            self::ES_MX,
            self::ES_NI,
            self::ES_PA,
            self::ES_PE,
            self::ES_PR,
            self::ES_PY,
            self::ES_SV,
            self::ES_US,
            self::ES_UY,
            self::ES_VE,
            self::ET_EE,
            self::EU_ES,
            self::FA_IR,
            self::FI_FI,
            self::FIL_PH,
            self::FR_BE,
            self::FR_CA,
            self::FR_CH,
            self::FR_FR,
            self::GA_IE,
            self::GL_ES,
            self::GU_IN,
            self::HE_IL,
            self::HI_IN,
            self::HR_HR,
            self::HU_HU,
            self::HY_AM,
            self::ID_ID,
            self::IS_IS,
            self::IT_IT,
            self::JA_JP,
            self::JV_ID,
            self::KA_GE,
            self::KK_KZ,
            self::KM_KH,
            self::KN_IN,
            self::KO_KR,
            self::LO_LA,
            self::LT_LT,
            self::LV_LV,
            self::MK_MK,
            self::ML_IN,
            self::MN_MN,
            self::MR_IN,
            self::MS_MY,
            self::MT_MT,
            self::MY_MM,
            self::NB_NO,
            self::NE_NP,
            self::NL_BE,
            self::NL_NL,
            self::PL_PL,
            self::PS_AF,
            self::PT_BR,
            self::PT_PT,
            self::RO_RO,
            self::RU_RU,
            self::SI_LK,
            self::SK_SK,
            self::SL_SI,
            self::SO_SO,
            self::SQ_AL,
            self::SR_RS,
            self::SU_ID,
            self::SV_SE,
            self::SW_KE,
            self::SW_TZ,
            self::TA_IN,
            self::TA_LK,
            self::TA_MY,
            self::TA_SG,
            self::TE_IN,
            self::TH_TH,
            self::TR_TR,
            self::UK_UA,
            self::UR_IN,
            self::UR_PK,
            self::UZ_UZ,
            self::VI_VN,
            self::ZH_CN,
            self::ZH_CN_HENAN,
            self::ZH_CN_LIAONING,
            self::ZH_CN_SHAANXI,
            self::ZH_CN_SHANDONG,
            self::ZH_CN_SICHUAN,
            self::ZH_HK,
            self::ZH_TW,
            self::ZU_ZA,
            self::PA_IN,
            self::SA_IN,
            self::AR_XA,
            self::TL_PH,
        ];
    }
}
