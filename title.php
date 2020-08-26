<?php
function title()
{
    $page = basename($_SERVER["REQUEST_URI"]);
    $pagetitle = str_replace(".php", "", "$page");
    switch ($pagetitle) {
        case "edit":
            echo "EDIT";
            break;
        case "show":
            echo "INFORMATION";
            break;
        case "panel":
            echo "MANAGMENT";
            break;
        case "main":
            echo "HOME";
            break;
        case "adminadd":
            echo "ADD ADMIN";
            break;
        case "adminedit":
            echo "EDIT ADMIN";
            break;
        case "login":
            echo "ENTER";
            break;
        case "logup":
            echo "REGISTER";
            break;
        case "memberedit":
            echo "MEMBER EDIT";
            break;
        case "members":
            echo "MEMBER LIST";
            break;
        case "menu-time-edit":
            echo "MENU TIME EDIT";
            break;
        case "section1-edit":
            echo "SECTION1 EDIT";
            break;
        case "section2-edit":
            echo "SECTION2 EDIT";
            break;
        default:
            echo "AUTO";
            break;
    }
    return;
}
echo title();
