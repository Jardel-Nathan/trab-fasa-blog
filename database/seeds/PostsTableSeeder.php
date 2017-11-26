<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      factory(blog\Posts::class, 1)
          ->create(
              [
                  'titulo'=>'ipsum, maxime pretium luctus magna? Lorem phasellus parturient cupiditat',
                  'conteudo'=>'<p>Eum suscipit, augue donec animi adipisci ac aliquid voluptates feugiat autem orci? Mi lobortis mollit platea optio quae! Praesent morbi sagittis, sed ipsam, aliqua, fusce duis? Delectus feugiat cillum error magni reiciendis vero. Eum culpa neque exercitation varius? Torquent accumsan senectus modi, deleniti facere dis. Porro harum nullam corrupti, quas, ullamcorper curabitur congue class fringilla quasi nec enim do euismod, omnis consequuntur, accusamus. Turpis tristique corrupti, amet placerat, tenetur minus platea consequatur, ab sed, molestias dignissim? Sociis voluptate ultricies repellat! Nibh laudantium eveniet porta consequat adipisci pariatur! Egestas! Illo mollitia. Fugit ipsa quisquam. Earum, ipsum dignissimos distinctio mattis minim platea.</p>',
                  'autor'=>'Jardel Nathan'


              ]
          );


        //factory(blog\Posts::class, 20)->create();

        //factory(blog\Tags::class, 20)->create();
    }
}
