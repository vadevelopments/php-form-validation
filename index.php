<?php
function validateName($name) {
    // Remove leading and trailing whitespace
    $name = trim($name);

    // Check if the name is empty
    if (empty($name)) {
        return "Name cannot be empty.";
    }

    // Check if the name contains only letters and spaces
    if (!preg_match('/^[a-zA-Z ]+$/', $name)) {
        return "Name can only contain letters and spaces.";
    }

    // Check if the name exceeds a certain length (e.g., 50 characters)
    if (strlen($name) > 50) {
        return "Name cannot exceed 50 characters.";
    }

    // All validations passed, return null (indicating no errors)
    return null;
}

// Example input
$inputName = $_POST['name'];

// Validate the name
$error = validateName($inputName);

// Check if there's an error
if ($error) {
    // Handle the error
    echo "Error: " . $error;
} else {
    // Name is valid, proceed with further processing
    echo "Name is valid!";
}

?>