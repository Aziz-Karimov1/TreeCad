<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/Tutorial_page.css">
    <link rel="stylesheet" href="CSS_folder/footer_style.css">
    <title>Document</title>
</head>
<body>
    <div class="background">
        <?php include('Page_header.php');?>
        <div class="topping">

            <!--Above don't touch -->
            <div class="course-title-num">
                <p class="unit-num">3.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Logic Reasoning</i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>


        <div class="content_container">
            <div class="subtitle">
                <p>3.1 Statements</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="360" src="https://www.youtube.com/embed/s-UvXryqBjU?si=jJ5nfDvzHXXeiNPi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    A statement is a sentence of which the truth value canbe determined, 
                    <br>
                    that is either true of false, but not both.
                </p>
                <ul>
                    <li>Qeuastions, explanation and cammand sentences are not statements.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(The truth value cannot be determined)
                    </li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>
                    Determine whether each of the following sentences is a statement or not. Give the reason.
                </p>
                <ul>
                    <li>
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>+</mo><mn>3</mn><mo>=</mo><mn>8</mn></math>
                        (Statement, it is a false statement).
                    </li>
                    <li>The Pentagon has 5 sides (Statement, it is a true statement).</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Tips</p>
            </div>
            <div class="text">
                <p>Determine whether the following mathematics statement are true or false.</p>
                <p>Explain if the statement is false.</p>
                <ul>
                    <li>3 is a prime number (true statement)</li>
                    <li>
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>11</mn><mo>&gt;</mo><mo>-</mo><mn>8</mn></math>
                        (false statement) because -8 is bigger than -11
                    </li>
                    <li>5 is a factor to 8 (false statement). 
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;5 cannot be a factor to 8.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;Factors of 5 are number which on dividing 5 leave no remainder.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;Since 5 is a prime number, it has only two factor.
                    </li>
                </ul>
                <p class="underline">
                    <strong>Negation a statement</strong>
                </p>
                <ul>
                    <li>Use the word no or not go negate a statement</li>
                    <li>The negation of statement p is written as
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x223c;</mo><mi>p</mi></math>
                    </li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Form a negation
                    (<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x223c;</mo><mi>p</mi></math>)
                    for each of the following statement (p) by using the word "no" or "not"
                </p>
                <ul>
                    <li>13 is a multiple of 5, 13 is not a multiple of 5</li>
                    <li>20 is a prime number, 20 is not a prime number</li>
                </ul>
                <p class="underline">
                    <strong>Dtermine the truth value of a compound statement</strong>
                </p>
            </div>

            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    A compound statement is a combination of two or more statement by using the word "and" or "or".
                </p>
                <ul>
                    <li>The word "and" in a mathematical statement mean both while the word "or" means one of them or both.</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Combine the following statement, q and r by using the words "and" or "or"</p>
                <p>q: A pentagon has two diagonals</p>
                <p>r: A heptagon has four diagonals</p>
                <P>
                    <strong>Solution :</strong>
                </P>
                <ul>
                    <li>A pentagon has two diagonal and a heptagon has four diagonals</li>
                    <li>A pentagon has two diagonal or a heptagon has four diagonals</li>
                </ul>
            </div>

            <br>

            <div class="subtitle">
                <p>3.2 Arguments</p>
            </div>
            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>A process of making a conclusion based on statement is knows as argumentations</p>
                <p>An argument can consist of several premises and one conclusion.</p>
                <p>A premise is a statement that gives information before making a conlusion
                    <br>
                   conclusion is an outcome and decision.
                </p>
                <ul>
                    <li>the specifis statements are statements that refer to a particular case, while the
                        <br>
                        general statement that describe a concept.
                    </li>
                </ul>
                <p class="underline">
                    <strong>Types of arguments</strong>
                </p>
                <ul>
                    <li>Deductive argumenr (A process of making a specific conclusion based on general premises)</li>
                    <li>Inductive argument (A process of making a general conclusion based on specific premises)</li>
                </ul>
                <p class="underline">
                    <strong>Determine and justify the validity of deductive arfuments</strong>
                </p>
                <p>A valid deductive can be categorised into three forms.</p>
                <table class="table2">
                    <tr>
                        <th></th>
                        <th>Form 1</th>
                        <th>Form 2</th>
                        <th>Form 3</th>
                    </tr>
                    <tr>
                        <th>Premise 1</th>
                        <td>All P are Q</td>
                        <td>If a is b</td>
                        <td>If a is b</td>
                    </tr>
                    <tr>
                        <th>Premise 2</th>
                        <td>R is P</td>
                        <td>a is true</td>
                        <td>Not b is true</td>
                    </tr>
                    <tr>
                        <th>Conclusion</th>
                        <td>R is Q</td>
                        <td>b is true</td>
                        <td>Not a is true</td>
                    </tr>
                </table>
                <p>
                    A deductive argument is said to be valid if all the premises and the conclusion are true.
                </p>
            </div>
        </div>


        <!-- go exercise button-->
        
        <div class="btn-conteiner">
            <a class="btn-content" href="Exercise_page.php">
              <span class="btn-title">Exercise</span>
              <span class="icon-arrow">
                <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                  </g>
                </svg>
              </span> 
            </a>
          </div>
          
        <?php include("footer.html")?>
    </div>
</body>
</html>