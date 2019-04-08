<?php

Route::get('about', function() {
    About::CreateView('about');
    // echo "about route";
});

Route::get2('/about2', 'About@test');

?>