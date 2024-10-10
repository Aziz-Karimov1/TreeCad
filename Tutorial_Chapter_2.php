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
                <p class="unit-num">2.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Number Bases</i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>

        <div class="content_container">
            <div class="subtitle">
                <p>2.1 Number Bases</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="350" src="https://www.youtube.com/embed/ssWdRkY9_Ig?si=Zvm8V05p1SCq1nyk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    Number system which consisting of digits from 0 to 9.
                </p>
                <p>
                    The number systems are made up of number with various bases.
                </p>
                <p>
                    <strong>Extra information</strong>
                </p>
                <ul>
                    <li><strong>Digits</strong> are the symblos used or combined to form a number in the number system.</li>
                    <li>0,1,2,3,4,5,6,7,8,9 are the ten digits used in the decimal number system.</li>
                    <li>Each base has digits from 0 to a digits which is less than its base.</li>
                </ul>
                <p class="underline">
                    Place values that involved in number bases
                </p>
                <p>
                    <strong>Explanation</strong>
                </p>
                <ul>
                    <li>Each base has place values according to each respective base.</li>
                    <li>The place values of a base are the repeated multiplication of that base.</li>
                    <li>For example, a is the base, then its place value will start with
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>a</mi><mn>0</mn></msup><mo>,</mo><msup><mi>a</mi><mn>1</mn></msup><mo>,</mo><msup><mi>a</mi><mn>2</mn></msup><mo>,</mo><msup><mi>a</mi><mn>3</mn></msup><mo>,</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>.</mo><msup><mi>a</mi><mi>n</mi></msup></math>.
                    </li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example questions</p>
            </div>
            <div class="text">
                <p>
                    Find the place value of each digit in
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>542</mn><mn>6</mn></msub></math>
                </p>
                <br>
                <table class="table2">
                    <tr>
                        <th><strong>Number in base is 6</strong></th>
                        <td>5</td>
                        <td>4</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td><strong>Place value</strong></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>0</mn></msup></math></td>
                    </tr>
                </table>
                <p class="underline">
                    <strong>Value of a particular digit in a number in various bases.</strong>
                </p>
            </div>

            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    The value of a particular digit in a number is the multiplication
                    <br>
                    of a digit and the palce value that represents th digit.
                </p>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>
                    State the value of 5 in
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>34</mn><munder accentunder='true'><mn>5</mn><mo>_</mo></munder><msub><mn>2</mn><mn>6</mn></msub></math>                    </p>
                <p>
                    <strong>Solution :</strong>
                    The base is 6,thus
                </p>
                <table class="table2">
                    <tr>
                        <th>Number</th>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th>place Value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>3</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>0</mn></msup></math></td>
                    </tr>
                    <tr>
                        <th>Digit Value</th>
                        <td></td>
                        <td></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mo>&#xd7;</mo><msup><mn>6</mn><mn>1</mn></msup><mo>=</mo><mn>30</mn></math></td>
                        <td></td>
                    </tr>
                </table>
                <p class="underline">
                    <strong>Numerical value of a number in various bases</strong>
                </p>
            </div>

            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>
                    The numerical value of a number in various bases can be determined
                    <br>
                    by calculating the sum of the digit value of the number.
                </p>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Determine the numerical value of
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>6452</mn><mn>7</mn></msub></math>
                </p>
                <p>
                    <strong>Solution :</strong>
                    The base is 7,thus
                </p>
                <table class="table2">
                    <tr>
                        <th>Number</th>
                        <td>6</td>
                        <td>4</td>
                        <td>5</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th>place Value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>7</mn><mn>3</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>7</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>7</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>7</mn><mn>0</mn></msup></math></td>
                    </tr>
                    <tr>
                        <th>Digit Value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>6</mn><mo>&#xd7;</mo><msup><mn>7</mn><mn>3</mn></msup><mo>=</mo><mn>2058</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>&#xd7;</mo><msup><mn>7</mn><mn>2</mn></msup><mo>=</mo><mn>196</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mo>&#xd7;</mo><msup><mn>7</mn><mn>1</mn></msup><mo>=</mo><mn>35</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>&#xd7;</mo><msup><mn>7</mn><mn>0</mn></msup><mo>=</mo><mn>2</mn></math></td>
                    </tr>
                    <tr>
                        <th>Number Value</th>
                        <td colspan="4"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2058</mn><mo>+</mo><mn>196</mn><mo>+</mo><mn>35</mn><mo>+</mo><mn>2</mn><mo>=</mo><msub><mn>2291</mn><mn>10</mn></msub></math></td>
                    </tr>
                </table>
                <p class="underline">
                    <strong>Conversion numbers from one base to another base using various method</strong>
                </p>
                <p>
                    A number can be converted to other bases by using varous methods, such as division using
                    <br>
                    place value and the division using base value.
                </p>
                <p>
                    These processes involve converting :
                </p>
                <ul>
                    <li>a number in base ten to another base</li>
                    <li>a number in a certain base ten and then to another base</li>
                    <li>a number in base two directly to base eight</li>
                    <li>a number in base eight directly to base two</li>
                </ul>
                <p>
                    <strong>A. Conversion of number in base ten into another base</strong>
                </p>
                <ul>
                    <li>A number in base ten can be converted to another base by dividing the number using the place value or the base value requied.</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>convert
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>567</mn><mn>10</mn></msub></math>
                    to a number in base five
                </p>
                <p>
                    <strong>Solution :</strong>
                </p>
                <img src="math_image/math image.png" alt="" class="chapter2_image">
                <p class="underline">
                    <strong>B. Conversion of a number in a certain base to another base</strong>
                </p>
                <p>
                    A number in base p can be converted to base ten and then to base q
                </p>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Convert
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>251</mn><mn>6</mn></msub></math>
                    to a number in base eight
                </p>
                <p>
                    <strong>Soluiton</strong>
                </p>
                <p>
                    <strong>Step 1 : Convert the number in base ten</strong>
                </p>
                <table class="table2">
                    <tr>
                        <th>Number in base 6</th>
                        <td>2</td>
                        <td>5</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Place value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>6</mn><mn>0</mn></msup></math></td>
                    </tr>
                    <tr>
                        <th>Value of number in base 10</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>&#xd7;</mo><msup><mn>6</mn><mn>2</mn></msup><mo>=</mo><mn>72</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mo>&#xd7;</mo><msup><mn>6</mn><mn>1</mn></msup><mo>=</mo><mn>30</mn></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>&#xd7;</mo><msup><mn>6</mn><mn>0</mn></msup><mo>=</mo><mn>1</mn></math></td>
                    </tr>
                </table>
                <p>
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2234;</mo><mn>72</mn><mo>+</mo><mn>30</mn><mo>+</mo><mn>1</mn><mo>=</mo><msub><mn>103</mn><mn>10</mn></msub></math>
                </p>
                <p>
                    <strong>Step 2 : Convert the number in base ten to base eight</strong>
                </p>
                <img src="math_image/math image1.png" alt="" class="chapter2_image">
                <p class="underline">
                    <strong>C. Conversion a number in base two into base eight</strong>
                </p>
                <p>
                    <strong>Rules :</strong>
                </p>
                <ul>
                    <li>Separate each of three digits of a number in base two from the right to the lift</li>
                    <li>Determine the sum of the digits values fot the combined three digits in base two</li>
                    <li>Combine the number in base eight</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Convert
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>111101</mn><mn>2</mn></msub></math>
                    in base eight
                </p>
                <p>
                    <strong>Solution :</strong>
                </p>
                <table class="table2">
                    <tr>
                        <th>Number in base two</th>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Place value</th>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>0</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>2</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>1</mn></msup></math></td>
                        <td><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>0</mn></msup></math></td>
                    </tr>
                    <tr>
                        <th>Digit value</th>
                        <td>4</td>
                        <td>2</td>
                        <td>1</td>
                        <td>4</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th rowspan="2">Base eight</th>
                        <td colspan="3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>+</mo><mn>2</mn><mo>+</mo><mn>1</mn><mo>=</mo><mn>7</mn></math></td>
                        <td colspan="3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>+</mo><mn>0</mn><mo>+</mo><mn>1</mn><mo>=</mo><mn>5</mn></math></td>
                    </tr>
                    <tr>
                        <td colspan="6"><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>111101</mn><mn>2</mn></msub><mo>=</mo><msub><mn>75</mn><mn>8</mn></msub></math></td>
                    </tr>
                </table>
                <p class="underline">
                    <strong>Subtraction numbers in various bases</strong>
                </p>
                <p>
                    There are two methods which can be perform such as
                </p>
                <ul>
                    <li>Vertical form</li>
                    <li>Conversion of base</li>
                </ul>
                <p>
                    <strong>Vertical form method :</strong>
                </p>
                <ul>
                    <li>Substract the given digits starting from the right to the left</li>
                    <li>The difference is written in the answer space
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The difference is always less than given base and its value is equal to base ten
                    </li>
                    <li>This process is repeated until all the digits in the numbers are substracted</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Calculate
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mn>375</mn><mn>6</mn></msub><mo>-</mo><msub><mn>150</mn><mn>6</mn></msub></math>
                </p>
                <p>
                    <strong>Solution :</strong>
                </p>
                <img src="math_image/math  image2.png" alt="" class="chapter2_image">
            
                <p>
                    <strong>Conversion of base :</strong>
                </p>
                <ul>
                    <li>Convert a number to base ten and perform substraction</li>
                    <li>Convert the answer in base ten to the required base</li>
                </ul>
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