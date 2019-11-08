<?php

use App\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = ['https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVeCaI9OnzB4_nJJB2z6K4Jmm4qISkVbFYKUdpkgs1h6XRQ7mY' ,'https://images.pexels.com/photos/356378/pexels-photo-356378.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'https://images.pexels.com/photos/356378/pexels-photo-356378.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'https://previews.123rf.com/images/leungchopan/leungchopan1110/leungchopan111000143/10765853-white-pomeranian-dog.jpg', 'https://images.pexels.com/photos/20787/pexels-photo.jpg?cs=srgb&dl=adorable-animal-cat-20787.jpg&fm=jpg', 'https://d17fnq9dkz9hgj.cloudfront.net/uploads/2012/11/101438745-cat-conjunctivitis-causes.jpg', 'https://wallpaperose.com/wp-content/uploads/2013/07/Kitten-Laughing-Pictures.jpg', 'https://www.rd.com/wp-content/uploads/2017/03/01-Sorry-But-Your-Cat-Might-Not-Be-Purring-Because-It%E2%80%99s-Happy-to-See-You_553563301-Sidarta-1024x683.jpg', 'https://cdn.pixabay.com/photo/2016/03/28/10/05/kitten-1285341__340.jpg', 'https://www.rover.com/blog/wp-content/uploads/2019/03/white-cat-4025572_1920-960x540.jpg', 'https://pbs.twimg.com/profile_images/378800000532546226/dbe5f0727b69487016ffd67a6689e75a_400x400.jpeg', 'https://catcaretips.net/wp-content/uploads/2019/03/hosico.jpg', 'https://cmeimg-a.akamaihd.net/640/clsd/getty/c64f76dc20c246ca88ee180fe4b4b781', 'https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313__340.jpg', 'https://www.chicagoparent.com/downloads/21168/download/adorable-puppy.jpg?cb=ceb03b5cdefa3c132db18811980d0ee2&w=640', 'http://wallperio.com/data/out/377/puppy-pic_617570327.jpg', 'https://www.guidedogsvictoria.com.au/wp-content/uploads/2016/07/guide-dogs-mobility.jpg', 'https://upload.wikimedia.org/wikipedia/commons/2/2b/WelshCorgi.jpeg', 'https://a-z-animals.com/media/animals/images/470x370/dog5.jpg', 'https://media.mnn.com/assets/images/2017/01/puppy-held-in-womans-hands.jpg.653x0_q80_crop-smart.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSe90NBe2yPOgRsX9etQya23tinxc-lNdsncVO7pKUrWKgGMAx-', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCP_RLcZ9pNoFXKZkypc61dF089l_hjitPjT-RJ2sebI3Ahifd'];

        foreach($images as $image_url) {
            $image = new Image();
            $image->image = $image_url;
            $image->pet_id = rand(1, 10);
            $image->save();
        }
    }
}
