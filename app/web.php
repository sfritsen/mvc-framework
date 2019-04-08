<?php

Route::get('about', function() {
    About::CreateView('about');
    // echo "about route";
});

?>