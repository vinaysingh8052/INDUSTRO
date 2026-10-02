<?php
/**
 * Database Connection File - INDUSTRO
 * Compatible with Localhost (XAMPP) & Live Hosting (InfinityFree, cPanel, etc.)
 */

// ==============================================================================
// 1. INFINITYFREE / LIVE HOSTING CREDENTIALS
//    InfinityFree Control Panel (vPanel) -> "MySQL Databases" se ye details daalein:
// ==============================================================================
$live_host = "sqlXXX.infinityfree.com"; // MySQL Host Name (e.g. sql105.infinityfree.com / sql201.epizy.com)
$live_user = "epiz_XXXXXXXX";           // MySQL User Name (e.g. epiz_12345678 / if0_12345678)
$live_pass = "YOUR_ACCOUNT_PASSWORD";   // InfinityFree vPanel / Account Password
$live_name = "epiz_XXXXXXXX_industro";  // MySQL Database Name (e.g. epiz_12345678_industro)

// ==============================================================================
// 2. LOCALHOST (XAMPP) CREDENTIALS
// ==============================================================================
$local_host = "localhost";
$local_user = "root";
$local_pass = "";
$local_name = "industro__industry & factory"; // Local database name

// ==============================================================================
// 3. AUTO-DETECT ENVIRONMENT (Localhost vs InfinityFree)
// ==============================================================================
$current_host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? 'localhost';
$is_local = (
    $current_host === 'localhost' ||
    $current_host === '127.0.0.1' ||
    strpos($current_host, 'localhost:') === 0 ||
    strpos($current_host, '127.0.0.1:') === 0
);

if ($is_local) {
    $db_host = $local_host;
    $db_user = $local_user;
    $db_pass = $local_pass;
    $db_name = $local_name;
} else {
    $db_host = $live_host;
    $db_user = $live_user;
    $db_pass = $live_pass;
    $db_name = $live_name;
}

// Suppress mysqli fatal exceptions for graceful error handling
mysqli_report(MYSQLI_REPORT_OFF);

$conn = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Fallback for localhost if database name differs
if (!$conn && $is_local && $db_name === "industro__industry & factory") {
    $fallback_conn = @mysqli_connect($db_host, $db_user, $db_pass, "industro");
    if ($fallback_conn) {
        $conn = $fallback_conn;
    }
}

// Auto-create table if database is connected
if ($conn) {
    @mysqli_set_charset($conn, "utf8mb4");

    $create_table_sql = "CREATE TABLE IF NOT EXISTS `contact_requests` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(100) DEFAULT NULL,
        `email` varchar(100) DEFAULT NULL,
        `phone` varchar(20) DEFAULT NULL,
        `service` varchar(100) DEFAULT NULL,
        `message` text DEFAULT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

    @mysqli_query($conn, $create_table_sql);
}
?>