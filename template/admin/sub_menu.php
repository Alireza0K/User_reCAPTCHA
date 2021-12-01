<?php
wp_enqueue_script("bootstrap_bundle");
wp_enqueue_script("bootstrap_min");
wp_enqueue_style("bootstrap_min_css");
include "navbar.php";
?>
<div class=" container">
    <br>
    <div class="col d-flex justify-content-center">
    <h2  class="btn btn-outline-danger btn-lg d-flex justify-content-center">Bad User</h2>
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
            <td class="table-secondary">Mark</td>
            <td class="table-danger">Otto</td>
            <td>@mdo</td>
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