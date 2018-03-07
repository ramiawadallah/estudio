<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Control::store(request(),'setting',[
                'id'                => '1',
                 // website contact information
                'email'             => 'info@myestudio.net',
                'phone'             => '+ 962 6 ', 
                'address'           => 'Amman, Jordan Wasfi Al Tal Street',
                'fax'               => '+962 6 ',
                'pobox'             => '17442',
                'map'               => 'https://www.google.jo/maps/@31.8357604,35.9476308,10z?hl=en',
                'mainvideo'         => 'https://www.youtube.com',

                // About your website   
                'translate'         => [ 
                    'title'         => 'My Estudio',
                    'subtitle'      => 'My Estudio',
                    'desc'          => 'My Estudio',
                ],
                
                'maintenance'       => 'open',

                // Photo Logo for Home page website
                'photo'             => 'logo.png',
                
                // Social media 
                'facebook'          => 'https://www.facebook.com',
                'twitter'           => 'https://www.twitter.com',
                'instagram'         => 'https://www.instagram.com',
                'linkedin'          => 'https://www.linkedin.com',
                'youtube'           => 'https://www.youtube.com',
            ]);	
        

       
    }
}
