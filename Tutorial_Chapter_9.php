<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/general.css">
    <link rel="stylesheet" href="CSS_folder/Tutorial_page.css">
    <link rel="stylesheet" href="CSS_folder/footer_style.css">
    <title>Chapter 9</title>
</head>
<body>
    <div class="background">
        <?php include('Page_header.php');?>
        <div class="topping">

            <!--Above don't touch -->
            
            <div class="course-title-num">
                <p class="unit-num">9.0</p> <!--Unit number change by chapter-->
            </div>

            <div class="course-title-wrapper">
                <div class="course-title">
                    <p>Probality of combination of event    </i></p> <!--base on chapter change title-->
                </div>
            </div>
        </div>

        <div class="content_container">
            <div class="subtitle">
                <p>9.1 Combination Event</p>
            </div>
            <div class="little_title">
                <p>Introduction Video</p>
                
            </div>
            <center><iframe width="600" height="350" src="https://www.youtube.com/embed/6neoMiUfPAI?si=eBqIQ_zHvr1hpEfd"
                 title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                 gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p>Definition</p>
            <div class="text">
                <p>Combination of two or more events is an outcome. </p>
            </div>
            
            <div class="little_title">  
                <p>Example</p>              
            </div>
            <div class="text">
                <p>{Scissors, Rock},</p>
                <p>{Scissors, Paper},</p>
                <p>{Scissors, Scissors},</p>
                <p>{Rock, Scissors},</p>
                <p>{Rock, Paper},</p>
                <p>{Rock, Rock},</p>
                <p>{Rock, Scissors},</p>
                <p>{Paper, Rock},</p>
                <p>{Paper, Paper},</p>
            </div>
            <div class="texttitle">
                <h4>In general,</h4>
            </div>
            <div class="littlebox3">
                <p>n(S) = n(A) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xd7;</mo></math> n(B)</p>
            </div>
            <div class="text">
                <ul>
                    <li>n(S) is all the possible numbers of outcomes n(A) and n(B) epresent the number of outcomes of event A and event B</li>
                </ul>
            </div>
            <div class="subtitle">
                <p>9.2 Dependent Event and Independent Event</p>
            </div> 
            <div class="text">
                <ul>
                    <li>Combined events can be categorised as dependent and independent events</li>
                </ul>
            </div>
            <div class="littlebox3">
                <p>Event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> are independent events if the occurrence of event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math>
                     has no effecrt on the occurrence of event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> and vice versa</p>
            </div>
            <div class="text">
                <ul>
                    <li>In other words, event 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and event <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> 
                        are dependent events if the occurrence of event 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> affect occurence of event 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math></li>
                </ul>
            </div>
            <div class="little_title">
                <p>Example</p>
            </div>
            <div class="texttitle">
                <p>Identify whether the following combined events are dependent events or independent events. </p>  
                <p>Justify your answer,</p>
                <p>1. Taking an Uber ride and getting a free meal at your favourite restaurant</p>
                <h4>Solution:</h4>
            </div>
            <div class="text">
                <ul>
                    <li>It is an <strong>independent event</strong> because the probability of taking an uber does not affetct the probability of getting a free meal at favourite restaurant. </li>
                </ul>
            </div>
            <div class="texttitle">
                <p>2. Getting into a traffic accident is dependent upon driving or riding in a vehicle.</p>
                <h4>Solution:</h4>
            </div>
            <div class="text">
                <ul>
                    <li>It is an <strong>independent event</strong> because the probability of getting into a traffic accident has affect driving or riding in a vehicle </li>
                </ul>
            </div>
            <div class="texttitle">
                <p class="abc">Verify conjecture and verify about the formu;a of probability of combined events .</p>
            </div>
            <div class="littlebox3">
                <p>The probability of the intersection of two intersection events 
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and 
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> is equal to the product of the probability of event 
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and probability of event 
                    <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> </p>
            </div>
            <div class="text">
                <ul>
                    <li>In general, P(A and B) = P(A) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xd7;</mo></math> P(B)</li>
                </ul>
            </div>
            <div class="subtitle">
                <p>9.3 Mutually Exclusive Events and Non-Mutually Exclusive Events </p>
            </div>
            <div class="text">
                <ul>
                    <li>A combined events 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math> is known as a mutually exclusive event if there is no intersection between events 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math> and 
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math>,
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>A</mi></math>
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2229;</mo></math>
                        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>B</mi></math>
                        not = 0</li>
                </ul>
            </div>
            <div class="little_title">
                <p>Formula</p>
            </div>
            <div class="text">
                <ul>
                    <li>The combined event 
                        A and 
                        B is non-mutually exclusive because
                        P(A <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2229;</mo></math> B)  
                        = 0, then 
                        P(A or B) = P(A) + P(B) - P(A ∩ B) </li>
                    <li> The combined evetn A and B is <strong>non-mutually exclusive</strong> because P(A <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2229;</mo></math> C) not = 0 and P(B <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2229;</mo></math> C) =0,
                    then P(A or C) = P(A) + P(C) and P(B or C) = P(B) + P(C)</li>
                </ul>
            </div>
            <div class="texttitle">
                <p><strong>The Addition rule of probability is</strong></p> 
            </div>
            <div class="text">
                <p> P(A <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x222a;</mo></math> B) = P(A) + P(B) or P(A <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x222a;</mo></math> B) = P(A) + P(B) - P(A ∩ B)</p>
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