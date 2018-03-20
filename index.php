<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 08-Dec-17
 * Time: 09:05
 */

# üherealine see on kommentaar - ei kasuta eriti
// üherealine kommentaar
/** mitme-
 * realine kommentaar
 *
 */
//stringide väljastamine
print "See on tavaline tekst<br />\n";
print 'See on ka tavaline tekst<br />';
// echo väljastamiskäsuga
echo "See on tavaline tekst väljastatuna ilma jutumärkideta.<br />\n"; //See on ...jutumärkideta
echo '"See on otsekõneline tekst, väljastatuna jutumärkides."<br>'; //"See on ... jutumärkides"
echo "'See on tavaline tekst väljastatuna ülakomade vahel'<br />"; //'See on ... ülakomade vahel'
// <br /> is an HTML element for a line break.
// This will show up as a new line when HTML is rendered in a browser
// "\n" is a newline in the code level which does not translate to <br> in HTML
// as HTML does not honor whitespace
$name="bob<br>\n";
print $name; //bob
$name = "ulle";
$age = 12;
echo "Hello $name. You are $age years old.\n"; //Hello ulle. You are 12 years old.

// closing tag redundant failides, milles ainult php kood