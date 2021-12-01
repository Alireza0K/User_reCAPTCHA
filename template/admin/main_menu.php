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
        <th scope="col" class="">id</th>
        <th scope="col">User name</th>
        <th scope="col">Email</th>
        <th scope="col">access</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td class="table-secondary">Mark</td>
            <td class="table-success">Mark@gmail.com</td>
            <td>admin</td>
        </tr>
    </tbody>
    </table>
    <div class="col d-flex justify-content-center">
        <nav aria-label="..." dir="ltr">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>

                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
            </ul>
        </nav>
    </div>
</div>