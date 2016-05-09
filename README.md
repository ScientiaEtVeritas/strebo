[![Build Status](https://travis-ci.org/strebo/strebo.svg)](https://travis-ci.org/strebo/strebo) 
[![Code Climate](https://codeclimate.com/github/strebo/strebo/badges/gpa.svg)](https://codeclimate.com/github/strebo/strebo)
 [![Test Coverage](https://codeclimate.com/github/strebo/strebo/badges/coverage.svg)](https://codeclimate.com/github/strebo/strebo/coverage) [![Issue Count](https://codeclimate.com/github/strebo/strebo/badges/issue_count.svg)](https://codeclimate.com/github/strebo/strebo)

# strebo – social trend board ❤
![strebo - social trend board](/resources/logo-large-with-subtitle.png "strebo - social trend board")

## installation
Please make sure you have **PHP7** (**thread-safe** version) installed and you have enabled the required extensions. An additional extension you have to download is **pthreads**. Follow the instruction of http://tzfrs.de/2014/07/fix-it-the-right-way-ssl-error-unable-to-get-local-issuer-certificate/ to enable HTTPS calls to social network APIs.

To install the required frameworks we use **Composer**. Execute the following commands in the shell in the directory of the project:

``composer install``

``composer update``

The authentification server requires ``node.js``.
You can install the dependencies here with ``npm install``.

In addition there is a need of a Webserver like ``Apache``.

## start

Execute the following commands in the shell:
``php start.php``
and
``node server.js``
to start the servers.

## team
We are Aram Parsegyan, Fabian Retkowski and David Schreck and we are students of Applied Computer Science at the Cooperative State University in Karlsruhe.

This GitHub repository is created for the project that we will be working on in our Software Engineering course, in our third and fourth semester.

## vision

Have you ever wished of a web-based application where you can see ALL the trendy stuff and all your relevant content from different social-media platforms at a glance?

Your journey will end here!

strebo is the project that we will work on, while we are in our third and fourth semester at the Cooperative State University in Karlsruhe.

Enjoy!

## possible features

The following features are thinkable options for strebo:

Core features:
* Showing trending content (text, images, videos, …) from social media platforms like Twitter, Facebook, Google+, Instagram, YouTube, …
* Connecting your social media accounts with strebo and show your personal relevant content from social media platforms
* Searching for content across several social media platforms

Additional features:
* Diagrams about trends, how they grow/how they fall
* World map that shows live posting activities
* Showing trends in single countries/regions or trends depending on other factors
* Mobile solution
* ...

## technology

For this project we will use PHP on serverside. Furthermore, we assume that we can use APIs of these social media networks to obtain the information needed for the different strebo features.
