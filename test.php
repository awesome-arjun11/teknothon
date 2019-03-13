<?php
/**
 * Created by PhpStorm.
 * User: Arjun Singh
 * Date: 15-02-2019
 * Time: 21:47
 */
$sponsors = json_decode(file_get_contents("sponsors.json"),true);
if(is_array($sponsors)){
    foreach ($sponsors as $name => $data) {
       echo"<div class='swiper-slide''>
                            <div class='next-event-content'>
                                <figure class='featured-image'>
                                    <img src='images/sponsors/". $data['image'] ."' alt=''>
                                    <a href='" . $data['link'] . "' class='entry-content flex flex-column justify-content-center align-items-center'>
                                        <h3>$name</h3>
                                        <p></p>
                                    </a>
                                </figure>
                            </div>
                        </div>";
    }
}
