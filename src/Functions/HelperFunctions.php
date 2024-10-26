<?php

namespace Valrok\PhpKint\Functions;
use Kint\Kint;

class HelperFunction {
    public function __construct() {
        $this->define();
    }

    private function define(): void {
        /**
         * Re-add legacy function ddd
         * @link https://github.com/kint-php/kint/issues/236
         */
        if( ! function_exists( 'ddd')) {
            function ddd(...$v){
                header('Content-Type: text/html; charset=UTF-8');
                d(...$v);
                exit;
            }
            Kint::$aliases[] = 'ddd';
        }

        /**
         * Re-add legacy function dd
         * @link https://github.com/kint-php/kint/issues/236
         */
        if( ! function_exists( 'dd')) {
            function dd(...$v){
                header('Content-Type: text/html; charset=UTF-8');
                d(...$v);
                exit;
            }
            Kint::$aliases[] = 'dd';
        }

        /**
         * Re-add legacy function sd
         * @link https://github.com/kint-php/kint/issues/236
         */
        if( ! function_exists( 'sd')) {
            function sd(...$v){
                header('Content-Type: text/html; charset=UTF-8');
                s(...$v);
                exit;
            }
            Kint::$aliases[] = 'sd';
        }
    }
}