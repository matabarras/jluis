<?php
interface CrudInterface {
    function get();
    function update();
    function delete($id);
    function add($values);
}
?>