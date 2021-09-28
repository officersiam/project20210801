<?php
    include ("header.inc.php");
?>

<section class="productDetails" style="margin-top: 100px">
    <div class="container">
        <div class="row">
            <img class="col-md-6 col-xs-12 pull-left" src="img/projects/pro08.png" width="225" height="150" alt="Example image">
            <div class="col-md-6 col-xs-12 pull-right">
                <h2 style="
    color: #222325;
    font-weight: 400;
    margin: 0;">Product-1</h2>
                <p style="
    font-weight: 600;
    color: crimson;
    font-size: 20px;
    margin: 0;">Price $50</p>
                <p>Tags: <a href="javascript:void(0)">tags</a></p>
                <a class="btn btn-primary" href="order.php">Order Now</a>
                <p style="color: #222"><span style="color:#D30C39;font-weight: bold;text-decoration: underline">Service Details:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quia hic illum sit temporibus, voluptas cupiditate modi laborum fugiat quos corrupti obcaecati voluptate debitis nihil ipsum libero. Voluptatem, voluptas asperiores.
                    Quod similique dolor consequuntur deleniti a doloribus accusantium recusandae aperiam unde eaque placeat nisi voluptatum pariatur, nostrum ut, labore facere. Dignissimos similique, iste quod aut consequuntur fugit ea et laborum.
                    Tenetur consectetur, quos atque nihil dolores facilis ullam veritatis. Esse accusamus voluptates culpa veritatis at necessitatibus beatae animi sequi harum, itaque totam fugit obcaecati explicabo laudantium, inventore magni a? Labore.
                    Omnis, quam dolore tempora inventore corporis nulla sit quisquam veritatis error vitae asperiores expedita ad accusantium veniam? Facere dicta nesciunt nam magni praesentium, cupiditate laborum architecto ipsam, quas, inventore magnam.
                    Architecto unde esse atque autem at doloribus perspiciatis sed dicta similique officiis eum illum laboriosam ducimus culpa inventore incidunt, temporibus corporis. Aliquam esse laudantium impedit, quam assumenda accusamus ut sed?</p>
            </div>
        </div>
        <div class="row">
            <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Staffs</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>
                    <article class="uk-comment">
                        <header class="uk-comment-header">
                            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-comment-avatar" src="img/users/user.png" width="80" height="80" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
                                    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                        <li><a href="#">12 days ago</a></li>
                                        <li><a href="#">Reply</a></li>
                                    </ul>
                                </div>
                            </div>
                        </header>
                        <div class="uk-comment-body">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                    </article>
                </li>
                <li>This is for staffs!!!</li>
            </ul>
        </div>
    </div>
</section>

<?php
    include ("footer.inc.php");
?>