<?php
session_start();
require "../config.php";

if(isset($_POST['dba_submit'])){
    if(isset($_POST['dba_offer'])){
        $update_room = array(
            "room_type" => "dba",
            "offer_price" => $_POST['final_price'],
            "offer" => $_POST['offer'],
            "original_price" => $_POST['original_price'],
            "has_offer" => 1
        );
        try {
            $collection->updateOne(array("room_type" => "dba"), array('$set' => $update_room));
            $_SESSION['success'] = "Price updated successfully!";
            header("Location: dashboard.php");
        } catch (\Throwable $th) {
            $_SESSION['fail'] = "Something went wrong. Please try again.";
            header("Location: dashboard.php");
            // throw $th;
        }
    } 
    else {
            $update_room = array(
                "room_type" => "dba",
                "offer_price" => $_POST['final_price'],
                "has_offer" => 0
            );
            try {
                $collection->updateOne(array("room_type" => "dba"), array('$set' => $update_room));
                $_SESSION['success'] = "Price updated successfully!";
                header("Location: dashboard.php");
            } catch (\Throwable $th) {
                $_SESSION['fail'] = "Something went wrong. Please try again.";
                header("Location: dashboard.php");

                // throw $th;
            }
    }
}


if (isset($_POST['sba_submit'])) {
    if (isset($_POST['sba_offer'])) {
        $update_room = array(
            "room_type" => "sba",
            "offer_price" => $_POST['final_price'],
            "offer" => $_POST['offer'],
            "original_price" => $_POST['original_price'],
            "has_offer" => 1
        );
        try {
            $collection->updateOne(array("room_type" => "sba"), array('$set' => $update_room));
            $_SESSION['success'] = "Price updated successfully!";
            header("Location: dashboard.php");
        } catch (\Throwable $th) {
            // throw $th;
            $_SESSION['fail'] = "Something went wrong. Please try again.";
            header("Location: dashboard.php");

        }
    } else {
        $update_room = array(
            "room_type" => "sba",
            "offer_price" => $_POST['final_price'],
            "has_offer" => 0
        );
        try {
            $collection->updateOne(array("room_type" => "sba"), array('$set' => $update_room));
            $_SESSION['success'] = "Price updated successfully!";
            header("Location: dashboard.php");
        } catch (\Throwable $th) {
            // throw $th;
            $_SESSION['fail'] = "Something went wrong. Please try again.";
            header("Location: dashboard.php");

        }
    }
}


if (isset($_POST['dbna_submit'])) {
    if (isset($_POST['dbna_offer'])) {
        $update_room = array(
            "room_type" => "dbna",
            "offer_price" => $_POST['final_price'],
            "offer" => $_POST['offer'],
            "original_price" => $_POST['original_price'],
            "has_offer" => 1
        );
        try {
            $collection->updateOne(array("room_type" => "dbna"), array('$set' => $update_room));
            $_SESSION['success'] = "Price updated successfully!";
            header("Location: dashboard.php");
        } catch (\Throwable $th) {
            // throw $th;
            $_SESSION['fail'] = "Something went wrong. Please try again.";
            header("Location: dashboard.php");

        }
    } else {
        $update_room = array(
            "room_type" => "dbna",
            "offer_price" => $_POST['final_price'],
            "has_offer" => 0
        );
        try {
            $collection->updateOne(array("room_type" => "dbna"), array('$set' => $update_room));
            $_SESSION['success'] = "Price updated successfully!";
            header("Location: dashboard.php");
        } catch (\Throwable $th) {
            // throw $th;
            $_SESSION['fail'] = "Something went wrong. Please try again.";
            header("Location: dashboard.php");

        }
    }
}


if (isset($_POST['sbna_submit'])) {
    if (isset($_POST['sbna_offer'])) {
        $update_room = array(
            "room_type" => "sbna",
            "offer_price" => $_POST['final_price'],
            "offer" => $_POST['offer'],
            "original_price" => $_POST['original_price'],
            "has_offer" => 1
        );
        try {
            $collection->updateOne(array("room_type" => "sbna"), array('$set' => $update_room));
            $_SESSION['success'] = "Price updated successfully!";
            header("Location: dashboard.php");
        } catch (\Throwable $th) {
            // throw $th;
            $_SESSION['fail'] = "Something went wrong. Please try again.";
            header("Location: dashboard.php");

        }
    } else {
        $update_room = array(
            "room_type" => "sbna",
            "offer_price" => $_POST['final_price'],
            "has_offer" => 0
        );
        try {
            $collection->updateOne(array("room_type" => "sbna"), array('$set' => $update_room));
            $_SESSION['success'] = "Price updated successfully!";
            header("Location: dashboard.php");
        } catch (\Throwable $th) {
            // throw $th;
            $_SESSION['fail'] = "Something went wrong. Please try again.";
            header("Location: dashboard.php");

        }
    }
}