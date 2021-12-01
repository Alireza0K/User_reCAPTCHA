<?php
wp_enqueue_script("bootstrap_bundle");
wp_enqueue_script("bootstrap_min");
wp_enqueue_style("bootstrap_min_css");
include "navbar.php";
?>
<div class=" container">
    <h2 dir="ltr" class=" display-4 ">Hello <button class="btn btn-success btn-lg">user</button></h2>
    <br>
    <div class="col d-flex justify-content-center">
    <h2  class="btn btn-outline-secondary btn-lg d-flex justify-content-center">Correct User</h2>
    </div>
    <br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
    </tbody>
    </table>
</div>