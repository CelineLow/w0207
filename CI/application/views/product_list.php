<h1>product list</h1>

<?php

foreach($produc_list as $v){
    echo $v['id']." <a href='".base_url('product_detail/'.$v['id'])."'>".$v['title']."</a><br/>";
}

?>