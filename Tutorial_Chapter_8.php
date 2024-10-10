<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/Tutorial_page.css">
    <link rel="stylesheet" href="CSS_folder/footer_style.css">
    <title>Chapter 8</title>
</head>
<body>
    <div class="background">
        <?php include('Page_header.php');?>
        <div class="topping">
            <!--Above don't touch -->
            
            <div class="course-title-num">
                <p class="unit-num">8.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Measure of Dispresion of Ungrouped Data</i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>

        <div class="content_container">
            <div class="subtitle">
                <p>8.1 Dispresion</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="350" src="https://www.youtube.com/embed/igUVWyDyi-Y?si=7wyXVQH2B4HBusNy" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
            <div class="little_title">
                <p>Definition</p>
            </div>
            <div class="text">
                <p><strong>Measures of dispersion</strong> are measurement in statistics.</p>
                <p>It give us an idea of how values of a set of data are scattered. </p>
                <p>Dispersion small if the data set are quantitative measures such as range,
                     interquartile range, variance and standard deviation  </p>
            </div>
            
            <div class="little_title">  
                <p>Tips</p>              
            </div>
            <div class="text">
                <p>The distribution of data is different. </p>
                <p>To understand the dispersion of data, the difference between the largest value and the smalles value is taken into consideration.</p>
                <p>If the difference between the value is large, it indicates that the data is widely dispersed and vice versa. </p>
            </div>
            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="texttitle">
                <p>The table below shows the masses, in kg of 10 pupils</p>
                <table>
                    <tr>
                        <td>52</td>
                    </tr>
                    <tr>
                        <td>62</td>
                    </tr>
                    <tr>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>9</td>                    
                    </tr>
                    <tr>
                        <td>8</td>                    
                    </tr>
                    <tr>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td>44</td>
                    </tr>
                    <tr>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td>19</td>
                    </tr>
                    <tr>
                        <td>16</td>
                    </tr>
                </table>
                <p>State the difference in mass, in kg of the pupils</p>
            </div>
            <div class="text">
                <h4>Solution:</h4>
                <p>Largest Mass = 75</p>
                <p>Smallest Mass = 8</p>
                <p>Different in Mass,</p>
                <p>= 78 - 5</p>
                <p>= 67</p>
            </div>
            <div class="little_title">
                <p>Steam and Leaf Plot</p>
            </div>
            <div class="text">
                <p>It is a way to show the distributions of a set of data. </p>
                <p>It is a way to show the distributions of a set of data. Through stem-and-leaf plot, we can see whether the data is more likely to appear or least likely to appear. </p>
                <h4>Steps to plot the stem-and-leaf plot </h4>
            </div>
            <div class="texttitle">
                <p>Given the data is unorganised, for example </p>
                <table>
                    <tr>
                        <td>52</td>
                        <td>33</td>
                    </tr>
                    <tr>
                        <td>62</td>
                        <td>38</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>53</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>25</td>                    
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>49</td>                    
                    </tr>
                </table>
            </div>
            <div class="little_title">
                <p>Dot Plots</p>
            </div>
            <div class="text">
                <p>It is a statistical chart that contains points plotted using a uniform scale.</p>
                <p>Each point represents a value </p>
                <center><img src="https://study.com/cimages/multimages/16/dot_plot_running_club1904115692905496593.png" alt=""></center>
            </div>
            <div class="subtitle">
                <p>8.2 Measure of Despretion</p>
            </div> 
            <div class="little_title">
                <p>Formula</p>
            </div>
            <div class="text">
                <p>Range = Largest value - Smallest value</p>
                <h4>Variance</h4>
                <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>&#x3c3;</mi><mn>2</mn></msup><mi>
                </mi><mo>=</mo><mfrac><mrow><mo>&#x2211;</mo><mo>(</mo><mi>x</mi><mo>&#x2212;</mo><mi>
                </mi><mover accent='true'><mi>x</mi><mo>&#x2212;</mo></mover><mi>
                </mi><mi>
                </mi><mo>)</mo><mi>
                </mi><mi>	</mi><mi>&#x200b;</mi><mi>
                </mi></mrow><mi>N</mi></mfrac><mi>
                </mi><mi>
                </mi></math></p>
                <h4>Standard deviation</h4>
                <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3c3;</mi><mo>=</mo><msqrt><mrow><mi>
                </mi><mfrac><mrow><mo>&#x2211;</mo><mo>(</mo><mi>x</mi><mo>&#x2212;</mo><mi>
                </mi><mover accent='true'><mi>x</mi><mo>&#x2212;</mo></mover><mi>
                </mi><mi>
                </mi><mo>)</mo><mi>
                </mi><mi>	</mi><mi>&#x200b;</mi><mi>
                </mi><mi>
                </mi><mi>	</mi><mi>&#x200b;</mi><mi>
                </mi></mrow><mi>N</mi></mfrac></mrow></msqrt></math> or
                <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3c3;</mi><mo>=</mo><mi>
                </mi><mi>
                </mi><msqrt><mrow><mfrac><mrow><mo>&#x2211;</mo><msup><mi>x</mi><mn>2</mn></msup><mi>
                </mi><mn>2</mn></mrow><mi>N</mi></mfrac><mi>
                </mi><mi>	</mi><mi>&#x200b;</mi><mi>
                </mi><mi>
                </mi><mo>&#x2212;</mo><mi>
                </mi><mover accent='true'><mi>x</mi><mo>&#x2212;</mo></mover><msup><mi>
                </mi><mn>2</mn></msup><mi>
                </mi><mi>
                </mi></mrow></msqrt></math></p>
            </div> 
            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="text">
                <p>Given a set of data 36,25,15,26,50,27,20, determine the range of this set of data </p>
                <h4>Solution:</h4>
                <h4>1. Arrange a set of data in ascending order.</h4>
                <p>15,20,25,26,27,36,50</p>
                <p><strong>2. Apply</strong>Range = Largest value - Smallest value</p>
                <p><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2234;</mo></math> 50 - 15 = 35</p>
            </div>
            <div class="texttitle">
                <p class="abc"><strong><u>Interquartile range of set of ungrouped data</u></strong></p>
            </div>
            <div class="text">
                <ul>
                    <li>When the values of a set of data are arranged in ascending order, the first quartile, 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><msub><mi>
                        </mi><mn>1</mn></msub><mi>
                        </mi></math>
                        value of data that is the first <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>4</mn></mfrac></math>
                        position
                    </li>
                    <li>While the third quartile, 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><msub><mi>
                        </mi><mn>3</mn></msub><mi>
                        </mi></math>
                        is the value of data that is the third
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac></math>
                        position
                    </li>
                </ul> 
            </div>
            <div class="texttitle">
                <p class="abc"><strong><u>Variance and standard deviation </u></strong></p>
            </div>
            <div class="text">
                <ul>
                    <li>Its are the measures of dispersion commonly used in statistics. </li>
                    <li>The variance is the average of the square of the difference between each data and the mean.</li>
                    <li>The standard deviation is the square root of variance which is also measures the dispersion of data set relative to its mean.</li>
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