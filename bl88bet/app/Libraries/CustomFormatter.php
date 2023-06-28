<?php

namespace App\Libraries;

class CustomFormatter
{
    /**
     * Phone number formatter.
     */
    public static function phone_format($input)
    {
        // Keep only be digits.
        $strPhone = preg_replace("[^0-9]", '', $input);
        if (strlen($strPhone) != 10) {
            return $strPhone;
        }

        $strArea = substr($strPhone, 0, 3);
        $strPrefix = substr($strPhone, 3, 3);
        $strNumber = substr($strPhone, 6, 4);

        $strPhone = $strArea . '-' . $strPrefix . '-' . $strNumber;

        return $strPhone;
    }

    /**
     * Bank account number formatter.
     */
    public static function bank_ac_no_format($input)
    {
        $bank = explode('-', $input);
        if (count($bank) < 2) return '-';
        // Keep only be digits.
        $strBankNo = preg_replace("[^0-9]", '', $bank[1]);
        if (strlen($strBankNo) != 10) return $strBankNo;

        $strFirst = substr($strBankNo, 0, 3);
        $strSecond = substr($strBankNo, 3, 1);
        $strThird = substr($strBankNo, 4, 5);
        $strFourth = substr($strBankNo, 9, 1);

        $strBankNo = $strFirst . '-' . $strSecond . '-' . $strThird . '-' . $strFourth;

        return $strBankNo;
    }

    /**
     * Bank translate formatter.
     */
    public static function bank_format($input)
    {
        $bank =  explode('-', $input);
        return lang('Lang.bank_list.' . strtolower($bank[0]));
    }
}
