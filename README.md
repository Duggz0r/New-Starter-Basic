# Task
## Development
Create a mini website utilising PHP, ajax, JavaScript and/or jQuery, HTML and SCSS/SASS/CSS:
- PHP will be used to process the JSON files.
- Ajax will be used to fetch the processed data from the PHP file
- JavaScript and/or jQuery will be used to render the data to the `<main>` tag, replacing its contents
- HTML will be used as the data structure

## Design
There's no design, we just ask you to make it look pretty.

---

# Pages
## Home
Create a page listing the 10 most popular, published posts including an snippet of the content. The design has been provided.

## Post
Create a page displaying the selected post.

## Author
Create a page displaying the most recent, published posts from the selected author.

---

# Files
For this task you'll **only** need to use the following files

## ajax.php
This file will be where you do all your PHP-based processing ready to be output to your script.js file.  
We've included the basic functionality to get the contents of a json file for post id 1  
**No HTML should be contained within this file**

## index.html
This file is where you render the data to via JavaScript and/or jQuery.  
We've set-up this file with all   

## script.js
This file is where you'll be processing the ajax returned data into HTML and to the `<main>` tag.  
This file will need to be included in the index.html file.
We've included the basic functionality in this file to make the ajax call, passing the data to the callback  
**This will be the only place where your custom HTML should be**

## style.css
This file will be generated for you from the .scss file, below. However you will need to include this in the index.html file.  
**Do not edit the CSS in this file**

## style.scss
This file will be where you'll put all your SCSS/SASS/CSS. This will need compiling into the style.css file.

## /json/posts.json
This file contains the data for your posts

## /json/posts/##.json
The files within this directory contains the data for each of the posts, where ## is the id of the individual post, data passed from /json/posts.json.
