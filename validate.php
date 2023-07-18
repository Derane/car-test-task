<?php
function validateFormData($title, $desc, $engine, $fuel, $price, $owners, $ages)
{
    if (empty($title) || empty($desc) || empty($engine) || empty($fuel) || empty($price) || empty($owners) || empty($ages)) {
        return 'All fields are required';
    }
    if (!is_numeric($price)) {
        return 'Price must be a number';
    }

    foreach ($ages as $age) {
        if (!is_numeric($age)) {
            return "Owner's age must be a number";
        }
    }

    return null;
}