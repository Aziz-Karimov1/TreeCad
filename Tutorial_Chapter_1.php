<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/Tutorial_page.css">
    <link rel="stylesheet" href="CSS_folder/footer_style.css">
    <title>Tutorial Page 1</title>
</head>
<body>
    <div class="background">
        <?php include('Page_header.php');?>
        <div class="topping">

            <!--Above don't touch -->
            <div class="course-title-num">
                <p class="unit-num">1.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Function and Quadratic Equation in One Variable</i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>

        <div class="content_container">
            <div class="subtitle">
                <p>1.1 Function and Quadratic Equation in One Variable</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="350" src="https://www.youtube.com/embed/WBRIt6vchWM?si=KB8rsYb_WzJ45Z5c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p>A quadratic expression in one variable is an algebraic expression that has the highest power variable is two.</p>
                <ul>
                    <li>The basic form of a quadratic expression is 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi></math>
                        which is  a,b and c is a constant and
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="normal">a</mi><mo>&#x2260;</mo><mi mathvariant="normal">b</mi></math>,
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>
                        is a variable. </li>
                    <li><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi></math>
                        is the coefficient of
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup></math>,
                        b is the coefficient of
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>
                        and 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi></math>
                        is a constant.</li>
                </ul>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="example_text">
                <ul>
                    <li><math xmlns="http://www.w3.org/1998/Math/MathML" style="font-size: 45px;"><msup><mi>x</mi><mn>2</mn>
                    </msup><mo>+</mo><mn>5</mn><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>1</mn></math></li><br>
                    <li><math xmlns="http://www.w3.org/1998/Math/MathML" style="font-size: 45px;"><mo>-</mo><msup><mi>y</mi><mn>2</mn>
                    </msup><mo>+</mo><mn>3</mn><mi>y</mi></math></li><br>
                    <li><math xmlns="http://www.w3.org/1998/Math/MathML" style="font-size: 45px;"><mn>2</mn><msup><mi>m</mi><mn>2</mn>
                    </msup><mo>+</mo><mn>7</mn></math></li><br>
                </ul>
            </div>

            <div class="little_title">
                <p>Tips</p>
            </div>
            <div class="text">
                <p>Besides
                   <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>,
                   other letters can be used to represents variables
                </p>
                <p>
                    <strong>
                        Relationship between a quafratic function and many-to-one realtion
                    </strong>
                </p>
                <p>
                    <strong>
                        Quadratic function,
                    </strong>
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi></math>
                </p>
                    <ul>
                        <li>All quadratic functions have the same image for two different images</li>
                        <li>Many-to-one relation</li>
                        <li>Have two shapes of graph</li>
                    </ul>
                <p>
                    <Strong>
                        Shapes of the graph,
                    </Strong>
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi><mo>,</mo><mi>a</mi><mo>&#x2260;</mo><mn>0</mn></math>
                </p>
                <img src="math_image/Chapter1_image_1.png" alt="" class="chapter1_image">
                <ul>
                    <li>For the graph
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&lt;</mo><mn>0</mn><mo>,</mo><mo>&#xA0;</mo><mo>(</mo><msub><mi>x</mi><mn>1</mn></msub><mo>,</mo><msub><mi>y</mi><mn>1</mn></msub><mo>)</mo></math>
                        is know as <strong>maximum point</strong>
                    </li>
                    <li>For the graph
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&gt;</mo><mn>0</mn><mo>,</mo><mo>&#xA0;</mo><mo>(</mo><msub><mi>x</mi><mn>2</mn></msub><mo>,</mo><msub><mi>y</mi><mn>2</mn></msub><mo>)</mo></math>
                        Is know as <strong>minimum point</strong>
                    </li>
                </ul>
            </div>

            <div class="little_title">
                <p>Tips</p>
            </div>
            <div class="text">
                <p>The curved shape of the graph of a quadratic function is called a parabala</p>
                <p><strong>Axis of symmetry of the graph of a quadratic function</strong></p>
            </div>

            <div class="little_title">
                <p>Explanation</p>
            </div>
            <div class="text">
                <p>Defination: A straight line that is parallel to the
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>-</mo></math>
                    axis and divides the graph into two parts of the size and shape
                </p>
                <ul>
                    <li>The axis of symmetry will pasas through the maximum and minimum point of the graph of the function as shown in the diagram below</li>
                    <li>Equation axis of symmetry,$
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>=</mo><mo>-</mo><mfrac><mi>b</mi><mrow><mn>2</mn><mi>a</mi></mrow></mfrac></math>
                    </li>
                </ul>
                <p>
                    <Strong>Effects of changing the valunes of</Strong>
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>,</mo><mi>b</mi></math> and <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi></math>
                    <strong>on graph of quadratic function,</strong>
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi></math> :
                </p>
                <ul>
                    <li>The value of a determines the shape of the graph</li>
                    <li>The value of b determines the position of the axis of symmetry</li>
                    <li>The value of c determines the  position of the y- intercept</li>
                </ul>
                <p>
                    <strong>Forming a quadratic equation based on a situation :</strong>
                </p>
                <ul>
                    <li>A quadratic function is written in the form of
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi></math>
                        while a quadratic equation is written in the general form
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi><mo>=</mo><mn>0</mn></math>
                    </li>
                </ul>
                <p>
                    <strong>Roots of a quadratic equation :</strong>
                </p>
                <ul>
                    <li>The root of a quadratic equation </li>
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi><mo>=</mo><mn>0</mn></math>
                    are the value of the variables, 
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>
                    which satisfy the equation.
                </ul>
                <p>
                    <strong>Relationship between the roots of a quadratic equation and the position of the roots.</strong>
                </p>
                <table class="table1">
                    <td>The roots of equation
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi><mo>=</mo><mn>0</mn></math>
                        are the point of intersection of the graph of the quadratic function
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi></math>
                        and the
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>-</mo></math>
                        axis which are aslo knows as the
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>-</mo></math>
                        intercept.
                    </td>
                </table>
                <p class="underline">
                    <strong>Dtermine the roots of a quadratic equation by using factorisation method</strong>
                </p>
            </div>
            <div class="little_title">
                <p>Tips</p>
            </div>
            <div class="text">
                <P>
                    A quadratic equation needs to be written in the form of
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi><mo>=</mo><mn>0</mn></math>
                    <br>
                    before we carry out factorisation
                </P>
            </div>

            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Determine the roots of this quadratic equation by using factorisation method
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>5</mn><mi>x</mi><mo>+</mo><mn>6</mn><mo>=</mo><mn>0</mn></math>.
                </p>
                <p>Solution :</p>
                <p class="solution">
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>5</mn><mi>x</mi><mo>+</mo><mn>6</mn><mo>=</mo><mn>0</mn></math>.
                </p>
                <p class="solution">
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo><mi>x</mi><mo>-</mo><mn>3</mn><mo>)</mo><mo>(</mo><mi>x</mi><mo>-</mo><mn>2</mn><mo>)</mo><mo>=</mo><mn>0</mn></math>
                </p> 
                <p class="solution">
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>=</mo><mn>3</mn></math>
                    or
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>=</mo><mn>2</mn></math>
                </p>
                <p class="underline">
                    <strong>Determine the roots of a quadratic equation by using graphical method</strong>
                </p>
                <p>
                    The roots of a quadratic equation
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi><mo>=</mo><mn>0</mn></math>
                    can be obtained by using a graphical method by reading the values of
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>
                    which are the points of intersection of the graph.
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