<?php

/**
 * routes.php
 * 
 * Hier werden die Controller einzelnen Routes, Ereignisen oder Spezialfällen zugewiesen.
 * Da manchmal mehrere Bedignungen erfüllt sein können (zb. erfüllt is_page('foo') auch
 * gleichzeitig is_page()), müssen die Routes so sortiert werden, dass die allgemeinen
 * Anweisungen zum Schluss kommen, weil die for-Schleife beim ersten "true" beendet wird.
 * 
 * @since 1.0
 * 
 */

return [
    "Error" => is_404(),                      // Seite existiert nicht

    "Search" => !empty($_GET['ctx_search']),

    "Event" => is_singular('event'),        // Seite ist ein einzelnes Event

    "Events" => is_page(get_option("dbem_cp_events_slug")),          // Seite beinhaltet eine Eventliste

    "Post" => is_single(),

    "Categories" => is_category()  ,       // Kategorie oder Tag

    //"Freizeiten" => in_category('freizeiten') && is_singular('event'),

    //"Frontpage" => is_front_page(),                    // Es handelt sich um eine normale Seite

    "Page" => is_page(),                    // Es handelt sich um eine normale Seite

    "Page" => true                          // Fallback
];