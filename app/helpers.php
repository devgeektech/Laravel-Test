<?php
use App\Models\UserRole;

function getRoles(){
    $roles = UserRole::all();
    if( count($roles) > 0) {
        return $roles;
    }
    return null;
}

?>