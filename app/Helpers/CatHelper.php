<?php
    namespace App\Helpers;

    use Illuminate\Support\Facades\Http;

    class CatHelper {
        public static $randomCat = [
            '100','101','102','200','201','202',
            '204','206','207','300','301','302',
            '303','304','305','307','400','401',
            '402','403','404','405','406','408',
            '409','410','411','412','413','414',
            '415','416','417','418','420','421',
            '422','423','424','425','426','429',
            '431','444','450','451','499','500',
            '501','502','503','504','506','507',
            '508','509','510','511','599'
        ];
        public static function connectApi() {
            $getRandomCat = Http::withHeaders([
                'x-api-key' => '2f2e79c9-fdbe-4a0d-aea8-ab2647fb5414'
            ])->get('https://api.thecatapi.com/v1/images/search');
            return $getRandomCat;
        }

        public static function changeToJson($arg) {
            return $arg->json();
        }

        public static function randomKeyArray() {
            $randomKeyArray = array_rand(Self::$randomCat, 1);
            return $randomKeyArray;
        }

        public static function concatString($randomKeyArray) {
           return $getRandomCat = 'https://http.cat/'.Self::$randomCat[$randomKeyArray];
        }
    }
?>
