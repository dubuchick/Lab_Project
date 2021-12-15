<?php

namespace Database\Seeders;

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
        DB::table('books')->insert([
            [
                'title'=>'Tintin in Tibet',
                'genreid'=>'13',
                'author'=> 'Herge',
                'synopsis'=>'Tintin in Tibet is the twentieth volume of The Adventures of Tintin, 
                the comics series by Belgian cartoonist Hergé. It was serialised weekly from September 
                1958 to November 1959 in Tintin magazine and published as a book in 1960',
                'cover'=>'1639585352.jpg',
                'price'=>'90000'
            ],
            [
                'title'=>'Tintin in the Congo',
                'genreid'=>'13',
                'author'=> 'Herge',
                'synopsis'=>'Tintin in the Congo is the second volume of The Adventures of Tintin, 
                the comics series by Belgian cartoonist Hergé.',
                'cover'=>'1639585852.jpg',
                'price'=>'50000'
            ],
            [
                'title'=>'Tintin in America',
                'genreid'=>'13',
                'author'=> 'Herge',
                'synopsis'=>'Tintin in America is the third volume of The Adventures of Tintin, 
                the comics series by Belgian cartoonist Hergé.',
                'cover'=>'1639585940.jpg',
                'price'=>'76000'
            ],
            [
                'title'=>'Surfs up, Spongebob',
                'genreid'=>'13',
                'author'=> 'David Lewman',
                'synopsis'=>'SpongeBob SquarePants learns to hang ten in this rad surfing-themed 
                story that ties in with the primetime movie event airing in April 2009! SpongeBob 
                eagerly accepts Sandys invitation to go surfing at Goo Lagoon--until he realizes he doesnt 
                know how to surf! What will he do? Its Patrick to the rescue as he shows SpongeBob how 
                to ride the waves, right in their backyard. When he meets Sandy the next day, SpongeBob 
                nervously makes his way out into the water and tries to break his surfboard so he wouldnt have to surf.',
                'cover'=>'1639585998.jpg',
                'price'=>'150000'
            ],
            [
                'title'=>'The Alchemist',
                'genreid'=>'4',
                'author'=> 'Paulo Coelho',
                'synopsis'=>'The Alchemist is a novel by Brazilian author Paulo Coelho that was first published in 1988. 
                Originally written in Portuguese, it became a widely translated international bestseller.',
                'cover'=>'1639586241.jpg',
                'price'=>'200000'
            ],
            [
                'title'=>'The Tao of Pooh',
                'genreid'=>'4',
                'author'=> 'Benjamin Hoff',
                'synopsis'=>'The Tao of Pooh is a book written by Benjamin Hoff. The book is intended as an introduction 
                to the Eastern belief system of Taoism for Westerners. It allegorically employs the fictional characters 
                of A. A. Milnes Winnie-the-Pooh stories to explain the basic principles of philosophical Taoism.',
                'cover'=>'1639586337.jpg',
                'price'=>'80000'
            ],
            [
                'title'=>'The Subtle Art of Not Giving a F',
                'genreid'=>'4',
                'author'=> 'Mark Manson',
                'synopsis'=>'The Subtle Art of Not Giving a Fuck: A Counterintuitive Approach to Living a Good Life is the 
                second book by blogger and author Mark Manson. In it Manson argues that lifes struggles give it meaning, 
                and that the mindless positivity of typical self-help books is neither practical nor helpful.',
                'cover'=>'1639586403.jpg',
                'price'=>'125000'
            ],
            [
                'title'=>'Harry Potter and the Philosophers Stone',
                'genreid'=>'8',
                'author'=> 'J. K. Rowling',
                'synopsis'=>'Harry Potter and the Philosophers Stone is a fantasy novel written by British author J. K. Rowling.',
                'cover'=>'1639586479.jpg',
                'price'=>'30000'
            ],
            [
                'title'=>'Harry Potter and the Chamber of Secrets',
                'genreid'=>'8',
                'author'=> 'J. K. Rowling',
                'synopsis'=>'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. 
                Rowling and the second novel in the Harry Potter series.',
                'cover'=>'1639586583.jpg',
                'price'=>''
            ],
            [
                'title'=>'Kafka on the Shore',
                'genreid'=>'7',
                'author'=> 'Haruki Murakami',
                'synopsis'=>'Kafka on the Shore is a 2002 novel by Japanese author Haruki Murakami. Its 2005 English translation 
                was among "The 10 Best Books of 2005" from The New York Times and received the World Fantasy Award for 2006',
                'cover'=>'1639586665.jpg',
                'price'=>'450000'
            ]
        ]);
    }
}
