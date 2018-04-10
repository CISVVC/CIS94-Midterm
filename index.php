<?php

/****************************************** Midterm *************************************************************
 * Part 1:
 *     In the $questions array shown below, add the correct answer for the remaining questions, the first one
 *     is done for you.  (you can earn extra credit by adding 2 of your own questions that are specific to PHP.)
 *
 * Part 2:
 *      Using this file, create a program which will ask the user for a key in the questions array (eg. q1)
 *      You will need to display a form which will have a text box asking for this value.  When the user
 *      submits the form (with a submit button) the program will detect if the post array has a value in it,
 *      (check out https://goo.gl/txyQby for a review of how to do this using isset) -- this program is similar to
 *      the example car look up program in the slides.
 *     
 *     When the user of the program (from a web browser) types in the key the following procressing will occur:
 *
 *      If the question value is set, then the program should access it from the $questions array and display 
 *      the question using
 *      echo.  Your program should display proper HTML to display the question,for example if q1 was submitted, then
 *      the program will send the following HTML (using echo):
 *
 *      <dl>
 *          <dt>What does PHP stand for?</dt>
 *          <dd>
 *              <ol type="a">
                        <li>PHP: Hypertext Preprocessor </li>
                        <li>Private Home Page </li>
                        <li>Personal Hypertext Processor</li>
                </ol>
                <br>
                Answer: a
 *
 *          </dd>
 *      </dl>
 *
 *      You should develop the program on your local computer.  The file name should be called index.php.  
 *      When you are completed with this midterm, then copy your file to this file on github and commit the repository.
 *      Upload the github link on the midterm assignment page where you are done.
 *
 *
 */
$questions = [

 'q1' => [
           'text' => 'What does PHP stand for?', 
            'choices' => [
                'a'=>'PHP: Hypertext Preprocessor',
                'b'=>'Private Home Page',
                'c' => 'Personal Hypertext Processor'
            ],
            'correct' => 'a'
        ],
    
 'q2' => [
           'text' => ' PHP server scripts are surrounded by delimiters, which?', 
            'choices' => [
                'a'=>'<?php>...</?>', 
                'b'=>'<script>...</script>',
                'c' => '<?php...?>',
                'd' => '<&>...</&>'
            ]
        ],
    
 'q3' => [
           'text' => 'How do you write "Hello World" in PHP?', 
            'choices' => [
                'a'=>'echo "Hello World";',
                'b'=>'"Hello World";',
                'c' => 'Document.Write("Hello World");'
            ]
        ],


 'q4' => [
           'text' => 'All variables in PHP start with which symbol?', 
            'choices' => [
                'a'=>'!',
                'b'=>'$',
                'c' => '@'
            ],
        ],

 'q5' => [
           'text' => 'What is the correct way to end a PHP statement?',
            'choices' => [
                'a'=>'New line',
                'b'=>'.',
                'c' => ';',
                'd' => '</php>'
            ],
        ],
 'q6' => [
           'text' => 'The PHP syntax is most similar to:',
            'choices' => [
                'a'=>'JavaScript',
                'b'=>'VBScript',
                'c' => 'Perl and C'
            ],
        ],

 'q7' => [
           'text' => 'How do you get information from a form that is submitted using the "get" method?',
            'choices' => [
                'a'=>'$_GET[]',
                'b'=>'Request.Form',
                'c' => 'Request.QueryString'
            ],
        ],

 'q8' => [
           'text' => 'When using the POST method, variables are displayed in the URL:'
           
            'choices' => [
                'a'=>'True',
                'b'=>'False'
            ],
        ],

 'q9' => [
           'text' => 'In PHP you can use both single quotes ( ' ' ) and double quotes ( " " ) for strings:'
            'choices' => [
                'a'=>'True',
                'b'=>'False'
            ],
        ],
 'q10' => [
           'text' => 'What is the correct way to create a function in PHP?',

            'choices' => [
                'a'=>'new_function myFunction()',
                'b'=>'function myFunction()',
                'c'=>'create myFunction()'
            ],
        ],

];
