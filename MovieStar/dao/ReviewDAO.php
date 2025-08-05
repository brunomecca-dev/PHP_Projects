<?php

require_once("models/Review.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");


class ReviewDao implements ReviewDAOInterface
{
    private $conn;
    private $url;
    private $message;

    public function __construct(PDO $conn, $url)
    {
        $this->conn = $conn;
        $this->url = $url;
        $this->message = new Message($url);
    }

    //------------------------------------------------------------------------------------//
    public function buildReview($data)
    {
        $revireObject = new Review();
        $revireObject->id = $data["id"];
        $revireObject->rating = $data["rating"];
        $revireObject->review = $data["review"];
        $revireObject->users_id = $data["users_id"];
        $revireObject->movies_id = $data["movies_id"];
        return $revireObject;
    }
    //------------------------------------------------------------------------------------//

    public function create(Review $review) {}

    //------------------------------------------------------------------------------------//
    public function getMoviesReview($id) {}

    //------------------------------------------------------------------------------------//
    public function hasAlreadyReviewed($id, $userId) {}

    //------------------------------------------------------------------------------------//
    public function getRatings($id) {}
}
