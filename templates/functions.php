<?php

function get_thumbnail_html($id, $item) {
  $link_title = strtolower(str_replace(" ", "-", $item['url_title']));
  $output =  "<div class='image-wrapper float-center overlay-fade-in'>"
        . "<img src='" 
        . $item["img"] 
        . "' alt='" 
        . $item["title"] . " cover image." . "'/> "
        . "<div class='image-overlay-content '>"
        . "<a href='/books/"
        . $link_title
        . "' class='button' id='book'>"
        . $item["title"]
        . "</a>"
        . "<p>" 
        . $item["artist"]
        . "</p>"
        . "<p>" 
        . $item["price"]
        . "</p>"
        . "</div></div>"
        . "<div class='under-pic-content float-center'>"
        . "<a href='/books/"
        . $link_title
        . "'>"
        . $item["title"]
        . "</a>"
        . "<p>" 
        . $item["artist"]
        . "</p>"
        . "<p>" 
        . $item["price"]
        . "</p>"
        ."</div></div>";
  return $output;
}

function get_stockists_html($id, $shop) {
    $output = "<div class='shop'><h4>"
        . $shop['name']
        . "</h4><p>"
        . $shop['address']
        . "</p></div>";

    return $output;
}

