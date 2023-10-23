<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
// Database Connection
function establishDatabaseConnection()
{
    try {
        return new PDO('mysql:host=localhost:3306;dbname=pos_gutib', 'root', '');
    } catch (PDOException $exception) {
        echo "Connection Error: ", $exception->getMessage();
    }
}

// Function to display SweetAlert
function displaySweetAlert($icon, $title, $text, $redirect = 'addMenu.php')
{
    echo "<script>
        Swal.fire({
            icon: '$icon',
            title: '$title',
            text: '$text',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '$redirect'; // Redirect to the main page
            }
        });
    </script>";
}

// Create
function addMenu($menuName, $menuDescription)
{
    $db = establishDatabaseConnection();
    $sql = "INSERT INTO ref_menu(menu_name, menu_desc) VALUES(?, ?)";
    $statement = $db->prepare($sql);

    if ($statement->execute(array($menuName, $menuDescription)) {
        displaySweetAlert('success', 'Success', 'Menu item added!');
    } else {
        displaySweetAlert('error', 'Error', 'Failed to add item!');
    }

    $db = null;
}

// Read
function viewMenuData()
{
    $db = establishDatabaseConnection();
    $sql = "SELECT * FROM ref_menu ORDER BY id ASC";
    $statement = $db->prepare($sql);
    $statement->execute();
    $menuItems = $statement->fetchAll(PDO::FETCH_ASSOC);
    $db = null;
    return $menuItems;
}

function viewMenuDataJSON()
{
    $menuItems = viewMenuData();
    $jsonResult = json_encode($menuItems);
    echo $jsonResult;
    return $menuItems;
}

// Update
function updateMenuData($menuName, $menuDescription, $id)
{
    $db = establishDatabaseConnection();
    $sql = "UPDATE ref_menu SET menu_name=?, menu_desc=? WHERE id=?";
    $statement = $db->prepare($sql);

    if ($statement->execute([$menuName, $menuDescription, $id])) {
        displaySweetAlert('success', 'Success', 'Menu item updated!');
    } else {
        displaySweetAlert('error', 'Error', 'Failed to update item!');
    }

    $db = null;
}

// Delete
function deleteMenuData($id)
{
    $db = establishDatabaseConnection();
    $sql = "DELETE FROM ref_menu WHERE id=?";
    $statement = $db->prepare($sql);

    if ($statement->execute([$id])) {
        displaySweetAlert('success', 'Success', 'Menu item deleted!');
    } else {
        displaySweetAlert('error', 'Error', 'Failed to delete item!');
    }

    $db = null;
}

// Search
function searchMenuData($id)
{
    $db = establishDatabaseConnection();
    $sql = "SELECT * FROM ref_menu WHERE id=?";
    $statement = $db->prepare($sql);
    $statement->execute(array($id));
    $menuItem = $statement->fetch(PDO::FETCH_ASSOC);
    $db = null;
    return $menuItem ?: [];
}
?>
</body>
</html>