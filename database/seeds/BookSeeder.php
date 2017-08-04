<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample Penulis
        $author1 = Author::create(['name'=>'Mohammad Fauzil Adhmin']);
        $author2 = Author::create(['name'=>'Salim A. Fallah']);
        $author3 = Author::create(['name'=>'Aam Amiruddin']);

        // Sample Buku
        $book1 = Book::create(['title'=>'kupinang kau dengan hamdalah', 'amount'=>3, 'author_id'=>$author1->id]);
        $book2 =  Book::create(['title'=>'Jalan Cinta Para Pejuang', 'amount'=>2, 'author_id'=>$author2->id]);
        $book3 =  Book::create(['title'=>'Membingkai surga dalam rumah tangga', 'amount'=>4, 'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Cinta &  seks rumah tangga muslim', 'amount'=>3, 'author_id'=>$author3->id]);
    }
}
