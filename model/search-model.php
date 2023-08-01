<?php

// Search Model

// Get Results of Search
function getQuerySearchResults($querySearch)
{
    $db = phpmotorsConnect();
    $sql = 'SELECT * FROM inventory WHERE invYear LIKE :querySearch OR invMake LIKE :querySearch OR invModel LIKE :querySearch OR invDescription LIKE :querySearch OR invColor LIKE :querySearch';
    $stmt = $db->prepare($sql);
    $querySearch = '%' . $querySearch . '%';
    $stmt->bindValue(':querySearch', $querySearch, PDO::PARAM_STR);
    $stmt->execute();
    $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $searchResults;
}
/* 
// Create Index
function createIndex()
{
    $db = phpmotorsConnect();
    $index1Sql = 'CREATE INDEX IF NOT EXISTS inv_year_idx ON inventory (invYear)';
    $index2Sql = 'CREATE INDEX IF NOT EXISTS inv_make_idx ON inventory (invMake)';
    $index3Sql = 'CREATE INDEX IF NOT EXISTS inv_model_idx ON inventory (invModel)';
    $index4Sql = 'CREATE INDEX IF NOT EXISTS inv_description_idx ON inventory (invDescription)';
    $index5Sql = 'CREATE INDEX IF NOT EXISTS inv_color_idx ON inventory (invColor)';
    $db->exec($index1Sql);
    $db->exec($index2Sql);
    $db->exec($index3Sql);
    $db->exec($index4Sql);
    $db->exec($index5Sql);
}  */

// Get Result by search for paginate
function buildPaginate($search, $numberPage, $limit)
{
    $db = phpmotorsConnect();
    $offset = ($numberPage - 1) * $limit;
    $querySearch = '%' . $search . '%';
    $sql = 'SELECT * FROM inventory WHERE invYear LIKE :querySearch OR invMake LIKE :querySearch OR invModel LIKE :querySearch OR invDescription LIKE :querySearch OR invColor LIKE :querySearch LIMIT :offset, :displayLimit';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':querySearch', $querySearch, PDO::PARAM_STR);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->bindValue(':displayLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $results;
}
