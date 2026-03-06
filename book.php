<?php
require 'Database.php';
require 'Booking.php';
require 'Seat.php';

$db = (new Database())->connect();

$booking = new Booking($db);
$seatObj = new Seat($db);

$selectedSeats = $_POST['selected_seats'] ?? [];

if(count($selectedSeats) == 0){
    echo json_encode(["status"=>"error","msg"=>"No seats selected"]);
    exit;
}

$bookingId = "BB".rand(100000,999999);
$totalFare = count($selectedSeats) * 850;

$data = [
    $bookingId,
    $_POST['passenger'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['from_city'],
    $_POST['to_city'],
    $_POST['date'],
    $_POST['time'],
    $_POST['bus_type'],
    implode(',', $selectedSeats),
    $totalFare
];

$booking->save($data);
$seatObj->lockSeats($_POST['date'], $_POST['time'], $selectedSeats);

echo json_encode([
    "status"=>"success",
    "booking_id"=>$bookingId
]);
