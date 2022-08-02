<?php 
session_start();

$_SESSION['desc'] = '<img src="./image/profile.jpg" alt="">
<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae voluptate error perferendis pariatur. Consequuntur commodi quasi molestiae soluta. Dignissimos odio, ipsum in sequi illo cumque maiores ducimus libero tenetur quibusdam.</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis sequi quos non eius enim rem temporibus nesciunt quibusdam fuga nobis, debitis optio ullam explicabo dignissimos voluptate facilis velit. Vel, qui.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis sequi quos non eius enim rem temporibus nesciunt quibusdam fuga nobis, debitis optio ullam explicabo dignissimos voluptate facilis velit. Vel, qui.</p>
';

echo $_SESSION['desc'];

?>