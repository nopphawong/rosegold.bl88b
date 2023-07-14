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
        // Keep only be digits.
        $strBankNo = preg_replace("[^0-9]", '', $input);
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
        return lang('Lang.bank_list.' . strtolower($input));
    }

    /**
     * Transaction type convertor.
     */
    public static function transactionType($type)
    {
        switch ($type) {
            case '1':
                return lang('Lang.transactions_history.deposit');
            case '2':
                return lang('Lang.transactions_history.withdraw');
            case '3':
                return lang('Lang.transactions_history.add_bonus');
            default:
                return lang('Lang.transactions_history.reduce_bonus');
        }
    }

    /**
     * Transaction status convertor.
     */
    public static function transactionStatus($status)
    {
        switch ($status) {
            case 'Y':
                return lang('Lang.transactions_history.successful');
            case 'C':
                return lang('Lang.transactions_history.cancel');
            default:
                return lang('Lang.transactions_history.pending');
        }
    }

    /**
     * Css type convertor.
     */
    public static function cssTransctionType($type)
    {
        switch ($type) {
            case '1':
                return 'deposit';
            case '2':
                return 'withdraw';
            case '3':
                return 'add-bonus';
            default:
                return 'reduce-bonus';
        }
    }

    /**
     * Text color.
     */
    public static function textStatus($status)
    {
        switch ($status) {
            case 'Y':
                return 'text-success';
            case 'C':
                return 'text-danger';
            default:
                return 'text-info';
        }
    }

    /**
     * Background color status.
     */
    public static function bgStatus($status)
    {
        switch ($status) {
            case 'Y':
                return 'bg-success';
            case 'C':
                return 'bg-danger';
            default:
                return 'bg-info';
        }
    }
}
