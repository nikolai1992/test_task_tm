<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            "name" => "Announcing the first SHA-1 collision | Hacker News",
            "image" => "/img/hacker.jpg",
            "short_description" => "The visual description of the colliding files, at http://shattered.io/static/pdf_format.png, is not very helpful in understanding how they produced the PDFs, so I took apart the PDFs and worked it out.",
            "description" => 'The visual description of the colliding files, at&nbsp;<a href="http://shattered.io/static/pdf_format.png" target="_blank" rel="noopener" data-saferedirecturl="https://www.google.com/url?q=http://shattered.io/static/pdf_format.png&amp;source=gmail&amp;ust=1685447628614000&amp;usg=AOvVaw24U20QrGvDbbRW26ehRr7I">http://shattered.io/static/<wbr />pdf_format.png</a>, is not very helpful in understanding how they produced the PDFs, so I took apart the PDFs and worked it out. </br>
Basically, each PDF contains a single large (421,385-byte) JPG image, followed by a few PDF commands to display the JPG. The collision lives entirely in the JPG data - the PDF format is merely incidental here. Extracting out the two images shows two JPG files with different contents (but different SHA-1 hashes since the necessary prefix is missing). Each PDF consists of a common prefix (which contains the PDF header, JPG stream descriptor and some JPG headers), and a common suffix (containing image data and PDF display commands).',
        ];

        for ($i = 0; $i < 100; $i++) {
            Article::create($data);
        }
    }
}
