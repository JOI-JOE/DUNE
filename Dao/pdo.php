<?php

function pdo_get_connection()
{
    $servername = "mysql:host=localhost;dbname=duan;charset=utf8";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO($servername, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        throw new Exception("Failed to connect to database: " . $e->getMessage());
    }
}

function pdo_execute($sql, $params = [])
{
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
    } catch (PDOException $e) {
        throw new Exception("Failed to execute SQL: " . $sql . " - Error: " . $e->getMessage());
    } finally {
        $conn = null; // Close the connection
    }
}

function pdo_query($sql, $params = [])
{
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    } catch (PDOException $e) {
        throw new Exception("Failed to query SQL: " . $sql . " - Error: " . $e->getMessage());
    } finally {
        $conn = null; // Close the connection
    }
}

function pdo_query_one($sql, $params = [])
{
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw new Exception("Failed to query one row: " . $sql . " - Error: " . $e->getMessage());
    } finally {
        $conn = null; // Close the connection
    }
}

function pdo_query_value($sql, $params = [])
{
    try {
        $conn = pdo_get_connection(); // Assuming pdo_get_connection() establishes a connection
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        // Use fetchColumn() to directly retrieve the first column value
        $value = $stmt->fetchColumn();
        return $value !== false ? $value : null; // Return value if successful, null otherwise

    } catch (PDOException $e) {
        throw new Exception("Failed to query value: " . $sql . " - Error: " . $e->getMessage());
    } finally {
        $conn = null; // Close the connection
    }
}

function pdo_check_data($sql, $params = [])
{
    // Use prepared statement to prevent SQL injection

    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        $exists = $stmt->fetchColumn() > 0;
        return $exists;
    } catch (PDOException $e) {
        throw new Exception("Failed to check product in cart: " . $sql . " - Error: " . $e->getMessage());
    } finally {
        $conn = null; // Close the connection
    }
}
