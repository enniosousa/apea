<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model {

    private static $price = 40.00;
    private static $discounts = [
        /*'early' => [
            'start' => '2017-09-01',
            'end' => '2017-09-30',
            'value' => 5.00 //valor em reais (não é porcentagem)
        ],
        'fat' => [
            'value' => 10.00 //valor em reais (não é porcentagem)
        ],*/
    ];

    /**
     * Diz se está no intervalo para o desconto
     * 
     * @param string $start
     * @param string $end
     * @return boolean
     */
    private static function isInDateInterval(string $start, string $end) {
        $period = new \DatePeriod(
                new \DateTime($start), new \DateInterval('P1D'), new \DateTime($end)
        );
        foreach ($period as $dt) {
            if ($dt->format("Y-m-d") == date("Y-m-d"))
                return true;
        }
        return false;
    }

    public static function earlyDiscount() {
        $start = self::$discounts['early']['start'] ?? false;
        $end = self::$discounts['early']['end'] ?? false;

        if ($start && $end && self::isInDateInterval($start, $end)) {
            return self::$discounts['early']['value'];
        }
        return 0.00;
    }

    public static function fatDiscount() {
        if (\Auth::user()->fat_register) {
            return self::$discounts['fat']['value'] ?? 0.00;
        }
        return 0.00;
    }

    public static function total() {
        return self::$price - self::earlyDiscount() - self::fatDiscount();
    }

    public static function price() {
        return self::$price;
    }

}
