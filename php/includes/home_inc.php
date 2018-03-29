<?php include 'php/scripts/counter.php' ?>

<div class="counter-wrapper bg-white p-3 text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Number Of Visits</h3>
                <h1><i>0</i></h1>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function(){
    var init = 0,
        visit = <?php echo $last ?>,
        time = 500;

    var inc = setInterval(function(){
        init++;
        $('.counter-wrapper i').text(init);
        if(init >= visit) clearInterval(inc);
    }, time / visit);
});
</script>