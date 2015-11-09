<?php

use App\NewsPost;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NewsPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsPost::create([
            'title' => 'My first news',
            'body' => 'Lorem ipsum dolor sit amet, quo in nonumy laboramus interesset. Vim reprimique necessitatibus ea, delicata salutandi no his. Eum an corpora repudiandae, libris deserunt eu ius, liber impetus erroribus nam id. Ad quaestio efficiendi omittantur mei. Ea eum nullam omittam. Mei ei simul appareat intellegebat.

                       Ei usu ullum vitae pertinax, vide sensibus sea in. Vis no pericula efficiantur, vim te atqui postea gloriatur. An quidam persequeris mea. An mollis delectus mei, habemus consetetur ex ius. Nam solet scribentur id, eum ea ubique platonem accommodare, ne mel nibh verear.',
            'publish_at' => Carbon::create()->yesterday(),

        ]);

        NewsPost::create([
            'title' => 'My seconf news',
            'body' => 'Lorem ipsum dolor sit amet, quo in nonumy laboramus interesset. Vim reprimique necessitatibus ea, delicata salutandi no his. Eum an corpora repudiandae, libris deserunt eu ius, liber impetus erroribus nam id. Ad quaestio efficiendi omittantur mei. Ea eum nullam omittam. Mei ei simul appareat intellegebat.

                       Ei usu ullum vitae pertinax, vide sensibus sea in. Vis no pericula efficiantur, vim te atqui postea gloriatur. An quidam persequeris mea. An mollis delectus mei, habemus consetetur ex ius. Nam solet scribentur id, eum ea ubique platonem accommodare, ne mel nibh verear.',
            'publish_at' => Carbon::parse()->format('Y-m-d'),

        ]);

        NewsPost::create([
            'title' => 'My third news',
            'body' => 'Lorem ipsum dolor sit amet, quo in nonumy laboramus interesset. Vim reprimique necessitatibus ea, delicata salutandi no his. Eum an corpora repudiandae, libris deserunt eu ius, liber impetus erroribus nam id. Ad quaestio efficiendi omittantur mei. Ea eum nullam omittam. Mei ei simul appareat intellegebat.

                       Ei usu ullum vitae pertinax, vide sensibus sea in. Vis no pericula efficiantur, vim te atqui postea gloriatur. An quidam persequeris mea. An mollis delectus mei, habemus consetetur ex ius. Nam solet scribentur id, eum ea ubique platonem accommodare, ne mel nibh verear.',
            'publish_at' => Carbon::create()->tomorrow(),

        ]);

    }
}
