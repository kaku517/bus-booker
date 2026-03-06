<?php
class Booking {
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function save($data){
        $sql = "INSERT INTO bookings
        (booking_id, passenger, email, phone, from_city, to_city,
        travel_date, travel_time, bus_type, seats, total_fare)
        VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute($data);
    }
}
