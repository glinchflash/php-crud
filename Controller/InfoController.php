<?php

declare(strict_types=1);

class InfoController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        if (isset($GET['student'])) {
            $studentID = $GET['student'];
            echo $studentID;
            require 'View/info.php';
        } elseif (isset($GET['group'])) {
            require 'View/groupinfopage.php';
        }
    }
}
