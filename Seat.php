<?php
class Seat {
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function lockSeats($date,$time,$seats){
        $sql = "INSERT INTO booked_seats (travel_date, travel_time, seat_no)
                VALUES (?,?,?)";
        $stmt = $this->db->prepare($sql);

        foreach($seats as $seat){
            $stmt->execute([$date,$time,$seat]);
        }
    }
}
