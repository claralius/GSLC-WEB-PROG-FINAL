<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ACTION & ADVENTURE GENRE
        DB::table('books')->insert([
            "id"=> 1,
            "category_id"=> 1,
            "title"=>  "No Plan B: A Jack Reacher Novel",
            "author"=> "Lee Child",
            "year"=> 2022,

            "synopsis"=>"In Gerrardsville, Colorado, a woman dies under the wheels of a moving bus. The death is ruled a suicide. But Jack Reacher saw what really happened: A man in a gray hoodie and jeans, moving stealthily, pushed the victim to her demise—before swiftly grabbing the dead woman’s purse and strolling away.",

            "image"=> "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS2-mNyzn9HTvwRhkBzOanu5Ye39WwARSOJW9ARqGXP7G6UptY8"
        ]);

        DB::table('books')->insert([
            "id"=> 2,
            "category_id"=> 1,
            "title"=>  "Long Shadows",
            "author"=> "David Baldacci",
            "year"=> 2022,

            "synopsis"=>"Long Shadows is a 2022 American crime thriller written by David Baldacci and published by the Grand Central Publishing. It is the author's 51st crime book and 7th in the Memory Man/Amos Decker series which features an eponymous detective as the central character.",

            "image"=> "https://ik.imagekit.io/panmac/tr:di-placeholder_portrait_aMjPtD9YZ.jpg,tr:w-350,f-jpg,pr-true/edition/9781529061895.jpg"
        ]);

        DB::table('books')->insert([
            "id"=> 3,
            "category_id"=> 1,
            "title"=>  "Desert Star",
            "author"=> "Michael Connelly",
            "year"=> 2022,

            "synopsis"=>"A year has passed since LAPD detective Renée Ballard quit the force in the face of misogyny, demoralization, and endless red tape. But after the chief of police himself tells her she can write her own ticket within the department, Ballard takes back her badge, leaving “the Late Show” to rebuild and lead the cold case unit at the elite Robbery-Homicide Division.",

            "image"=> "https://m.media-amazon.com/images/I/41w7ZfbQppL.jpg"
        ]);

        //BIOGRAPHY
        DB::table('books')->insert([
            "id"=> 4,
            "category_id"=> 2,
            "title"=>  "When Breath Becomes Air",
            "author"=> "Paul Kalanithi",
            "year"=> 2016,

            "synopsis"=>"When Breath Becomes Air is a non-fiction autobiographical book written by American neurosurgeon Paul Kalanithi. It is a memoir about his life and illness, battling stage IV metastatic lung cancer.",

            "image"=> "https://books.google.co.id/books/publisher/content?id=mtGpCgAAQBAJ&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U07GvRotygi2xp0MYNHmhdIExFoYA&w=1280"
        ]);

        DB::table('books')->insert([
            "id"=> 5,
            "category_id"=> 2,
            "title"=>  "Spare",
            "author"=> "Prince Harry, Duke of Sussex",
            "year"=> 2023,

            "synopsis"=>"It was one of the most searing images of the twentieth century: two young boys, two princes, walking behind their mother's coffin as the world watched in sorrow - and horror. As Diana, Princess of Wales, was laid to rest, billions wondered what the princes must be thinking and feeling - and how their lives would play out from that point on.",

            "image"=> "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1666887085l/63021671.jpg"
        ]);

        DB::table('books')->insert([
            "id"=> 6,
            "category_id"=> 2,
            "title"=>  "Tough: My Journey to True Power",
            "author"=> "Terry Crews",
            "year"=> 2022,

            "synopsis"=>"Terry Crews spent decades cultivating his bodybuilder physique and bravado. On the outside, he seemed invincible: he escaped his abusive father, went pro in the NFL, and broke into the glamorous world of Hollywood. But his fixation with appearing outwardly tough eventually turned into an exhausting performance in which repressing his emotions let them get the better of him—leading him into addiction and threatening the most important relationships in his life. ",

            "image"=> "https://m.media-amazon.com/images/I/41oeS0xrLaL._AC_SY780_.jpg"
        ]);

        //FICTION
        DB::table('books')->insert([
            "id"=> 7,
            "category_id"=> 3,
            "title"=>  "Fairy Tale",
            "author"=> "Stephen King",
            "year"=> 2022,

            "synopsis"=>"Fairy Tale is a dark fantasy novel by American author Stephen King, published on September 6, 2022 by Scribner. The novel follows Charlie Reade, a 17-year-old who inherits keys to a hidden, otherworldly realm, and finds himself leading the battle between forces of good and evil.",

            "image"=> "https://m.media-amazon.com/images/I/612BYerla-L.jpg"
        ]);

        DB::table('books')->insert([
            "id"=> 8,
            "category_id"=> 3,
            "title"=>  "The Great Gatsby",
            "author"=> "F. Scott Fitzgerald",
            "year"=> 1925,

            "synopsis"=>"The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway's interactions with mysterious millionaire Jay Gatsby and Gatsby's obsession to reunite with his former lover, Daisy Buchanan.",

            "image"=> "https://upload.wikimedia.org/wikipedia/commons/7/7a/The_Great_Gatsby_Cover_1925_Retouched.jpg"
        ]);

        DB::table('books')->insert([
            "id"=> 9,
            "category_id"=> 3,
            "title"=>  "To Paradise",
            "author"=> "Hanya Yanagihara",
            "year"=> 2022,

            "synopsis"=>"To Paradise is a 2022 novel by American novelist Hanya Yanagihara. The book, Yanagihara's third, takes place in an alternate version of New York City, and has three sections, respectively set in 1893, 1993, and 2093. Though a bestseller, the novel received mixed reviews from critics.",

            "image"=> "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1628100349l/57739876.jpg"
        ]);


    }
}
