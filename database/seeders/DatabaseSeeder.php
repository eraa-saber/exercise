<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Customer::create( [
            'name' =>'Walid Hammadi',
            'phone' =>'(212) 6007989253'
        ] );

        \App\Models\Customer::create( [
            'name' =>'Yosaf Karrouch',
            'phone' =>'(212) 698054317'
        ] );

        \App\Models\Customer::create( [
            'name'=>'Younes Boutikyad',
            'phone' =>'(212) 6546545369'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Houda Houda',
            'phone'=>'(212) 6617344445'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Chouf Malo',
            'phone'=>'(212) 691933626'
        ] );

        \App\Models\Customer::create( [
            'name'=>'soufiane fritisse ',
            'phone'=>'(212) 633963130'
        ] );

        \App\Models\Customer::create( [
            'name' =>'Nada Sofie',
            'phone' =>'(212) 654642448'
        ] );

        \App\Models\Customer::create( [

            'name' =>'Edunildo Gomes Alberto ',
            'phone' =>'(258) 847651504'
        ] );

        \App\Models\Customer::create( [

            'name' =>'Walla\'s Singz Junior',
            'phone'=>'(258) 846565883'
        ] );

        \App\Models\Customer::create( [

            'name'=>'sevilton sylvestre',
            'phone'=>'(258) 849181828'
        ] );

        \App\Models\Customer::create( [
            'name'=>'Tanvi Sachdeva',
            'phone'=>'(258) 84330678235'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Florencio Samuel',
            'phone'=>'(258) 847602609'
        ] );

        \App\Models\Customer::create( [

            'name' =>'Solo Dolo',
            'phone'=>'(258) 042423566'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Pedro B 173',
            'phone' =>'(258) 823747618'
        ] );

        \App\Models\Customer::create( [

            'name' =>'Ezequiel Fenias',
            'phone'=>'(258) 848826725'
        ] );

        \App\Models\Customer::create( [

            'name'=>'JACKSON NELLY',
            'phone' =>'(256) 775069443'
        ] );

        \App\Models\Customer::create( [

            'name' =>'Kiwanuka Budallah',
            'phone' =>'(256) 7503O6263'
        ] );

        \App\Models\Customer::create( [

            'name'=>'VINEET SETH',
            'phone' =>'(256) 704244430'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Jokkene Richard',
            'phone'=>'(256) 7734127498'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Ogwal David',
            'phone'=>'(256) 7771031454'
        ] );

        \App\Models\Customer::create( [

            'name'=>'pt shop 0901 Ultimo ',
            'phone'=>'(256) 3142345678'
        ] );

        \App\Models\Customer::create( [

            'name' =>'Daniel Makori',
            'phone'=>'(256) 714660221'
        ] );

        \App\Models\Customer::create( [

            'name'=>'shop23 sales',
            'phone'=>'(251) 9773199405'
        ] );

        \App\Models\Customer::create( [

            'name' =>'Filimon Embaye',
            'phone' =>'(251) 914701723'
        ] );

        \App\Models\Customer::create( [
            'name'=>'ABRAHAM NEGASH',
            'phone'=>'(251) 911203317'
        ] );

        \App\Models\Customer::create( [

            'name'=>'ZEKARIAS KEBEDE',
            'phone' =>'(251) 9119454961'
        ] );

        \App\Models\Customer::create( [
            'name'=>'EPHREM KINFE',
            'phone'=>'(251) 914148181'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Karim Niki',
            'phone'=>'(251) 966002259'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Frehiwot Teka',
            'phone'=>'(251) 988200000'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Fanetahune Abaia',
            'phone'=>'(251) 924418461'
        ] );

        \App\Models\Customer::create( [
            'name'=>'Yonatan Tekelay',
            'phone' =>'(251) 911168450'
        ] );

        \App\Models\Customer::create( [
            'name' =>'EMILE CHRISTIAN KOUKOU DIKANDA HONORE ',
            'phone'=>'(237) 697151594'
        ] );

        \App\Models\Customer::create( [

            'name' =>'MICHAEL MICHAEL',
            'phone'=>'(237) 677046616'
        ] );

        \App\Models\Customer::create( [

            'name' =>'ARREYMANYOR ROLAND TABOT',
            'phone' =>'(237) 6A0311634'
        ] );

        \App\Models\Customer::create( [

            'name'=>'LOUIS PARFAIT OMBES NTSO',
            'phone' =>'(237) 673122155'
        ] );

        \App\Models\Customer::create( [
            'name'=>'JOSEPH FELICIEN NOMO',
            'phone'=>'(237) 695539786'
        ] );

        \App\Models\Customer::create( [

            'name' =>'SUGAR STARRK BARRAGAN',
            'phone' =>'(237) 6780009592'
        ] );

        \App\Models\Customer::create( [

            'name' =>'WILLIAM KEMFANG',
            'phone' =>'(237) 6622284920'
        ] );

        \App\Models\Customer::create( [

            'name'=>'THOMAS WILFRIED LOMO LOMO',
            'phone'=>'(237) 696443597'
        ] );

        \App\Models\Customer::create( [

            'name' =>'Dominique mekontchou',
            'phone' =>'(237) 691816558'
        ] );

        \App\Models\Customer::create( [

            'name'=>'Nelson Nelson',
            'phone'=>'(237) 699209115'
        ] );
        $countries = array(
            array('id' => '1','iso' => 'CM','name' => 'CAMEROON','nicename' => 'Cameroon','iso3' => 'CMR','numcode' => '120','phonecode' => '237'),
            array('id' => '2','iso' => 'ET','name' => 'ETHIOPIA','nicename' => 'Ethiopia','iso3' => 'ETH','numcode' => '231','phonecode' => '251'),
            array('id' => '3','iso' => 'MA','name' => 'MOROCCO','nicename' => 'Morocco','iso3' => 'MAR','numcode' => '504','phonecode' => '212'),
            array('id' => '4','iso' => 'MZ','name' => 'MOZAMBIQUE','nicename' => 'Mozambique','iso3' => 'MOZ','numcode' => '508','phonecode' => '258'),
            array('id' => '5','iso' => 'UG','name' => 'UGANDA','nicename' => 'Uganda','iso3' => 'UGA','numcode' => '800','phonecode' => '256')
        );
        foreach ($countries as $country){
            \App\Models\Country::create($country);
        }

    }
}
