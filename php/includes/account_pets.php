<div class="row card-columns">
    <div class="card bg-transparent border-0 col-lg-6 col-md-12 mb-3">
        <div class="card box bg-white">
            <div class="card-header text-right p-0 bg-white">
                <form action="mypets.php" method="post" onsubmit="if(!confirm('Do you really want to delete this pet?')){return false;}">
                    <button type="submit" class="btn bg-transparent border-0 text-danger" name="delete" value="1"><span class="flaticon-delete-button"></span></button>
                </form>
            </div>
            <img class="card-img-top" src="assets/images/dog2.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card bg-transparent border-0 col-md-6 col-sm-12 mb-3">
        <div class="card box bg-white">
            <div class="card-header text-right p-0 bg-white">
                <form action="mypets.php" method="post" onsubmit="if(!comfirm('Do you really want to delete this pet?')) return false;">
                    <button type="submit" class="btn bg-transparent border-0 text-danger" name="delete" value="1"><span class="flaticon-delete-button"></span></button>
                </form>
            </div>
            <img class="card-img-top" src="assets/images/dog.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>