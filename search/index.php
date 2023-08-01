<?php

// This is a Search Controller

// Create Session
session_start();

// Get the database connection file

require_once '../library/connections.php';

// Get the PHP Motors model for use as needed

require_once '../model/main-model.php';

// Get the vehicles model

require_once '../model/vehicles-model.php';

// Get the functions 

require_once '../library/functions.php';

// Get the search model

require_once '../model/search-model.php';

// Get the array of classifications from DB using model

$classifications = getClassifications();

// Build a navigation bar using the $classifications array

$navList = createNavbar($classifications);

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

if ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}

switch ($action) {
    case 'search':
        // This allows me to use a form with method="post" as well as pull the query from the pagination links
        $search = trim(filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING)) ?: trim(filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING));
        if (empty($search)) {
            $message = '<p class="notice">You must provide a search string.</p>';
            include '../view/search.php';
            exit;
        }
    
        // page is always pulled from the pagination links, so no need to look at the INPUT_POST
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);
        if (empty($page)) {
            $page = 1;
        }

        $displayLimit = 10; 
    
        $allResults = getQuerySearchResults($search);

        $lengthResults = count($allResults);
    
        if ($lengthResults < 1) {
            $searchDisplay = "<h3 class='notice'>Sorry, no results were found to match  $search </h3>";
        } elseif ($lengthResults > $displayLimit) {
            $totalPages = ceil($lengthResults / $displayLimit);
            $paginatedResults = buildPaginate($search, $page, $displayLimit);
            $paginationBar = diplayPaginationBar($totalPages, $page, $search);
            $searchDisplay = displaySearchResults($paginatedResults);
        } else {
            $searchDisplay = displaySearchResults($allResults);
        }
    
        include '../view/search.php';
        break;
    default:
        include '../view/search.php';
}
