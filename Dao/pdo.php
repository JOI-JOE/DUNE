<?php

function pdo_get_connection()
{
    $servername = "mysql:host=localhost;dbname=project_haundph45649;charset=utf8";
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
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        return $row ? $row[0] : null;
        // return $stmt->fetchColumn() ?: null;
    } catch (PDOException $e) {
        throw new Exception("Failed to query value: " . $sql . " - Error: " . $e->getMessage());
    } finally {
        $conn = null; // Close the connection
    }
}


function pdo_check_data($sql, $params = [])
{
    try {
        return !pdo_query_value($sql, $params);
    } catch (PDOException $e) {
        throw new Exception("Failed to check data: " . $sql . " - Error: " . $e->getMessage());
    }
}
