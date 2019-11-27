<?php

namespace form;

class Forms
{
    public function deleteForm()
    {
    print "
    <form method='post'>
    <input type='text' placeholder='user name' name='user_name'>
    <input type='submit' value='Delete' name='delete'>
    </form>
    ";
}
public function insertUserForm(){
        print "
    <form method='post'>
    <input type='text' placeholder='name' name='name'>
    <input type='text' placeholder='last name' name='lastname'>
    <input type='submit' value='Insert' name='insert'>
    </form>
    ";
}
}

?>