<?php
namespace Strebo\SocialNetworks;
use Strebo;
require 'Twitter.php';

putenv('strebo_instagram_1=c12bbe37871f443ca257ef54a131a777');
putenv('strebo_twitter_1=3872089625-xRvrn2Qb8QG5GDtrskVFy1E1wQAgQPpX5xsFKZa');
putenv('strebo_twitter_2=rnGWYxMdQJmj4Q5YdddNC2EUPhKffSvcj3WhBzOjSiO8a');
putenv('strebo_twitter_3=BspGfBzzXbBKtdWpl0eL1cihi');
putenv('strebo_twitter_4=I3ht3hDmG0vY2uTb32WaupyKQq7Rv0htaGW8x2DDhd5ExrNij9');

$i=new Twitter();

echo ($i->getPublicFeed());
?>